<?php

namespace App\Http\Livewire\Companies;

use Livewire\Component;

class CompanyAddressForm extends Component
{
    public $company;
    public $street_address;
    public $address_info;
    public $postal_code;
    public $city;
    public $state;
    public $country;
    public $lat;
    public $lng;

    public function updateCompanyAddressInfo(){
        $this->company->update([
            'country' => $this->country,
            'street_address' => $this->street_address,
            'address_info' => $this->address_info,
            'city' => $this->city,
            'state' => $this->state,
            'postal_code' => $this->postal_code,
            'lat' => $this->lat,
            'lng' => $this->lng,
        ]);

        session()->flash('updated', 'Address successfully updated.');
    }

    public function mount($company)
    {
        $this->company = $company;
        $this->street_address = $company->street_address;
        $this->address_info = $company->address_info;
        $this->postal_code = $company->postal_code;
        $this->city = $company->city;
        $this->state = $company->state;
        $this->country = $company->country;
        $this->lat = $company->lat;
        $this->lng = $company->lng;
    }

    public function render()
    {
        return view('livewire.companies.company-address-form');
    }
}


    












