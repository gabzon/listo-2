<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('from_1');
            $table->string('from_country_1')->nullable();
            $table->string('from_country_code_1')->nullable();
            $table->decimal('from_lat_1', 10, 8)->nullable();
            $table->decimal('from_lng_1', 11, 8)->nullable();
            $table->string('to_1');
            $table->string('to_country_1')->nullable();
            $table->string('to_country_code_1')->nullable();
            $table->decimal('to_lat_1', 10, 8)->nullable();
            $table->decimal('to_lng_1', 11, 8)->nullable();
            $table->date('departure_date_1');
            $table->date('return_date_1')->nullable();
            $table->string('from_2')->nullable();
            $table->string('from_country_2')->nullable();
            $table->string('from_country_code_2')->nullable();
            $table->decimal('from_lat_2', 10, 8)->nullable();
            $table->decimal('from_lng_2', 11, 8)->nullable();
            $table->string('to_2')->nullable();
            $table->string('to_country_2')->nullable();
            $table->string('to_country_code_2')->nullable();
            $table->decimal('to_lat_2', 10, 8)->nullable();
            $table->decimal('to_lng_2', 11, 8)->nullable();
            $table->date('departure_date_2')->nullable();
            $table->string('from_3')->nullable();
            $table->string('from_country_3')->nullable();
            $table->string('from_country_code_3')->nullable();
            $table->string('to_3')->nullable();
            $table->string('to_country_3')->nullable();
            $table->string('to_country_code_3')->nullable();
            $table->decimal('from_lat_3', 10, 8)->nullable();
            $table->decimal('from_lng_3', 11, 8)->nullable();
            $table->decimal('to_lat_3', 10, 8)->nullable();
            $table->decimal('to_lng_3', 11, 8)->nullable();
            $table->date('departure_date_3')->nullable();
            $table->string('from_4')->nullable();
            $table->string('from_country_4')->nullable();
            $table->string('from_country_code_4')->nullable();
            $table->string('to_4')->nullable();
            $table->string('to_country_4')->nullable();
            $table->string('to_country_code_4')->nullable();
            $table->decimal('from_lat_4', 10, 8)->nullable();
            $table->decimal('from_lng_4', 11, 8)->nullable();
            $table->decimal('to_lat_4', 10, 8)->nullable();
            $table->decimal('to_lng_4', 11, 8)->nullable();
            $table->date('departure_date_4')->nullable();
            $table->enum('flexibility', ["Exact dates","+\/- 3 days","+\/- 1 week","+\/- 2 weeks","+\/- 1 month","Weekend","Long weekend","Best period"]);
            $table->enum('travel_type', ["round-trip","one-way","multi-cities"]);
            $table->string('companions');
            $table->integer('nb_adults')->nullable();
            $table->integer('nb_kids')->nullable();
            $table->integer('nb_babies')->nullable();
            $table->set('options', ["flights","accommodation","transportation","activities"])->nullable()->default("flights");
            $table->decimal('budget_min')->nullable();
            $table->decimal('budget_max')->nullable();
            $table->text('comments')->nullable();
            $table->enum('flight_class', ["economy","premium"])->nullable();
            $table->string('meal_type')->nullable();
            $table->string('seat_type')->nullable();
            $table->text('flight_comments')->nullable();
            $table->string('accommodation_type')->nullable();
            $table->set('accommodation_rating', ["1","2","3","4","5"])->nullable();
            $table->text('acommodation_comments')->nullable();
            $table->string('transportation_type')->nullable();
            $table->string('car_type')->nullable();
            $table->text('transportation_comments')->nullable();
            $table->string('contact_mode')->nullable();
            $table->enum('status', ["pending","open","canceled","completed","draft","expired"]);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enquiries');
    }
}
