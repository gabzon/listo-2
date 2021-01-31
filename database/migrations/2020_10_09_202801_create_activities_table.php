<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->string('season')->nullable();
            $table->string('context')->nullable();
            $table->boolean('is_indoor')->nullable();
            $table->boolean('is_outdoor')->nullable();
            $table->boolean('is_paid')->nullable();
            $table->boolean('is_free')->nullable();
            $table->boolean('training')->nullable();
            $table->string('companion')->nullable();
            $table->string('day_period')->nullable();
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
        Schema::dropIfExists('activities');
    }
}
