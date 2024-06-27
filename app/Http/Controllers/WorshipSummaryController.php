<?php

namespace App\Http\Controllers;

use App\Models\Worship;
use App\Models\WorshipSummary;
use Illuminate\Http\Request;

class WorshipSummaryController extends Controller
{
    public function index(Request $request)
    {
        $worships = Worship::all(); // Fetch all worships for dropdown

        $worshipSummary = WorshipSummary::where('worship_id', $request->worship_id)->first();
        return view('worshipSummary.sermon', compact('worships', 'worshipSummary'));
    }

    public function create()
    {
        $worships = Worship::all(); // Fetch all worships for dropdown
        return view('worshipSummary.add-sermon', compact('worships'));
    }

    public function store(Request $request)
{
    $request->validate([
        'worship_id' => 'required|exists:worships,id',
        'speaker' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'content' => 'required|url', // Validate 'content' as a URL
        'bible_verses' => 'required|string',
    ]);

    WorshipSummary::create([
        'worship_id' => $request->worship_id,
        'speaker' => $request->speaker,
        'sermonTitle' => $request->title,
        'content' => $request->content,
        'bibleVerse' => $request->bible_verses,
    ]);

    return response()->json(['success' => true, 'message' => 'Worship Summary created successfully.']);
}
    
    public function edit($id)
    {
        $worshipSummary = WorshipSummary::findOrFail($id);
        $worships = Worship::all(); // Fetch all worships for dropdown
        return view('worshipSummary.edit-sermon', compact('worshipSummary', 'worships'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'worship_id' => 'required|exists:worships,id',
        'speaker' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'content' => 'required|url', // Validate 'content' as a URL
        'bible_verses' => 'required|string',
    ]);

    $worshipSummary = WorshipSummary::findOrFail($id);
    $worshipSummary->update([
        'worship_id' => $request->worship_id,
        'speaker' => $request->speaker,
        'sermonTitle' => $request->title,
        'content' => $request->content,
        'bibleVerse' => $request->bible_verses,
    ]);

    return response()->json(['success' => 'Worship Summary updated successfully.']);
}

    public function destroy($id)
    {
        $worshipSummary = WorshipSummary::findOrFail($id);
        $worshipSummary->delete();

        return response()->json(['success' => 'Worship Summary deleted successfully.']);
    }
}
