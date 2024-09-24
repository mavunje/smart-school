@extends('pannel.layouts.app')

@section('content')



<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">

                <!-- Sales Card -->
                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card sales-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#"><h6>Total Male Students: {{ $totalMaleStudents }}</h6></a></li>
                                <li><a class="dropdown-item" href="#"><h6>Total Female Students: {{ $totalFemaleStudents }}</h6></a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h2 class="card-title"><b>TOTAL STUDENTS</b></h2>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $totalStudents }}</h6></h6>
                                    <span class="text-success small pt-1 fw-bold">12%</span> <span
                                        class="text-muted small pt-2 ps-1">increase</span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card revenue-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Registered  {{ $timePassedSinceFirst}}  Second Ago:</a></li>
                                <li><a class="dropdown-item" href="#">Registered  {{ $registered1HourAgo }} Hour Ago:</a></li>
                                <li><a class="dropdown-item" href="#">Registered {{ $registered1WeekAgo }} Week Ago: </a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h2 class="card-title"><b>REGISTERED TODAY</b></h2>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6> {{$totalToday}}</h6>
                                    <span class="text-success small pt-1 fw-bold">8%</span> <span
                                        class="text-muted small pt-2 ps-1">increase</span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-3 col-xl-6">

                    <div class="card info-card customers-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h2 class="card-title"><b>REGISTERED LAST MONTH</b></h2>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $registeredLastMonth }}</h6>
                                    <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                        class="text-muted small pt-2 ps-1">decrease</span>

                                </div>
                            </div>

                        </div>
                    </div>

                </div><!-- End Customers Card -->


                <!-- Customers Card -->
                <div class="col-xxl-3 col-xl-6">

                    <div class="card info-card customers-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h2 class="card-title"><b> REGISTERED THIS YEAR</b></h2>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>{{ $registeredThisYear }}</h6>
                                    <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                        class="text-muted small pt-2 ps-1">decrease</span>

                                </div>
                            </div>

                        </div>
                    </div>

                </div><!-- End Customers Card -->



                {{-- <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12">

                    <div class="card info-card customers-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Customers <span>| This Year</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>1244</h6>
                                    <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                        class="text-muted small pt-2 ps-1">decrease</span>

                                </div>
                            </div>

                        </div>
                    </div>

                </div><!-- End Customers Card -->
 --}}


            </div>
        </div><!-- End Left side columns -->



    </div>
</section>


        <div class="container">
        <h1>Students List</h1>
        <div class="mb-3 d-flex justify-content-between">
            <form action="{{ route('students.index') }}" method="GET" class="d-inline-block">
                <input type="text" name="search" placeholder="Search..." class="form-control d-inline-block"
                    style="width: 300px;">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
            <div>
                <a href="#" class="btn btn-primary">Print</a>
                <a href="#" class="btn btn-primary">Upload Via Excel</a>
                <form action="{{ route('students.download') }}" method="GET" class="d-inline-block">
                    <button type="submit" class="btn btn-success">Download</button>
                </form>
                <a href="{{ route('students.create') }}" class="btn btn-primary">Add New Student</a>

            </div>

        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Nationality</th>
                    <th>Religion</th>
                    <th>Parent</th>
                    <th>Registered Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->full_name }}</td>
                        <td>{{ $student->nationality }}</td>
                        <td>{{ $student->religion }}{{ $student->religion }}</td>
                        <td>{{ $student->parent_full_name }}</td>

                        <td>- Registered {{ $student->time_since_registration }}</td>
                        <td>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $students->links() }} <!-- Pagination -->
    </div>
@endsection


