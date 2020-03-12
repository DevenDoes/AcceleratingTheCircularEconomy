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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/', 'HomeController@index');


Route::get('/about', 'AboutController@index');


Route::get('/schedule', 'ScheduleController@index');


Route::get('/events', 'EventsController@index');


Route::get('/contact', 'ContactController@index');


Route::get('/register', 'RegisterController@index');







Route::get('/', function () {
    return view('public.home');
});

Route::get('/about', function () {
    return view('public.about');
});

Route::get('/schedule', function() {
    return view('public.schedule');
});

Route::get('/pastevents', function () {
    return view('public.events');
});

Auth::routes();
