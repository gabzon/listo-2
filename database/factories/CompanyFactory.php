<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Company;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->text,
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'website' => $this->faker->url,
            'logo' => $this->faker->word,
            'employees' => $this->faker->numberBetween(1, 100),
            'has_branches' => $this->faker->boolean,
            'has_insurance' => $this->faker->boolean,
            'has_newsletter' => $this->faker->boolean,
            'is_active' => $this->faker->boolean,
            'founded' => $this->faker->date(),
            'defunct' => $this->faker->date(),
            'street_address' => $this->faker->streetAddress,            
            'address_info' => $this->faker->word,
            'postal_code' => $this->faker->postcode,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            'lat' => $this->faker->latitude,
            'lng' => $this->faker->longitude,
            'facebook' => $this->faker->word,
            'twitter' => $this->faker->word,
            'instagram' => $this->faker->word,
            'linkedin' => $this->faker->word,
            'snapchat' => $this->faker->word,
            'blog' => $this->faker->word,
            'skype' => $this->faker->word,
            'pinterest' => $this->faker->word,
            'youtube' => $this->faker->word,
            'status' => $this->faker->word,
            'type' => $this->faker->word,
        ];
    }
}
