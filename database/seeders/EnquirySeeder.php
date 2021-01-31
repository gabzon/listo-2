<?php

namespace Database\Seeders;

use App\Enquiry;
use Illuminate\Database\Seeder;

class EnquirySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Enquiry::factory()->count(5)->create();
    }
}
