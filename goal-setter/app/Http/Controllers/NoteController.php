<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;
use App\Models\Note;

class NoteController extends Controller
{
    //

    public function store(Request $request, Goal $goal)
{
    $validated = $request->validate([
        'content' => 'required|string|max:1000',
    ]);

    $goal->notes()->create($validated);

    return redirect()->back()->with('success', 'Note added successfully.');
}
   


    public function edit(Goal $goal, Note $note)
{
    return view('notes.edit', compact('goal', 'note'));
}


    public function update(Request $request, Goal $goal, Note $note)
{
    $validated = $request->validate([
        'content' => 'required|string|max:1000',
    ]);

    $note->update($validated);

    return redirect()->route('goals.show', $goal)->with('success', 'Note updated successfully.');
}
public function destroy(Goal $goal, Note $note)
{
    // Ensure the note belongs to the given goal (for safety)
    if ($note->goal_id !== $goal->id) {
        abort(403, 'Unauthorized action.');
    }

    $note->delete();

    return redirect()->back()->with('success', 'Note deleted successfully.');
}
}