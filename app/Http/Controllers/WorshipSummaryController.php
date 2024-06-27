<?php

namespace App\Http\Controllers;

use App\Models\Worship;
use App\Models\WorshipSummary;
use Illuminate\Http\Request;

class WorshipSummaryController extends Controller
{
    public function index(Request $request)
{
    $worships = Worship::all(); // Assuming Worship is the model for your worships table

    $worshipSummary = null;
    if ($request->has('worship_id')) {
        $worshipSummary = WorshipSummary::where('worship_id', $request->worship_id)->first();
    }

    return view('worshipSummary.sermon', compact('worships', 'worshipSummary'));
}

    public function create()
    {
        $worships = Worship::all();
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

        \Log::info('Request Data:', $request->all());

        WorshipSummary::create([
            'worship_id' => $request->worship_id,
            'speaker' => $request->speaker,
            'sermonTitle' => $request->title,
            'content' => $request->content,
            'bibleVerse' => $request->bible_verses,
        ]);

        return redirect()->route('worshipSummary.create')->with('success', 'Worship Summary created successfully.');
    }

    // Other methods (edit, update, show) remain the same


    public function edit($id)
    {
        $worshipSummary = WorshipSummary::findOrFail($id);
        $worships = Worship::all();
        return view('worshipSummary.edit', compact('worshipSummary', 'worships'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'worship_id' => 'required|exists:worships,id',
            'speaker' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'bible_verses' => 'required|string',
        ]);

        $worshipSummary = WorshipSummary::findOrFail($id);
        $worshipSummary->update($request->all());

        return redirect()->route('worshipSummary.edit')->with('success', 'Worship Summary updated successfully.');
    }

    public function show(Request $request)
    {
        $worships = Worship::all();
        $worshipSummary = null;

        if ($request->has('worship_id')) {
            $worshipSummary = WorshipSummary::where('worship_id', $request->worship_id)->first();
        }

        return view('worshipSummary.show', compact('worships', 'worshipSummary'));
    }
}