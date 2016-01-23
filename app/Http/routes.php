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
// Route::group(['middleware' => ['web','auth']], function () {
Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/',['as'=>'root', 'uses'=>'PagesController@home']);
    Route::get('/home',['as'=>'home', 'uses'=>'PagesController@home']);

    Route::get('profile', ['as' => 'profile', function()
    {
        return 'Account Page';
    }]);

    Route::get('keys', ['as' => 'keys', function()
    {
        return 'Keys Page';
    }]);

    Route::get('kb', ['as' => 'kb', function()
    {
        return 'Knowledgebase Page';
    }]);

    Route::get('tasks', ['as' => 'tasks', function()
    {
        return 'Task Management Page';
    }]);

    Route::get('cloud', ['as' => 'cloud', function()
    {
        return 'Cloud Tools Page';
    }]);
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
