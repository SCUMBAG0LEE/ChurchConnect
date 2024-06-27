@extends('layouts.master')

@section('content')
{!! Toastr::message() !!}
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Edit Worship Schedule</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('worship/list') }}">Worship</a></li>
                            <li class="breadcrumb-item active">Edit Worship Schedule</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form action="{{ route('worship/update', $worship->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" name="date" class="form-control" id="date" value="{{ $worship->date }}" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title" value="{{ $worship->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="note">Note</label>
                                <textarea name="note" class="form-control" id="note">{{ $worship->note }}</textarea>
                            </div>
                            <div class="mt-4">
                                <h5 class="form-title member-info">Current Members</h5>
                                <ul id="added-members-list" class="list-group">
                                    <!-- Display current members here -->
                                    @foreach($worship->members as $member)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            {{ $member->first_name . ' ' . $member->last_name }}
                                            <button type="button" class="btn btn-danger btn-sm remove-member-btn">Remove</button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="mt-4">
                                <h5 class="form-title member-info">Add Members</h5>
                                <div class="form-group local-forms">
                                    <label>Add Members</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="member-search-input" placeholder="Search by ID or Name">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-primary" id="add-member-btn">Add Member</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="member-positions">
                                <!-- Dynamic member positions inputs will go here -->
                                @foreach($worship->members as $member)
                                    <input type="text" name="positions[{{ $member->id }}]" class="form-control mb-2" placeholder="Position for {{ $member->first_name . ' ' . $member->last_name }}" value="{{ old('positions.' . $member->id, $worship->members->find($member->id)->pivot->position) }}">
                                @endforeach
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('worship/list') }}" class="btn btn-secondary">Cancel</a>
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

    let addedMembers = {!! $worship->members->pluck('id') !!}; // Array to hold added members

    // Function to create list item for a member
    function createMemberListItem(memberId, memberName) {
        const listItem = document.createElement('li');
        listItem.className = 'list-group-item d-flex justify-content-between align-items-center';
        listItem.textContent = memberName;

        // Create remove button for the member
        const removeButton = document.createElement('button');
        removeButton.className = 'btn btn-danger btn-sm remove-member-btn';
        removeButton.textContent = 'Remove';
        removeButton.addEventListener('click', function () {
            listItem.remove();
            positionInput.remove(); // Remove corresponding position input
            addedMembers = addedMembers.filter(id => id !== memberId);
        });

        listItem.appendChild(removeButton);
        return listItem;
    }

    // Initialize the list for current members
    @foreach($worship->members as $member)
        const memberId_{{ $member->id }} = {{ $member->id }};
        const memberName_{{ $member->id }} = '{{ $member->first_name . ' ' . $member->last_name }}';
        const listItem_{{ $member->id }} = createMemberListItem(memberId_{{ $member->id }}, memberName_{{ $member->id }});
        addedMembersList.appendChild(listItem_{{ $member->id }});

        // Create hidden input for member position
        const positionInput_{{ $member->id }} = document.createElement('input');
        positionInput_{{ $member->id }}.setAttribute('type', 'text');
        positionInput_{{ $member->id }}.setAttribute('name', `positions[${{ $member->id }}]`);
        positionInput_{{ $member->id }}.setAttribute('placeholder', `Position for ${memberName_{{ $member->id }}}`);
        positionInput_{{ $member->id }}.classList.add('form-control', 'mb-2');
        positionInput_{{ $member->id }}.value = '{{ old('positions.' . $member->id, $worship->members->find($member->id)->pivot->position) }}';
        memberPositions.appendChild(positionInput_{{ $member->id }});
    @endforeach

    // Event listener for adding members
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
            const listItem = createMemberListItem(memberId, memberName);

            // Append list item to the added members list
            addedMembersList.appendChild(listItem);

            // Create hidden input for member position
            const positionInput = document.createElement('input');
            positionInput.setAttribute('type', 'text');
            positionInput.setAttribute('name', `positions[${memberId}]`);
            positionInput.setAttribute('placeholder', `Position for ${memberName}`);
            positionInput.classList.add('form-control', 'mb-2');
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

    // Event delegation for remove buttons (since they are dynamically added)
    addedMembersList.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-member-btn')) {
            const listItem = event.target.closest('li');
            const memberId = findMemberIdByNameOrId(listItem.textContent.trim());
            if (memberId) {
                listItem.remove();
                const positionInput = document.querySelector(`input[name="positions[${memberId}]"]`);
                if (positionInput) {
                    positionInput.remove();
                    addedMembers = addedMembers.filter(id => id !== memberId);
                }
            }
        }
    });

    // Form submission handling
    const worshipForm = document.querySelector('form[action="{{ route('worship/update', $worship->id) }}"]');
    worshipForm.addEventListener('submit', function (event) {
        event.preventDefault();

        fetch(this.action, {
            method: this.method,
            body: new FormData(this)
        })
        .then(response => response.json())
        .then(data => {
            if (data.message) {
                alert(data.message); // Show alert with the message
                // Reload the page to clear form inputs
                window.location.reload();
            } else {
                console.error('Unexpected response format:', data);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            // Handle error if needed
        });
    });
});




public function update(Request $request, $id)
{
    // Update the worship schedule in the database
    // Example:
    $worship = Worship::findOrFail($id);
    $worship->date = $request->input('date');
    $worship->title = $request->input('title');
    $worship->note = $request->input('note');
    $worship->save();

    // Handle member positions update
    foreach ($request->input('positions') as $memberId => $position) {
        $worship->members()->updateExistingPivot($memberId, ['position' => $position]);
    }

    // Optionally, set a success message
    Toastr::success('Worship schedule updated successfully!');

    // Redirect back to the list or wherever appropriate
    return redirect()->route('worship/list');
};

</script>
@endsection
