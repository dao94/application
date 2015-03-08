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
//***************************ADMIN**********************************
Route::get('admin',function() {
    return View::make('admin/home');
});
Route::get('admin/chung_loais',function() {
  return View::make('chung_loais/index');
});
Route::resource('chung_loais', 'Chung_loaisController');








