{{-- TODO - implement layout and form --}}
@extends('layout')

@section('content')
    <h1>Success!</h1>

    <pre>
        {{ print_r($data, true) }}
    </pre>

    <div>
        <a href="{{ route('submissions.create') }}">Create another &rarr;</a><br>
        <a href="{{ route('submissions.index') }}">View existing submissions &rarr;</a>
    </div>
@endsection