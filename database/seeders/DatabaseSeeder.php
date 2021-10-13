<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert([
            [
                'nik' => '123456789',
                'phone' => '123456789',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => \Hash::make('password'),
                'address' => 'Malang',
                'place_of_birth' => 'Malang',
                'date_of_birth' => Carbon::now(),
                'status' => 'AKTIF',
                'role' => 'adm',
            ],
            [
                'nik' => '432156789',
                'phone' => '1234567123',
                'name' => 'penjual',
                'email' => 'penjual@gmail.com',
                'password' => \Hash::make('password'),
                'address' => 'Malang',
                'place_of_birth' => 'Malang',
                'date_of_birth' => Carbon::now(),
                'status' => 'AKTIF',
                'role' => 'slr',
            ],
            [
                'nik' => '432156989',
                'name' => 'pengepul',
                'phone' => '1234561223',
                'email' => 'pengepul@gmail.com',
                'password' => \Hash::make('password'),
                'address' => 'Malang',
                'place_of_birth' => 'Malang',
                'date_of_birth' => Carbon::now(),
                'status' => 'AKTIF',
                'role' => 'pgl',
            ],
        ]);
    }
}
