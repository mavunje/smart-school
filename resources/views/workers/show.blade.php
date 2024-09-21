@extends('pannel.layouts.app')

@section('content')
    <h1>Worker Details</h1>

    <p><strong>Name:</strong> {{ $worker->name }}</p>

 <p><strong>Position:</strong> {{ $worker->position }}</p>
    @if($worker->photo)
        <p><strong>Photo:</strong></p>
        <img src="{{ asset('uploads/photos/' . $worker->photo) }}" alt="Photo" width="100">
    @endif

    @if($worker->certificate)
        <p><strong>Certificate:</strong></p>
        <a href="{{ asset('uploads/certificates/' . $worker->certificate) }}" target="_blank">View Certificate</a>
    @endif

    <a href="{{ route('workers.index') }}" class="btn btn-primary float-end">Back to List</a>
@endsection
