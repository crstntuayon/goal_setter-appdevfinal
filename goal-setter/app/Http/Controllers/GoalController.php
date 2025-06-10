<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index() {
    $goals = Goal::all();
    return view('goals.index', compact('goals'));
}

public function create() {
    return view('goals.create');
}

public function store(Request $request) {
    $request->validate([
        'title' => 'required',
        'target' => 'required|integer|min:1',
    ]);
    Goal::create($request->all());
    return redirect()->route('goals.index');
}

public function edit(Goal $goal) {
    return view('goals.edit', compact('goal'));
}

public function update(Request $request, Goal $goal) {
    $request->validate([
        'progress' => 'required|integer|min:0|max:' . $goal->target,
    ]);
    $goal->update($request->all());
    return redirect()->route('goals.index');
}
}