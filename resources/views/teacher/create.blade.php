@extends('pannel.layouts.app')

@section('content')

<h3 class="text-align-centre top-0"><b>Teachers Registration Form</b></h3>
<div class="container my-5">
    <div class="card">
        <div class="card-header bg-light text-dark d-flex justify-content-between align-items-center ">
            <b> Teachers Employment Contract</b>
            <h1>Hello teachers</h1>
            <a href="{{ url('teacher') }}" class="btn btn-primary">Go Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('teacher.store') }}" method="post" class="space-y-6" enctype="multipart/form-data">
                @csrf

                <!-- Personal Information -->
                <fieldset class="mb-4">
                    <legend class="h5">Personal Information</legend>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="fullName" class="form-label">First Name</label>
                            <input type="text" id="fullName" name="fname" class="form-control" placeholder="First Name" value="{{ old('fname') }}">
                            @error('fname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="address" class="form-label">Last Name</label>
                            <input type="text" id="address" name="lname" class="form-control" placeholder="Second Name" value="{{ old('lname') }}">
                            @error('lname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="gender" class="form-label">Gender</label>
                            <select id="gender" name="gender" class="form-select">
                                <option value="">Select Gender</option>
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                <!-- Add more gender options if needed -->
                            </select>
                            @error('gender')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="accountNumber" class="form-label">Account Number</label>
                            <input type="text" id="accountNumber" name="accountNumber" class="form-control" placeholder="Account Number" value="{{ old('accountNumber') }}">
                            @error('accountNumber')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number" value="{{ old('phone') }}">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </fieldset>

                <!-- Employment Details -->
                <fieldset class="mb-4">
                    <legend class="h5">Employment Details</legend>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="jobTitle" class="form-label">Job Title</label>
                            <select id="jobTitle" name="jobTitle" class="form-select">
                                <option value="">Select Job Title</option>
                                <option value="academic" {{ old('jobTitle') == 'academic' ? 'selected' : '' }}>Academic</option>
                                <option value="teacher" {{ old('jobTitle') == 'teacher' ? 'selected' : '' }}>Teacher</option>
                                <option value="labTechnician" {{ old('jobTitle') == 'labTechnician' ? 'selected' : '' }}>Lab Technician</option>
                                <option value="headmaster" {{ old('jobTitle') == 'headmaster' ? 'selected' : '' }}>Headmaster</option>
                                <option value="headmistress" {{ old('jobTitle') == 'headmistress' ? 'selected' : '' }}>Headmistress</option>
                                <option value="administrativeStaff" {{ old('jobTitle') == 'administrativeStaff' ? 'selected' : '' }}>Administrative Staff</option>
                                <!-- Add more job titles as needed -->
                            </select>
                            @error('jobTitle')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="department" class="form-label">Department</label>
                            <select id="department" name="department" class="form-select">
                                <option value="">Select Department</option>
                                <option value="mathematics" {{ old('department') == 'mathematics' ? 'selected' : '' }}>Mathematics</option>
                                <option value="science" {{ old('department') == 'science' ? 'selected' : '' }}>Science</option>
                                <option value="english" {{ old('department') == 'english' ? 'selected' : '' }}>English</option>
                                <option value="history" {{ old('department') == 'history' ? 'selected' : '' }}>History</option>
                                <option value="geography" {{ old('department') == 'geography' ? 'selected' : '' }}>Geography</option>
                                <option value="languages" {{ old('department') == 'languages' ? 'selected' : '' }}>Languages</option>
                                <option value="arts" {{ old('department') == 'arts' ? 'selected' : '' }}>Arts</option>
                                <!-- Add more subjects or departments as needed -->
                            </select>
                            @error('department')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="employmentType" class="form-label">Employment Type</label>
                            <select id="employmentType" name="employmentType" class="form-select">
                                <option value="">Select Employment Type</option>
                                <option value="full-time" {{ old('employmentType') == 'full-time' ? 'selected' : '' }}>Full-time</option>
                                <option value="part-time" {{ old('employmentType') == 'part-time' ? 'selected' : '' }}>Part-time</option>
                                <option value="contract" {{ old('employmentType') == 'contract' ? 'selected' : '' }}>Contract</option>
                            </select>
                            @error('employmentType')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </fieldset>

                <!-- Contract Duration -->
                <fieldset class="mb-4">
                    <legend class="h5">Contract Duration</legend>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="startDate" class="form-label">Start Date</label>
                            <input type="date" id="startDate" name="startDate" class="form-control" value="{{ old('startDate') }}">
                            @error('startDate')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="endDate" class="form-label">End Date</label>
                            <input type="date" id="endDate" name="endDate" class="form-control" value="{{ old('endDate') }}">
                            @error('endDate')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </fieldset>

                <!-- Work Schedule -->
                <fieldset class="mb-4">
                    <legend class="h5">Work Schedule</legend>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="workDays" class="form-label">Work Days Per Week</label>
                            <select id="workDays" name="workDays" class="form-select">
                                <option value="">Select Number of Days</option>
                                <option value="5" {{ old('workDays') == '5' ? 'selected' : '' }}>5 Days</option>
                                <option value="6" {{ old('workDays') == '6' ? 'selected' : '' }}>6 Days</option>
                                <option value="7" {{ old('workDays') == '7' ? 'selected' : '' }}>7 Days</option>
                            </select>
                            @error('workDays')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="workHoursPerDay" class="form-label">Working Hours Per Day</label>
                            <select id="workHoursPerDay" name="workHoursPerDay" class="form-select">
                                <option value="">Select Hours Per Day</option>
                                <option value="4" {{ old('workHoursPerDay') == '4' ? 'selected' : '' }}>4 Hours</option>
                                <option value="5" {{ old('workHoursPerDay') == '5' ? 'selected' : '' }}>5 Hours</option>
                                <option value="6" {{ old('workHoursPerDay') == '6' ? 'selected' : '' }}>6 Hours</option>
                                <option value="7" {{ old('workHoursPerDay') == '7' ? 'selected' : '' }}>7 Hours</option>
                                <option value="8" {{ old('workHoursPerDay') == '8' ? 'selected' : '' }}>8 Hours</option>
                                <option value="9" {{ old('workHoursPerDay') == '9' ? 'selected' : '' }}>9 Hours</option>
                                <option value="10" {{ old('workHoursPerDay') == '10' ? 'selected' : '' }}>10 Hours</option>
                            </select>
                            @error('workHoursPerDay')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </fieldset>

                <!-- Certifications -->
                <fieldset class="mb-4">
                    <legend class="h5">Certifications</legend>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="certifications" class="form-label">Upload Certifications</label><br>
                            <span>Eg. university certifications for Bachelor degree/Diploma</span>
                            <input type="file" id="certifications" name="certifications[]" class="form-control" multiple>
                            @error('certifications')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </fieldset>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit Contract</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
