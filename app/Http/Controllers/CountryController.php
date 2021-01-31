<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\CreateCountryRequest;
use App\Http\Requests\UpdateCountryRequest;

class CountryController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search =request()->query('search');
        if ($search) {
            $countries = Country::where('name','LIKE', "%{$search}%")->paginate(10);
        }else{
            $countries = Country::paginate(10);
        }
        return view('countries.index')->with('countries', $countries);        
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCountryRequest $request)    
    {        

        Country::create([
            'name'  => $request->name,
            'slug'  => Str::slug($request->name, '-'),
            'flag'  => $request->flag,            
            'shortname' => $request->shortname,            
            'domain' => $request->domain,
            'alpha_2_Code' => $request->alpha_2_Code,
            'alpha_3_Code' => $request->alpha_3_Code,
            'phone_code' => $request->phone_code,
            'capital' => $request->capital,
            'region' => $request->region,
            'subregion' => $request->subregion,
            'currency_code' => $request->currency_code,
            'currency_name' => $request->currency_name,
            'currency_symbol' => $request->currency_symbol,                    
        ]);

        session()->flash('success', 'Country added successfully');

        return redirect(route('countries.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {

        return view('countries.show')->with('country', $country);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('countries.edit')->with('country', $country);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        $country->update([
            'name'  => $request->name,
            'slug'  => Str::slug($request->name, '-'),
            'flag'  => $request->flag,            
            'shortname' => $request->shortname,            
            'domain' => $request->domain,
            'alpha_2_Code' => $request->alpha_2_Code,
            'alpha_3_Code' => $request->alpha_3_Code,
            'phone_code' => $request->phone_code,
            'capital' => $request->capital,
            'region' => $request->region,
            'subregion' => $request->subregion,
            'currency_code' => $request->currency_code,
            'currency_name' => $request->currency_name,
            'currency_symbol' => $request->currency_symbol,  
        ]);
        
        session()->flash('success','Country updated successfully');
        
        return redirect(route('countries.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();

        session()->flash('success', 'Country deleted successfully');

        return redirect(route('countries.index'));
    }
}

