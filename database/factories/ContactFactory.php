<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\File;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $image = $this->faker->image();
        $imageFile = new File($image);

        return [
            'user_id' => User::all()->random()->id,
            'status' => 'public',
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone' => $this->faker->e164PhoneNumber,
            'address' => $this->faker->address,
            'avatar' => Storage::disk('public')->putFile('avatar', $imageFile),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
