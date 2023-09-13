<?php

namespace DigitalsiteSaaS\Gestion\Tenant;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
class Producto extends Model

{
	use UsesTenantConnection;
 protected $table = 'gestion_productos';
 public $timestamps = true;
}
