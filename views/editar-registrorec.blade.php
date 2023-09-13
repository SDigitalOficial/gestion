@extends ('adminsite.layout')

@section('cabecera')
    @parent
     {{ Html::style('//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css') }}
    @stop


@section('ContenidoSite-01')
<div class="content-header">
 <ul class="nav-horizontal text-center">
  <li>
   <a href="/gestion/comercial"><i class="fa fa-list-ul"></i> Usuarios</a>
  </li>
  <li class="active">
   <a href="/gestion/comercial/registro"><i class="fa fa-user-plus"></i> Registrar Datos Usuario</a>
  </li>
  <li>
   <a href="/gestion/comercial/productos"><i class="fa fa-file-o"></i>Productos & Servicios</a>
  </li>
  <li>
   <a href="/gestion/comercial/sectores"><i class="fa fa-file-o"></i>Sectores</a>
  </li>
  <li>
   <a href="/gestion/comercial/referidos"><i class="fa fa-file-o"></i>Referidos</a>
  </li>
   <li>
   <a href="/gestion/comercial/cantidades"><i class="fa fa-file-o"></i>Cantidades</a>
  </li>
 </ul>
</div>

<div class="container">
 <div class="row">
  <div class="col-md-12">
   <div class="block">

    <div class="block-title">
     <div class="block-options pull-right">
     </div>
     <h2><strong>Editar</strong> usuario</h2>
    </div>
    @foreach($usuario as $usuario)
  
    {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('gestion/comercial/editar-usuariorec',Request::segment(4)))) }}

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-text-input">Nombre</label>
      <div class="col-md-9">
       {{Form::text('nombre', $usuario->nombre, array('class' => 'form-control','placeholder'=>'Ingrese nombre'))}}
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-email-input">Apellido</label>
      <div class="col-md-9">
       {{Form::text('apellido', $usuario->apellido, array('class' => 'form-control','placeholder'=>'Ingrese apellido'))}}
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-email-input">Empresa</label>
      <div class="col-md-9">
       {{Form::text('empresa', $usuario->empresa, array('class' => 'form-control','placeholder'=>'Ingrese empresa'))}}
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-email-input">Dirección</label>
      <div class="col-md-9">
       {{Form::text('direccion', $usuario->direccion, array('class' => 'form-control','placeholder'=>'Ingrese direccion'))}}
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-email-input">Nit o Documento</label>
      <div class="col-md-9">
       {{Form::text('nit', $usuario->nit, array('class' => 'form-control','placeholder'=>'Ingrese Nit o Documento'))}}
      </div>
    </div>
    
    <div class="form-group">
     <label class="col-md-3 control-label" for="example-email-input">Email</label>
      <div class="col-md-9">
       {{Form::text('email', $usuario->email, array('class' => 'form-control','placeholder'=>'Ingrese email'))}}
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-password-input">Número de contacto</label>
      <div class="col-md-9">
       {{Form::text('numero', $usuario->numero, array('class' => 'form-control','placeholder'=>'Ingrese teléfono fijo o célular'))}}
      </div>
    </div>

         <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-select">Pais</label>
                                            <div class="col-md-9">
                                               <select id="pais" name="pais" class="form-control" size="1">
                                              <option value="{{$usuario->pais_id}}"selected>{{$usuario->pais}}</option>
                                             @foreach($paises as $paises)
                                              <option value="{{$paises->id}}">{{$paises->pais}}</option>
                                             @endforeach
                                                </select>
                                            </div>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Ciudad</label>
                                            <div class="col-md-9">
                                               <select name="ciudad" id="ciudad" class="form-control" size="1">
                                                <option value="{{$usuario->ciudad_id}}" selected>{{$usuario->departamento}}</option>
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>

     <div class="form-group">
     <label class="col-md-3 control-label" for="example-select">Producto de intéres</label>
      <div class="col-md-9">
       <select name="interes" id="inputConcepto" class="form-control">
        <option value="{{$usuario->interes}}">{{$usuario->producto}}</option>
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
         <option value="{{$usuario->sector_id}}">{{$usuario->sectores}}</option>
         @foreach($sectores as $sectores)
          <option value="{{$sectores->id}}">{{$sectores->sectores}}</option>
         @endforeach
       </select>
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-select">Referido</label>
      <div class="col-md-9">
       <select name="referido" id="inputConcepto" class="form-control">
         <option value="{{$usuario->referido_id}}">{{$usuario->referidos}}</option>
         @foreach($referidos as $referidos)
          <option value="{{$referidos->id}}">{{$referidos->referidos}}</option>
         @endforeach
       </select>
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-select"># Empleados</label>
      <div class="col-md-9">
       <select name="cantidad" id="inputConcepto" class="form-control">
         <option value="{{$usuario->cantidad_id}}">{{$usuario->cantidad}}</option>
         @foreach($cantidades as $cantidades)
          <option value="{{$cantidades->id}}">{{$cantidades->cantidad}}</option>
         @endforeach
       </select>
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-password-input">Comentarios</label>
      <div class="col-md-9">
       {{Form::textarea('comentarios', $usuario->comentarios, array('class' => 'form-control','placeholder'=>'Ingrese comentarios'))}}
      </div>
    </div>

    <div class="form-group form-actions">
     <div class="col-md-9 col-md-offset-3">
      <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Editar</button>
      <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Cancelar</button>
     </div>
    </div>
    
    {{ Form::close() }}
    
    @endforeach                      
   </div>
  </div>
 </div>
</div>


<footer>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 {{ Html::script('modulo-gestion/validaciones/crear-usuario.js') }}
 {{ Html::script('//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js') }} 
  <script type="text/javascript">
     
      $('#pais').on('change',function(e){
        console.log(e);

        var cat_id = e.target.value;

        $.get('/ubicacionciudad/ajax-subcatweb?cat_id=' + cat_id, function(data){
            $('#ciudad').empty();
            $.each(data, function(index, subcatObj){
              $('#ciudad').append('<option value="" style="display:none">Seleccione Ciudad</option>','<option value="'+subcatObj.id+'">'+subcatObj.departamento+'</option>' );

            });
        });
      });
   </script>  


   <script type="text/javascript">
     
      $('#ciudad').on('change',function(e){
        console.log(e);

        var cat_id = e.target.value;

        $.get('/ubicacion/ajax-subcatweb?cat_id=' + cat_id, function(data){
            $('#municipio').empty();
            $.each(data, function(index, subcatObj){
              $('#municipio').append('<option value="" style="display:none">Seleccione Municipio</option>','<option value="'+subcatObj.id+'">'+subcatObj.municipio+'</option>');

            });
        });
      });
   </script>   
</footer>
@stop
