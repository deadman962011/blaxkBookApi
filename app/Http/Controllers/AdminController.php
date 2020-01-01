<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blaxkCatigory;
use App\blaxkAuthor;



class AdminController extends Controller
{
   
public function mainAdmin()
{
    return view('Admin.MainAdmin');
}


public function CatigoryGet()
{

   $catigory = blaxkCatigory::all();


    return view('Admin.Catigory',['Catigories'=>$catigory]);
}


public function CatigoryPost(Request $requset)
{

    if($requset->input('AddSub')){
    $default0=0;
    $catigory= new blaxkCatigory([
        'CatigoryName'=>$requset->input('CatigoryNameI'),
        'CatigoryIcon'=>$requset->input('CatigoryIconI'),
        'CatigoryBooksNum'=>$default0
    ]);

    $catigory->save();
    return redirect()->back();
    }

if($requset->input('DelSub')){
    $catigory=blaxkCatigory::find($requset->input('DelSub'));
    $catigory->delete();

    return redirect()->back();
}}



public function AuthorGet()
{
    $Authors=blaxkAuthor::all();
    return view('Admin.Author',['Authors'=>$Authors]);
}


public function AuthorPost(Request $requset)
{

    if($requset->input('AddSub')){
    $default0=0;
    $Authors= new blaxkAuthor([
      'AuthorName'=>$requset->input('AuthorNameI'),
      'AuthorPic'=>$requset->input('AuthorPicI'),
      'AuthorBooksNum'=>$default0,
      'AuthorDesc'=>$requset->input('AuthorDescI'),
    ]);
    $Authors->save();
    return redirect()->back();


    }


    if($requset->input('DelSub')){
     $Authors= blaxkAuthor::find($requset->input('DelSub'));
     $Authors->delete();
     return redirect()->back();

    }

}










}
