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
                                <label for="worship_id">Select Date</label>
                                <select name="worship_id" id="worship_id" class="form-control" onchange="this.form.submit()">
                                    <option value="">-- Select a Date --</option>
                                    @foreach($worships as $worship)
                                        <option value="{{ $worship->id }}" {{ request('worship_id') == $worship->id ? 'selected' : '' }}>
                                            {{ $worship->date }}
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
                        </div>
                        @else
                        <p class="mt-4">No worship summary available for the selected date.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
