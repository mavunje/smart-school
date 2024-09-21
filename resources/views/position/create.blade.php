@extends('pannel.layouts.app')

@section('content')
<a href="{{ route('position.index') }}" class="btn btn-primary float-end">Back to List</a>
    <b><h4>Add New Position</h4></b>



    <form action="{{ route('position.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="user_id">Status</label>
            <select name="name" id="user_id" class="form-control" required>
                <option value="">Select a user</option>
                @foreach ($users as $user)
                    <option>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="position">Position</label>
            <input type="text" name="position" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
