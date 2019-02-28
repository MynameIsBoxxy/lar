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
    /* return view('welcome'); */
    $data = array('title'=>'Moderna Главная страница','description'=>'Moderna Главная страница');
     return view('index',$data);
});
Route::get('/{page}',function($page){
    $data = array('title'=>'Moderna '.$page,'description'=>'Moderna '.$page);
    return view($page,$data);
});