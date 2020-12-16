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
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'James',
            'last_name' => 'Smith',
            'phone' => '+16463574869',
            'address' => 'New York, Chambers Street 27-39',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'John',
            'last_name' => 'Johnson',
            'phone' => '+13763723726',
            'address' => 'New York, Maiden Lane 23-90',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Robert',
            'last_name' => 'Williams',
            'phone' => '+13628273324',
            'address' => 'New York, Plaza Lafayette 162-48',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Michael',
            'last_name' => 'Brown',
            'phone' => '+13738368262',
            'address' => 'New York, Dyckman Street 39-58',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);
        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'William',
            'last_name' => 'Jones',
            'phone' => '+12622622327',
            'address' => 'New York, Eldridge Street 36-47',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'David',
            'last_name' => 'Garcia',
            'phone' => '+13739282637',
            'address' => 'New York, Stanton Street 25-59',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Richard',
            'last_name' => 'Miller',
            'phone' => '+12829336365',
            'address' => 'New York, Forsyth Street 48-46',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Joseph',
            'last_name' => 'Davis',
            'phone' => '+19377262726',
            'address' => 'New York, Theatre Alley 35-25',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Thomas',
            'last_name' => 'Rodriguez',
            'phone' => '+18377359273',
            'address' => 'New York, Great Jones Street 15-36',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Charles',
            'last_name' => 'Martinez',
            'phone' => '+13649369363',
            'address' => 'New York, Varick Street 63-74',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Christopher',
            'last_name' => 'Lopez',
            'phone' => '+12658368376',
            'address' => 'New York, Houston Street 74-35',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Daniel',
            'last_name' => 'Hernandez',
            'phone' => '+13719403674',
            'address' => 'New York, Jones Street 25-74',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Matthew',
            'last_name' => 'Gonzalez',
            'phone' => '+13739477464',
            'address' => 'New York, Allen Street 85-36',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Anthony',
            'last_name' => 'Wilson',
            'phone' => '+13749368374',
            'address' => 'New York, Lenox Avenue 63-25',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Donald',
            'last_name' => 'Anderson',
            'phone' => '+13759579579',
            'address' => 'New York, Whitehall Street 14-74',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Mark',
            'last_name' => 'Thomas',
            'phone' => '+17499479848',
            'address' => 'New York, Bleecker Street 47-36',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Paul',
            'last_name' => 'Taylor',
            'phone' => '+14679844746',
            'address' => 'New York, Centre Market Place 25-67',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Steven',
            'last_name' => 'Moore',
            'phone' => '+13749748373',
            'address' => 'New York, Orchard Street 47-63',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Andrew',
            'last_name' => 'Jackson',
            'phone' => '+18479388347',
            'address' => 'New York, Cabrini Boulevard 25-14',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Kenneth',
            'last_name' => 'Martin',
            'phone' => '+17469379377',
            'address' => 'New York, Marketfield Street 25-58',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Joshua',
            'last_name' => 'Lee',
            'phone' => '+18379269375',
            'address' => 'New York, Shubert Alley 69-70',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Kevin',
            'last_name' => 'Perez',
            'phone' => '+18378377364',
            'address' => 'New York, Eldridge Street 47-63',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);
    }
}
