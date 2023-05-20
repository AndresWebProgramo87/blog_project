<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/message', function (){
    return 'hello i am andres ';
});

Route::get('/message/{name}', function ($name){
    return "hello i' am $name";
});

Route::get('/messageV2/guest/{name?}', function ($name = "usuario visitante no identificado"){
    return "hello i' am $name";
});