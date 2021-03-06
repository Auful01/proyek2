<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_junk_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->float('weight')->nullable();
            $table->float('price')->nullable();
            $table->float('total')->nullable();
            $table->enum('status', ['WAITING', 'PROSES', 'DONE'])->default('WAITING');
            $table->timestamps();
            $table->foreign('user_junk_id')->references('id')->on('junk_user');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
