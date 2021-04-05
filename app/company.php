<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
	public $table = 'company';
	public function getNameAttribute($value){
		return strtolower($value);
	}
	
  
}
