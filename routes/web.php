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

Route::get('/logout', function () {
	Auth::logout();
	return Redirect()->back();
});



//admin section
Route::group(['middleware' => ['web', 'admin']], function () {

	Route::get('/adminpanel', '\App\Http\Controllers\Dashboard\CandidatesController@showpanel');

	/***products for seller */
	Route::resource('/adminpanel/product', '\App\Http\Controllers\Dashboard\ProductController');
	Route::get('/adminpanel/product/{id}/delete', '\App\Http\Controllers\Dashboard\ProductController@destroy');
	Route::get('/adminpanel/product/create','\App\Http\Controllers\Dashboard\ProductController@CreateProduct');
	Route::post('/adminpanel/product/stor','\App\Http\Controllers\Dashboard\ProductController@add');
	Route::post('/adminpanel/product/update/{id}', '\App\Http\Controllers\Dashboard\ProductController@update');
	Route::post('/adminpanel/product/search', '\App\Http\Controllers\Dashboard\ProductController@search');
	Route::post('/adminpanel/deleteid', '\App\Http\Controllers\Dashboard\ProductController@deleteid');
	
	/******products for store */
	Route::resource('/adminpanel/StoreProduct', '\App\Http\Controllers\Dashboard\StoreProductController');
	Route::get('/adminpanel/StoreProduct/{id}/delete', '\App\Http\Controllers\Dashboard\StoreProductController@destroy');
	Route::get('/adminpanel/StoreProduct/create','\App\Http\Controllers\Dashboard\StoreProductController@CreateProduct');
	Route::post('/adminpanel/StoreProduct/stor','\App\Http\Controllers\Dashboard\StoreProductController@add');
	Route::post('/adminpanel/StoreProduct/update/{id}', '\App\Http\Controllers\Dashboard\StoreProductController@update');
	Route::post('/adminpanel/StoreProduct/search', '\App\Http\Controllers\Dashboard\StoreProductController@search');
	Route::post('/adminpanel/deleteid', '\App\Http\Controllers\Dashboard\StoreProductController@deleteid');
	/******products for store */
	Route::resource('/adminpanel/user', 'adminControllers');
	Route::get('/adminpanel/user/create','adminControllers@Createuser');
	Route::post('/adminpanel/user/stor','adminControllers@add');
    Route::post('/adminpanel/user/update/{id}', 'adminControllers@update');
	Route::post('/adminpanel/user/search', 'adminControllers@search');
	Route::post('/adminpanel/deleteid', 'adminControllers@deleteid');
		
		
	

});

//end admin
//minddleware

Route::group(['middleware' => 'web'], function () {
	Route::auth();
	
	Route::get('/', 'HomeController@index');

});
//end
