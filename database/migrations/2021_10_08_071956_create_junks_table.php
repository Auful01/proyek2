<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJunksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('junks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_junk_id');
            $table->string('junk_name');
            $table->float('weight');
            $table->float('price');
            $table->timestamps();
            $table->foreign('category_junk_id')->references('id')->on('category_junks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('junks');
    }
}
