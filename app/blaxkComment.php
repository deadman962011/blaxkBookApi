<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blaxkComment extends Model
{
   protected $fillable=['BookId','EmailReview','RateReview','FullNameReview','DescReview'];
}
