<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableJunkMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('junk_sellers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('weight')->nullable();
            $table->double('price')->nullable();
            $table->unsignedBigInteger('category_junk_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('province');
            $table->string('regency');
            $table->string('district');
            $table->string('village');
            $table->string('address');
            $table->foreign('category_junk_id')->references('id')->on('category_junks');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
