@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">View Worship Summary</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card common-shadow">
                    <div class="card-body">
                        <form method="GET" action="{{ route('worshipSummary.index') }}">
                            <div class="form-group">
                                <label for="worship_id">Select Date and Worship</label>
                                <select name="worship_id" id="worship_id" class="form-control" onchange="this.form.submit()">
                                    <option value="">-- Select a Date and Worship --</option>
                                    @foreach($worships as $worship)
                                        <option value="{{ $worship->id }}" {{ request('worship_id') == $worship->id ? 'selected' : '' }}>
                                            {{ $worship->date }} - {{ $worship->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </form>

                        @if($worshipSummary)
                        <div class="worship-summary mt-4">
                            <h3>{{ $worshipSummary->sermonTitle }}</h3>
                            <p><strong>Speaker:</strong> {{ $worshipSummary->speaker }}</p>
                            <p><strong>Content:</strong></p>
                            <p><a href="{{ $worshipSummary->content }}" target="_blank">You can download the worship summary here</a></p>
                            <p><strong>Bible Verses:</strong></p>
                            <p>{{ $worshipSummary->bibleVerse }}</p>
                            @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin' || Session::get('role_name') === 'Leader')
                            <div class="mt-4">
                                <a href="{{ route('worshipSummary.edit', ['worshipSummary' => $worshipSummary->id]) }}" class="btn btn-primary">Edit</a>
                                <button id="delete-worship" class="btn btn-danger ml-2" data-id="{{ $worshipSummary->id }}">Delete</button>
                            </div>
                            @endif
                        </div>
                        @else
                        <p class="mt-4">No worship summary available for the selected date and worship.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
   document.addEventListener('DOMContentLoaded', function () {
    const deleteButton = document.getElementById('delete-worship');

    if (deleteButton) {
        deleteButton.addEventListener('click', function () {
            const worshipId = this.getAttribute('data-id');

            if (worshipId && confirm('Are you sure you want to delete this worship summary?')) {
                fetch(`{{ route('worshipSummary.destroy', ['worshipSummary' => ':id']) }}`.replace(':id', worshipId), {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(data.success);
                        location.reload();
                    } else {
                        alert('Error deleting worship summary.');
                    }
                })
                .catch(error => {
                    console.error('Error deleting worship summary:', error);
                    alert('Error deleting worship summary.');
                });
            }
        });
    }
});

</script>
@endsection