@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">List Users</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">List Users</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="member-group-form">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" id="searchId" class="form-control" placeholder="Search by ID ...">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" id="searchName" class="form-control" placeholder="Search by Name ...">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <input type="text" id="searchPhone" class="form-control" placeholder="Search by Phone ...">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="search-member-btn">
                        <button type="button" id="searchBtn" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table comman-shadow">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-stripped table table-hover table-center mb-0" id="UsersList">
                                <thead class="member-thread">
                                    <tr>
                                        <th>User ID</th>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Date Join</th>
                                        <th>Position</th>
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Placeholder for "User not found" message -->
                                    <tr id="noRecordsMessage" style="display:none;">
                                        <td colspan="9" class="text-center">User not found.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
                    <h3>Delete User</h3>
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-btn delete-action">
                    <div class="row">
                        <form action="{{ route('user/delete') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" class="e_user_id" value="">
                            <input type="hidden" name="avatar" class="e_avatar" value="">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary paid-continue-btn" style="width: 100%;">Delete</button>
                                </div>
                                <div class="col-6">
                                    <a data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn">Cancel</a>
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
{{-- delete js --}}
<script>
    $(document).on('click', '.delete', function () {
        var _this = $(this).parents('tr');
        $('.e_user_id').val(_this.find('.user_id').data('user_id'));
        $('.e_avatar').val(_this.find('.avatar').data('avatar'));
    });
</script>

{{-- get user all js --}}
<script type="text/javascript">
    $(document).ready(function () {
        function loadDataTable(searchValue = '') {
            $('#UsersList').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                searching: false, // Disable DataTables default search
                ajax: {
                    url: "{{ route('get-users-data') }}",
                    data: function (d) {
                        d.search = {
                            value: searchValue,
                            id: $('#searchId').val(),
                            name: $('#searchName').val(),
                            phone: $('#searchPhone').val()
                        };
                    }
                },
                columns: [
                    { data: 'user_id', name: 'user_id' },
                    { data: 'avatar', name: 'avatar', orderable: false, searchable: false },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'phone_number', name: 'phone_number' },
                    { data: 'join_date', name: 'join_date' },
                    { data: 'position', name: 'position' },
                    { data: 'status', name: 'status' },
                    { data: 'modify', name: 'modify', orderable: false, searchable: false },
                ]
            });
        }

        loadDataTable();

        $('#searchBtn').on('click', function () {
            var searchId = $('#searchId').val();
            var searchName = $('#searchName').val();
            var searchPhone = $('#searchPhone').val();

            // Perform search based on any of the input fields
            var searchData = searchId || searchName || searchPhone;
            if (searchData.trim() !== '') {
                $('#UsersList').DataTable().destroy();
                loadDataTable(searchData);
            } else {
                // If all search fields are empty, reload default table data
                $('#UsersList').DataTable().destroy();
                loadDataTable();
            }
        });

        // Function to show/hide "User not found" message
        function toggleNoRecordsMessage(showMessage) {
            $('#noRecordsMessage').toggle(showMessage);
        }

        // Customizing DataTables to show "No records" message
        $.fn.dataTable.ext.errMode = 'none';
        $('#UsersList').on('error.dt', function (e, settings, techNote, message) {
            if (message.includes('No data available in table')) {
                toggleNoRecordsMessage(true);
            }
        });
    });
</script>

@endsection

@endsection
