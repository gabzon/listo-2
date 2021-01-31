<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enquiry extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from_1',
        'from_country_1',
        'from_country_code_1',
        'from_lat_1',
        'from_lng_1',
        'to_1',
        'to_country_1',
        'to_country_code_1',
        'to_lat_1',
        'to_lng_1',
        'departure_date_1',
        'return_date_1',
        'from_2',
        'from_country_2',
        'from_country_code_2',
        'from_lat_2',
        'from_lng_2',
        'to_2',
        'to_country_2',
        'to_country_code_2',
        'to_lat_2',
        'to_lng_2',
        'departure_date_2',
        'from_3',
        'from_country_3',
        'from_country_code_3',
        'to_3',
        'to_country_3',
        'to_country_code_3',
        'from_lat_3',
        'from_lng_3',
        'to_lat_3',
        'to_lng_3',
        'departure_date_3',
        'from_4',
        'from_country_4',
        'from_country_code_4',
        'to_4',
        'to_country_4',
        'to_country_code_4',
        'from_lat_4',
        'from_lng_4',
        'to_lat_4',
        'to_lng_4',
        'departure_date_4',
        'flexibility',
        'travel_type',
        'companions',
        'nb_adults',
        'nb_kids',
        'nb_babies',
        'options',
        'budget_min',
        'budget_max',
        'comments',
        'flight_class',
        'meal_type',
        'seat_type',
        'flight_comments',
        'accommodation_type',
        'accommodation_rating',
        'acommodation_comments',
        'transportation_type',
        'car_type',
        'transportation_comments',
        'contact_mode',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'from_lat_1' => 'decimal:8',
        'from_lng_1' => 'decimal:8',
        'to_lat_1' => 'decimal:8',
        'to_lng_1' => 'decimal:8',
        'from_lat_2' => 'decimal:8',
        'from_lng_2' => 'decimal:8',
        'to_lat_2' => 'decimal:8',
        'to_lng_2' => 'decimal:8',
        'from_lat_3' => 'decimal:8',
        'from_lng_3' => 'decimal:8',
        'to_lat_3' => 'decimal:8',
        'to_lng_3' => 'decimal:8',
        'from_lat_4' => 'decimal:8',
        'from_lng_4' => 'decimal:8',
        'to_lat_4' => 'decimal:8',
        'to_lng_4' => 'decimal:8',
        'budget_min' => 'decimal',
        'budget_max' => 'decimal',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'departure_date_1',
        'return_date_1',
        'departure_date_2',
        'departure_date_3',
        'departure_date_4',
    ];


    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
