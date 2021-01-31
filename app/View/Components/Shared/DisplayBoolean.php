<?php

namespace App\View\Components\Shared;

use Illuminate\View\Component;

class DisplayBoolean extends Component
{

    public bool $bool;
    public $icon = 'check';
    public $style = 'h-5 w-5 text-green-500';
        
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(bool $bool)
    {
        $this->bool = $bool;

        if (!$this->bool) {
            $this->style = 'h-3 w-3 text-red-500';
            $this->icon = 'x';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.shared.display-boolean');
    }
}
