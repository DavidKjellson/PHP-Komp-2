<?php

namespace App\Http\Controllers;

use App\Teams;
use Illuminate\Http\Request;

class TeamController extends Controller
{
  public function index()
  {
    $teams = Teams::all();
    return view('teams.index')->with('teams', $teams);
  }

  public function create()
  {
    return view('teams.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'team_name' => 'required',
      'team_activity' => 'required',
    ]);

    Teams::create($request->all());

    return redirect()->route('teams.index')

      ->with('success', 'Team added!');
  }

  public function show(Teams $team)
  {
    return view('teams.show', compact('team'));
  }
}
