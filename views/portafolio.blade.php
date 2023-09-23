@foreach($empresa as $empresa)
@foreach($configuracion as $configuracion)
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

		<![endif]-->
		<style type="text/css">
			table , td, th {
	border: 1px solid #595959;
	border-collapse: collapse;
	width: 100%
}
td, th {
	padding: 3px;
	width: 30px;
	height: 25px;
}
th {
	background: #f0e6cc;
}
.even {
	background: #fbf8f0;
}
.odd {
	background: #fefcf9;
}

  #presentacion{
 	padding: 50px 50px }
 #tablas{
 	padding: 50px 50px }
#condiciones{
 	padding: 50px 50px }

 section[size="A4"] {  
 width: 21.59cm;
  height: 27.94cm; 
}
section[size="A4"][layout="portrait"] {
  width: 21.59cm;
  height: 27.94cm;  
  
}
section {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}

#datos{
	line-height: 10px;
	text-align: right;
	padding-bottom: 50px
}
#datos p{
	font-size: 12px;
}

body {
    background-color: #9e9e9e;
    background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1IiBoZWlnaHQ9IjUiPgo8cmVjdCB3aWR0aD0iNSIgaGVpZ2h0PSI1IiBmaWxsPSIjOWU5ZTllIj48L3JlY3Q+CjxwYXRoIGQ9Ik0wIDVMNSAwWk02IDRMNCA2Wk0tMSAxTDEgLTFaIiBzdHJva2U9IiM4ODgiIHN0cm9rZS13aWR0aD0iMSI+PC9wYXRoPgo8L3N2Zz4=);
    -webkit-transition: left 500ms;
    transition: left 500ms;
}
		</style>
	</head>
	<body id="target">
		
	<div class="col-lg-6 col-lg-offset-3">
	<div id="page">
	
	<section size="A4">
	<img src="/{{$configuracion->img_01}}" class="img-responsive">
	</section>
	
	<section size="A4">
	<img src="/{{$configuracion->img_02}}" class="img-responsive">
	</section>

	<section id="presentacion" size="A4">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<img src="/{{$configuracion->logo}}">
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="datos">
		<h4><b>{{$configuracion->empresa}}</b></h4>
		<p>{{$configuracion->direccion}}</p>
		<p>Telefono: {{$configuracion->telefono}}</p>
		<p>{{$configuracion->correo}}</p>
		<p>{{$configuracion->website}}</p>
	</div>
	<h5><b>Colombia - Bogotá D.C. {{ date('j F, Y', strtotime($empresa->fecha_presentacion)) }}</b></h5>
	<br>
	<br>
	<h4><b>Señor@</b></h4>
	<h5>{{$empresa->nombre}} {{$empresa->apellido}},</h5>

	<p>{{$empresa->empresa}}</p>
<br><br>

<h5><b>Asunto:</b>	{{$empresa->asunto}} </h5>

<br><br>
<h5> <b>Respetados señores,</b></h5>
<br>
<p class="text-justify">{{$configuracion->presentacion}}</p>

<br><br>
<h5>Atento saludo,</h5>

<br><br><br><br>


<h5>Dario E. Martinez Zabala</h5>
<h5>CEO-Cofounder</h5>
<h5><b>Celular:</b> 322 2858132</h5>
<h5><b>Correo electrónico:</b> dario.martinez@sitedigital.com.co</h5>
</section>

<section id="tablas"  size="A4">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<img src="/{{$configuracion->logo}}">
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="datos">
		<h4><b>{{$configuracion->empresa}}</b></h4>
		<p>{{$configuracion->direccion}}</p>
		<p>Telefono: {{$configuracion->telefono}}</p>
		<p>{{$configuracion->correo}}</p>
		<p>{{$configuracion->website}}</p>
	</div>
<table>
	<tbody>
		<tr>
			<td colspan="5" class="text-center" bgcolor="#351C75" style="color:#fff; padding: 15px"><b>Inversión Asociada a Productos y Servicios</b></td>
		</tr>
		<tr class="text-center"  bgcolor="#351C75" style="color:#fff; padding: 15px">
			<td style="padding: 15px">Item</td>
			<td>Descripción</td>
	
			<td>Cant.</td>
			<td>Valor Unit.</td>
			<td>Valor Total</td>
		</tr>
		@foreach($propuesta as $propuesta)
		<tr>
			<td class="text-uppercase"><b>{{$propuesta->producto}}</b></td>
			<td>{{$propuesta->descripcion}} </td>

			<td class="text-center">{{$propuesta->identificador}} </td>
			<td class="text-center">$ {{number_format($propuesta->precio,0, ",", ".")}}</td>
			<td class="text-center">$ {{number_format($propuesta->valor_subtotal,0, ",", ".")}}</td>
		</tr>
		@endforeach
		<tr bgcolor="#E8E8E8">
			<td colspan="4" class="text-right" style="padding: 15px">Subtotal</td>
			<td class="text-center"><b>$ {{number_format($subtotal,0, ",", ".")}}</b></td>
		</tr>
		<tr>
			<td colspan="4" class="text-right" style="padding: 15px">I.V.A</td>
			<td class="text-center">$ {{number_format($iva,0, ",", ".")}}</td>
		</tr>
		<tr bgcolor="#E8E8E8">
			<td colspan="4" class="text-right" style="padding: 15px">Total</td>
			<td class="text-center"><b>$ {{number_format($subtotal+$iva,0, ",", ".")}}</b></td>
		</tr>
	</tbody>
</table>


</section>
<section  id="tablas" size="A4">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<img src="/{{$configuracion->logo}}">
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="datos">
		<h4><b>{{$configuracion->empresa}}</b></h4>
		<p>{{$configuracion->direccion}}</p>
		<p>Telefono: {{$configuracion->telefono}}</p>
		<p>{{$configuracion->correo}}</p>
		<p>{{$configuracion->website}}</p>
	</div>
<table>
	<tbody>
		<tr>
			<td colspan="6" class="text-center" bgcolor="#351C75" style="color:#fff; padding: 15px">Inversión Asociada a Productos y Servicios</td>
		</tr>
		<tr class="text-center"  bgcolor="#351C75" style="color:#fff; padding: 15px">
			<td style="padding: 15px">Item</td>
			<td>Descripción</td>
			<td>Producto / Servicio</td>
			<td>Cant.</td>
			<td>Valor Unit.</td>
			<td>Valor Total</td>
		</tr>
		<tr>
			<td><b>DISEÑO DE SITIO WEB</b></td>
			<td>Sitio web desarrollado en plataforma licenciada administrable, con hasta 6 páginas internas (ejemplo: home, nosotros, servicios, productos, contacto), optimizadas para SEO. </td>
			<td></td>
			<td>1</td>
			<td>$1.800.000</td>
			<td>$1.800.000</td>
		</tr>
		<tr>
			<td><b>PÁGINA INTERNA ADICIONAL PARA EL SITIO WEB</b></td>
			<td>Sitio web desarrollado en plataforma licenciada administrable, con hasta 6 páginas internas (ejemplo: home, nosotros, servicios, productos, contacto), optimizadas para SEO. </td>
			<td></td>
			<td>1</td>
			<td>$300.000</td>
			<td>$300.000</td>
		</tr>
	
	</tbody>
</table>
</section>

<section id="condiciones" size="A4">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<img src="/{{$configuracion->logo}}">
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="datos">
		<h4><b>{{$configuracion->empresa}}</b></h4>
		<p>{{$configuracion->direccion}}</p>
		<p>Telefono: {{$configuracion->telefono}}</p>
		<p>{{$configuracion->correo}}</p>
		<p>{{$configuracion->website}}</p>
	</div>

	{!!$empresa->observaciones!!}

</section>
</div>

</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	</body>
	
</html>
@endforeach
@endforeach