{{-- TODO - implement layout and form --}}
@extends('layout')

@section('content')
    <h3>✅ Submission successful</h1>
    <p>Submitted at {{ $submission->created_at }}</p>
    <br>
    <div class="card bg-light">
        <div class="card-body">
            <h3>{{ $submission->name }}</h2>
            <p>{{ $submission->email }}</p>
            <p>Thank you for your submission. We'll be in contact with you shortly.</p>
        </div>
    </div>
    <br>
    <div>
        <a href="{{ route('submissions.show', $submission->id) }}">View your full submission &rarr;</a><br>
        <a href="{{ route('submissions.create') }}">Create another &rarr;</a><br>
    </div>
@endsection