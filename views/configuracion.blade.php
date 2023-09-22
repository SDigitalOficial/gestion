@extends ('adminsite.layout')
 

   @section('cabecera')
    @parent
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
    <script src="/vendors/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="/validaciones/dist/css/bootstrapValidator.css"/>
    <script type="text/javascript" src="/validaciones/dist/js/bootstrapValidator.js"></script>
    @stop


  @section('ContenidoSite-01')

<div class="content-header">
 <ul class="nav-horizontal text-center">
  <li class="active">
   <a href="/gestion/comercial"><i class="fa fa-list-ul"></i> Usuarios</a>
  </li>
  <li>
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
   <li>
   <a href="/gestion/comercial/motivos"><i class="fa fa-file-o"></i>Motivo</a>
  </li>
  <li>
   <a href="/gestion/comercial/configuracion/1"><i class="fa fa-file-o"></i>Configuración</a>
  </li>
 </ul>
</div>

 <div class="container">
  <?php $status=Session::get('status'); ?>
  @if($status=='ok_create')
   <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Usuario registrado con éxito</strong>
   </div>
  @endif

  @if($status=='ok_delete')
   <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Usuario eliminado con éxito</strong>
   </div>
  @endif

  @if($status=='ok_update')
   <div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Usuario actualizado con éxito</strong>
   </div>
  @endif

 </div>





    

<div class="container">
  <div class="row">
                            <div class="col-md-12">
                                <!-- Basic Form Elements Block -->
                                <div class="block">
                                    <!-- Basic Form Elements Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            
                                        </div>
                                        <h2><strong>Configuración</strong> Empresa</h2>
                                    </div>
                                    <!-- END Form Elements Title -->
                
                                   

                                    <!-- Basic Form Elements Content -->
                                     
                                    
                                     {{ Form::open(array('files' => true,'method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('/gestion/comercial/updatecon/1'))) }}

                                       @foreach($configuracion as $configuracion)

                                       <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Empresa</label>
                                            <div class="col-md-9">
                                                {{Form::text('empresa', $configuracion->empresa, array('class' => 'form-control','placeholder'=>'Ingrese Empresa','required' => 'required'))}}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Dirección</label>
                                            <div class="col-md-9">
                                                {{Form::text('direccion', $configuracion->direccion, array('class' => 'form-control','placeholder'=>'Ingrese Dirección','required' => 'required'))}}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Teléfono</label>
                                            <div class="col-md-9">
                                                {{Form::text('telefono', $configuracion->telefono, array('class' => 'form-control','placeholder'=>'Ingrese Teléfono','required' => 'required'))}}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Sitio Web</label>
                                            <div class="col-md-9">
                                                {{Form::text('website', $configuracion->website, array('class' => 'form-control','placeholder'=>'Ingrese Sitio Web','required' => 'required'))}}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Sitio Web</label>
                                            <div class="col-md-9">
                                                {{Form::text('correo', $configuracion->correo, array('class' => 'form-control','placeholder'=>'Ingrese Sitio Web','required' => 'required'))}}
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Color Principal</label>
                                            <div class="col-md-9">
                                                {{Form::color('color_principal', $configuracion->color_principal, array('class' => 'form-control','placeholder'=>'Ingrese Color Principal','required' => 'required'))}}
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Color Secundario</label>
                                            <div class="col-md-9">
                                                {{Form::color('color_secundario', $configuracion->color_secundario, array('class' => 'form-control','placeholder'=>'Ingrese Color Secudnario','required' => 'required'))}}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="col-md-3 control-label" for="example-password-input">Logo</label>
                                          <div class="col-md-9">
                                           <div class="input-group">
                                        <input type="text" id="image_labela" class="form-control" name="logo" placeholder="Seleccionar imagen" aria-label="Image" aria-describedby="button-image" value="{{$configuracion->logo}}">
                                            <span class="input-group-btn"><button class="btn btn-primary" type="button" id="button-imagea">Seleccionar imagen</button></span>
                                           </div>
                                          </div>
                                         </div>

                                  
                                    
                                      
                                        

                                        <div class="form-group">
                                          <label class="col-md-3 control-label" for="example-password-input">Imagen 01</label>
                                          <div class="col-md-9">
                                           <div class="input-group">
                                            <input type="text" id="image_label" class="form-control" name="imagen1" placeholder="Seleccionar imagen" aria-label="Image" aria-describedby="button-image" value="{{$configuracion->img_01}}">
                                            <span class="input-group-btn"><button class="btn btn-primary" type="button" id="button-image">Seleccionar imagen </button></span>
                                           </div>
                                          </div>
                                         </div>

                                         <div class="form-group">
                                          <label class="col-md-3 control-label" for="example-password-input">Imagen 02</label>
                                          <div class="col-md-9">
                                           <div class="input-group">
                                            <input type="text" id="image_labelb" class="form-control" name="imagen2" placeholder="Seleccionar imagen" aria-label="Image" aria-describedby="button-image" value="{{$configuracion->img_02}}">
                                            <span class="input-group-btn"><button class="btn btn-primary" type="button" id="button-imageb">Seleccionar imagen </button></span>
                                           </div>
                                          </div>
                                         </div>


                                         <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-text-input">Presentación</label>
                                            <div class="col-md-9">
                                                {{Form::textarea('presentacion', $configuracion->presentacion, array('class' => 'form-control','placeholder'=>'Ingrese Sitio Web','required' => 'required'))}}
                                            </div>
                                        </div>

                                      
                                       @endforeach

                                        <div class="form-group form-actions">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Crear</button>
                                                <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Cancelar</button>
                                            </div>
                                        </div>
                                    {{ Form::close() }}
                      
                                </div>
                                <!-- END Basic Form Elements Block -->
                            </div>
                          </div>
                          
</div>




<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

  {{ Html::script('Usuario/js/valida.js') }}
  {{ Html::script('//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js') }}
 
  {{ Html::script('//cdn.datatables.net/1.10.1/js/jquery.dataTables.min.js') }}
  {{ Html::script('//cdn.datatables.net/plug-ins/be7019ee387/integration/bootstrap/3/dataTables.bootstrap.js') }}


<script>
    document.addEventListener("DOMContentLoaded", function() {

    document.getElementById('button-image').addEventListener('click', (event) => {
      event.preventDefault();

      inputId = 'image_label';

      window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
    });

    document.getElementById('button-imagea').addEventListener('click', (event) => {
      event.preventDefault();

      inputId = 'image_labela';

      window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
    });

    // second button
    document.getElementById('button-imageb').addEventListener('click', (event) => {
      event.preventDefault();

      inputId = 'image_labelb';

      window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
    });

    document.getElementById('button-imagec').addEventListener('click', (event) => {
      event.preventDefault();

      inputId = 'image_labelc';

      window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
    });

  });

  // input
  let inputId = '';

  // set file link
  function fmSetLink($url) {
    document.getElementById(inputId).value = $url;
  }
</script>

  @stop
