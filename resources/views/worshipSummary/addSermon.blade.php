@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="container">
            <h2> <b> Create Sermon Summary </b> </h2>

            <form action="{{ route('worshipSummary.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="worship_id">Worship</label>
                    <select name="worship_id" id="worship_id" class="form-control" required>
                        @foreach($worships as $worship)
                            <option value="{{ $worship->id }}">{{ $worship->date }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="speaker">Speaker</label>
                    <input type="text" name="speaker" id="speaker" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="title">Title/Theme</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label for="bible_verses">Bible Verses</label>
                    <textarea name="bible_verses" id="bible_verses" class="form-control" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection
