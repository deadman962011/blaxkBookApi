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
    # code...
}




    
public function fetchBooks()
{
    $books=blaxkBooks::all();
    return response()->json($books->toArray(),200);
}   

public function fetchOne($BookId)
{
    $book=blaxkBooks::find($BookId);
    $comment=blaxkComment::where('BookId','=',$book->id)->get();
    
    return response()->json(['BlaxkBook'=>$book->toArray(),'comments'=>$comment->toArray()],200);
}


public function fetchAuthors()
{
    $Author=blaxkAuthor::all();
    return response()->json($Author->toArray(),200);
}


public function fetchCatigories()
{
    $Catigory=blaxkCatigory::all();
    return response()->json($Catigory->toArray(),200);
}

public function fetchAuthorOne($AuthorId)
{
    $Author=blaxkAuthor::find($AuthorId);
    return response()->json($Author->toArray(),200);
}



}
