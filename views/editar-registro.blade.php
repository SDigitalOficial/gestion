@extends ('adminsite.layout')

@section('ContenidoSite-01')
<div class="content-header">
 <ul class="nav-horizontal text-center">
  <li>
   <a href="/gestion/comercial-recepcion"><i class="fa fa-list-ul"></i> Usuarios</a>
  </li>
  <li class="active">
   <a href="/gestion/registro-recepcion"><i class="fa fa-user-plus"></i> Registrar Datos Usuario</a>
  </li>
 </ul>
</div>
@foreach($usuarios as $usuarios)
@endforeach
<div class="container">
 <div class="row">
  <div class="col-md-12">
   <div class="block">

    <div class="block-title">
     <div class="block-options pull-right">
     </div>
     <h2><strong>Crear</strong> Usuario</h2>
    </div>
    

    {{ Form::open(array('method' => 'PUT','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('gestion/comercial/editar-usuario',$usuarios->id))) }}

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-text-input">Nombre</label>
      <div class="col-md-9">
       {{Form::text('nombre', $usuarios->nombre, array('class' => 'form-control','placeholder'=>'Ingrese nombre'))}}
      </div>
    </div>


     <div class="form-group">
     <label class="col-md-3 control-label" for="example-email-input">Valor Propuesta</label>
       <div class="col-md-9">
        {{Form::text('valor', $usuarios->valor, array('class' => 'form-control','placeholder'=>'Ingrese valor de la propuesta','value'=>'0'))}}
       </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-email-input">Apellido</label>
      <div class="col-md-9">
       {{Form::text('apellido', $usuarios->apellido, array('class' => 'form-control','placeholder'=>'Ingrese apellido'))}}
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-email-input">Empresa</label>
      <div class="col-md-9">
       {{Form::text('empresa', $usuarios->empresa, array('class' => 'form-control','placeholder'=>'Ingrese empresa'))}}
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-email-input">Nit o Documento</label>
      <div class="col-md-9">
       {{Form::text('nit', $usuarios->nit, array('class' => 'form-control','placeholder'=>'Ingrese Nit o Documento'))}}
      </div>
    </div>
    
    <div class="form-group">
     <label class="col-md-3 control-label" for="example-email-input">Email</label>
      <div class="col-md-9">
       {{Form::text('email', $usuarios->email, array('class' => 'form-control','placeholder'=>'Ingrese email'))}}
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-password-input">Número de Contacto</label>
      <div class="col-md-9">
       {{Form::text('numero', $usuarios->numero, array('class' => 'form-control','placeholder'=>'Ingrese teléfono fijo o célular'))}}
      </div>
    </div>

     <div class="form-group">
     <label class="col-md-3 control-label" for="example-select">Producto de Intéres</label>
      <div class="col-md-9">
       <select name="interes" id="inputConcepto" class="form-control">
        <option value="{{$usuarios->interes}}" selected>{{$usuarios->producto}}</option>
         @foreach($productos as $productos)
          <option value="{{$productos->id}}">{{$productos->producto}}</option>
         @endforeach
       </select>
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-select">Sector</label>
      <div class="col-md-9">
       <select name="sector" id="inputConcepto" class="form-control">
         <option value="{{$usuarios->sector}}" selected>{{$usuarios->sectores}}</option>
         @foreach($sectores as $sectores)
          <option value="{{$sectores->id}}">{{$sectores->sectores}}</option>
         @endforeach
       </select>
      </div>
    </div>

    <div class="form-group form-actions">
     <div class="col-md-9 col-md-offset-3">
      <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Crear</button>
      <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Cancelar</button>
     </div>
    </div>
    
    {{ Form::close() }}
                                
   </div>
  </div>
 </div>
</div>


<footer>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 {{ Html::script('modulo-usuarios/validaciones/crear-usuario.js') }}
 {{ Html::script('//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js') }} 
</footer>
@stop
