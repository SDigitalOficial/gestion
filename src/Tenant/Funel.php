<?php

namespace DigitalsiteSaaS\Gestion\Tenant;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Funel extends Model

{
	use UsesTenantConnection;
 protected $table = 'gestion_funel';
 public $timestamps = true;
}
