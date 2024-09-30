<!-- resources/views/interviews/index.blade.php -->

@extends('pannel.layouts.app')

@section('content')
<div class="container">
    <h1>Interviews</h1>
    <a href="{{ route('interviews.create') }}" class="btn btn-primary">Add Interview</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Applicant ID</th>
                <th>Interview Date</th>
                <th>Interviewer Name</th>
                <th>Location</th>
                <th>Attended</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($interviews as $interview)
                <tr>
                    <td>{{ $interview->id }}</td>
                    <td>{{ $interview->applicant_id }}</td>
                    <td>{{ $interview->interview_date }}</td>
                    <td>{{ $interview->interviewer_name }}</td>
                    <td>{{ $interview->location }}</td>
                    <td>{{ $interview->attended ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('interviews.edit', $interview->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('interviews.destroy', $interview->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
