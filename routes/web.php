<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','Pages\PageController@welcomehome');
Auth::routes();
Route::get('/admin', 'Admin\AdminController@index');
Route::get('/icon-sidebar', 'Admin\AdminController@iconsidebar');
Route::get('/buttons', 'Admin\AdminController@buttons');
Route::get('/cards', 'Admin\AdminController@cards');
Route::get('/tables', 'Admin\AdminController@tables');
Route::get('/tabs', 'Admin\AdminController@tabs');
Route::get('/typography', 'Admin\AdminController@typography');
Route::get('/datatables', 'Admin\AdminController@datatables');
Route::get('/graphs', 'Admin\AdminController@graphs');
Route::get('/notifications', 'Admin\AdminController@notifications');
Route::get('/advanced', 'Admin\AdminController@advanced');
Route::get('/editors', 'Admin\AdminController@editors');
Route::get('/general', 'Admin\AdminController@general');
Route::get('/layouts', 'Admin\AdminController@layouts');
Route::get('/validation', 'Admin\AdminController@validation');
Route::get('/users', 'Admin\AdminController@users');
Route::get('/profile', 'Admin\AdminController@profile');
Route::get('/todos', 'Admin\AdminController@todos');
Route::get('/settings', 'Admin\AdminController@settings');

Route::group([
    'prefix'=>'error',
    'namespace'=>'error',
    'as'=>'error::'
],function (){
  Route::get('404',['as'=>'404','uses' => 'ErrorController@e404']);
  Route::get('500',['as'=>'500','uses' => 'ErrorController@e500']);
  Route::get('503',['as'=>'503','uses' => 'ErrorController@e503']);
  Route::get('checkout',['as'=>'checkout','uses' => 'ErrorController@checkout']);

});


