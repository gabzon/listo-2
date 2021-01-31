<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Country;

class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Country::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'domain' => $this->faker->word,
            'alpha_2_Code' => $this->faker->word,
            'alpha_3_Code' => $this->faker->word,
            'phone_code' => $this->faker->word,
            'capital' => $this->faker->word,
            'region' => $this->faker->word,
            'subregion' => $this->faker->word,
            'currency_code' => $this->faker->word,
            'currency_name' => $this->faker->word,
            'currency_symbol' => $this->faker->word,
            'flag' => $this->faker->word,
        ];
    }
}
