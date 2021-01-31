<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();          
            
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('username')->unique()->nullable();                            
            $table->string('profession')->nullable();
            $table->text('biography')->nullable();

            $table->string('mobile')->nullable()->unique();            
            $table->string('phone')->nullable()->unique();            
            $table->timestamp('mobile_verified_at')->nullable();           
            $table->timestamp('phone_verified_at')->nullable();           
            
            $table->boolean('whatsapp')->default(0);
            $table->boolean('fb_messenger')->default(0);            
            $table->boolean('ig_messages')->default(0);            
            $table->boolean('viber')->default(0);
            $table->boolean('wechat')->default(0);
            $table->boolean('telegram')->default(0);        
            $table->boolean('call')->default(0);        
            $table->boolean('sms')->default(0); 

            $table->string('street_address')->nullable();            
            $table->string('address_info')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->decimal('lat', 10, 8)->nullable();
            $table->decimal('lng', 11, 8)->nullable();

            $table->string('facebook')->nullable()->unique();
            $table->string('linkedin')->nullable()->unique();
            $table->string('instagram')->nullable()->unique();
            $table->string('youtube')->nullable()->unique();
            $table->string('tiktok')->nullable()->unique();
            $table->string('twitter')->nullable()->unique();
            $table->string('skype')->nullable()->unique();
            $table->string('snapchat')->nullable()->unique();
            $table->string('pinterest')->nullable()->unique();
            
            $table->string('passport1')->nullable();
            $table->string('passport2')->nullable();
            $table->string('passport3')->nullable();
            $table->string('passport4')->nullable();  
            
            $table->date('passport1_expiry')->nullable();
            $table->date('passport2_expiry')->nullable();
            $table->date('passport3_expiry')->nullable();
            $table->date('passport4_expiry')->nullable();  

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
        Schema::dropIfExists('profiles');
    }
}
