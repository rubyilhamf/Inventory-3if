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

Route::get('/hello', function () {
    echo ('Hello World');
});

Route::get('/name/{Ruby}', function ($ruby) {
    return "Hello World" . $ruby;
});

Route::get('/name/{ruby}', function ($ruby) {
    return "Hello " . $ruby;
})->where('ruby', '[A-Za-z]+');

Route::get('/name/{nama}/{nrp}', function ($ruby, $nrp) {
    return "Hello " . $ruby . " " .$nrp; 
})->where('ruby', '[A-Za-z]+');

Route::get('/person', 'PersonController@index');
Route::get('/person/show/{param}', 'PersonController@show');
Route::resource('/student', 'StudentController');

