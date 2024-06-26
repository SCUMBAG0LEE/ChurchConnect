<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Member;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class MemberController extends Controller
{
    /** index page member list */
    public function member()
    {
        $memberList = Member::all();
        return view('member.member',compact('memberList'));
    }

    /** index page member grid */
    public function memberGrid()
    {
        $memberList = Member::all();
        return view('member.member-grid',compact('memberList'));
    }

    /** member add page */
    public function memberAdd()
    {
        return view('member.add-member');
    }
    
    /** member save record */
    public function memberSave(Request $request)
    {
        $request->validate([
            'first_name'    => 'required|string',
            'last_name'     => 'required|string',
            'gender'        => 'required|not_in:0',
            'date_of_birth' => 'required|string',
            'address'       => 'required|string',
            'email'         => 'required|email',
            'phone_number'  => 'required',
            'church_branch' => 'required|string',
            'role'          => 'required|string',
            'position'      => 'required|string',
            'cell'          => 'required|string',
            'upload'        => 'required|image',
        ]);
        
        DB::beginTransaction();
        try {
           
            $upload_file = rand() . '.' . $request->upload->extension();
            $request->upload->move(storage_path('app/public/member-photos/'), $upload_file);
            if(!empty($request->upload)) {
                $member = new Member;
                $member->first_name   = $request->first_name;
                $member->last_name    = $request->last_name;
                $member->gender       = $request->gender;
                $member->date_of_birth= $request->date_of_birth;
                $member->address      = $request->address;
                $member->email        = $request->email;
                $member->phone_number = $request->phone_number;
                $member->church_branch= $request->church_branch;
                $member->role         = $request->role;
                $member->position     = $request->position;
                $member->cell         = $request->cell;
               
                $member->upload = $upload_file;
                $member->save();

                Toastr::success('Has been add successfully :)','Success');
                DB::commit();
            }

            return redirect()->back();
           
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('fail, Add new member  :)','Error');
            return redirect()->back();
        }
    }

    /** view for edit member */
    public function memberEdit($id)
    {
        $memberEdit = Member::where('id',$id)->first();
        return view('member.edit-member',compact('memberEdit'));
    }

    /** update record */
    public function memberUpdate(Request $request)
{
    $request->validate([
        'first_name'    => 'required|string',
        'last_name'     => 'required|string',
        'gender'        => 'required|not_in:0',
        'date_of_birth' => 'required|string',
        'address'       => 'required|string',
        'phone_number'  => 'required',
        'church_branch' => 'required|string',
        'role'          => 'required|string',
        'position'      => 'required|string',
        'cell'          => 'required|string',
        'upload'        => 'nullable|image',
    ]);

    DB::beginTransaction();
    try {
        $member = Member::find($request->id);

        if (!empty($request->upload)) {
            // Delete the old photo
            if (!empty($member->upload)) {
                unlink(storage_path('app/public/member-photos/'.$member->upload));
            }
            // Save the new photo
            $upload_file = rand() . '.' . $request->upload->extension();
            $request->upload->move(storage_path('app/public/member-photos/'), $upload_file);
            $member->upload = $upload_file;
        }

        // Update other fields
        $member->first_name   = $request->first_name;
        $member->last_name    = $request->last_name;
        $member->gender       = $request->gender;
        $member->date_of_birth= $request->date_of_birth;
        $member->address      = $request->address;
        $member->phone_number = $request->phone_number;
        $member->church_branch= $request->church_branch;
        $member->role         = $request->role;
        $member->position     = $request->position;
        $member->cell         = $request->cell;

        $member->save();

        Toastr::success('Has been update successfully :)','Success');
        DB::commit();
        return redirect()->route('member/list');
    } catch(\Exception $e) {
        DB::rollback();
        Toastr::error('fail, update member  :)','Error');
        return redirect()->back();
    }
}

    /** member delete */
    public function memberDelete(Request $request)
    {
        DB::beginTransaction();
        try {
           
            if (!empty($request->id)) {
                Member::destroy($request->id);
                unlink(storage_path('app/public/member-photos/'.$request->avatar));
                DB::commit();
                Toastr::success('Member deleted successfully :)','Success');
                return redirect()->back();
            }
    
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Member deleted fail :)','Error');
            return redirect()->back();
        }
    }

    /** member profile page */
    public function memberProfile($id)
    {
        $memberProfile = Member::where('id',$id)->first();
        return view('member.member-profile',compact('memberProfile'));
    }
    
    public function search(Request $request)
    {
        $search_id = $request->input('search_id');
        $search_name = $request->input('search_name');
        $search_phone = $request->input('search_phone');

        $query = Member::query();

        if ($search_id) {
            $query->where('id', 'LIKE', "%{$search_id}%");
        }

        if ($search_name) {
            $query->where(function($q) use ($search_name) {
                $q->where('first_name', 'LIKE', "%{$search_name}%")
                  ->orWhere('last_name', 'LIKE', "%{$search_name}%");
            });
        }

        if ($search_phone) {
            $query->where('phone_number', 'LIKE', "%{$search_phone}%");
        }

        $memberList = $query->get();

        return view('member.member', compact('memberList'));
    }
}