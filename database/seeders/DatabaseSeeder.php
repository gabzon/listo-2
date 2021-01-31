<?php

namespace Database\Seeders;

use App\View\Components\Categories\CategoryList;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CountrySeeder::class,
            CategorySeeder::class,
            CompanySeeder::class,
            ActivitySeeder::class,
        ]);
    }
}
