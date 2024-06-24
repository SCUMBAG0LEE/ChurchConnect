
@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Edit Branch</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="branchs.html">Branch</a></li>
                            <li class="breadcrumb-item active">Edit Branch</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('branch/update') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Branch Details</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Branch ID <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="branch_id" value="{{ $branch->branch_id }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Branch Name <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="branch_name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Address <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="branch_address">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Lead Pastor <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="head_of_branch">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms calendar-icon">
                                            <label>Branch Start Date <span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" type="text" name="branch_start_date" placeholder="DD-MM-YYYY">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Website <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="branch_website">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>No of Members <span class="login-danger">*</span></label>
                                            <input type="text" class="form-control" name="no_of_members">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="member-submit">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
