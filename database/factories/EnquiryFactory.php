<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Enquiry;

class EnquiryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Enquiry::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'from_1' => $this->faker->word,
            'from_country_1' => $this->faker->word,
            'from_country_code_1' => $this->faker->word,
            'from_lat_1' => $this->faker->randomFloat(8, 0, 99.99999999),
            'from_lng_1' => $this->faker->randomFloat(8, 0, 999.99999999),
            'to_1' => $this->faker->word,
            'to_country_1' => $this->faker->word,
            'to_country_code_1' => $this->faker->word,
            'to_lat_1' => $this->faker->randomFloat(8, 0, 99.99999999),
            'to_lng_1' => $this->faker->randomFloat(8, 0, 999.99999999),
            'departure_date_1' => $this->faker->date(),
            'return_date_1' => $this->faker->date(),
            'from_2' => $this->faker->word,
            'from_country_2' => $this->faker->word,
            'from_country_code_2' => $this->faker->word,
            'from_lat_2' => $this->faker->randomFloat(8, 0, 99.99999999),
            'from_lng_2' => $this->faker->randomFloat(8, 0, 999.99999999),
            'to_2' => $this->faker->word,
            'to_country_2' => $this->faker->word,
            'to_country_code_2' => $this->faker->word,
            'to_lat_2' => $this->faker->randomFloat(8, 0, 99.99999999),
            'to_lng_2' => $this->faker->randomFloat(8, 0, 999.99999999),
            'departure_date_2' => $this->faker->date(),
            'from_3' => $this->faker->word,
            'from_country_3' => $this->faker->word,
            'from_country_code_3' => $this->faker->word,
            'to_3' => $this->faker->word,
            'to_country_3' => $this->faker->word,
            'to_country_code_3' => $this->faker->word,
            'from_lat_3' => $this->faker->randomFloat(8, 0, 99.99999999),
            'from_lng_3' => $this->faker->randomFloat(8, 0, 999.99999999),
            'to_lat_3' => $this->faker->randomFloat(8, 0, 99.99999999),
            'to_lng_3' => $this->faker->randomFloat(8, 0, 999.99999999),
            'departure_date_3' => $this->faker->date(),
            'from_4' => $this->faker->word,
            'from_country_4' => $this->faker->word,
            'from_country_code_4' => $this->faker->word,
            'to_4' => $this->faker->word,
            'to_country_4' => $this->faker->word,
            'to_country_code_4' => $this->faker->word,
            'from_lat_4' => $this->faker->randomFloat(8, 0, 99.99999999),
            'from_lng_4' => $this->faker->randomFloat(8, 0, 999.99999999),
            'to_lat_4' => $this->faker->randomFloat(8, 0, 99.99999999),
            'to_lng_4' => $this->faker->randomFloat(8, 0, 999.99999999),
            'departure_date_4' => $this->faker->date(),
            'flexibility' => $this->faker->randomElement(["Exact dates","+\/- 3 days","+\/- 1 week","+\/- 2 weeks","+\/- 1 month","Weekend","Long weekend","Best period"]),
            'travel_type' => $this->faker->randomElement(["round-trip","one-way","multi-cities"]),
            'companions' => $this->faker->word,
            'nb_adults' => $this->faker->numberBetween(-10000, 10000),
            'nb_kids' => $this->faker->numberBetween(-10000, 10000),
            'nb_babies' => $this->faker->numberBetween(-10000, 10000),
            'options' => $this->faker->randomElement(["flights","accommodation","transportation","activities"]),
            'budget_min' => $this->faker->randomFloat(0, 0, 9999999999.),
            'budget_max' => $this->faker->randomFloat(0, 0, 9999999999.),
            'comments' => $this->faker->text,
            'flight_class' => $this->faker->randomElement(["economy","premium"]),
            'meal_type' => $this->faker->word,
            'seat_type' => $this->faker->word,
            'flight_comments' => $this->faker->text,
            'accommodation_type' => $this->faker->word,
            'accommodation_rating' => $this->faker->randomElement(["1","2","3","4","5"]),
            'acommodation_comments' => $this->faker->text,
            'transportation_type' => $this->faker->word,
            'car_type' => $this->faker->word,
            'transportation_comments' => $this->faker->text,
            'contact_mode' => $this->faker->word,
            'status' => $this->faker->randomElement(["pending","open","canceled","completed","draft","expired"]),
        ];
    }
}
