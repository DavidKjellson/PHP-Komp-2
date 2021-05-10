<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
  public function index()
  {
    $activities = Activity::all();
    return View('activities.index')->with('activities', $activities);
  }

  public function create()
  {
    return view('activities.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'activity_name' => 'required'
    ]);

    Activity::create($request->all());

    return redirect()->route('activities.index')

      ->with('success', 'Activity added successfully.');
  }
}
