<?php
Route::group(['middleware' => ['auths','administrador']], function (){

Route::get('gestion/crear-pais', function(){
    return View::make('pagina::configuracion.crear-pais');
});

Route::post('gestion/crearpais', 'DigitalsiteSaaS\Pagina\Http\ConfiguracionController@crearpais'); 
Route::post('gestion/actualizarpais', 'DigitalsiteSaaS\Pagina\Http\ConfiguracionController@crearpais'); 

Route::get('gestion/comercial/registro', 'DigitalsiteSaaS\Gestion\Http\GestionController@registro');
Route::get('gestion/comercial/propuesta/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@propuesta');
Route::get('gestion/comercial/crear-propuesta/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@crearpropuesta');
Route::post('gestion/comercial/crearpropuesta', 'DigitalsiteSaaS\Gestion\Http\GestionController@crearpropuestanew');
Route::get('gestion/comercial/dashboard', 'DigitalsiteSaaS\Gestion\Http\GestionController@dashboard');
Route::get('gestion/comercial/editar-propuesta/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@editarpropuesta');
Route::post('gestion/comercial/editarpropuesta/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@editarpropuestaa');


Route::get('gestion/comercial/editar/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@edito');

Route::get('gestion/comercial/editar-cantidades/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@editarcan');
Route::get('gestion/comercial/editar-motivos/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@editarmot');

Route::get('portafolio/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@portafolio');


Route::get('gestion/comercial/editar-referido/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@editreferido');


Route::get('gestion/comercial/editar-sector/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@editsector');

Route::get('gestion/comercial/editar-producto/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@editproducto');

Route::get('gestion/comercial/editar-recepcion/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@editrecepcion');

Route::post('gestion/comercial/editarcantidad/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@editarcantidad');
Route::post('gestion/comercial/editarmotivo/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@editarmotivo');
Route::post('gestion/comercial/editarreferido/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@editarreferido');
Route::post('gestion/comercial/editarsector/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@editarsector');
Route::post('gestion/comercial/editarproducto/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@editarproducto');
Route::post('gestion/comercial/editarusuario/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@editarusuario');

Route::resource('gestion/comercial/editar-usuario', 'DigitalsiteSaaS\Gestion\Http\GestionController@edit');
Route::get('gestion/comercial/eliminar/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@eliminar');
Route::get('gestion/comercial/eliminar-producto/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@eliminarproducto');
Route::get('gestion/comercial/eliminar-sector/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@eliminarsector');
Route::get('gestion/comercial/eliminar-referido/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@eliminarreferido');
Route::get('gestion/comercial/eliminar-cantidades/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@eliminarcantidad');
Route::get('gestion/comercial/productos', 'DigitalsiteSaaS\Gestion\Http\GestionController@productos');
Route::get('gestion/comercial/crear-producto', 'DigitalsiteSaaS\Gestion\Http\GestionController@crearproductos');
Route::get('gestion/comercial/crear-sector', 'DigitalsiteSaaS\Gestion\Http\GestionController@crearsector');
Route::get('gestion/comercial/crear-referido', 'DigitalsiteSaaS\Gestion\Http\GestionController@crearreferido');
Route::get('gestion/comercial/crear-cantidad', 'DigitalsiteSaaS\Gestion\Http\GestionController@crearcantidad');
Route::get('gestion/comercial/crear-motivo', 'DigitalsiteSaaS\Gestion\Http\GestionController@crearmotivo');
Route::post('gestion/registrar/sector', 'DigitalsiteSaaS\Gestion\Http\GestionController@registrarsector');
Route::post('gestion/registrar/referido', 'DigitalsiteSaaS\Gestion\Http\GestionController@registrarreferido');

Route::post('gestion/registrar/producto', 'DigitalsiteSaaS\Gestion\Http\GestionController@registrarproductos');
Route::post('gestion/registrar/cantidad', 'DigitalsiteSaaS\Gestion\Http\GestionController@registrarcantidad');
Route::post('gestion/registrar/motivo', 'DigitalsiteSaaS\Gestion\Http\GestionController@registrarmotivo');
Route::get('gestion/comercial/sectores', 'DigitalsiteSaaS\Gestion\Http\GestionController@sectores');
Route::get('gestion/comercial/cantidades', 'DigitalsiteSaaS\Gestion\Http\GestionController@cantidades');
Route::get('gestion/comercial/motivos', 'DigitalsiteSaaS\Gestion\Http\GestionController@motivos');
Route::get('gestion/comercial/referidos', 'DigitalsiteSaaS\Gestion\Http\GestionController@referidos');
Route::post('gestion/registrar/usuario', 'DigitalsiteSaaS\Gestion\Http\GestionController@create');
Route::resource('gestion/comercial', 'DigitalsiteSaaS\Gestion\Http\GestionController');
});


Route::get('/validacion/nit', 'DigitalsiteSaaS\Gestion\Http\GestionController@valida');


Route::group(['middleware' => ['auths','recepcion']], function (){
Route::get('gestion/comercial-recepcion', 'DigitalsiteSaaS\Gestion\Http\GestionController@recepcion');

Route::get('gestion/registro-recepcion', function(){
 $productos = DB::table('gestion_productos')->get();
 $sectores = DB::table('gestion_sector')->get();
  $referidos = DB::table('gestion_referidos')->get();
 $cantidades = DB::table('gestion_cantidad')->get();
  $paises = DB::table('paises')->orderBy('pais', 'ASC')->get();
 return View::make('gestion::registro-recepcion')->with('productos', $productos)->with('sectores', $sectores)->with('referidos', $referidos)->with('cantidades', $cantidades)->with('paises', $paises);
});

Route::post('gestion/usuariorecepcion', 'DigitalsiteSaaS\Gestion\Http\GestionController@createrecepcion');

Route::get('gestion/comercial/editar-registrorec/{id}', function($id){
 $usuario = DB::table('gestion_usuarios')
 ->join('gestion_productos','gestion_usuarios.interes','=','gestion_productos.id')
 ->join('gestion_sector','gestion_usuarios.sector_id','=','gestion_sector.id')
 ->join('gestion_cantidad', 'gestion_cantidad.id', '=', 'gestion_usuarios.cantidad_id')
  ->join('gestion_referidos', 'gestion_referidos.id', '=', 'gestion_usuarios.referido_id')
 ->leftjoin('paises', 'paises.id', '=', 'gestion_usuarios.pais_id')
 ->leftjoin('departamentos', 'departamentos.id', '=', 'gestion_usuarios.ciudad_id')
 ->where('gestion_usuarios.id', '=', $id)->get();
 $productos = DB::table('gestion_productos')->get();
 $paises = DB::table('paises')->orderBy('pais', 'ASC')->get();
  $referidos = DB::table('gestion_referidos')->get();
 $sectores = DB::table('gestion_sector')->get();
  $cantidades = DB::table('gestion_cantidad')->get();
 return View::make('gestion::editar-registrorec')->with('productos', $productos)->with('sectores', $sectores)->with('usuario', $usuario)->with('paises', $paises)->with('referidos', $referidos)->with('cantidades', $cantidades);
});
Route::post('gestion/comercial/editar-usuariorec/{id}', 'DigitalsiteSaaS\Gestion\Http\GestionController@editrec');
});


