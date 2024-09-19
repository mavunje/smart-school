@extends('pannel.layouts.app')

@section('content')
    <div class="mb-4">
        <h1 class="display-4 font-weight-bold text-primary">Edit Student informations</h1>
        <!-- Go Back Button -->
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ url('form1') }}"
                class="btn btn-success">
                <i class="fas fa-arrow-left me-2"></i>
                Go Back
            </a>
        </div>

        <form action="{{ route('form1.update', $form1->id) }}" method="POST" class="needs-validation" novalidate>
            @csrf
            @method('PUT')
            <!-- Student Personal Information -->
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="studentName" class="form-label">Full Name</label>
                        <input type="text" id="studentName" name="name"
                               class="form-control" value="{{ $form1->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" id="dob" name="date"
                               class="form-control" value="{{ $form1->date }}">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select id="gender" name="gender" class="form-select">
                            <option selected>{{ $form1->gender }}</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="region" class="form-label">Region/District</label>
                        <input type="text" id="region" name="region" class="form-control" value="{{ $form1->region }}">
                    </div>
                    <div class="mb-3">
                        <label for="dioces" class="form-label">Select Diocese</label>
                        <input type="text" id="dioces" name="dioces" class="form-control" value="{{ $form1->dioces }}">
                    </div>
                    <div class="mb-3">
                        <label for="nationality" class="form-label">Nationality/Citizenship</label>
                        <input type="text" id="nationality" name="nation" class="form-control" value="{{ $form1->nation }}">
                    </div>
                    <div class="mb-3">
                        <label for="studentPhoto" class="form-label">Student Photo</label>
                        <input type="file" id="studentPhoto" name="photo" class="form-control">
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="mb-3">
                <label for="address" class="form-label">Home Address</label>
                <input type="text" id="address" name="address" class="form-control" value="{{ $form1->address }}">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" value="{{ $form1->phone }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ $form1->email }}">
                    </div>
                </div>
            </div>

            <!-- Parent/Guardian Information -->
            <div class="mb-3">
                <label for="guardianName" class="form-label">Parent/Guardian Name</label>
                <input type="text" id="guardianName" name="parname" class="form-control" value="{{ $form1->parname }}">
            </div>
            <div class="mb-3">
                <label for="guardianPhone" class="form-label">Phone Number</label>
                <input type="tel" id="guardianPhone" name="parphone" class="form-control" value="{{ $form1->parphone }}">
            </div>
            <div class="mb-3">
                <label for="guardianEmail" class="form-label">Email Address</label>
                <input type="email" id="guardianEmail" name="paremail" class="form-control" value="{{ $form1->paremail }}">
            </div>

            <!-- Emergency Contact Information -->
            <div class="mb-3">
                <label for="emergencyContactPhone" class="form-label">Emergency Contact Phone</label>
                <input type="tel" id="emergencyContactPhone" name="emergencephone" class="form-control" value="{{ $form1->emergencephone }}">
            </div>

            <!-- Medical Information -->
            <div class="mb-3">
                <label for="medicalConditions" class="form-label">Health Problems</label>
                <input type="text" id="medicalConditions" name="health" class="form-control" value="{{ $form1->health }}">
            </div>
            <div class="mb-3">
                <label for="medications" class="form-label">Physical Disabilities</label>
                <input type="text" id="medications" name="disability" class="form-control" value="{{ $form1->disability }}">
            </div>

            <!-- Submit Button -->
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
