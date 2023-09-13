<?php

namespace DigitalsiteSaaS\Gestion\Tenant;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
class Propuesta extends Model

{
	use UsesTenantConnection;
 protected $table = 'gestion_propuestas';
 public $timestamps = true;
}
