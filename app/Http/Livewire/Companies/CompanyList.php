<?php

namespace App\Http\Livewire\Companies;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;

class CompanyList extends Component
{
    use WithPagination;
        
    public function render()
    {
        $companies = Company::paginate(10);

        return view('livewire.companies.company-list')->with('companies',$companies);
    }
}
