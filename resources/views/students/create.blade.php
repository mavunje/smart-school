@extends('pannel.layouts.app')

@section('content')
<div class="container">
    <h1>Add New Student</h1>
    <a href="{{ url('students') }}" class="btn btn-primary mb-3 float-end">Back to Main</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h3>Student Information</h3>
        <div class="form-group mb-3">
            <label for="full_name"><strong>Full Name of Student</strong></label>
            <input type="text" class="form-control" name="full_name" id="full_name" required>
        </div>
        <div class="form-group mb-3">
            <label for="dob"><strong>Date of Birth</strong></label>
            <input type="date" class="form-control" name="dob" id="dob" required>
        </div>


        <div class="form-group mb-3">
            <label for="email"><strong>Email</strong></label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="form-group mb-3">
            <label for="gender"><strong>Gender</strong></label>
            <select class="form-control" name="gender" id="gender" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="nationality"><strong>Nationality</strong></label>
            <select class="form-control" name="nationality" id="nationality" required>
                <option value="">Select Nationality</option>
                <option value="Tanzanian">Tanzanian</option>
                <option value="Kenyan">Kenyan</option>
                <option value="Ugandan">Ugandan</option>
                <option value="Rwandan">Rwandan</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="citizenship"><strong>Citizenship</strong></label>
            <select class="form-control" name="citizenship" id="citizenship" required>
                <option value="">Select Citizenship</option>
                <option value="Tanzanian">Tanzanian</option>
                <option value="Kenyan">Kenyan</option>
                <option value="Ugandan">Ugandan</option>
                <option value="Rwandan">Rwandan</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="religion"><strong>Religion</strong></label>
            <select class="form-control" name="religion" id="religion" required>
                <option value="">Select Religion</option>
                <option value="Christianity">Christianity</option>
                <option value="Islam">Islam</option>
                <option value="Hinduism">Hinduism</option>
                <option value="Buddhism">Buddhism</option>
                <option value="Other">Other</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="student_photo"><strong>Student Photo</strong></label>
            <input type="file" class="form-control-file" name="student_photo" id="student_photo">
        </div>

        <h3>Parent/Guardian Information</h3>
        <div class="form-group mb-3">
            <label for="parent_full_name"><strong>Full Name of Parent/Guardian</strong></label>
            <input type="text" class="form-control" name="parent_full_name" id="parent_full_name" required>
        </div>
        <div class="form-group mb-3">
            <label for="parent_nationality"><strong>Nationality</strong></label>
            <select class="form-control" name="parent_nationality" id="parent_nationality" required>
                <option value="">Select Nationality</option>
                <option value="Tanzanian">Tanzanian</option>
                <option value="Kenyan">Kenyan</option>
                <option value="Ugandan">Ugandan</option>
                <option value="Rwandan">Rwandan</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="parent_citizenship"><strong>Citizenship</strong></label>
            <select class="form-control" name="parent_citizenship" id="parent_citizenship" required>
                <option value="">Select Citizenship</option>
                <option value="Tanzanian">Tanzanian</option>
                <option value="Kenyan">Kenyan</option>
                <option value="Ugandan">Ugandan</option>
                <option value="Rwandan">Rwandan</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="parent_address"><strong>Parent/Guardian Address</strong></label>
            <input type="text" class="form-control" name="parent_address" id="parent_address" required>
        </div>
        <div class="form-group mb-3">
            <label for="parent_residence"><strong>Place of Residence</strong></label>
            <input type="text" class="form-control" name="parent_residence" id="parent_residence" required>
        </div>
        <div class="form-group mb-3">
            <label for="parent_photo"><strong>Parent Photo</strong></label>
            <input type="file" class="form-control-file" name="parent_photo" id="parent_photo">
        </div>



        <h3>Previous Schools</h3>
        <div class="form-group mb-3">
            <label for="previous_schools"><strong>Previous Schools Attended</strong></label>
            <textarea class="form-control" name="previous_schools" id="previous_schools" rows="4" placeholder="School Name, Start Date, End Date"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</form>
    </div>
@endsection
