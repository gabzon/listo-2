<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Alert extends Component
{

    public string $type;
    public $styles = [
        'success'   => 'bg-green-200',
        'warning'   => 'bg-orange-200',
        'error'     => 'bg-red-200',
        'info'      => 'bg-blue-200',
    ];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $type)
    {
        $this->type = $type;        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.layout.alert');
    }
}
