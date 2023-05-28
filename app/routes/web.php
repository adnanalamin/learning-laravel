<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo2/{name}',function($name){
    echo $name;
});

Route::any('/test', function(){
    echo("Ki koro");
});

Route::get('/demo/{name}/{id}', function($name,$id=null){
   $data = compact('name','id');
   return view('demo')->with($data);
});

Route::get('/home/{name?}', function($name = null){
    $data1 = compact('name');
    return view ('home')->with($data1);
});