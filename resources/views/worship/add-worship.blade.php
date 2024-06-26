@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Add Worship</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('worship/add/page') }}">Worship</a></li>
                            <li class="breadcrumb-item active">Add Worship</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {!! Toastr::message() !!}
        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form action="{{ route('worship/store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title member-info">Worship Information
                                        <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Date <span class="login-danger">*</span></label>
                                        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}">
                                        @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group local-forms">
                                        <label>Title <span class="login-danger">*</span></label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group local-forms">
                                        <label>Note</label>
                                        <textarea class="form-control @error('note') is-invalid @enderror" name="note">{{ old('note') }}</textarea>
                                        @error('note')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h5 class="form-title member-info">Add Members
                                        <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span>
                                    </h5>
                                </div>
                                <div class="col-12">
                                    <div class="form-group local-forms">
                                        <label>Add Members</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="member-search-input" placeholder="Search by ID or Name">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-primary" id="add-member-btn">Add Member</button>
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <ul id="added-members-list" class="list-group">
                                                <!-- Display added members here -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div id="member-positions">
                                        <!-- Dynamic member positions inputs will go here -->
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Add Worship</button>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const memberSearchInput = document.getElementById('member-search-input');
        const addMemberBtn = document.getElementById('add-member-btn');
        const addedMembersList = document.getElementById('added-members-list');
        const memberPositions = document.getElementById('member-positions');

        let addedMembers = []; // Array to hold added members

        addMemberBtn.addEventListener('click', function () {
            const searchTerm = memberSearchInput.value.trim();
            if (searchTerm === '') {
                return;
            }

            // Simulate AJAX request to check if member exists (replace with actual check)
            const memberId = findMemberIdByNameOrId(searchTerm); // Replace with actual function

            if (memberId !== null && !addedMembers.includes(memberId)) {
                addedMembers.push(memberId);

                // Create list item to display added member
                const memberName = findMemberNameById(memberId); // Replace with actual function
                const listItem = document.createElement('li');
                listItem.className = 'list-group-item d-flex justify-content-between align-items-center';
                listItem.textContent = memberName;

                // Create remove button for the member
                const removeButton = document.createElement('button');
                removeButton.className = 'btn btn-danger btn-sm';
                removeButton.textContent = 'Remove';
                removeButton.addEventListener('click', function () {
                    listItem.remove();
                    positionInput.remove();
                    addedMembers = addedMembers.filter(id => id !== memberId);
                });

                listItem.appendChild(removeButton);
                addedMembersList.appendChild(listItem);

                // Create hidden input for member position
                const positionInput = document.createElement('input');
                positionInput.setAttribute('type', 'text');
                positionInput.setAttribute('name', `positions[${memberId}]`);
                positionInput.setAttribute('placeholder', `Position for ${memberName}`);
                positionInput.classList.add('form-control', 'mb-2');

                // Append position input to member positions
                memberPositions.appendChild(positionInput);
            }

            // Clear search input after adding member
            memberSearchInput.value = '';
        });

        function findMemberIdByNameOrId(searchTerm) {
            // Replace with actual function to find member ID based on search term
            // This is just a placeholder example
            const members = {!! $members->toJson() !!}; // Convert PHP array to JavaScript array
            for (let i = 0; i < members.length; i++) {
                if (members[i].id === parseInt(searchTerm) || members[i].first_name.toLowerCase().includes(searchTerm.toLowerCase()) || members[i].last_name.toLowerCase().includes(searchTerm.toLowerCase())) {
                    return members[i].id;
                }
            }
            return null;
        }

        function findMemberNameById(memberId) {
            // Replace with actual function to find member name based on member ID
            // This is just a placeholder example
            const members = {!! $members->toJson() !!}; // Convert PHP array to JavaScript array
            for (let i = 0; i < members.length; i++) {
                if (members[i].id === memberId) {
                    return `${members[i].first_name} ${members[i].last_name}`;
                }
            }
            return '';
        }
    });
</script>
@endsection
