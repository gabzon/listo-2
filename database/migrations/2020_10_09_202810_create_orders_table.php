<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->decimal('subtotal')->nullable();
            $table->decimal('total_amount')->nullable();
            $table->decimal('vat')->nullable();
            $table->decimal('discount_code')->nullable();
            $table->decimal('discount')->nullable();
            $table->string('method')->nullable();
            $table->text('comments')->nullable();
            $table->enum('status', ["open","canceled","paid","expired"])->nullable();
            $table->string('user_id');
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
        Schema::dropIfExists('orders');
    }
}
