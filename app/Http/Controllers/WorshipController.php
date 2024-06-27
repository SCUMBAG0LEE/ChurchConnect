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

    // Return JSON response instead of redirect
    return response()->json(['message' => 'Worship schedule added successfully.'], 200);
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

    public function edit($id)
    {
        $worship = Worship::with('members')->findOrFail($id);
        $members = Member::all();

        return view('worship.edit-worship', compact('worship', 'members'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'date' => 'required|date',
        'title' => 'required|string|max:255',
        'note' => 'nullable|string',
        'positions' => 'required|array',
    ]);

    $worship = Worship::findOrFail($id);
    $worship->date = $request->date;
    $worship->title = $request->title;
    $worship->note = $request->note; // Save the note
    $worship->save();

    // Syncing members' positions
    $syncData = [];
    foreach ($request->positions as $memberId => $position) {
        $syncData[$memberId] = ['position' => $position];
    }

    $worship->members()->sync($syncData);

    // Redirect back with success message
    return redirect()->route('worship/list')->with('success', 'Worship schedule updated successfully.');
}

    public function destroy($id)
    {
        $worship = Worship::findOrFail($id);
        $worship->members()->detach();
        $worship->delete();

        return response()->json(['success' => 'Worship schedule deleted successfully.']);
    }
}


