<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Worship;

class WorshipController extends Controller
{
    public function create()
    {
        $members = Member::all();
        return view('worship.add-worship', compact('members'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'title' => 'required|string|max:255',
            'note' => 'nullable|string',
            'positions' => 'required|array',
        ]);

        $worship = new Worship();
        $worship->date = $request->date;
        $worship->title = $request->title;
        $worship->note = $request->note; // Save the note
        $worship->save();

        $syncData = [];
        foreach ($request->positions as $memberId => $position) {
            $syncData[$memberId] = [
                'position' => $position,
            ];
        }

        $worship->members()->attach($syncData);

        return redirect()->route('worship/add/page')->with('success', 'Worship schedule added successfully.');
    }

    public function listPage()
    {
        $worships = Worship::orderBy('date', 'desc')->get();
        return view('worship.worship', compact('worships'));
    }

    public function getDetails($id)
    {
        $worship = Worship::with('members')->find($id);

        if ($worship) {
            $worship->members->each(function ($member) {
                $member->name = $member->first_name . ' ' . $member->last_name;
            });

            return response()->json($worship);
        }

        return response()->json(['error' => 'Worship not found'], 404);
    }
}

