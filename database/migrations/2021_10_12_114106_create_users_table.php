<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->text('address');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->enum('status', ['AKTIF', "NONAKTIF"])->default('NONAKTIF');
            $table->enum('role', ['adm', 'pgl', 'slr'])->default('slr');
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
        Schema::dropIfExists('admins');
    }
}
