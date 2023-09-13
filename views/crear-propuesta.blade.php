@extends ('adminsite.layout')

@section('cabecera')
    @parent
      {{ Html::style('modulo-calendario/css/bootstrap-datetimepicker.min.css') }}
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
     <h2><strong>Crear</strong> propuesta</h2>
    </div>
    
    {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm', 'url' => array('gestion/comercial/crearpropuesta'))) }}

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-text-input">Estado Propuesta</label>
      <div class="col-md-9">
      {{ Form::select('tipo', [
      '1' => 'En Proceso',
      '2' => 'No Ganada',
      '3' => 'Ganada'
      ], null, array('class' => 'form-control')) }}
      </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-email-input">Valor Propuesta</label>
       <div class="col-md-9">
        {{Form::text('valor','', array('class' => 'form-control','placeholder'=>'Ingrese valor de la propuesta','value'=>'0'))}}
       </div>
    </div>

    <div class="form-group">
     <label class="col-md-3 control-label" for="example-email-input">Fecha Presentación {{Request::get('utm_fecha')}}</label>
       <div class="col-md-9 date" id="datetimepicker7">
        {{Form::text('fecha', Request::get('utm_fecha'), array('class' => 'form-control','readonly' => 'readonly','placeholder'=>'Ingrese fecha presentación'))}}
       </div>
    </div>


    <div class="form-group">
     <label class="col-md-3 control-label" for="example-text-input">Producto de intéres</label>
      <div class="col-md-9">
       <div id="output" hidden></div>
        <select multiple="multiple" data-placeholder="Seleccione productos/servicios..." name="interes[]" multiple class="chosen-select form-control" id="interes">
        @foreach($productos as $productos)
          <option value="{{$productos->id}}">{{$productos->producto}}</option>
        @endforeach
       </select>
    </div>
     </div>

        {{Form::hidden('utm_referido',Request::get('utm_referido'), array('class' => 'form-control','readonly' => 'readonly','placeholder'=>'Ingrese fecha presentación'))}}


    <div class="form-group">
     <label class="col-md-3 control-label" for="example-password-input">Comentarios</label>
      <div class="col-md-9">
       {{Form::textarea('comentarios', '', array('class' => 'form-control','placeholder'=>'Ingrese comentarios'))}}
      </div>
    </div>

{{Form::hidden('cliente', Request::segment(4), array('class' => 'form-control','placeholder'=>'Ingrese valor de la propuesta','value'=>'0'))}}

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

     
{{ Html::script('modulo-calendario/js/jquery.min.js') }}
   
  <script type="text/javascript">
   $(document).ready(function(){
   $('#datetimepicker7').datetimepicker({
      pickTime: true,
      format: 'MM/DD/YYYY HH:mm'
   });});
  </script>
  
  <script type="text/javascript">
   $(document).ready(function(){
   $('#datetimepicker9').datetimepicker({
      pickTime: true,
      format: 'MM/DD/YYYY HH:mm'
   });});
  </script>

  <script type="text/javascript">
   function openKCFinder(field) {
   window.KCFinder = {
   callBack: function(url) {
            field.value = url;
            window.KCFinder = null;}
    };
    window.open('/vendors/kcfinder/browse.php?type=images&dir=files/public', 'kcfinder_textbox',
        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
        'resizable=1, scrollbars=0, width=800, height=600');}
  </script>
     
     
  {{ Html::script('modulo-calendario/js/moment.min.js') }}
  {{ Html::script('modulo-calendario/js/bootstrap-datetimepicker.min.js') }}
  {{ Html::script('modulo-calendario/js/validator.js')}}
  {{ Html::script('//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js') }} 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

 
 {{ Html::script('modulo-gestion/validaciones/editar-usuario.js') }}
 {{ Html::script('//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js') }} 


     <script src="//harvesthq.github.io/chosen/chosen.jquery.js"></script>

  <script type="text/javascript"></script>
    <script type="text/javascript">
document.getElementById('output').innerHTML = location.search;
$(".chosen-select").chosen();
</script>


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