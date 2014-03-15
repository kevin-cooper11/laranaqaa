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

Route::get('/home', function()
{
	return View::make('home');
});
Route::get('/identify-unknown-pest', function()
{
    return View::make('identify-unknown-pest');
});
Route::get('/procedure', function()
{
    return View::make('procedure');
});
Route::get('/schedule', function()
{
    return View::make('schedule');
});
Route::get('/free-inspection', function()
{
    return View::make('free-inspection');
});
Route::get('/faq', function()
{
    return View::make('faq');
});
Route::get('/about', function()
{
    return View::make('about');
});
Route::get('/contact', function()
{
    return View::make('contact');
});