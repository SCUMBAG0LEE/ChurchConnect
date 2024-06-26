@extends('layouts.master')

@section('content')
<div class="container">
    <h2>View Worship Summary</h2>

    <form method="GET" action="{{ route('worship_summaries.show') }}">
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
    <div class="worship-summary">
        <h3>{{ $worshipSummary->title }}</h3>
        <p><strong>Speaker:</strong> {{ $worshipSummary->speaker }}</p>
        <p><strong>Content:</strong></p>
        <p>{{ $worshipSummary->content }}</p>
        <p><strong>Bible Verses:</strong></p>
        <p>{{ $worshipSummary->bible_verses }}</p>
    </div>
    @endif
</div>
@endsection
