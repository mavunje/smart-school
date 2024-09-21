@extends('pannel.layouts.app')

@section('content')
<a href="{{ route('workers.index') }}" class="btn btn-primary float-end">Back to List</a>
    <h1>Edit Worker</h1>

    <form action="{{ route('workers.update', $worker->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $worker->name }}" required>
        </div>

        <div class="form-group">
            <label for="name">Position</label>
            <input type="text" name="position" class="form-control" value="{{ $worker->position }}" required>
        </div>

        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" class="form-control">
            @if($worker->photo)
                <img src="{{ asset('uploads/photos/' . $worker->photo) }}" alt="Photo" width="100">
            @endif
        </div>

        <div class="form-group">
            <label for="certificate">Certificate</label>
            <input type="file" name="certificate" class="form-control">
            @if($worker->certificate)
                <a href="{{ asset('uploads/certificates/' . $worker->certificate) }}" target="_blank">View Certificate</a>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
