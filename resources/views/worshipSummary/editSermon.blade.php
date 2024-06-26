@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Edit Worship Summary</h2>

    <form action="{{ route('worship_summaries.update', $worshipSummary->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="worship_id">Worship</label>
            <select name="worship_id" id="worship_id" class="form-control" required>
                @foreach($worships as $worship)
                    <option value="{{ $worship->id }}" {{ $worship->id == $worshipSummary->worship_id ? 'selected' : '' }}>{{ $worship->date }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="speaker">Speaker</label>
            <input type="text" name="speaker" id="speaker" class="form-control" value="{{ $worshipSummary->speaker }}" required>
        </div>

        <div class="form-group">
            <label for="title">Title/Theme</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $worshipSummary->title }}" required>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" required>{{ $worshipSummary->content }}</textarea>
        </div>

        <div class="form-group">
            <label for="bible_verses">Bible Verses</label>
            <textarea name="bible_verses" id="bible_verses" class="form-control" required>{{ $worshipSummary->bible_verses }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
