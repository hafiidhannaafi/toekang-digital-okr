<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FollowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $media = ['WhatsApp', 'Email', 'Phone','Visit'];
        return [
            'customer_id'=>rand(1,10),
            'user_id'=>rand(1,10),
            'datetime'=> now(),
            'result'=> $this->faker->sentence(3),
            'media'=> $media[rand(0,3)],
            'next_followup'=> now()
        ];
    }
}
