<?php

namespace DigitalsiteSaaS\Gestion\Tenant;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
class Sector extends Model

{
	use UsesTenantConnection;
 protected $table = 'gestion_sector';
 public $timestamps = true;
}
