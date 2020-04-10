<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Store extends Model
{
	protected $table = "store";
    protected $primaryKey = 'store_id';
	
    public function store_address(){
    	return $this->hasOne('App\StoreAddress');
    }
	
	public function services(){
    	return $this->hasMany('App\Service');
    }
}
