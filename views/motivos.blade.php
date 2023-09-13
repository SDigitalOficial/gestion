@extends ('adminsite.layout')
 
 @section('cabecera')
  @parent
 @stop

@section('ContenidoSite-01')

<div class="content-header">
 <ul class="nav-horizontal text-center">
  <li>
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
   <li class="active">
   <a href="/gestion/comercial/cantidades"><i class="fa fa-file-o"></i>Cantidades</a>
  </li>
 </ul>
</div>

<div class="container">
 <?php $status=Session::get('status'); ?>
 @if($status=='ok_create')
  <div class="alert alert-success">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   <strong>Cantidad registrada con éxito</strong> CMS...
  </div>
 @endif

 @if($status=='ok_delete')
  <div class="alert alert-danger">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   <strong>Cantidad eliminada con éxito</strong> CMS...
  </div>
 @endif

 @if($status=='ok_update')
  <div class="alert alert-warning">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   <strong>Cantidad actualizada con éxito</strong> CMS...
  </div>
 @endif
</div>

<div class="container">
 <div class="container-fluid">
  <a href="/gestion/comercial/crear-motivo" class="btn btn-primary pull-right">Crear motivo</a>
 </div>
 <br>
 
 <div class="block full">
  <div class="block-title">
   <h2><strong>Motivos</strong> registrados</h2>
  </div>
            
  <div class="table-responsive">
   <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
    <thead>
     <tr>
      <th class="text-center">Nº</th>
      <th class="text-center">Motivo</th>
      <th class="text-center">Creación</th>
      <th class="text-center">Actualización</th>
      <th class="text-center">Acciones</th>
     </tr>
    </thead>
    
    <tbody>
     @foreach($motivos as $motivos)
      <tr>
       <td class="text-center">{{$motivos->id}}</td>
       <td class="text-center">{{$motivos->motivo}}</td>
       <td class="text-center">{{$motivos->created_at}}</td>
       <td class="text-center">{{$motivos->updated_at}}</td>
       <td class="text-center"><a href="<?=URL::to('gestion/comercial/editar-motivos');?>/{{$motivos->id}}"><span  id="tip" data-toggle="tooltip" data-placement="left" title="Editar cantidad" class="btn btn-primary"><i class="fa fa-pencil-square-o sidebar-nav-icon"></i></span></a>
       <script language="JavaScript">
		function confirmar ( mensaje ) {
		return confirm( mensaje );}
	   </script>
       <a href="<?=URL::to('gestion/comercial/eliminar-cantidades/');?>/{{$motivos->id}}" onclick="return confirmar('¿Está seguro que desea eliminar el registro?')"><span id="tup" data-toggle="tooltip" data-placement="right" title="Eliminar cantidad" class="btn btn-danger"><i class="hi hi-trash sidebar-nav-icon"></i></span></a>
       </td>
      </tr>
     @endforeach
    </tbody>
   </table>
  </div>
 </div>
</div>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

@stop