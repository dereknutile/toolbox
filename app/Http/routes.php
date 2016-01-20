<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController'
]);


/*
|--------------------------------------------------------------------------
| Place routes that require authentication here
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home',['as'=>'home', 'uses'=>'PagesController@home']);
});


/*
|--------------------------------------------------------------------------
| Place routes that require authentication here
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => ['web']], function () {
    // Route::get('/splash',['as'=>'splash', 'uses'=>'PagesController@splash']);
    Route::get('login',['as'=>'login', 'uses'=>'Auth\AuthController@getLogin']);
    Route::get('logout',['as'=>'logout', 'uses'=>'Auth\AuthController@getLogout']);
    Route::get('reset',['as'=>'reset', 'uses'=>'Auth\PasswordController@getEmail']);
});
