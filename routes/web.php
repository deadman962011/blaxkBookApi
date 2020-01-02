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
 

Route::get('/Author',['uses'=>'AdminController@AuthorGet',
                       'as'=>'Admin.Author']);



Route::post('/Author',['uses'=>'AdminController@AuthorPost',
                        'as'=>'Admin.Author']);

Route::get('/Book',['uses'=>'AdminController@BookGet',
                    'as'=>'Admin.Book']);

Route::get('/Book/Add',['uses'=>'AdminController@BookAddGet',
                       'as'=>'Admin.AddBook']);

Route::post('/Book/Add',['uses'=>'AdminController@BookAddPost',
                          'as'=>'Admin.AddBook']);


Route::get('/Book/Del',['uses'=>'AdminController@BookDelGet',
                          'as'=>'Admin.DelBook']);


Route::get('/Book/Del/{bookId}',['uses'=>'AdminController@BookDelParam',
                                 'as'=>'Admin.DelBook']);


Route::get('/Book/Update',['uses'=>'AdminController@BookUpdateGet',
                          'as'=>'Admin.UpdateBook']);


Route::get('/Book/Update/{bookId}',['uses'=>'AdminController@BookUpdatePramGet',
                                    'as'=>'Admin.UpdateBookParam']);

Route::post('/Book/Update/{bookId}',['uses'=>'AdminController@BookUpdateParamPost',
                                     'as'=>'Admin.UpdateBookParam']);



});


