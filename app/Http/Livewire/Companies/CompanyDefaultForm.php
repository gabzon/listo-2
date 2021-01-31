<?php

namespace App\Http\Livewire\Companies;

use App\Models\Company;
use Livewire\Component;

class CompanyDefaultForm extends Component
{    
    public $action;
    public $company;
    public $name = '';
    public $description = '';
    public $email = '';
    public $phone = '';
    public $website = '';
    public $logo = '';
    public $is_active = 0;
    public $status = '';
    public $type = '';
    public $employees;
    public $has_branches = 0;
    public $has_insurance = 0;
    public $has_newsletter = 0;    
    public $founded;
    public $defunct;

    public function createCompany(){
        
        $company = Company::create([
            'name' => $this->name,
            'description' => $this->description,
            'email' => $this->email,
            'phone' => $this->phone,
            'website' => $this->website,
            'logo' => $this->logo,
            'is_active' => $this->is_active,
            'status' => $this->status,
            'type' => $this->type,
            'employees' => $this->employees,
            'has_branches' => $this->has_branches,
            'has_insurance' => $this->has_insurance,
            'has_newsletter' => $this->has_newsletter,            
            'founded' => $this->founded,
            'defunct' => $this->defunct,
        ]);

        session()->flash('created','Company created successfully.');

        return redirect(route('companies.edit', $company));
    }

    public function updateCompanyDefault()
    {
        $this->company->update([
            'name'          => $this->name,
            'description'   => $this->description,
            'email'         => $this->email,
            'phone'         => $this->phone,
            'website'       => $this->website,
            'logo'          => $this->logo,
            'is_active'     => $this->is_active,
            'status'        => $this->status,
            'type'          => $this->type,
            'employees'     => $this->employees,
            'has_branches'  => $this->has_branches,
            'has_insurance' => $this->has_insurance,
            'has_newsletter'=> $this->has_newsletter,            
            'founded'       => $this->founded,
            'defunct'       => $this->defunct,
        ]);

        session()->flash('updated','Company created successfully.');
    }

    public function mount($action, $company = null)
    {
        $this->action = $action;
        
        if ($action == 'edit') {
            $this->company = $company;
            
            $this->name = $company->name;
            $this->description = $company->description;
            $this->email = $company->email;
            $this->phone = $company->phone;
            $this->website = $company->website;
            $this->logo = $company->logo;
            $this->is_active = $company->is_active;
            $this->status = $company->status;
            $this->type = $company->type;
            $this->employees = $company->employees;
            $this->has_branches = $company->has_branches;
            $this->has_insurance = $company->has_insurance;
            $this->has_newsletter = $company->has_newsletter;
            $this->founded = $company->founded;
            $this->defunct = $company->defunct;
        }                
    }

    public function render()
    {
        return view('livewire.companies.company-default-form');
    }
}


