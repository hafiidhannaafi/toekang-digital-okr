<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = ['cold', 'warm', 'hot', 'expired'];
        $approve = ['approved','pending','declined'];
        return [
            'user_id' => rand(0,2),
            'name' => $this->faker->name(),
            'address'=> $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'fax'=> $this->faker->phoneNumber(),
            'website'=> $this->faker->domainName(),
            'status'=> $status[rand(0,2)],
            'note'=> $this->faker->sentence(3),
            'approval' => $approve[rand(0,2)],
            'is_order' => 0

        ];
    }
}
