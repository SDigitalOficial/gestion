<?php

namespace DigitalsiteSaaS\Gestion\Tenant;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
class Referido extends Model

{
	use UsesTenantConnection;
 protected $table = 'gestion_referidos';
 public $timestamps = true;
}
