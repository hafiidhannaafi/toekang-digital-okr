<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DetailinvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'invoice_id'=>rand(1,10),
            // 'product_id'=> null,
            'qty'=> rand(1,3),
            'price'=> $this->faker->randomNumber(5, true),
            'discount'=> $this->faker->randomNumber(4, true),
            'subtotal'=> $this->faker->randomNumber(6, true),

        ];
    }
}
