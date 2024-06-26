<?php

namespace App\Http\Controllers;

use App\Models\Worship;
use App\Models\WorshipSummary;
use Illuminate\Http\Request;

class WorshipSummaryController extends Controller
{
    // Display a list of all worship summaries
    public function index()
    {
        $worshipSummaries = WorshipSummary::with('worship')->get();
        return view('worshipSummary.index', compact('worshipSummaries'));
    }

    // Display form to create a new worship summary
    public function create()
    {
        $worships = Worship::all();
        return view('worshipSummary.addSermon', compact('worships'));
    }

    // Store a new worship summary
    public function store(Request $request)
    {
        $request->validate([
            'worship_id' => 'required|exists:worships,id',
            'speaker' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'bible_verses' => 'required|string',
        ]);

        WorshipSummary::create($request->all());

        return redirect()->route('worshipSummary.index')->with('success', 'Worship Summary created successfully.');
    }

    // Display form to edit an existing worship summary
    public function edit($id)
    {
        $worshipSummary = WorshipSummary::findOrFail($id);
        $worships = Worship::all();
        return view('worshipSummary.edit', compact('worshipSummary', 'worships'));
    }

    // Update an existing worship summary
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

        return redirect()->route('worshipSummary.index')->with('success', 'Worship Summary updated successfully.');
    }

    // Display the worship summary for the selected date
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
