<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> rand(1,50),
            'customer_id'=> rand(1,50),
            'name'=> $this->faker->name(),
            'email'=> $this->faker->unique()->safeEmail(),
            'jabatan'=> $this->faker->jobTitle(),
            'phone'=> $this->faker->phoneNumber(),
            'isprimary' => 0
        ];
    }
}
