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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/upload', 'ServerController@upload');
Route::get('/deploy', 'ServerController@deploy');

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('about', function()
{
    return View::make('pages.about');
});
Route::get('projects', function()
{
    return View::make('pages.projects');
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('pages.about');
});

