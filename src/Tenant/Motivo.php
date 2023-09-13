<?php

namespace DigitalsiteSaaS\Gestion\Tenant;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Motivo extends Model

{
	use UsesTenantConnection;
 protected $table = 'gestion_motivo';
 public $timestamps = true;
}
