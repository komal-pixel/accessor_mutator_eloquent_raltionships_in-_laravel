<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
	public $timestamps = false;
	public $table = 'employee';
	public function setNameAttribute($value){
		$this->attributes['name'] = "miss".' '.$value;
	}

	public function one(){
		return $this->hasOne('App\company');
		// or
		// return $this->hasMany('App\company');

	}
}
