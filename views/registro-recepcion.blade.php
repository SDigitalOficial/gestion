@extends ('adminsite.layout')

@section('cabecera')
    @parent
     {{ Html::style('//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css') }}
    @stop

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

<div class="container">
 <div class="row">
  <div class="col-md-12">
   <div class="block">

    <div class="block-title">
     <div class="block-options pull-right">
     </div>
     <h2><strong>Crear</strong> Usuario</h2>
    </div>
    
    {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('gestion/usuariorecepcion'))) }}

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-text-input">Nombre</label>
      <div class="col-md-9">
       {{Form::text('nombre', '', array('class' => 'form-control','placeholder'=>'Ingrese nombre'))}}
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-email-input">Apellido</label>
      <div class="col-md-9">
       {{Form::text('apellido', '', array('class' => 'form-control','placeholder'=>'Ingrese apellido'))}}
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-email-input">Empresa</label>
      <div class="col-md-9">
       {{Form::text('empresa', '', array('class' => 'form-control','placeholder'=>'Ingrese empresa'))}}
      </div>
    </div>

     <div class="form-group">
     <label class="col-md-3 control-label" for="example-password-input">Dirección</label>
      <div class="col-md-9">
       {{Form::text('direccion', '', array('class' => 'form-control','placeholder'=>'Ingrese dirección'))}}
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-email-input">Nit o Documento</label>
      <div class="col-md-9">
       {{Form::text('nit', '', array('class' => 'form-control','placeholder'=>'Ingrese Nit o Documento'))}}
      </div>
    </div>
    
    <div class="form-group">
     <label class="col-md-3 control-label" for="example-email-input">Email</label>
      <div class="col-md-9">
       {{Form::text('email', '', array('class' => 'form-control','placeholder'=>'Ingrese email'))}}
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-password-input">Número de Contacto</label>
      <div class="col-md-9">
       {{Form::text('numero', '', array('class' => 'form-control','placeholder'=>'Ingrese teléfono fijo o célular'))}}
      </div>
    </div>

      <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-select">Pais</label>
                                            <div class="col-md-9">
                                               <select id="pais" name="pais" class="form-control" size="1">
                                              <option value="" disabled selected>Seleccione país</option>
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
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>

     <div class="form-group">
     <label class="col-md-3 control-label" for="example-select">Producto de Intéres</label>
      <div class="col-md-9">
       <select name="interes" id="inputConcepto" class="form-control">
        <option value="" disabled selected>Seleccione Producto de Intéres</option>
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
         <option value="" disabled selected>Seleccione Sector</option>
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
         <option value="" disabled selected>Seleccione Referido</option>
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
         <option value="" disabled selected>Seleccione número de empleados</option>
         @foreach($cantidades as $cantidades)
          <option value="{{$cantidades->id}}">{{$cantidades->cantidad}}</option>
         @endforeach
       </select>
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-password-input">Comentarios</label>
      <div class="col-md-9">
       {{Form::textarea('comentarios', '', array('class' => 'form-control','placeholder'=>'Ingrese comentarios'))}}
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
