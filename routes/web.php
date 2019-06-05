<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/myblogs', 'BlogController');


Route::group(['middleware' => ['checkSuperUser'], 'prefix' => 'super'], function(){		
	Route::get('/test', function(){
		echo "hello";
	});
	Route::get('/checkhello', function(){
		echo "checkhello";
	});
});


Route::group(['middleware' => ['checkAdmin1'], 'prefix' => 'admin1'], function(){		
	Route::get('/test', function(){
		echo "admin1";
	});
});

Route::get('/country', 'HomeController@country');




