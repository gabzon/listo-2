<?php

namespace Database\Seeders;

use App\Challenge;
use Illuminate\Database\Seeder;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Challenge::factory()->count(5)->create();
    }
}
