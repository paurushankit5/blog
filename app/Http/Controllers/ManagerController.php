<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\State;

class ManagerController extends Controller
{
    public function getStateByCountryId(){
    	$array 		= 	array(
    							"country_id"	=> 	$_REQUEST['country_id']
    						);
    	$states 	= 	State::where($array)->get();
    	return $states;
    }
}
