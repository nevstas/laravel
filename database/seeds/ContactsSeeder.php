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
            'name' => 'Иван',
            'phone' => '+375331112233',
            'address' => 'Бобруйск, ул. Минская 27-39',
        ]);

        DB::table('contacts')->insert([
            'name' => 'Андрей',
            'phone' => '+375335558899',
            'address' => 'Бобруйск, ул. Гогля 23-90',
        ]);

        DB::table('contacts')->insert([
            'name' => 'Сергей',
            'phone' => '+375332736353',
            'address' => 'Бобруйск, ул. Лынькова 162-48',
        ]);

        DB::table('contacts')->insert([
            'name' => 'Дима',
            'phone' => '+375339383737',
            'address' => 'Бобруйск, пр-т. Строителей 39-58',
        ]);
    }
}
