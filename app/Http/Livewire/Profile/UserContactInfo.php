<?php

namespace App\Http\Livewire\Profile;

use App\Models\Profile;
use App\Models\User;
use Livewire\Component;

class UserContactInfo extends Component
{
    public User $user;
    public Profile $profile;
    public $mobile;
    public $phone;
    public $whatsapp;
    public $viber;
    public $wechat;
    public $telegram;
    public $fb_messenger;
    public $ig_messages;
    public $call;
    public $sms;
    public $facebook;
    public $linkedin;
    public $instagram;
    public $youtube;
    public $tiktok;
    public $skype;
    public $snapchat;
    public $pinterest;


    public function mount(User $user)
    {
        $this->user =  $user;
        $this->profile = Profile::firstOrCreate([
            'user_id'   => $this->user->id,
        ]);

        $this->mobile       = $this->profile->mobile;
        $this->phone        = $this->profile->phone;
        $this->whatsapp     = $this->profile->whatsapp;
        $this->viber        = $this->profile->viber;
        $this->wechat       = $this->profile->wechat;
        $this->telegram     = $this->profile->telegram;
        $this->fb_messenger = $this->profile->fb_messenger;
        $this->ig_messages  = $this->profile->ig_messages;
        $this->call         = $this->profile->call;
        $this->sms          = $this->profile->sms;
        $this->facebook     = $this->profile->facebook;
        $this->linkedin     = $this->profile->linkedin;
        $this->instagram    = $this->profile->instagram;
        $this->youtube      = $this->profile->youtube;
        $this->tiktok       = $this->profile->tiktok;
        $this->skype        = $this->profile->skype;
        $this->snapchat     = $this->profile->snapchat;
        $this->pinterest    = $this->profile->pinterest;
    }


    public function updateUserContactInfo()
    {
        
        $this->profile->update([
            'mobile' => $this->mobile,       
            'phone' => $this->phone,        
            'whatsapp' => $this->whatsapp,     
            'viber' => $this->viber,        
            'wechat' => $this->wechat,       
            'telegram' => $this->telegram,     
            'fb_messenger' => $this->fb_messenger, 
            'ig_messages' => $this->ig_messages,  
            'call' => $this->call,         
            'sms' => $this->sms,          
            'facebook' => $this->facebook,     
            'linkedin' => $this->linkedin,     
            'instagram' => $this->instagram,    
            'youtube' => $this->youtube,      
            'tiktok' => $this->tiktok,       
            'skype' => $this->skype,        
            'snapchat' => $this->snapchat,     
            'pinterest' => $this->pinterest,    
        ]);

        session()->flash('success', 'Contact information successfully updated.');
    }


    public function render()
    {
        return view('livewire.profile.user-contact-info');
    }
}
