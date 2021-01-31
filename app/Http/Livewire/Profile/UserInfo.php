<?php

namespace App\Http\Livewire\Profile;
use App\Models\Profile;
use App\Models\User;
use Livewire\Component;

class UserInfo extends Component
{
    public $user;
    public $profile;
    public $username;
    public $birthday;
    public $gender;
    public $profession;
    public $biography;
    public $passport1;
    public $passport2;
    public $passport3;
    public $passport4;
    public $passport1_expiry;
    public $passport2_expiry;
    public $passport3_expiry;
    public $passport4_expiry;

    public function mount($user)
    {
        $this->user = $user;
        
        $this->profile = Profile::firstOrCreate([
            'user_id' => $this->user->id, 
        ]);

        $this->username         = $this->profile->username;
        $this->birthday         = $this->user->birthday;
        $this->gender           = $this->user->gender;
        $this->profession       = $this->profile->profession;
        $this->biography        = $this->profile->biography;
        $this->passport1        = $this->profile->passport1;
        $this->passport2        = $this->profile->passport2;
        $this->passport3        = $this->profile->passport3;
        $this->passport4        = $this->profile->passport4;
        $this->passport1_expiry = $this->profile->passport1_expiry;
        $this->passport2_expiry = $this->profile->passport2_expiry;
        $this->passport3_expiry = $this->profile->passport3_expiry;
        $this->passport4_expiry = $this->profile->passport4_expiry;
    }

    public function updateUserInfo()
    {
        

        $this->profile->update([
            'username'         => $this->username,            
            'profession'       => $this->profession,
            'biography'        => $this->biography,
            'passport1'        => $this->passport1,
            'passport2'        => $this->passport2,
            'passport3'        => $this->passport3,
            'passport4'        => $this->passport4,
            'passport1_expiry' => $this->passport1_expiry,
            'passport2_expiry' => $this->passport2_expiry,
            'passport3_expiry' => $this->passport3_expiry,
            'passport4_expiry' => $this->passport4_expiry,
        ]);
        
        
        $this->user->birthday = $this->birthday;
        $this->user->gender = $this->gender;
        $this->user->save();        

        session()->flash('success', 'User information updated successfully.');
    }
    
    public function render()
    {
        return view('livewire.profile.user-info');
    }
}
