<!-- resources/views/interviews/create.blade.php -->

@extends('pannel.layouts.app')

@section('content')
<div class="container">
    <h1>Add Interview</h1>

    <form action="{{ route('interviews.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="applicant_id">Applicant ID</label>
            <input type="text" name="applicant_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="interview_date">Interview Date</label>
            <input type="datetime-local" name="interview_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="interviewer_name">Interviewer Name</label>
            <input type="text" name="interviewer_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" class="form-control">
        </div>
        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="time" name="duration" class="form-control">
        </div>
        <div class="form-group">
            <label for="attended">Attended</label>
            <select name="attended" class="form-control">
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <div class="form-group">
            <label for="score">Score</label>
            <input type="number" name="score" step="0.01" class="form-control">
        </div>
        <div class="form-group">
            <label for="remarks">Remarks</label>
            <textarea name="remarks" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="result">Result</label>
            <input type="text" name="result" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Add Interview</button>
    </form>
</div>
@endsection
