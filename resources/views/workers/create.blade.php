@extends('pannel.layouts.app')

@section('content')
    <h1>Add New Worker</h1>

    <form action="{{ route('workers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="user_id">Name</label>
            <select name="name" id="user_id" class="form-control" required>
                <option value="">Select a user</option>
                @foreach ($positions as $position)
                    <option>{{ $position->name }}</option>
                @endforeach
            </select>
        </div>


       <div class="form-group mb-3">
            <label for="user_id">Position</label>
            <select name="position" id="user_id" class="form-control" required>
                <option value="">Select a user</option>
                @foreach ($positions as $position)
                    <option>{{ $position->position }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="photo">Photo</label>
            <input type="file" name="photo" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="certificate">Certificate</label>
            <input type="file" name="certificate" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
