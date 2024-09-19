@extends('pannel.layouts.app')

@section('content')
    <div class="mb-4">
        <h1 class="display-4 font-weight-bold text-primary">Student Detailed informations</h1>
        <!-- Go Back Button -->
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ url('form1') }}"
               class="btn btn-success">
                <i class="fas fa-arrow-left me-2"></i>
                Go Back
            </a>
        </div>
    </div>

    <form action="{{ route('form1.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf

        <!-- Student Personal Information -->
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="studentName" class="form-label">Full Name</label>
                    <input type="text" id="studentName" name="name"
                           class="form-control" required>
                </div>
                @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" id="dob" name="date"
                           class="form-control" required>
                </div>
                @error('date')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select id="gender" name="gender" class="form-select" required>
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                @error('gender')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="region" class="form-label">Region/District</label>
                    <input type="text" id="region" name="region"
                           class="form-control" required>
                </div>
                @error('region')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="dioces" class="form-label">Select Diocese</label>
                    <input type="text" id="dioces" name="dioces"
                           class="form-control" required>
                </div>
                @error('dioces')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="nationality" class="form-label">Nationality/Citizenship</label>
                    <input type="text" id="nationality" name="nation"
                           class="form-control" required>
                </div>
                @error('nation')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="studentPhoto" class="form-label">Student Photo</label>
                    <input type="file" id="studentPhoto" name="photo"
                           class="form-control">
                </div>
            </div>
        </div>
        @error('photo')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
        <!-- Contact Information -->
        <div class="mb-3">
            <label for="address" class="form-label">Home Address</label>
            <input type="text" id="address" name="address"
                   class="form-control" required>
        </div>
        @error('address')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" id="phone" name="phone"
                           class="form-control" required>
                </div>
                @error('phone')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email"
                           class="form-control" required>
                </div>
                @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <!-- Parent/Guardian Information -->
        <div class="mb-3">
            <label for="guardianName" class="form-label">Parent/Guardian Name</label>
            <input type="text" id="guardianName" name="parname"
                   class="form-control" required>
        </div>
        @error('parname')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
        <div class="mb-3">
            <label for="guardianPhone" class="form-label">Phone Number</label>
            <input type="tel" id="guardianPhone" name="parphone"
                   class="form-control" required>
        </div>
        @error('parphone')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
        <div class="mb-3">
            <label for="guardianEmail" class="form-label">Email Address</label>
            <input type="email" id="guardianEmail" name="paremail"
                   class="form-control" required>
        </div>
        @error('paremail')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
        <!-- Emergency Contact Information -->
        <div class="mb-3">
            <label for="emergencyContactPhone" class="form-label">Emergency Contact Phone</label>
            <input type="tel" id="emergencyContactPhone" name="emergencephone"
                   class="form-control" required>
        </div>
        <!-- Medical Information -->
        <div class="mb-3">
            <label for="medicalConditions" class="form-label">Health Problems</label>
            <textarea id="medicalConditions" name="health"
                      class="form-control" rows="3" required></textarea>
        </div>
        @error('health')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
        <div class="mb-3">
            <label for="medications" class="form-label">Physical Disabilities</label>
            <textarea id="medications" name="disability"
                      class="form-control" rows="3" required></textarea>
        </div>
        @error('disability')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
        <!-- Submit Button -->
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
@endsection
