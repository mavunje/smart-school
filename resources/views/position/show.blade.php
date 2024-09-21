@extends('pannel.layouts.app')

@section('content')
    <h1>Position Details</h1>

    <p><strong>Name:</strong> {{ $position->name }}</p>
    <p><strong>Position:</strong> {{ $position->position }}</p>

    <a href="{{ route('position.index') }}" class="btn btn-primary float-end">Back to List</a>
@endsection
