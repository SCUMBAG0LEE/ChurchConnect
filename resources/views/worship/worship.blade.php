@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Worship Schedule</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('worship/list') }}">Worship</a></li>
                            <li class="breadcrumb-item active">Worship Schedule</li>
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
                        <div class="form-group">
                            <label for="worship-dropdown">Select Worship</label>
                            <select class="form-control" id="worship-dropdown">
                                <option value="">Select Date & Title</option>
                                @foreach($worships as $worship)
                                    <option value="{{ $worship->id }}">{{ $worship->date }} - {{ $worship->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div id="worship-details" class="mt-4">
                            <!-- Worship details will be displayed here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const worshipDropdown = document.getElementById('worship-dropdown');
        const worshipDetails = document.getElementById('worship-details');

        worshipDropdown.addEventListener('change', function () {
            const worshipId = this.value;
            if (worshipId) {
                fetch(`{{ url('/worship/details') }}/${worshipId}`)
                    .then(response => response.json())
                    .then(data => {
                        let detailsHtml = `
                            <h5 class="form-title member-info">Worship Information</h5>
                            <p><strong>Date:</strong> ${data.date}</p>
                            <p><strong>Title:</strong> ${data.title}</p>
                            <p><strong>Note:</strong> ${data.note}</p>
                            <h5 class="form-title member-info">Workers</h5>
                            <table class="table table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                    </tr>
                                </thead>
                                <tbody>
                        `;
                        data.members.forEach(member => {
                            detailsHtml += `
                                <tr>
                                    <td>${member.name}</td>
                                    <td>${member.pivot.position}</td>
                                </tr>
                            `;
                        });
                        detailsHtml += `</tbody></table>`;
                        worshipDetails.innerHTML = detailsHtml;
                    })
                    .catch(error => {
                        console.error('Error fetching worship details:', error);
                        worshipDetails.innerHTML = `<p class="text-danger">Error fetching worship details.</p>`;
                    });
            } else {
                worshipDetails.innerHTML = ''; // Clear details if no worship is selected
            }
        });
    });
</script>
@endsection
