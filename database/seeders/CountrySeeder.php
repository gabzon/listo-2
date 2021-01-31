<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents('https://restcountries.eu/rest/v2/all');

        $data = json_decode($json);
        foreach ($data as $key => $country) {
            Country::create([
                'name'              => $country->name,
                'slug'              => Str::slug($country->name, '-'),
                'flag'              => $country->flag,
                'domain'            => $country->topLevelDomain[0],
                'alpha_2_Code'      => $country->alpha2Code,
                'alpha_3_Code'      => $country->alpha3Code,
                'phone_code'        => $country->callingCodes[0],
                'capital'           => $country->capital,
                'region'            => $country->region,
                'subregion'         => $country->subregion,
                'currency_code'     => $country->currencies[0]->code,
                'currency_name'     => $country->currencies[0]->name,
                'currency_symbol'   => $country->currencies[0]->symbol,
            ]);            
        }
    }
}