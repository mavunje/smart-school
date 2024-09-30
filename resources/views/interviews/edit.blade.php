<!-- resources/views/interviews/edit.blade.php -->

@extends('pannel.layouts.app')

@section('content')
<div class="container">
    <h1>Edit Interview</h1>

    <form action="{{ route('interviews.update', $interview->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="applicant_id">Applicant ID</label>
            <input type="text" name="applicant_id" class="form-control" value="{{ $interview->applicant_id }}" required>
        </div>
        <div class="form-group">
            <label for="interview_date">Interview Date</label>
            <input type="datetime-local" name="interview_date" class="form-control" value="{{ $interview->interview_date }}" required>
        </div>
        <div class="form-group">
            <label for="interviewer_name">Interviewer Name</label>
            <input type="text" name="interviewer_name" class="form-control" value="{{ $interview->interviewer_name }}" required>
        </div>
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" class="form-control" value="{{ $interview->location }}">
        </div>
        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="time" name="duration" class="form-control" value="{{ $interview->duration }}">
        </div>
        <div class="form-group">
            <label for="attended">Attended</label>
            <select name="attended" class="form-control">
                <option value="0" {{ $interview->attended ? '' : 'selected' }}>No</option>
                <option value="1" {{ $interview->attended ? 'selected' : '' }}>Yes</option>
            </select>
        </div>
        <div class="form-group">
            <label for="score">Score</label>
            <input type="number" name="score" step="0.01" class="form-control" value="{{ $interview->score }}">
        </div>
        <div class="form-group">
            <label for="remarks">Remarks</label>
            <textarea name="remarks" class="form-control">{{ $interview->remarks }}</textarea>
        </div>
        <div class="form-group">
            <label for="result">Result</label>
            <input type="text" name="result" class="form-control" value="{{ $interview->result }}">
        </div>
        <button type="submit" class="btn btn-success">Update Interview</button>
    </form>
</div>
@endsection
