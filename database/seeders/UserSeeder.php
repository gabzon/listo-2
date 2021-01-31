<?php

namespace Database\Seeders;

use App\Actions\Fortify\CreateNewUser;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','gabriel@sevinci.com')->first();

        if (!$user) {
            $gabriel = new CreateNewUser();
            $gabriel->create([
                'name'              => 'Gabriel Zambrano',
                'email'             => 'gabriel@sevinci.com',
                'email_verified_at' => now(),                   
                'password'          => 'password',                
                'password_confirmation' => 'password',
                'remember_token' => Str::random(10),
            ]);
        }      
        
        User::factory(10)->create();
    }
}