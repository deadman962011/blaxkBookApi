<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\blaxkBooks;
use App\blaxkAuthor;
use App\blaxkCatigory;
use App\blaxkComment;

class ApiController extends Controller
{


public function MainApi()
{
    /**Books */
    $books=blaxkBooks::all();
    $books2=$books->load('Author');

    /**Catigories */
    $Catigory=blaxkCatigory::all();


    /**Authors */
    $Authors=blaxkAuthor::all();


    return response(['Books'=>$books2,'Catigories'=>$Catigory,'Authors'=>$Authors],200);
}




    
public function fetchBooks()
{
    $books=blaxkBooks::all();
    $books2=$books->load('Author');

    return response(['Books'=>$books2],200);

}   




public function fetchOne($BookId)
{
    
    $book=blaxkBooks::find($BookId);
    $Author=blaxkAuthor::find($book->BookAuthor);
    $Catigory=blaxkCatigory::find($book->BookCatigory);
    $catigoryAll = blaxkCatigory::all()->take('11');
    $AuthorAll=blaxkAuthor::all()->take('12');
    $SameCatigory=blaxkBooks::where('BookCatigory','=',$book->BookCatigory)->get()->take('4');
    $SameAuthor=blaxkBooks::where('BookAuthor','=',$book->BookAuthor)->get()->take('4');
    
    $commentAll=blaxkComment::all()->count();
    if($commentAll > 0){

        $comment=blaxkComment::where('BookId','=',$book->id)->get();
        return response(['Book'=>$book,'Author'=>$Author,'Catigory'=>$Catigory,'Comment'=>$comment,'AuthorAll'=>$AuthorAll,'CatigoryAll'=>$catigoryAll,'SameAuthor'=>$SameAuthor,'SameCatigory'=>$SameCatigory],200);
    }
    
    return response(['Book'=>$book,'Author'=>$Author,'Catigory'=>$Catigory,'AuthorAll'=>$AuthorAll,'CatigoryAll'=>$catigoryAll,'SameAuthor'=>$SameAuthor,'SameCatigory'=>$SameCatigory],200);
    
    
}



public function fetchOnePost(Request $request){

    $comment=new blaxkComment(['BookId'=>$request->get('bookId'),
                               'EmailReview'=>$request->get('reviewEmail'),
                               'RateReview'=>$request->get('reviewRate'),
                               'FullNameReview'=>$request->get('reviewFullName'),
                               'DescReview'=>$request->get('reviewDesc')
    ]);
    $comment->save();



    return response($comment,200);
 


    
}






public function fetchAuthors()
{
    $Author=blaxkAuthor::all();
    return response()->json($Author->toArray(),200);
}


public function fetchAuthorOne($AuthorId)
{
    $Author=blaxkBooks::where("BookAuthor",'=',$AuthorId)->get();
    return response()->json($Author->toArray(),200);
}



public function fetchCatigories()
{
    $Catigory=blaxkCatigory::all();
    return response()->json($Catigory->toArray(),200);
}


public function fetchCatigoryOne($CatigoryId)
{
    $catigory=blaxkBooks::where("BookCatigory",'=',$CatigoryId)->get();

    return response()->json($catigory,200);
}





























}


















