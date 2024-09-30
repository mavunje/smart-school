<!-- resources/views/interviews/show.blade.php -->

@extends('pannel.layouts.app')

@section('content')
<div class="container">
    <h1>Interview Details</h1>

    <p><strong>ID:</strong> {{ $interview->id }}</p>
    <p><strong>Applicant ID:</strong> {{ $interview->applicant_id }}</p>
    <p><strong>Interview Date:</strong> {{ $interview->interview_date }}</p>
    <p><strong>Interviewer Name:</strong> {{ $interview->interviewer_name }}</p>
    <p><strong>Location:</strong> {{ $interview->location }}</p>
    <p><strong>Duration:</strong> {{ $interview->duration }}</p>
    <p><strong>Attended:</strong> {{ $interview->attended ? 'Yes' : 'No' }}</p>
    <p><strong>Score:</strong> {{ $interview->score }}</p>
    <p><strong>Remarks:</strong> {{ $interview->remarks }}</p>
    <p><strong>Result:</strong> {{ $interview->result }}</p>

    <a href="{{ route('interviews.index') }}" class="btn btn-primary">Back to Interviews</a>
</div>
@endsection
