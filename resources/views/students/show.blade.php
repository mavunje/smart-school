@extends('pannel.layouts.app')

@section('content')

<div class="container">
    <h1 class="mt-4 mb-4">Student Individual Details</h1>

    <div class="card">
        <div class="card-header">
            <h5>Student Information</h5>
            <a href="{{ url('students') }}" class="btn btn-primary mb-3 float-end">Back to Main</a>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item"><strong>ID:</strong> {{ $student->id }}</li>
                <li class="list-group-item"><strong>Full Name:</strong> {{ $student->full_name }}</li>
                <li class="list-group-item"><strong>Date of Birth:</strong> {{ \Carbon\Carbon::parse($student->dob)->format('d M Y') }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ $student->email }}</li>
                <li class="list-group-item"><strong>Gender:</strong> {{ ucfirst($student->gender) }}</li>
                <li class="list-group-item"><strong>Nationality:</strong> {{ $student->nationality }}</li>
                <li class="list-group-item"><strong>Citizenship:</strong> {{ $student->citizenship }}</li>
                <li class="list-group-item"><strong>Religion:</strong> {{ $student->religion }}</li>
                <li class="list-group-item"><strong>Parent/Guardian:</strong> {{ $student->parent_full_name }}</li>
                <li class="list-group-item"><strong>Parent Nationality:</strong> {{ $student->parent_nationality }}</li>
                <li class="list-group-item"><strong>Parent Citizenship:</strong> {{ $student->parent_citizenship }}</li>
                <li class="list-group-item"><strong>Parent Address:</strong> {{ $student->parent_address }}</li>
                <li class="list-group-item"><strong>Place of Residence:</strong> {{ $student->parent_residence }}</li>
                <li class="list-group-item"><strong>Previous Schools Attended:</strong> {{ $student->previous_schools }}</li>
            </ul>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this student?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
