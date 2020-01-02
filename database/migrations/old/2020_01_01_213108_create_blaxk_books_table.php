<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlaxkBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blaxk_books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('BookName');
            $table->string('BookAuthor');
            $table->string('BookCatigory');
            $table->string('BookPic');
            $table->string('BookDownN');
            $table->string('BookLink');
            $table->text('BookDesc');
            $table->string('BookReview');
            $table->string('BookLang');
            $table->string('BookPagesNum');
            $table->string('BookSize');
            $table->string('BookRelaseDate');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blaxk_books');
    }
}
