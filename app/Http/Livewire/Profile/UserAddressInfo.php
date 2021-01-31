<?php

namespace App\Http\Livewire\Profile;
use App\Models\Profile;
use Livewire\Component;

class UserAddressInfo extends Component
{
    public int $uid;
    public Profile $profile;
    public $country;
    public $street_address;
    public $address_info;
    public $city;
    public $state;
    public $postal_code;
    public $lat;
    public $lng;

    public function updateUserAddressInfo()
    {
        
        $this->profile->update([
            'country' => $this->country,
            'street_address' => $this->street_address,
            'address_info' => $this->address_info,
            'city' => $this->city,
            'state' => $this->state,
            'postal_code' => $this->postal_code,
            'lat' => $this->lat,
            'lng' => $this->lng,
        ]);

        session()->flash('success', 'Address successfully updated.');
    }

    public function mount(int $uid)
    {
        $this->uid = $uid;
        
        $this->profile = Profile::firstOrCreate([
            'user_id' => $this->uid, 
        ]);

        $this->country          = $this->profile->country;
        $this->street_address   = $this->profile->street_address;
        $this->address_info     = $this->profile->address_info;
        $this->city             = $this->profile->city;
        $this->state            = $this->profile->state;
        $this->postal_code      = $this->profile->postal_code;        
    }

    public function render()
    {
        return view('livewire.profile.user-address-info');
    }
}









