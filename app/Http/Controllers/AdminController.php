<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blaxkCatigory;
use App\blaxkAuthor;
use App\blaxkBooks;
use App\blaxkComment;



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





















public function BookAddGet()
{

    $catigory=blaxkCatigory::all();
    $Author=blaxkAuthor::all();
    return view('Admin.BookAdd',['catigories'=>$catigory,'Authors'=>$Author]);
}

public function BookAddPost(Request $request)
{
   

$default0=0;

$book=new blaxkBooks([
    'BookName'=>$request->input('BookNameI'),
    'BookAuthor'=>$request->input('BookAuthorI'),
    'BookCatigory'=>$request->input('BookCatigoryI'),
    'BookPic'=>$request->input('BookPicI'),
    'BookDownN'=>$default0,
    'BookLink'=>$request->input('BookLinkI'),
    'BookDesc'=>$request->input('BookDescI'),
    'BookReview'=>$request->input('BookReviewI'),
    'BookLang'=>$request->input('BookLangI'),
    'BookPagesNum'=>$request->input('BookPagesNumI'),
    'BookSize'=>$request->input('BookSizeI'),
    'BookRelaseDate'=>$request->input('BookRelaseDateI'),
]);

$book->save();



/** +1 FOR Catigory BOOKSnUM */
$catigory=blaxkCatigory::find($request->input('BookCatigoryI'));
$plus1=$catigory->CatigoryBooksNum+1;
$catigory->update(['CatigoryBooksNum'=>$plus1]);

/**END */



/** +1 FOR AUTHOR BOOKSNUM */
$Author=blaxkAuthor::find($request->input('BookAuthorI'));
$plus1A=$Author->AuthorBooksNum+1;
$Author->update(['AuthorBooksNum'=>$plus1A]);

/**END */

return redirect()->back();

}





public function BookDelGet()
{
    $book=blaxkBooks::all();

    return view('Admin.BookDel',['Books'=>$book]);
}





public function BookDelParam($bookId)
{

 
  $book=blaxkBooks::find($bookId);
 



 /**delete comments */
  $comment=blaxkComment::where('bookId','=',$bookId)->orderBy('id');
  $comment->delete();


  /**-1 Catigory booksNum */
  $catigory=blaxkCatigory::find($book->BookCatigory);
  $catigory->update(['CatigoryBooksNum'=>$catigory->CatigoryBooksNum-1]);

  /**-1 Author booksNum */
  $author=blaxkAuthor::find($book->BookAuthor);
  $author->update(['AuthorBooksNum'=>$author->AuthorBooksNum-1]);

 /**delete book */  
  $book->delete();

}



public function BookUpdateGet()
{
    $books=blaxkBooks::all();
    return view('Admin.BookUpdate',['Books'=>$books]);
}


public function BookUpdatePramGet($BookId)
{
    $book=blaxkBooks::find($BookId);
    $catigory=blaxkCatigory::all();
    $Author=blaxkAuthor::all();
    return view('Admin.BookUpdateForm',['book'=>$book,'Catigories'=>$catigory,'Authors'=>$Author]);


}



public function BookUpdateParamPost(Request $request,$bookId)
{

    $book=blaxkBooks::find($bookId);
    $book->update([

    'BookName'=>$request->input('BookNameI'),
    'BookAuthor'=>$request->input('BookAuthorI'),
    'BookCatigory'=>$request->input('BookCatigoryI'),
    'BookPic'=>$request->input('BookPicI'),
    'BookDownN'=>$book->BookDownN,
    'BookLink'=>$request->input('BookLinkI'),
    'BookDesc'=>$request->input('BookDescI'),
    'BookReview'=>$request->input('BookReviewI'),
    'BookLang'=>$request->input('BookLangI'),
    'BookPagesNum'=>$request->input('BookPagesNumI'),
    'BookSize'=>$request->input('BookSizeI'),
    'BookRelaseDate'=>$request->input('BookRelaseDateI')
    ]);

    return redirect()->back();

    
}













}
