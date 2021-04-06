<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\company;
use App\employee;


class mutator_accessor extends Controller
{
    public function index(){
    	return company::find(1);
    }
    public function insert(){
    	$employee = new employee;

    	$employee->name="Nick";
    	$employee->save();
    }

    public function oneTOne(){
		return employee::Find(1)->one;
	}
}
