<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Alex',
            'email' => 'alex@mail.ru',
            'password' => '$2y$10$fL1aXB.s0Rh9iu8KqWX2V.V6CXoZKbKyfwv/2Ksshor5X9RQEo.Kq',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);
    }
}
