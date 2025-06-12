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




public function destroy($id)
{
    $goal = Goal::findOrFail($id);

    if ($goal->current_value < $goal->target_value) {
        return redirect()->back()->with('error', 'You can only delete a goal once it reaches its target.');
    }

    $goal->delete();

    return redirect()->route('goals.index')->with('success', 'Goal deleted successfully.');
}


public function edit($id)
{
    $goal = Goal::findOrFail($id);
    return view('goals.edit', compact('goal'));
}

public function update(Request $request, $id)
{
    $goal = Goal::findOrFail($id);
    $goal->update($request->all());

    return redirect()->route('goals.index')->with('success', 'Goal updated successfully.');
}

}