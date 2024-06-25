
@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Members</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('member/list') }}">Member</a></li>
                                <li class="breadcrumb-item active">All Members</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}
            <div class="member-group-form">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by ID ...">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by Name ...">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by Phone ...">
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
                    <div class="card card-table comman-shadow">
                        <div class="card-body">
                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="page-title">Members</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="{{ route('member/list') }}" class="btn btn-outline-gray me-2 active">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('member/grid') }}" class="btn btn-outline-gray me-2">
                                            <i class="fa fa-th" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
                                        @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
                                        <a href="{{ route('member/add/page') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table
                                    class="table border-0 star-member table-hover table-center mb-0 datatable table-striped">
                                    <thead class="member-thread">
                                        <tr>
                                            <th>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>DOB</th>
                                            <th>Address</th>
                                            <th>Mobile Number</th>
                                            <th>Church Branch</th>
                                            <th>Role</th>
                                            <th>Position</th>
                                            <th>Cell Group</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($memberList as $key=>$list )
                                        <tr>
                                            <td>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </td>
                                            <td>STD{{ ++$key }}</td>
                                            <td hidden class="id">{{ $list->id }}</td>
                                            <td hidden class="avatar">{{ $list->upload }}</td>
                                            <td>
                                            <h2 class="table-avatar">
                                            <a href="{{ route('member/profile', ['id' => $list->id]) }}" class="avatar avatar-sm me-2">
                                                @if($list->upload && Storage::exists('public/member-photos/' . $list->upload))
                                                    <img class="avatar-img rounded-circle" src="{{ Storage::url('public/member-photos/'.$list->upload) }}" alt="User Image">
                                                @else
                                                    <img class="avatar-img rounded-circle" src="{{ URL::to('/images/photo_defaults.jpg') }}" alt="Default Image">
                                                @endif
                                            </a>
                                            <a href="{{ route('member/profile', ['id' => $list->id]) }}">{{ $list->first_name }} {{ $list->last_name }}</a>
                                        </h2>
                                            </td>
                                            <td>{{ $list->date_of_birth }}</td>                                 
                                            <td>{{ $list->address }}</td> 
                                            <td>{{ $list->phone_number }}</td> 
                                            <td>{{ $list->church_branch }}</td> 
                                            <td>{{ $list->role }}</td> 
                                            <td>{{ $list->position }}</td>                                      
                                            <td>{{ $list->cell }}</td> 
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="{{ url('member/edit/'.$list->id) }}" class="btn btn-sm bg-danger-light">
                                                        <i class="far fa-edit me-2"></i>
                                                    </a>
                                                    <a class="btn btn-sm bg-danger-light member_delete" data-bs-toggle="modal" data-bs-target="#memberUser">
                                                        <i class="far fa-trash-alt me-2"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- model member delete --}}
    <div class="modal custom-modal fade" id="memberUser" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Member</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <form action="{{ route('member/delete') }}" method="POST">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="id" class="e_id" value="">
                                <input type="hidden" name="avatar" class="e_avatar" value="">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary continue-btn submit-btn" style="border-radius: 5px !important;">Delete</button>
                                </div>
                                <div class="col-6">
                                    <a href="#" data-bs-dismiss="modal"class="btn btn-primary paid-cancel-btn">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('script')

    {{-- delete js --}}
    <script>
        $(document).on('click','.member_delete',function()
        {
            var _this = $(this).parents('tr');
            $('.e_id').val(_this.find('.id').text());
            $('.e_avatar').val(_this.find('.avatar').text());
        });
        
    </script>
    @endsection

@endsection
