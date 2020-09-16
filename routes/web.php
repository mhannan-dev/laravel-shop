<?php

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}



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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/blog', 'PagesController@blog')->name('blog');  


Route::group(['prefix' => 'sadmin'], function(){

    Route::get('/', 'AdminPagesController@index')->name('admin.index');
    Route::get('/product/create', 'AdminPagesController@product_create')->name('product_create');
    Route::post('/product/store', 'AdminPagesController@product_store')->name('product__store');



});


