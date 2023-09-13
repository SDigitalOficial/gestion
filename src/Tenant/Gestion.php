<?php

namespace DigitalsiteSaaS\Gestion\Tenant;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class Gestion extends Model

{
	use UsesTenantConnection;

	protected $fillable = [
    'nombre', 'apellido', 'empresa', 'direccion', 'email', 'numero', 'interes','sector_id','cantidad_id','referido_id','pais_id','ciudad_id','comentarios','estado','nit','tipo','utm_source','utm_medium','utm_campaign',
    ];

	protected $table = 'gestion_usuarios';
	public $timestamps = true;

	
}




