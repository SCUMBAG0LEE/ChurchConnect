<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Branch;
use Brian2694\Toastr\Facades\Toastr;

class BranchController extends Controller
{
    /** index page branch */
    public function indexBranch()
    {
        return view('branch.add-branch');
    }

    /** edit record */
    public function editBranch($branch_id)
    {
        $branch = Branch::where('branch_id',$branch_id)->first();
        return view('branch.edit-branch',compact('branch'));
    }

    /** branch list */
    public function branchList()
    {
        return view('branch.list-branch');
    }

    /** get data list */
    public function getDataList(Request $request)
    {
        $roleName        = $request->role_name;
        $draw            = $request->get('draw');
        $start           = $request->get("start");
        $rowPerPage      = $request->get("length"); // total number of rows per page
        $columnIndex_arr = $request->get('order');
        $columnName_arr  = $request->get('columns');
        $order_arr       = $request->get('order');
        $search_arr      = $request->get('search');

        $columnIndex     = $columnIndex_arr[0]['column']; // Column index
        $columnName      = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue     = $search_arr['value']; // Search value

        $branches =  DB::table('branches');
        $totalRecords = $branches->count();

        $totalRecordsWithFilter = $branches->where(function ($query) use ($searchValue) {
            $query->where('branch_id', 'like', '%' . $searchValue . '%');
            $query->orWhere('branch_name', 'like', '%' . $searchValue . '%');
            $query->orWhere('head_of_branch', 'like', '%' . $searchValue . '%');
            $query->orWhere('branch_start_date', 'like', '%' . $searchValue . '%');
            $query->orWhere('no_of_members', 'like', '%' . $searchValue . '%');
        })->count();

        $records = $branches->orderBy($columnName, $columnSortOrder)
            ->where(function ($query) use ($searchValue) {
                $query->where('branch_id', 'like', '%' . $searchValue . '%');
                $query->orWhere('branch_name', 'like', '%' . $searchValue . '%');
                $query->orWhere('head_of_branch', 'like', '%' . $searchValue . '%');
                $query->orWhere('branch_start_date', 'like', '%' . $searchValue . '%');
                $query->orWhere('no_of_members', 'like', '%' . $searchValue . '%');
            })
            ->skip($start)
            ->take($rowPerPage)
            ->get();
        $data_arr = [];

        foreach ($records as $key => $record) {

            if ($roleName === 'Admin' || $roleName === 'Super Admin')
            {
            $modify = '
                <td class="text-end">
                    <div class="actions">
                        <a href="'.url('branch/edit/'.$record->branch_id).'" class="btn btn-sm bg-danger-light">
                            <i class="far fa-edit me-2"></i>
                        </a>
                        <a class="btn btn-sm bg-danger-light delete branch_id" data-bs-toggle="modal" data-branch_id="'.$record->id.'" data-bs-target="#delete">
                        <i class="fe fe-trash-2"></i>
                        </a>
                    </div>
                </td>
            ';
            }
            else
            {
                $modify = '';
            }

            $data_arr [] = [
                "branch_id"         => $record->branch_id,
                "branch_name"       => $record->branch_name,
                'branch_address'    => $record->branch_address,
                "head_of_branch"    => $record->head_of_branch,
                "branch_start_date" => $record->branch_start_date,
                "branch_website"    => $record->branch_website,
                "no_of_members"     => $record->no_of_members,
                "modify"            => $modify,
            ];
        }

        $response = [
            "draw"                 => intval($draw),
            "iTotalRecords"        => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordsWithFilter,
            "aaData"               => $data_arr
        ];
        return response()->json($response);
        \Log::info('DataList JSON Response: ' . json_encode($response));
    }

    /** save record */
    public function saveRecord(Request $request)
    {
        $request->validate([
            'branch_name'       => 'required|string',
            'branch_address'    => 'required|string',
            'head_of_branch'    => 'required|string',
            'branch_start_date' => 'required|string',
            'branch_website'    => 'required|url',
            'no_of_members'     => 'required|string',
        ]);

        try {

            $saveRecord = new Branch;
            $saveRecord->branch_name       = $request->branch_name;
            $saveRecord->branch_address    = $request->branch_address;
            $saveRecord->head_of_branch    = $request->head_of_branch;
            $saveRecord->branch_start_date = $request->branch_start_date;
            $saveRecord->branch_website    = $request->branch_website;
            $saveRecord->no_of_members     = $request->no_of_members;
            $saveRecord->save();

            Toastr::success('Branch has been added successfully!', 'Success');
            return redirect()->back();
        } catch(\Exception $e) {
            \Log::error('Failed to add branch: ' . $e->getMessage());
            Toastr::error('Failed to add new branch. Please try again.', 'Error');
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
    }
}

    /** update record */
    public function updateRecord(Request $request)
    {
        DB::beginTransaction();
        try {

            $updateRecord = [
                'branch_name'       => $request->branch_name,
                'branch_address'    => $request->branch_address,
                'head_of_branch'    => $request->head_of_branch,
                'branch_start_date' => $request->branch_start_date,
                'branch_website'    => $request->branch_website,
                'no_of_members'     => $request->no_of_members,
            ];

            Branch::where('branch_id',$request->branch_id)->update($updateRecord);
            Toastr::success('Has been update successfully :)','Success');
            DB::commit();
            return redirect()->back();

        } catch(\Exception $e) {
            \Log::info($e);
            DB::rollback();
            Toastr::error('Fail, update record:)','Error');
            return redirect()->back();
        }
    }

    /** branch delete record */
    public function deleteRecord(Request $request)
    {
        DB::beginTransaction();
        try {

            Branch::destroy($request->branch_id);
            DB::commit();
            Toastr::success('Branch deleted successfully :)','Success');
            return redirect()->back();

        } catch(\Exception $e) {
            \Log::info($e);
            DB::rollback();
            Toastr::error('Branch deleted fail :)','Error');
            return redirect()->back();
        }
    }
}