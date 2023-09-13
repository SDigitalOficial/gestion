@extends ('adminsite.layout')
 
 @section('cabecera')
  @parent
 @stop

@section('ContenidoSite-01')

<div class="content-header">
 <ul class="nav-horizontal text-center">
  <li class="active">
   <a href="/gestion/comercial-recepcion"><i class="fa fa-list-ul"></i> Usuarios</a>
  </li>
  <li>
   <a href="/gestion/registro-recepcion"><i class="fa fa-user-plus"></i> Registrar Datos Usuario</a>
  </li>
 </ul>
</div>

<div class="container">
 <?php $status=Session::get('status'); ?>
 @if($status=='ok_create')
  <div class="alert alert-success">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   <strong>Área Registrada Con Éxito</strong> CMS...
  </div>
 @endif

 @if($status=='ok_delete')
  <div class="alert alert-danger">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   <strong>Área Eliminada Con Éxito</strong> CMS...
  </div>
 @endif

 @if($status=='ok_update')
  <div class="alert alert-warning">
   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
   <strong>Área Actualizada Con Éxito</strong> CMS...
  </div>
 @endif
</div>

<div class="container">

 <br>
 
 <div class="block full">
  <div class="block-title">
   <h2><strong>Usuarios</strong> Registrados</h2>
  </div>
            
  <div class="table-responsive">
   <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
    <thead>
     <tr>
      <th class="text-center">Nombres y Apellidos</th>
      <th class="text-center">Empresa</th>
      <th class="text-center">Email</th>
      <th class="text-center">Intéres</th>
      <th class="text-center">Sector</th>
      <th class="text-center">Creación</th>
      <th class="text-center">Acciones</th>
     </tr>
    </thead>
    
    <tbody>
      @foreach($usuarios as $usuariosa)

      <tr>
       <td class="text-center">{{$usuariosa->nombre}} {{$usuariosa->apellido}}</td>
       
       <td class="text-center">{{$usuariosa->empresa}}</td>
       
       <td>{{$usuariosa->email}}</td>
      
       @foreach($productos as $productosa)
       @if($usuariosa->interes == $productosa->id)
       <td>{{$productosa->producto}}</td>
       @endif
       @endforeach

       @foreach($sectores as $sectoresa)
       @if($usuariosa->sector_id == $sectoresa->id)
       <td>{{$sectoresa->sectores}}</td>
       @endif
       @endforeach

       <td>{{$usuariosa->created_at}}</td>
       <td class="text-center">
  
        <a href="<?=URL::to('gestion/comercial/editar-registrorec/');?>/{{$usuariosa->id}}"><span  id="tip" data-toggle="tooltip" data-placement="top" title="Editar Área" class="btn btn-primary"><i class="fa fa-pencil-square-o sidebar-nav-icon"></i></span></a>

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