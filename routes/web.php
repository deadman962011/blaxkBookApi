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




Route::group(['prefix'=>'Admin'],function(){



Route::get('/',['uses'=>'Admincontroller@mainAdmin',
               'as'=>'Admin.MainAdmin']);

 Route::get('/Catigory',['uses'=>'Admincontroller@CatigoryGet',
               'as'=>'Admin.Catigory']);

Route::post('/Catigory',['uses'=>'Admincontroller@CatigoryPost',
               'as'=>'Admin.Catigory']); 
 





});