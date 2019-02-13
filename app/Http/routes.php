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

Route::get('/', 'WelcomeController@index');

Route::get('about', ['middleware' => 'auth', 'uses' => 'PagesController@about']);
Route::get('contact', 'PagesController@contact');

// Route::get('articles', 'ArticlesController@index');
// Route::get('articles/create', 'ArticlesController@create');
// Route::get('articles/{id}', 'ArticlesController@show');
// Route::post('articles', 'ArticlesController@store');
// Route::get('articles/{id}/edit', 'ArticlesController@edit');

Route::resource('articles', 'ArticlesController');

// Route::controllers([
//     'auth' => 'Auth\AuthController'
// ]);

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('foo', ['middleware' => 'manager', function ()
{
    return "Great! You are a manager";
}]);

Route::get('tags/{tags}', 'TagsController@show');
