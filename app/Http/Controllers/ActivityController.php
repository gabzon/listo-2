<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
 
    public function index()
    {
        return view('activities.index');
    }

    public function show(Activity $activity)
    {
        return view('activities.show')->with('activity', $activity);
    }

    public function create()
    {
        return view('activities.create');
    }

    public function edit(Activity $activity)
    {
        return view('activities.edit')->with('activity', $activity);
    }
}
