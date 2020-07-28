<?php

use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'first_name' => 'Иван',
            'last_name' => 'Туров',
            'phone' => '+375331112233',
            'address' => 'Бобруйск, ул. Минская 27-39',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'first_name' => 'Андрей',
            'last_name' => 'Ноден',
            'phone' => '+375335558899',
            'address' => 'Бобруйск, ул. Гоголя 23-90',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'first_name' => 'Сергей',
            'last_name' => 'Аксенов',
            'phone' => '+375332736353',
            'address' => 'Бобруйск, ул. Лынькова 162-48',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'first_name' => 'Дима',
            'last_name' => 'Томин',
            'phone' => '+375339383737',
            'address' => 'Бобруйск, пр-т. Строителей 39-58',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);
    }
}
