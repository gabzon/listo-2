<?php

namespace App\Http\Livewire\Welcome;

use App\Models\Activity;
use Livewire\Component;
use Livewire\WithPagination;

class RandomActivity extends Component
{
    use WithPagination;

    public bool $display = true;
    public $activity;
    public $free;
    public $location;
    public $indoor;
    public $outdoor;
    public $companion;
    public $category;
    public $season;

    public function another()
    {
        $this->activity = $this->randomQuery();
    }

    public function randomQuery()
    {
        return Activity::isFree($this->free)
                        ->location($this->location)
                        ->companion($this->companion)
                        ->season($this->season)
                        ->category($this->category)
                        ->get();
    }

    public function mount()
    {
        $this->activity = $this->randomQuery();
    }

    public function updatedFree()
    {
        $this->activity = $this->randomQuery();
    }

    public function updatedLocation()
    {
        $this->activity = $this->randomQuery();
    }

    public function updatedCompanion()
    {
        $this->activity = $this->randomQuery();
    }

    public function updatedCategory()
    {
        $this->activity = $this->randomQuery();
    }

    public function updatedSeason()
    {
        $this->activity = $this->randomQuery();
    }

    public function render()
    {                
        return view('livewire.welcome.random-activity', [                                        
            'activities'    => Activity::isFree($this->free)
                                ->location($this->location)
                                ->companion($this->companion)
                                ->season($this->season)
                                ->category($this->category)
                                ->paginate(10),
        ]);
    }
}


