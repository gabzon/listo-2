<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Order;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subtotal' => $this->faker->randomFloat(0, 0, 9999999999.),
            'total_amount' => $this->faker->randomFloat(0, 0, 9999999999.),
            'vat' => $this->faker->randomFloat(0, 0, 9999999999.),
            'discount_code' => $this->faker->randomFloat(0, 0, 9999999999.),
            'discount' => $this->faker->randomFloat(0, 0, 9999999999.),
            'method' => $this->faker->word,
            'comments' => $this->faker->text,
            'status' => $this->faker->randomElement(["open","canceled","paid","expired"]),
            'user_id' => $this->faker->word,
        ];
    }
}
