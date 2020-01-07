<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blaxkBooks extends Model
{
   
    protected $fillable=['BookName','BookAuthor','BookCatigory','BookPic','BookDownN','BookLink','BookDesc','BookReview','BookLang','BookPagesNum','BookSize','BookRelaseDate'];

   public function Author()
   {
       return $this->belongsTo(blaxkAuthor::class,'BookAuthor');
   }

    


   
 
}