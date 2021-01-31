<?php

namespace App\Http\Livewire\Activities;

use App\Models\Activity;
use Livewire\Component;
use Livewire\WithPagination;

class ActivityList extends Component
{
    use WithPagination;
    
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        $activities = Activity::where('name','like',"%{$this->search}%")->paginate(10);
        return view('livewire.activities.activity-list')->with('activities', $activities);
    }
}
