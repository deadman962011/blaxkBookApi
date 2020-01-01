<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlaxkAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blaxk_authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('AuthorName');
            $table->string('AuthorPic');
            $table->string('AuthorDesc');
            $table->string('AuthorBooksNum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blaxk_authors');
    }
}
