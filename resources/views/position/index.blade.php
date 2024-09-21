@extends('pannel.layouts.app')

@section('content')
  <b>  <h4>Positions List</h4></b>
    <a href="{{ route('position.create') }}" class="btn btn-primary float-end">Add New Position</a>

{{--
    <div class="d-flex justify-content-space-between">


    @foreach($workers as $worker)
    <td>
        @if($worker->photo)
            <img src="{{ asset('uploads/photos/' . $worker->photo) }}" alt="Photo" width="50">
        @endif
    </td>

    @endforeach

   <label for="gender">Gender</label>:
   <p> {{ $teachers[0]->gender ?? '' }} </p><br><br>
   <label for="phone">Phone</label>:{{ $teachers[0]->phone ?? '' }}

</div> --}}



    <table class="table">
        <thead>
            <tr>

                <th>Status</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>


            @foreach($positions as $position)
                <tr>


                    <td>{{ $position->name }}</td>
                    <td>{{ $position->position }}</td>
                    <td>
                        <a href="{{ route('position.show', $position->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('position.edit', $position->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('position.destroy', $position->id) }}" method="POST" style="display:inline;">
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
