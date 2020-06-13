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


Route::get('/test',function(){
    return 'Hello,World';
});

//示範怎麼進行push
//commit&push

//示範怎麼進行push2
//示範怎麼進行push3

//撰寫新功能A
//撰寫新功能B
