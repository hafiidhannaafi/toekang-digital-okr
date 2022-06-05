<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id'=> rand(1,10),
            'user_id'=> rand(1,10),
            'nomor_ref'=> $this->faker->randomNumber(5, true),
            'datetime'=> now(),
            'subtotal'=> $this->faker->randomNumber(5, true),
            'tax' => $this->faker->randomNumber(3, true),
            'discount'=> $this->faker->randomNumber(3, true),
            'total'=> $this->faker->randomNumber(6, true),
            'jatuh_tempo'=> now()

        ];
    }
}
