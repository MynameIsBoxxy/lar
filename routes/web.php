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
/* 
Route::get('/', function () {
    $data = array('title'=>'Moderna Главная страница','description'=>'Moderna Главная страница');
     return view('index',$data);
});
Route::get('/{page}',function($page){
    $data = array('title'=>'Moderna '.$page,'description'=>'Moderna '.$page);
    $data['breadcrumbs']=Request::Get('breadcrumbs');
    return view($page,$data);
})->middleware('breadcrumbs'); */
Route::group(['middleware'=>'breadcrumbs'],function(){
    Route::get('/','MainController@index');
    Route::get('/portfolio','PortfolioController@index');
    Route::get('/blog','BlogController@index');
    Route::get('/contact','ContactController@index');
});
