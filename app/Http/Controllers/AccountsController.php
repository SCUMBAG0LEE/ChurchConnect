<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeesType;
use App\Models\User;
use App\Models\FeesInformation;
use Brian2694\Toastr\Facades\Toastr;

class AccountsController extends Controller
{
    /** index page */
    public function index()
    {
        $feesInformation = FeesInformation::join('users', 'fees_information.member_id', 'users.id')
            ->select('fees_information.*', 'users.avatar')
            ->get();
        return view('accounts.feescollections', compact('feesInformation'));
    }

    /** add Fees Collection */
    public function addFeesCollection()
    {
        $users    = User::whereIn('role_name', ['Member'])->get();
        $feesType = FeesType::all();
        return view('accounts.add-fees-collection', compact('users', 'feesType'));
    }

    /** save record */
    public function saveRecord(Request $request)
    {
        $request->validate([
            'member_id'   => 'required|string',
            'member_name' => 'required|string',
            'gender'       => 'required|string',
            'fees_type'    => 'required|string',
            'fees_amount'  => 'required|string',
            'paid_date'    => 'required|string',
        ]);

        try {

            $saveRecord = new FeesInformation;
            $saveRecord->member_id   = $request->member_id;
            $saveRecord->member_name = $request->member_name;
            $saveRecord->gender       = $request->gender;
            $saveRecord->fees_type    = $request->fees_type;
            $saveRecord->fees_amount  = $request->fees_amount;
            $saveRecord->paid_date    = $request->paid_date;
            $saveRecord->save();

            Toastr::success('Has been add successfully :)', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            \Log::info($e);
            DB::rollback();
            Toastr::error('fail, Add new record  :)', 'Error');
            return redirect()->back();
        }
    }
}
