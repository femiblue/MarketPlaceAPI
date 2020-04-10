<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class ServiceCategory extends Model 
{
	protected $table = "service_categories";
    protected $primaryKey = 'service_category_id';
    
	public function services(){
    	return $this->hasMany('App\Service');
    }
}
