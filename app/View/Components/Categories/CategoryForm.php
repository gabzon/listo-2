<?php

namespace App\View\Components\Categories;

use Illuminate\View\Component;

class CategoryForm extends Component
{
    public string $action;
    public $category;
    public string $method = 'POST';
    public string $title = '';
    public string $button = 'Add';
    public string $icon = 'icons.add';
    public string $route = 'categories.store';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action, $category = null)
    {
        $this->action = $action;        
        
        if ($this->action === 'edit') {
            $this->category = $category;              
            $this->title = 'Editing category: ' . $category->name;                        
            $this->method = 'PUT';
            $this->button = 'Save';
            $this->icon = 'icons.edit';     
            $this->route = 'categories.update';       
        }  
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.categories.category-form');
    }
}
