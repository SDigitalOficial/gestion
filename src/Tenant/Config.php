<?php

namespace DigitalsiteSaaS\Gestion\Tenant;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Config extends Model

{
	use UsesTenantConnection;
 protected $table = 'gestion_configuracion';
 public $timestamps = false;
}
