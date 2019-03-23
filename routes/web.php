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
Route::get('/portfolio/{p_id?}', "PagesController@portfolio_show");
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


// Partners
Route::get('/all_partners', 'PartnersController@index');
Route::get('/add_partner', 'PartnersController@create');
Route::post('/add_partner', 'PartnersController@store');
Route::get('/edit_partner/{p_id?}', 'PartnersController@edit');
Route::post('/edit_partner', 'PartnersController@update');
Route::get('/delete_partner/{p_id?}', 'PartnersController@delete');
Route::get('/view_partner/{p_id?}', 'PartnersController@show_member_details');

// Products of Partners

Route::get('/all_products', 'ThingsController@index');
Route::get('/add_product', 'ThingsController@create');
Route::get('/add_product_img/{t_id?}', 'ThingsController@add_images');
Route::post('/add_product_images', 'ThingsController@store_images');
Route::post('/add_product', 'ThingsController@store');
Route::get('/edit_product/{p_id?}', 'ThingsController@edit');
Route::post('/edit_product', 'ThingsController@update');
Route::get('/delete_prod/{p_id?}', 'ThingsController@delete');
Route::get('/view_product/{p_id?}', 'ThingsController@show_member_details');

// View Partners Product
Route::get('/thing/{p_id?}', 'PagesController@show_prod_details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
