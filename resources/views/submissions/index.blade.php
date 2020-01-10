{{-- TODO - implement layout and form --}}
@extends('layout')

@section('content')
    <h1>Submissions</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>Short Description</th>
                <th>Long Description</th>
                <th>Created At</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($submissions as $submission)
            <tr>
                <td>{{ $submission->name }}</td>
                <td>{{ $submission->email }}</td>
                <td>{{ $submission->phone }}</td>
                <td>{{ $submission->mobile }}</td>
                <td>{{ $submission->address }}</td>
                <td>{{ $submission->description_short }}</td>
                <td>{{ $submission->description_long }}</td>
                <td>{{ $submission->created_at }}</td>
                <td>
                    <a href="{{ route('submissions.show', $submission) }}">
                        &rarr;
                    </a>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
@endsection