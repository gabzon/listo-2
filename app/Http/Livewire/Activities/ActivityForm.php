<?php

namespace App\Http\Livewire\Activities;

use App\Models\Activity;
use Livewire\Component;

class ActivityForm extends Component
{
public $action;
public $activity;
public $name = '';
public $description = '';
public $icon = '';
public $image = '';
public $season = '';
public $context = '';
public $is_indoor = 0;
public $is_outdoor = 0;
public $is_paid = 0;
public $is_free = 0;
public $training = 0;
public $companion = '';
public $day_period ='';

public function createActivity()
{
    Activity::create([
        'name' => $this->name,
        'description' => $this->description,
        'icon' => $this->icon,
        'image' => $this->image,
        'season' => $this->season,
        'context' => $this->context,
        'is_indoor' => $this->is_indoor,
        'is_outdoor' => $this->is_outdoor,
        'is_paid' => $this->is_paid,
        'is_free' => $this->is_free,
        'training' => $this->training,
        'companion' => $this->companion,
        'day_period' => $this->day_period,
    ]);

    session()->flash('created', 'Activity created successfully');
}

public function updateActivity()
{
    $this->activity->update([
        'name' => $this->name,
        'description' => $this->description,
        'icon' => $this->icon,
        'image' => $this->image,
        'season' => $this->season,
        'context' => $this->context,
        'is_indoor' => $this->is_indoor,
        'is_outdoor' => $this->is_outdoor,
        'is_paid' => $this->is_paid,
        'is_free' => $this->is_free,
        'training' => $this->training,
        'companion' => $this->companion,
        'day_period' => $this->day_period,
    ]);

    session()->flash('updated', 'Activity updated successfully');
}

public function mount($action, $activity = null)
{
    $this->action =$action;
    
    if($action == 'edit'){
        $this->route = 'updateActivity';
        $this->activity = $activity;
        $this->name = $activity->name;
        $this->description = $activity->description;
        $this->icon = $activity->icon;
        $this->image = $activity->image;
        $this->season = $activity->season;
        $this->context = $activity->context;
        $this->is_indoor = $activity->is_indoor;
        $this->is_outdoor = $activity->is_outdoor;
        $this->is_paid = $activity->is_paid;
        $this->is_free = $activity->is_free;
        $this->training = $activity->training;
        $this->companion = $activity->companion;
        $this->day_period = $activity->day_period;
    }
}

    public function render()
    {
        return view('livewire.activities.activity-form');
    }
}
