<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Mobile App
use Illuminate\Http\Request;
use app\mobile_app_api\mobile_app_controllers\User\m_login_controller;
Route::middleware('auth:api')->get('/user',function(Request $request){
	return $request->user();
});

Route::get('m_login','mobile_app_api\mobile_app_controllers\m_login_controller');

