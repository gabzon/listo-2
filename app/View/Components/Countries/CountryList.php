<?php

namespace App\View\Components\Countries;

use Illuminate\View\Component;

class CountryList extends Component
{
    public $countries;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($countries)
    {
        $this->countries = $countries;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.countries.country-list');
    }
}
