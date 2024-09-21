@extends('pannel.layouts.app')

@section('content')
    <b><h4>Workers List</h4></b>
    <a href="{{ route('workers.create') }}" class="btn btn-primary float-end">Add New Worker</a>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Photo</th>
                <th>Position</th>
                <th>Certificate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($workers as $worker)
                <tr>
                    <td>{{ $worker->name }}</td>

                    <td>
                        @if($worker->photo)
                            <img src="{{ asset('uploads/photos/' . $worker->photo) }}" alt="Photo" width="50">
                        @endif
                    </td>
                    <td>{{ $worker->position}}</td>
                    <td>
                        @if($worker->certificate)
                            <a href="{{ asset('uploads/certificates/' . $worker->certificate) }}" target="_blank">View Certificate</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('workers.show', $worker->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('workers.edit', $worker->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('workers.destroy', $worker->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
