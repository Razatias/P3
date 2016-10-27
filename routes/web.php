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

Route::get('/', function () {
    return view('home');
});

Route::get('/lorem', function () {
    return view('lorem/createlorem')->with('paragraphs', '');
});

Route::POST('/lorem', 'loremController@getLoremText');

Route::get('/usergenerator', function () {
    return view('users/createusers')->with('names', '');
});

Route::POST('/usergenerator', 'userController@getUsers');
