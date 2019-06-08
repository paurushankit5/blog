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
Route::post('/getStateByCountryId', 'ManagerController@getStateByCountryId');





Route::group(['middleware' => ['checkSuperUser'], 'prefix' => 'super'], function(){		
	
	Route::get('/dashboard', function(){
		echo "super user dashboard";
	})->name('superUserDashboard');

	Route::get('/checkhello', function(){
		echo "checkhello";
	});

});


Route::get('/logout', function(){
	\Auth::logout();
	return redirect('/');
});



Route::group(['middleware' => ['checkAdmin1'], 'prefix' => 'admin1'], function(){		
	
	Route::get('/dashboard', function(){
		echo "admin1 dashboard";
	})->name('admin1Dashboard');

});

Route::get('/country', 'HomeController@country');



Route::get('/signup', 'Auth\RegisterController@signup');


