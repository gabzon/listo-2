<?php

namespace App\View\Components\Partials;

use Illuminate\View\Component;

class TableActions extends Component
{
    public $model;
    public $mid;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model, $id)
    {
        $this->model = $model;
        $this->mid = $id;        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.partials.table-actions');
    }
}


