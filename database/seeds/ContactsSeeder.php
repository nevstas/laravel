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
            'first_name' => 'Иван',
            'last_name' => 'Туров',
            'patronymic' => 'Викторович',
            'phone' => '+375331112233',
            'address' => 'Бобруйск, ул. Минская 27-39',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Андрей',
            'last_name' => 'Ноден',
            'patronymic' => 'Михайлович',
            'phone' => '+375335558899',
            'address' => 'Бобруйск, ул. Гоголя 23-90',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Сергей',
            'last_name' => 'Аксенов',
            'patronymic' => 'Андреевич',
            'phone' => '+375332736353',
            'address' => 'Бобруйск, ул. Лынькова 162-48',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Дима',
            'last_name' => 'Томин',
            'patronymic' => 'Олегович',
            'phone' => '+375339383737',
            'address' => 'Бобруйск, пр-т. Строителей 39-58',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);
        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Алексей',
            'last_name' => 'Белоусов',
            'patronymic' => 'Сергеевич',
            'phone' => '+375339457354',
            'address' => 'Бобруйск, ул. Минская 36-47',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Евгений',
            'last_name' => 'Суворов',
            'patronymic' => 'Михайлович',
            'phone' => '+375339574354',
            'address' => 'Бобруйск, Ул. Гагарина 25-59',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Александр',
            'last_name' => 'Крюков',
            'patronymic' => 'Сергеевич',
            'phone' => '+375339876385',
            'address' => 'Бобруйск, ул. Батова 48-46',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Федор',
            'last_name' => 'Белозёров',
            'patronymic' => 'Викторович',
            'phone' => '+375339583142',
            'address' => 'Бобруйск, пр-т. Приберезинский 35-25',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Михаил',
            'last_name' => 'Никифоров',
            'patronymic' => 'Петрович',
            'phone' => '+375339869436',
            'address' => 'Бобруйск, пр-т. Георгиевский 15-36',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Виталий',
            'last_name' => 'Гусев',
            'patronymic' => 'Игоревич',
            'phone' => '+375339473524',
            'address' => 'Бобруйск, пр-т. Строителей 63-74',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Михаил',
            'last_name' => 'Яковлев',
            'patronymic' => 'Алексеев',
            'phone' => '+375339684364',
            'address' => 'Бобруйск, ул. Пушкина 74-35',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Михаил',
            'last_name' => 'Степанов',
            'patronymic' => 'Михайлович',
            'phone' => '+375339573265',
            'address' => 'Бобруйск, ул. Интернациональная 25-74',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Николай',
            'last_name' => 'Куликов',
            'patronymic' => 'Александрович',
            'phone' => '+375339589354',
            'address' => 'Бобруйск, ул. Крылова 85-36',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Станислав',
            'last_name' => 'Ильин',
            'patronymic' => 'Петрович',
            'phone' => '+375339367435',
            'address' => 'Бобруйск, ул. Сикорского 63-25',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Арсений',
            'last_name' => 'Веселов',
            'patronymic' => 'Станиславович',
            'phone' => '+375339573543',
            'address' => 'Бобруйск, ул. Рокоссовского 14-74',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Роман',
            'last_name' => 'Чернов',
            'patronymic' => 'Сергеевич',
            'phone' => '+375339473365',
            'address' => 'Бобруйск, ул. Советская 47-36',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Алексей',
            'last_name' => 'Копылов',
            'patronymic' => 'Дмитриевич',
            'phone' => '+375339573654',
            'address' => 'Бобруйск, ул. Комарова 25-67',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Виталий',
            'last_name' => 'Овчинников',
            'patronymic' => 'Николаевич',
            'phone' => '+375339798323',
            'address' => 'Бобруйск, ул. Минская 47-63',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Дмитрий',
            'last_name' => 'Филатов',
            'patronymic' => 'Петрович',
            'phone' => '+375339437368',
            'address' => 'Бобруйск, пр-т. Строителей 25-14',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Николай',
            'last_name' => 'Горшков',
            'patronymic' => 'Владимирович',
            'phone' => '+375339879045',
            'address' => 'Бобруйск, пр-т. Георгиевский 25-58',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Станислав',
            'last_name' => 'Жданов',
            'patronymic' => 'Сергеевич',
            'phone' => '+375339451680',
            'address' => 'Бобруйск, ул. Ленина 69-70',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);

        DB::table('contacts')->insert([
            'user_id' => 1,
            'status' => 'public',
            'first_name' => 'Евгений',
            'last_name' => 'Гришин',
            'patronymic' => 'Петрович',
            'phone' => '+375339463765',
            'address' => 'Бобруйск, пр-т. Приберезинский 47-63',
            'avatar' => 'avatar/no-image.jpg',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
        ]);
    }
}
