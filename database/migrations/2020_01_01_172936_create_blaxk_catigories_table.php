<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlaxkCatigoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blaxk_catigories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('CatigoryName');
            $table->string('CatigoryBooksNum');
            $table->string('CatigoryIcon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blaxk_catigories');
    }
}
