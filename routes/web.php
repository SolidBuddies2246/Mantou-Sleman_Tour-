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



Route::resource('/','HomePageController');
Route::resource('/homepage','HomePageController'); 
Route::get('/homeOpen/{id_home}&&{id_status}','HomePageController@homeOpen');
Route::get('/status/{id_status}','StatusController@index');
Route::get('/cari','HomePageController@cari');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>['web','auth']],function(){
	// Route::get('/', function () {
	//     return view('welcome');
	// });
	
	Route::get('/home',function(){
		if(Auth::user()->admin==0){
			return view('user.home');
		}
		else{
			$users['users'] = \App\User::all();
			return view('admin.index',$users);
		}
	});	
	//Route::get('/homepage','HomePageController@index');
	Route::get('/homePanitia', function(){
		return view('panitia/homePanitia.info');
	});	
});