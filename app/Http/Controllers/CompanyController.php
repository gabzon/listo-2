<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Country;
use App\Models\Category;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Http\Request;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request()->query('search');
        if ($search) {
            $company = Company::where('name', 'LIKE', "%{$search}%")->simplePaginate(10);
        } else {
            $company = Company::simplePaginate(10);
        }

        if (Company::onlyTrashed()->get()->count() > 0) {
            $trashed_button = true;
        }

        return view('companies.index')
            ->with('companies', $company)
            ->with('title', 'Agencies')
            ->with('trashed_button', $trashed_button ?? false);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create')
            ->with('categories', Category::all())
            ->with('countries', Country::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        //dd($request->all());
        $agency = Company::create([
            'name'              => $request->name,
            'description'       => $request->description,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'website'           => $request->website,

            'street'            => $request->street,
            'street_number'     => $request->street_number,
            'address_info'      => $request->address_info,
            'location'          => $request->location,
            'postal_code'       => $request->postal_code,
            'state'             => $request->state,
            'country'           => $request->country,
            'lat'               => $request->lat,
            'lng'               => $request->lng,

            'employees'         => $request->employees,
            'has_branches'      => $request->has_branches   === 'on' ? true : false,
            'has_insurance'     => $request->has_insurance  === 'on' ? true : false,
            'has_newsletter'    => $request->has_newsletter === 'on' ? true : false,
            'founded'           => $request->founded,
            'defunct'           => $request->defunct,

            'facebook'          => $request->facebook,
            'twitter'           => $request->twitter,
            'instagram'         => $request->instagram,
            'linkedin'          => $request->linkedin,
            'snapchat'          => $request->snapchat,
            'blog'              => $request->blog,
            'skype'             => $request->skype,
            'pinterest'         => $request->pinterest,
            'youtube'           => $request->youtube,

            'status'            => $request->status,
            //'agency_type'       => isset($request->agency_type) ? implode(' | ', $request->agency_type) : '',
        ]);

        if ($request->categories) {
            $agency->categories()->attach($request->categories);
        }
        if ($request->countries) {
            $agency->countries()->attach($request->countries);
        }

        session()->flash('success', 'Travel Agency added successfully');

        return redirect(route('companies.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('companies.show')->with('agency', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit')
            ->with('company', $company)
            ->with('categories', Category::all())
            ->with('countries', Country::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //dd($request->all());
        $company->update([
            'name'              => $request->name,
            'description'       => $request->description,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'website'           => $request->website,

            'street'            => $request->street,
            'street_number'     => $request->street_number,
            'address_info'      => $request->address_info,
            'postal_code'       => $request->postal_code,
            'location'          => $request->location,
            'state'             => $request->state,
            'country'           => $request->country,
            'lat'               => $request->lat,
            'lng'               => $request->lng,

            'employees'         => $request->employees,
            'has_branches'      => $request->has_branches   === 'on' ? true : false,
            'has_insurance'     => $request->has_insurance  === 'on' ? true : false,
            'has_newsletter'    => $request->has_newsletter === 'on' ? true : false,
            'founded'           => $request->founded,
            'defunct'           => $request->defunct,

            'facebook'          => $request->facebook,
            'twitter'           => $request->twitter,
            'instagram'         => $request->instagram,
            'linkedin'          => $request->linkedin,
            'snapchat'          => $request->snapchat,
            'blog'              => $request->blog,
            'skype'             => $request->skype,
            'pinterest'         => $request->pinterest,
            'youtube'           => $request->youtube,

            'status'            => $request->status,
            'type'              => $request->has('type') ? implode(',', $request->type) : '',
        ]);

        if ($request->categories) {
            $company->categories()->sync($request->categories);
        }
        if ($request->countries) {
            $company->countries()->sync($request->countries);
        }

        session()->flash('success', 'Agency updated successfully');

        return redirect(route('companies.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        if ($company->trashed()) {
            $company->forceDelete();
            session()->flash('success', 'Company successfully trashed');
        } else {
            $company->delete();
            session()->flash('success', 'Company successfully deleted');
        }

        return redirect(route('companies.index'));
    }

    public function trashed()
    {        
        $search =request()->query('search');
        if ($search) {
            $trashed = Company::onlyTrashed('name','LIKE', "%{$search}%")->get();
        }else{
            $trashed = Company::onlyTrashed()->get();            
        }
        return view('companies.trashed')->with('companies', $trashed);
    }

    public function show_trashed($id)
    {
        $agency = Company::withTrashed()->find($id);
        return view('companies.show')->with('companies', $agency);

    }

    public function restore(Company $company)
    {
        //$agency = Company::withTrashed()->find($id);
        $company->restore();

        session()->flash('success','Company restored successfully');

        return redirect(route('companies.index'));
    }
}