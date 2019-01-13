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


/*
      ***************Pages section**********
*/

Route::get('/about_us', "PagesController@about_us");
Route::get('/services', "PagesController@services");
Route::get('/portfolio', "PagesController@portfolio");
Route::get('/team', "PagesController@team");
Route::get('/contact_us', "PagesController@contact_us");

/// backend
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'SuperAdminController@index');
Route::post('/dashboard', 'AdminController@log_in_dashboard');
Route::get('/logout', 'SuperAdminController@logout');

// Team members

Route::get('/all_team', 'ProductsController@index');
Route::get('/add_team', 'ProductsController@create');
Route::post('/add_team', 'ProductsController@store');
Route::get('/edit_product/{p_id?}', 'ProductsController@edit');
Route::post('/edit_product', 'ProductsController@update');
Route::get('/delete_product/{product_id?}', 'ProductsController@delete');
Route::get('/view_member/{product_id?}', 'PagesController@show_member_details');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
