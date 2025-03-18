<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class ProfileFactory extends Factory
{
    protected $model = Profile::class; // Associate factory with Profile model

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'), // Hash passwords properly
            'bio' => $this->faker->text(100),
        ];
    }
}


