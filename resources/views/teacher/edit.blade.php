@extends('pannel.layouts.app')

@section('content')
    <h3 class="text-align-centre top-0"><b>Teachers Updating Contract Form</b></h3>
    <div class="container my-5">
        <div class="card">
            <div class="card-header bg-light text-dark d-flex justify-content-between align-items-center ">
                <b> Teachers Employment Contract</b>
                <p>welcome</p>
                <a href="{{ url('teacher') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('teacher.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <fieldset class="mb-4">
                        <legend class="h5">Personal Information</legend>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="fullName" class="form-label">First Name</label>
                                <input type="text" id="fullName" name="fname" class="form-control"
                                    placeholder="First Name" value="{{ old('fname', $teacher->fname) }}">
                            </div>
                            <div class="col-md-6">
                                <label for="address" class="form-label">Last Name</label>
                                <input type="text" id="address" name="lname" class="form-control"
                                    placeholder="Second Name" value="{{ old('lname', $teacher->lname) }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control"
                                    placeholder="Phone Number" value="{{ old('phone', $teacher->phone) }}">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Email Address" value="{{ old('email', $teacher->email) }}">
                            </div>
                        </div>
                    </fieldset>
                    <p class="bg-info text-white text-align-center"><b>The information below you can edit or leave to keep
                            the previous information</b></p>
                    <fieldset class="mb-4">
                        <legend class="h5">Employment Details</legend>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="jobTitle" class="form-label">Job Title</label>
                                <select id="jobTitle" name="jobTitle" class="form-select">
                                    <option value="">Select Job Title</option>
                                    <option value="academic" {{ old('jobTitle', $teacher->jobTitle) == 'academic' ? 'selected' : '' }}>Academic</option>
                                    <option value="teacher" {{ old('jobTitle', $teacher->jobTitle) == 'teacher' ? 'selected' : '' }}>Teacher</option>
                                    <option value="labTechnician" {{ old('jobTitle', $teacher->jobTitle) == 'labTechnician' ? 'selected' : '' }}>Lab Technician</option>
                                    <option value="headmaster" {{ old('jobTitle', $teacher->jobTitle) == 'headmaster' ? 'selected' : '' }}>Headmaster</option>
                                    <option value="headmistress" {{ old('jobTitle', $teacher->jobTitle) == 'headmistress' ? 'selected' : '' }}>Headmistress</option>
                                    <option value="administrativeStaff" {{ old('jobTitle', $teacher->jobTitle) == 'administrativeStaff' ? 'selected' : '' }}>Administrative Staff</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="department" class="form-label">Department</label>
                                <select id="department" name="department" class="form-select">
                                    <option value="">Select Department</option>
                                    <option value="mathematics" {{ old('department', $teacher->department) == 'mathematics' ? 'selected' : '' }}>Mathematics</option>
                                    <option value="science" {{ old('department', $teacher->department) == 'science' ? 'selected' : '' }}>Science</option>
                                    <option value="english" {{ old('department', $teacher->department) == 'english' ? 'selected' : '' }}>English</option>
                                    <option value="history" {{ old('department', $teacher->department) == 'history' ? 'selected' : '' }}>History</option>
                                    <option value="geography" {{ old('department', $teacher->department) == 'geography' ? 'selected' : '' }}>Geography</option>
                                    <option value="languages" {{ old('department', $teacher->department) == 'languages' ? 'selected' : '' }}>Languages</option>
                                    <option value="arts" {{ old('department', $teacher->department) == 'arts' ? 'selected' : '' }}>Arts</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="employmentType" class="form-label">Employment Type</label>
                                <select id="employmentType" name="employmentType" class="form-select">
                                    <option value="">Select Employment Type</option>
                                    <option value="full-time" {{ old('employmentType', $teacher->employmentType) == 'full-time' ? 'selected' : '' }}>Full-time</option>
                                    <option value="part-time" {{ old('employmentType', $teacher->employmentType) == 'part-time' ? 'selected' : '' }}>Part-time</option>
                                    <option value="contract" {{ old('employmentType', $teacher->employmentType) == 'contract' ? 'selected' : '' }}>Contract</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-4">
                        <legend class="h5">Contract Duration</legend>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="startDate" class="form-label">Start Date</label>
                                <input type="date" id="startDate" name="startDate" class="form-control"
                                    value="{{ old('startDate', $teacher->startDate) }}">
                            </div>
                            <div class="col-md-6">
                                <label for="endDate" class="form-label">End Date</label>
                                <input type="date" id="endDate" name="endDate" class="form-control"
                                    value="{{ old('endDate', $teacher->endDate) }}">
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-4">
                        <legend class="h5">Work Schedule</legend>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="workDays" class="form-label">Work Days Per Week</label>
                                <select id="workDays" name="workDays" class="form-select">
                                    <option value="">Select Number of Days</option>
                                    <option value="5" {{ old('workDays', $teacher->workDays) == '5' ? 'selected' : '' }}>5 Days</option>
                                    <option value="6" {{ old('workDays', $teacher->workDays) == '6' ? 'selected' : '' }}>6 Days</option>
                                    <option value="7" {{ old('workDays', $teacher->workDays) == '7' ? 'selected' : '' }}>7 Days</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="workHoursPerDay" class="form-label">Working Hours Per Day</label>
                                <select id="workHoursPerDay" name="workHoursPerDay" class="form-select">
                                    <option value="">Select Hours Per Day</option>
                                    <option value="4" {{ old('workHoursPerDay', $teacher->workHoursPerDay) == '4' ? 'selected' : '' }}>4 Hours</option>
                                    <option value="5" {{ old('workHoursPerDay', $teacher->workHoursPerDay) == '5' ? 'selected' : '' }}>5 Hours</option>
                                    <option value="6" {{ old('workHoursPerDay', $teacher->workHoursPerDay) == '6' ? 'selected' : '' }}>6 Hours</option>
                                    <option value="7" {{ old('workHoursPerDay', $teacher->workHoursPerDay) == '7' ? 'selected' : '' }}>7 Hours</option>
                                    <option value="8" {{ old('workHoursPerDay', $teacher->workHoursPerDay) == '8' ? 'selected' : '' }}>8 Hours</option>
                                    <option value="9" {{ old('workHoursPerDay', $teacher->workHoursPerDay) == '9' ? 'selected' : '' }}>9 Hours</option>
                                    <option value="10" {{ old('workHoursPerDay', $teacher->workHoursPerDay) == '10' ? 'selected' : '' }}>10 Hours</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="mb-4">
                        <legend class="h5">Certifications</legend>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="certifications" class="form-label">Upload Certifications</label><br>
                                <span>Eg. university certifications for Bachelor degree/ Diploma</span>
                                <input type="file" id="certifications" name="certifications[]" class="form-control"
                                    multiple>
                            </div>
                        </div>
                    </fieldset>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update Contract</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
