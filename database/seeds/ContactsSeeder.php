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
            'phone' => '+1-646-357-4869',
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
            'phone' => '+1-376-372-3726',
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
            'phone' => '+1-362-827-3324',
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
            'phone' => '+1-373-836-8262',
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
            'phone' => '+1-262-262-2327',
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
            'phone' => '+1-373-928-2637',
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
            'phone' => '+1-282-933-6365',
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
            'phone' => '+1-937-726-2726',
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
            'phone' => '+1-837-735-9273',
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
            'phone' => '+1-364-936-9363',
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
            'phone' => '+1-265-836-8376',
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
            'phone' => '+1-371-940-3674',
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
            'phone' => '+1-373-947-7464',
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
            'phone' => '+1-374-936-8374',
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
            'phone' => '+1-375-957-9579',
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
            'phone' => '+1-749-947-9848',
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
            'phone' => '+1-467-984-4746',
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
            'phone' => '+1-374-974-8373',
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
            'phone' => '+1-847-938-847',
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
            'phone' => '+1-746-937-9377',
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
            'phone' => '+1-837-926-9375',
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
            'phone' => '+1-837-837-7364',
            'address' => 'New York, Eldridge Street 47-63',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);
    }
}
