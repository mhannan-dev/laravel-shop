<?php

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
 Product/Pages Home Routes for front end
*/
Route::get('/', 'Frontend\PagesController@index')->name('home');

Route::get('/contact', 'Frontend\PagesController@contact')->name('contact');
Route::get('/blog', 'Frontend\PagesController@blog')->name('blog');


/*
 Product/Pages Home Routes for front end
*/
Route::get('/products', 'Frontend\ProductsController@index')->name('products');

Route::get('product/{slug}', 'Frontend\ProductsController@show')->name('product_slug');





Route::group(['prefix' => 'sadmin'], function(){

    Route::get('/', 'Backend\PagesController@index')->name('admin.pages.index');
        
        /*
        Product Routes for backend
        */

        Route::group(['prefix' => '/products'], function(){
            Route::get('/', 'Backend\ProductsController@index')->name('admin_products');

            Route::get('/create', 'Backend\ProductsController@create')->name('product_create');

            Route::post('/store', 'Backend\ProductsController@store')->name('product__store');

            Route::post('/edit/{id}', 'Backend\ProductsController@update')->name('product_update');

            Route::get('/edit/{id}', 'Backend\ProductsController@edit')->name('product_edit');

            Route::post('/delete/{id}', 'Backend\ProductsController@delete')->name('product_delete');

        });
        /*
        Product Routes end
        */

        /*
        categories Routes for backend
        */

        Route::group(['prefix' => '/categories'], function(){
            Route::get('/', 'Backend\CategoriesController@index')->name('category_list');

            Route::get('/create', 'Backend\CategoriesController@create')->name('category_create');

            Route::post('/store', 'Backend\CategoriesController@store')->name('category_store');

            Route::post('/edit/{id}', 'Backend\CategoriesController@update')->name('category_update');

            Route::get('/edit/{id}', 'Backend\CategoriesController@edit')->name('category_edit');

            Route::post('/delete/{id}', 'Backend\CategoriesController@delete')->name('category_delete');

        });
        /*
        categories Routes end
        */


    

});


