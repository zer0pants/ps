{{-- TODO - implement layout and form --}}
@extends('layout')

@section('content')
    
    <h1>Submission</h1>
    <p>Submitted at {{ $submission->created_at }}</p>

    <h3>👷‍♂️This feature is coming soon!</h3>

    <pre>
        {{ print_r($submission->toArray(), true)}}
    </pre>

    <div>
        <a href="{{ route('submissions.create') }}">Create another &rarr;</a><br>
        <a href="{{ route('submissions.index') }}">View all &rarr;</a>
    </div>
@endsection