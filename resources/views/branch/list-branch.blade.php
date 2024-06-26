@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Church Branch</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Branches</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="member-group-form">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="branch_id" placeholder="Search by ID ...">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="branch_name" placeholder="Search by Name ...">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control"  placeholder="Search by Year ...">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="search-member-btn">
                        <button type="btn" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">

                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Church Branches</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="#" class="btn btn-outline-primary me-2">
                                        <i class="fas fa-download"></i> Download
                                    </a>
                                    @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
                                    <a href="{{ route('branch/add/page') }}" class="btn btn-primary">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <table class="table table-stripped table table-hover table-center mb-0" id="dataList">
                            <thead class="member-thread">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Lead Pastor</th>
                                    <th>Established Since</th>
                                    <th>Website Link</th>
                                    <th>No of Members</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- model delete --}}
<div class="modal custom-modal fade" id="delete" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Delete Branch</h3>
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-btn delete-action">
                    <div class="row">
                        <form action="{{ route('branch/delete') }}" method="POST">
                            @csrf
                            <input type="hidden" name="branch_id" class="e_branch_id" value="">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary paid-continue-btn" style="width: 100%;">Delete</button>
                                </div>
                                <div class="col-6">
                                    <a data-bs-dismiss="modal"
                                        class="btn btn-primary paid-cancel-btn">Cancel
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataList').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                searching: true,
                ajax: {
                    url: "{{ route('get-data-list') }}",
                    type: 'GET',
                    data: function(d) {
                        d.role_name = "{{ Session::get('role_name') }}"; // Pass role_name here
                    }
                },
                columns: [
                    {
                        data: 'branch_id',
                        name: 'branch_id',
                    },
                    {
                        data: 'branch_name',
                        name: 'branch_name',
                    },
                    {
                        data: 'branch_address',
                        name: 'branch_address',
                    },
                    {
                        data: 'head_of_branch',
                        name: 'head_of_branch',
                    },
                    {
                        data: 'branch_start_date',
                        name: 'branch_start_date',
                    },
                    {
                        data: 'branch_website',
                        name: 'branch_website',
                        render: function(data, type, row, meta) {
                            if (type === 'display') {
                                return '<a href="' + data + '" target="_blank">Website</a>';
                            }
                            return data;
                        }
                    },
                    {
                        data: 'no_of_members',
                        name: 'no_of_members',
                    },
                    {
                        data: 'modify',
                        name: 'modify',
                    },
                ]
            });
        });
    </script>
@endsection
@endsection
