<?php

namespace DigitalsiteSaaS\Gestion\Tenant;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{

 use UsesTenantConnection;
 protected $table = 'gestion_products';
 public $timestamps = false;
}







