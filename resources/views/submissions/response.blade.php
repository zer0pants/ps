{{-- TODO - implement layout and form --}}
@extends('layout')

@section('content')
    <h3>✅ Submission successful</h1>
    <p>Submitted at {{ $submission->created_at }}</p>
    <br>
    <div class="card bg-light">
        <div class="card-body">
            <h2>{{ $submission->name }}</h2>
            <ul>
                <li>{{ $submission->email }}</li>
                <li>{{ $submission->phone }}</li>
                <li>{{ $submission->mobile }}</li>
                <li>{{ $submission->address }}</li>
            </ul>
            <p>Thank you for your submission. We'll be in contact with you shortly.</p>
        </div>
    </div>
    <br>
    <div>
        <a href="{{ route('submissions.show', $submission->id) }}">View your full submission &rarr;</a><br>
        <a href="{{ route('submissions.create') }}">Create another &rarr;</a><br>
    </div>
@endsection