<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blaxkAuthor extends Model
{
    protected $fillable=['AuthorName','AuthorPic','AuthorBooksNum','AuthorDesc'];
}
