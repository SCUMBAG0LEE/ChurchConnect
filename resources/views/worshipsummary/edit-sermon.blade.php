@extends('layouts.master')

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="container">
            <h2>Edit Worship Summary</h2>

            <div class="card common-shadow">
                <div class="card-body">
                    <form id="update-form" action="{{ route('worshipSummary.update', $worshipSummary->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="worship_id">Worship</label>
                            <select name="worship_id" id="worship_id" class="form-control" required>
                                @foreach($worships as $worship)
                                    <option value="{{ $worship->id }}" {{ $worship->id == $worshipSummary->worship_id ? 'selected' : '' }}>
                                        {{ $worship->date }} - {{ $worship->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="speaker">Speaker</label>
                            <input type="text" name="speaker" id="speaker" class="form-control" value="{{ $worshipSummary->speaker }}" required>
                        </div>

                        <div class="form-group">
                            <label for="title">Title/Theme</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $worshipSummary->sermonTitle }}" required>
                        </div>

                        <div class="form-group">
                            <label for="content">Content (URL Link)</label>
                            <input type="text" name="content" id="content" class="form-control" value="{{ $worshipSummary->content }}" required>
                            <small class="form-text text-muted">Enter the URL link for content.</small>
                        </div>

                        <div class="form-group">
                            <label for="bible_verses">Bible Verses</label>
                            <textarea name="bible_verses" id="bible_verses" class="form-control" required>{{ $worshipSummary->bibleVerse }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('update-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form from submitting normally

        const form = event.target;
        const formData = new FormData(form);
        const url = form.action;

        fetch(url, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.success);
                form.reset(); // Reset the form fields

                // Wait for a short delay before reloading to ensure form reset completes
                setTimeout(() => {
                    location.reload(); // Reload the page on success
                }, 500); // Adjust delay as needed
            } else {
                alert('Error updating worship summary.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error updating worship summary.');
        });
    });
</script>
@endsection
