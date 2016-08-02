<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'welcomeController@index');
// Route::get('contact', 'contactController@index');

/*s
|--------------------------------------------------------------------------
| Routes for Login and Logout
|--------------------------------------------------------------------------
*/
Route::get('login', 'Auth\AuthController@login');

/*s
|--------------------------------------------------------------------------
| Routes for Articles
|--------------------------------------------------------------------------
*/
Route::get('/', function() {
    return redirect()->route('arti.index');
});

$config = [
    'getIndex'    => 'arti.index',
    'getShow'     => 'arti.show',
    'getCreate'   => 'arti.create',
    'getEdit'     => 'arti.edit',
    'postStore'   => 'arti.store',
    'patchUpdate'  => 'arti.update'
];

Route::controller('articles', 'ArticleController', $config);

//OR

// Route::group(['as' => 'arti.', 'prefix' => 'articles'], function() {
//     Route::get('',       ['as' => 'index',  'uses' => 'ArticleController@index']);
//     Route::get('create', ['as' => 'create', 'uses' => 'ArticleController@create']);
//     Route::get('{id}',   ['as' => 'show',   'uses' => 'ArticleController@show']);
//     Route::post('',      ['as' => 'store',  'uses' => 'ArticleController@store']);
// });