<?php

namespace DigitalsiteSaaS\Gestion\Tenant;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Cantidad extends Model

{
	use UsesTenantConnection;
 protected $table = 'gestion_cantidad';
 public $timestamps = true;
}



