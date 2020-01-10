{{-- TODO - implement layout and form --}}
@extends('layout')

@section('content')
    <h1>Submission form</h1>
    <form method="POST" action="{{ route('submissions.store') }}">
        @csrf

        {{-- Name --}}
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Email --}}
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror">
            <small id="email-help" class="form-text text-muted">We'll never share your email with anyone else.</small>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Phone --}}
        <div class="form-group">
            <label for="phone">Phone</label>
            <input id="phone" name="phone" type="tel" class="form-control @error('phone') is-invalid @enderror">
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Mobile --}}
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input id="mobile" name="mobile" type="tel" class="form-control @error('mobile') is-invalid @enderror">
            @error('mobile')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Address --}}
        <div class="form-group">
            <label for="address">Address</label>
            <input id="address" name="address" type="text" class="form-control @error('address') is-invalid @enderror">
            @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Description (Short) --}}
        <div class="form-group">
            <label for="description_short">Short Description</label>
            <input id="description_short" name="description_short" type="text" class="form-control @error('description_short') is-invalid @enderror">
            @error('description_short')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Description (Long) --}}
        <div class="form-group">
            <label for="description_long">Detailed Description</label>
            <textarea id="description_long" 
                    name="description_long" 
                    type="textarea" 
                    rows="10" 
                    class="form-control @error('description_long') is-invalid @enderror"></textarea>
            @error('description_long')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection