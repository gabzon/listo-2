<?php

namespace App\Http\Livewire\Companies;

use Livewire\Component;

class CompanySocialForm extends Component
{
    public $company;
    public $facebook;
    public $twitter;
    public $instagram;
    public $linkedin;
    public $snapchat;
    public $blog;
    public $skype;
    public $pinterest;
    public $youtube;


    public function updateCompanySocialForm()
    {
        $this->company->update([
            'facebook'  => $this->facebook,
            'twitter'   => $this->twitter,
            'instagram' => $this->instagram,
            'linkedin'  => $this->linkedin,
            'snapchat'  => $this->snapchat,
            'blog'      => $this->blog,
            'skype'     => $this->skype,
            'pinterest' => $this->pinterest,
            'youtube'   => $this->youtube,
        ]);

        session()->flash('updated', 'Social Media Information updated successfully');
    }

    public function mount($company){
        $this->company = $company;

        $this->facebook = $company->facebook;
        $this->twitter = $company->twitter;
        $this->instagram = $company->instagram;
        $this->linkedin = $company->linkedin;
        $this->snapchat = $company->snapchat;
        $this->blog = $company->blog;
        $this->skype = $company->skype;
        $this->pinterest = $company->pinterest;
        $this->youtube = $company->youtube;
    }

    public function render()
    {
        return view('livewire.companies.company-social-form');
    }
}

