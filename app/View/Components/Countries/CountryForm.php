<?php

namespace App\View\Components\Countries;

use App\Models\Country;
use Illuminate\View\Component;
use phpDocumentor\Reflection\Types\Null_;

class CountryForm extends Component
{
    public string $action;
    public $country;
    public string $method = 'POST';
    public string $title = '';
    public string $button = 'Add';
    public string $icon = 'icons.add';
    public string $route = 'countries.store';
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action, $country = NULL)
    {
        $this->action = $action;        
        
        if ($this->action === 'edit') {
            $this->country = $country;              
            $this->title = 'Editing country: ' . $country->name;                        
            $this->method = 'PUT';
            $this->button = 'Save';
            $this->icon = 'icons.edit';     
            $this->route = 'countries.update';       
        }        

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.countries.country-form');
    }
}
