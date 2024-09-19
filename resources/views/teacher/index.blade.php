@extends('pannel.layouts.app')


@section('content')
<h2 class="text-center"><b>General Teachers Informations</b></h2>
    <div class="left-64 w-full ">
        <div class="container mt-4">
            <div class="d-flex flex-wrap justify-content-between">
                <!-- Card 1 -->
                <div class="card mb-2 flex-fill" style="max-width: 200px;">
                    <div class="card-body">
                        <i class="bi bi-book card-icon me-2"></i>
                        <a href="#" class="card-link text-decoration-none text-dark"><b>Informations</b></a>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card mb-2 flex-fill" style="max-width: 200px;">
                    <div class="card-body">
                        <i class="bi bi-file-earmark-text card-icon me-2"></i>
                        <button class="btn btn-light text-decoration-none text-dark" id="contractButton">
                            <b>Contract</b>
                        </button>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card mb-2 flex-fill" style="max-width: 200px;">
                    <div class="card-body">
                        <i class="bi bi-cash card-icon me-2"></i>
                        <button class="btn btn-light text-decoration-none text-dark" id="toggleButton">
                            <b>Salaries</b>
                        </button>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="card mb-2 flex-fill" style="max-width: 200px;">
                    <div class="card-body">
                        <i class="bi bi-bar-chart-line card-icon me-2"></i>
                        <button class="btn btn-light text-decoration-none text-dark" id="Button">
                            <b>Budgets</b>
                        </button>

                    </div>
                </div>
                <!-- Card 5 -->
                <div class="card mb-2 flex-fill" style="max-width: 200px;">
                    <div class="card-body">
                        <i class="bi bi-calendar-event card-icon me-2"></i>
                        <a href="#" class="card-link text-decoration-none text-dark"><b>Almanac</b></a>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="card mb-2 flex-fill" style="max-width: 200px;">
                    <div class="card-body">
                        <i class="bi bi-calendar-check card-icon me-2"></i>
                        <button class="btn btn-light text-decoration-none text-dark" id="MeetingButton">
                            <b>meetings</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- SALARY TABLE --}}
        <!-- Overlay Table -->
        <div id="overlayTable" class="position-fixed top-50 start-50 translate-middle bg-white  rounded shadow-sm p-3"
            style="display: none; width: 90vw; max-width: 1200px; z-index: 1050;">
            <div class="card">
                <div class="card-body">


                    <!-- Search Form and Add Teacher Button -->
                    <div class="mb-3 d-flex justify-content-between align-items-center">

                        <div>

                            <h5 class="card-title"><b>Salary allocation To all Teachers</b></h5>
                            <p>Alist of All Salaries Allocated To Teachers</p>
                        </div>

                        <!-- Search Form -->
                        <form class="d-flex" role="search" method="GET" action="{{ url('pannel/teachers/search') }}">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                name="query">
                            <button class="btn btn-primary" type="submit">Search </button>
                        </form>

                        <!-- Add Teacher Button -->
                        <a href="{{ url('teacher/create') }}" class="btn btn-primary">Veryfy Allocation</a>

                        <a href="{{ url('teacher/create') }}" class="btn btn-primary">Download PDF</a>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Account</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Payment Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actiont</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>


                                <td class="p-2 text-sm font-medium">
                                    <a href="#" class="btn btn-primary btn-sm d-inline-flex align-items-center me-2">
                                        <i class="fas fa-edit me-1"></i> Edit
                                    </a>
                                    <form action="#" method="POST" class="d-inline-flex">
                                        {{-- @csrf
                                  @method('DELETE') --}}

                                        <button type="submit"
                                            class="btn btn-danger btn-sm d-inline-flex align-items-center">
                                            <i class="fas fa-trash-alt me-1"></i> Delete
                                        </button>
                                    </form>
                                </td>

                            </tr>


                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>

                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>

                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>

                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>

                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>

                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>

                            </tr>


                            <tr>
                                <th scope="row">2</th>
                                <td>Bridie Kessler</td>
                                <td>Developer</td>
                                <td>35</td>
                                <td>2014-12-05</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashleigh Langosh</td>
                                <td>Finance</td>
                                <td>45</td>
                                <td>2011-08-12</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Angus Grady</td>
                                <td>HR</td>
                                <td>34</td>
                                <td>2012-06-11</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Raheem Lehner</td>
                                <td>Dynamic Division Officer</td>
                                <td>47</td>
                                <td>2011-04-19</td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary" id="closeButton">Close</button>
                </div>
            </div>
        </div>

        {{-- END OF SALARY TABLE --}}

        {{-- BUDGET TABLE --}}
        <div id="budgets" class="position-fixed top-50 start-50 translate-middle bg-white  rounded shadow-sm p-3"
            style="display: none; width: 90vw; max-width: 1200px; z-index: 1050;">

            <div class="card">
                <div class="card-body">


                    <!-- Search Form and Add Teacher Button -->
                    <div class="mb-3 d-flex justify-content-between align-items-center">

                        <div>

                            <h5 class="card-title"><b>Budget allocation To all Departments</b></h5>
                            <p>Alist of All Budgets Allocated To Department</p>
                        </div>

                        <!-- Search Form -->
                        <form class="d-flex" role="search" method="GET" action="{{ url('pannel/teachers/search') }}">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                name="query">
                            <button class="btn btn-primary btn-sm" type="submit">Search</button>
                        </form>

                        <!-- Add Teacher Button -->
                        <a href="{{ url('teacher/create') }}" class="btn btn-primary">Verify Allocation</a>

                        <a href="{{ url('teacher/create') }}" class="btn btn-primary">Download PDF</a>

                    </div>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Account</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Payment Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>

                                <td class="p-2 text-sm font-medium">
                                    <a href="#"
                                        class="btn btn-primary btn-sm d-inline-flex align-items-center me-2">
                                        <i class="fas fa-edit me-1"></i> Edit
                                    </a>
                                    <form action="#" method="POST" class="d-inline-flex">
                                        {{-- @csrf
                                  @method('DELETE') --}}

                                        <button type="submit"
                                            class="btn btn-danger btn-sm d-inline-flex align-items-center">
                                            <i class="fas fa-trash-alt me-1"></i> Delete
                                        </button>
                                    </form>
                                </td>

                            </tr>


                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>

                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>

                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>

                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>

                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>

                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Designer</td>
                                <td>28</td>
                                <td>2016-05-25</td>
                                <td>2016-05-25</td>

                            </tr>


                            <tr>
                                <th scope="row">2</th>
                                <td>Bridie Kessler</td>
                                <td>Developer</td>
                                <td>35</td>
                                <td>2014-12-05</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ashleigh Langosh</td>
                                <td>Finance</td>
                                <td>45</td>
                                <td>2011-08-12</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Angus Grady</td>
                                <td>HR</td>
                                <td>34</td>
                                <td>2012-06-11</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Raheem Lehner</td>
                                <td>Dynamic Division Officer</td>
                                <td>47</td>
                                <td>2011-04-19</td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary" id="close">Close</button>
                </div>
            </div>
        </div>
        {{-- END OF BUDGET TABLE --}}


        {{-- CONTRACT TABLE --}}
        <div id="contract" class="position-fixed top-50 start-50 translate-middle bg-white  rounded shadow-sm p-3"
            style="display: none; width: 90vw; max-width: 1200px; z-index: 1050;">

            <div class="container mt-4">
                <h2 class="mb-4"><b>Teacher Contracts</b></h2>
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-decoration-none"><b>A List of All Teachers Contract In the school</b></h5>
                        <!-- Search Form and Add Teacher Button -->
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <!-- Search Form -->
                            <form class="d-flex" role="search" method="GET"
                                action="{{ url('pannel/teachers/search') }}">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                    name="query">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </form>

                            <!-- Add Teacher Button -->
                            <a href="{{ url('teacher/create') }}" class="btn btn-primary">Add Contract</a>

                            <a href="{{ url('pdf_generator') }}" class="btn btn-primary">Download PDF</a>
                        </div>

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Contract ID</th>
                                    <th>Teacher Name</th>
                                    <th>Department</th>
                                    <th>Contract Start Date</th>
                                    <th>Contract End Date</th>
                                    <th>Contract Type</th>
                                    <th>Salary</th>
                                    <th>Status</th>
                                    <th>Contract Duration</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example rows, populate with actual data -->
                                <tr>
                                    <td>C001</td>
                                    <td>John Doe</td>
                                    <td>Mathematics</td>
                                    <td>2024-01-01</td>
                                    <td>2024-12-31</td>
                                    <td>Full-time</td>
                                    <td>$50,000</td>
                                    <td>Active</td>
                                    <td>12 months</td>
                                    <td>
                                        <button
                                            class="btn btn-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center me-2"
                                            type="button" data-bs-toggle="modal" data-bs-target="#moreInfoModal">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        More
                                    </td>
                                </tr>

                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                        <button class="btn btn-primary" id="closeContract">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="moreInfoModal" tabindex="-1" aria-labelledby="moreInfoModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title" id="moreInfoModalLabel"><b>Contract Details</b></h5>

                        <div class="mb-3 d-flex justify-content-between align-items-center">

                            <a href="{{ url('teacher/create') }}" class="btn btn-primary">Download PDF</a>

                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <h6>Contract Description</h6>
                        <p>Detailed information about the contract's terms and conditions.</p>
                        <h6>Contract Amendments</h6>
                        <p>Details about any amendments or changes made to the original contract.</p>
                        <h6>Contract Extensions</h6>
                        <p>Details about any extensions or renewals of the contract.</p>
                        <h6>Performance Metrics</h6>
                        <p>Summaries or links to performance reviews related to the contract.</p>
                        <h6>Additional Notes</h6>
                        <p>Special conditions or agreements specific to the contract.</p>
                        <h6>Documentation</h6>
                        <p>Links or files related to the contract.</p>
                        <h6>Contract History</h6>
                        <p>Log of actions taken related to the contract.</p>
                    </div>
                </div>
            </div>
        </div>


        {{-- END OF CONTRACT PAGE --}}


        <div class="d-flex flex-items-center justify-content-between">
            <div class="pagetitle">
                <h1>Teachers Informations</h1>

            </div>


            <div class="pagetitle float-end">
                <button class="btn btn-light text-decoration-none text-dark float-end" id="AttendanceButton">
                    <b>
                        <h1>Teachers Attendance</h1>
                    </b>
                </button>
            </div>

        </div>


        @if (session('success'))
    <div id="success-message" class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


        <div class="d-flex ">
            <div class="card col-10">
                <div class="card-body">
                    <h5 class="text-decoration-none"><b>A List of All Teachers In the school</b></h5>

                    <!-- Search Form and Add Teacher Button -->
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <!-- Search Form -->
                        <form class="d-flex" role="search" method="GET"
                            action="{{ url('pannel/teachers/search') }}">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                name="query">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>

                        <!-- Add Teacher Button -->
                        <a href="{{ url('teacher/create') }}" class="btn btn-primary">Add Teacher</a>

                        <a href="{{ url('pdf_generator') }}" class="btn btn-primary">Download PDF</a>
                    </div>
                    <!-- Bordered Table -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th> First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teachers as $teacher )
                            <tr>
                                <td>{{ $teacher->id }}</td>
                                <td>{{ $teacher->fname }}</td>
                                <td>{{ $teacher->lname }}</td>
                                <td>{{ $teacher->gender }}</td>
                                <td>{{ $teacher->email }}</td>
                                <td>{{ $teacher->phone }}</td>
                                <td class="p-2 text-sm font-medium">
                                    <a href="{{route('teacher.edit',$teacher->id ) }}"
                                        class="btn btn-primary btn-sm d-inline-flex align-items-center me-2">
                                        <i class="fas fa-edit me-1"></i> Edit
                                    </a>
                                    <form action="{{route('teacher.destroy',$teacher->id ) }}" method="POST" class="d-inline-flex">
                                         @csrf
                              @method('DELETE')

                                        <button type="submit"
                                            class="btn btn-danger btn-sm d-inline-flex align-items-center">
                                            <i class="fas fa-trash-alt me-1"></i> Delete
                                        </button>
                                    </form>
                                </td>


                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                    <!-- End Bordered Table -->
                    {{$teachers->links()}}


                </div>
            </div>


            <div class="container text-center mt-5">
                <h3>Send a Message</h3>
                <div class="d-flex justify-content-center">
                    <a href="https://wa.me/?text=Hello" class="text-decoration-none mx-3" title="Send via WhatsApp"
                        target="_blank">
                        <i class="fab fa-whatsapp fa-3x text-success"></i>
                    </a>
                    <a href="mailto:someone@example.com" class="text-decoration-none mx-3" title="Send via Email">
                        <i class="fas fa-envelope fa-3x text-primary"></i>
                    </a>
                    <a href="sms:+1234567890" class="text-decoration-none mx-3" title="Send a Message">
                        <i class="fas fa-sms fa-3x text-info"></i>
                    </a>
                </div>
            </div>

        </div>

        {{-- ATTENDANCY TABLE --}}
        <div id="attendance" class="position-fixed top-50 start-50 translate-middle bg-white  rounded shadow-sm p-3"
            style="display: none; width: 90vw; max-width: 1200px; z-index: 1050;">

            <div class="container mt-4">
                <div class="row">
                    <!-- Left Sidebar -->
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Categories</h5>
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-info">Sick Teachers</li>
                                    <li class="list-group-item">John Doe</li>
                                    <li class="list-group-item">Jane Smith</li>
                                    <li class="list-group-item list-group-item-warning">Personal Issues</li>
                                    <li class="list-group-item">Michael Brown</li>
                                    <li class="list-group-item">Emily Davis</li>
                                    <li class="list-group-item list-group-item-danger">Dodgers</li>
                                    <li class="list-group-item">Anna Wilson</li>
                                    <li class="list-group-item">James Johnson</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Teacher Attendance</h5>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Teacher Name</th>
                                            <th>Class Attended</th>
                                            <th>Reason</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Example rows -->
                                        <tr>
                                            <td>John Doe</td>
                                            <td><i class="bi bi-check-circle text-success"></i></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Jane Smith</td>
                                            <td><i class="bi bi-x-circle text-danger"></i></td>
                                            <td><button class="btn btn-primary btn-sm" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#reasonJane"
                                                    aria-expanded="false" aria-controls="reasonJane">Reason</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Michael Brown</td>
                                            <td><i class="bi bi-x-circle text-danger"></i></td>
                                            <td><button class="btn btn-primary btn-sm" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#reasonMichael"
                                                    aria-expanded="false" aria-controls="reasonMichael">Reason</button>
                                            </td>
                                        </tr>
                                        <!-- More rows as needed -->
                                    </tbody>
                                </table>

                                <!-- Reason Collapse Sections -->
                                <div class="collapse" id="reasonJane">
                                    <div class="card card-body">
                                        <p>Jane Smith missed class due to a personal emergency.</p>
                                    </div>
                                </div>
                                <div class="collapse" id="reasonMichael">
                                    <div class="card card-body">
                                        <p>Michael Brown is out sick.</p>
                                    </div>
                                </div>

                                <!-- Action Button -->
                                <div class="mt-4">
                                    <button class="btn btn-danger">Take Action on Unjustified Absences</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary" id="closeattendancy">Close</button>
        </div>
    </div>


    {{-- MEETING TABLE --}}

    <div id="meeting" class="position-fixed top-50 start-50 translate-middle bg-white  rounded shadow-sm p-3"
        style="display: none; width: 90vw; max-width: 1200px; z-index: 1050;">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><b>Teachers Meeting Timetable</b></h5>

                <!-- Search Form and Add Teacher Button -->
                <div class="mb-3 d-flex justify-content-between align-items-center">
                    <!-- Search Form -->
                    <form class="d-flex" role="search" method="GET" action="{{ url('pannel/teachers/search') }}">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            name="query">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>

                    <!-- Add Teacher Button -->
                    <a href="{{ url('teacher/create') }}" class="btn btn-primary">Add Meeting</a>

                    <a href="{{ url('teacher/create') }}" class="btn btn-primary">Download PDF</a>
                </div>
                <!-- Bordered Table -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Agenda</th>
                            <th scope="col">Time</th>
                            <th scope="col">End Time</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Brandon Jacob</td>
                            <td>Designer</td>
                            <td>28</td>
                            <td>2016-05-25</td>


                            <td class="p-2 text-sm font-medium">
                                <a href="#" class="btn btn-primary btn-sm d-inline-flex align-items-center me-2">
                                    <i class="fas fa-edit me-1"></i> Edit
                                </a>
                                <form action="#" method="POST" class="d-inline-flex">
                                    {{-- @csrf
                      @method('DELETE') --}}

                                    <button type="submit" class="btn btn-danger btn-sm d-inline-flex align-items-center">
                                        <i class="fas fa-trash-alt me-1"></i> Delete
                                    </button>
                                </form>
                            </td>



                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Bridie Kessler</td>
                            <td>Developer</td>
                            <td>35</td>
                            <td>2014-12-05</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Ashleigh Langosh</td>
                            <td>Finance</td>
                            <td>45</td>
                            <td>2011-08-12</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Angus Grady</td>
                            <td>HR</td>
                            <td>34</td>
                            <td>2012-06-11</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Raheem Lehner</td>
                            <td>Dynamic Division Officer</td>
                            <td>47</td>
                            <td>2011-04-19</td>
                        </tr>
                    </tbody>
                </table>

                <button class="btn btn-primary" id="closemeeting">Close</button>
            </div>
        </div>
    </div>
    <!-- End Bordered Table -->


    {{-- JS FOR SALARY --}}

    <script>
        document.getElementById('toggleButton').addEventListener('click', function() {
            document.getElementById('overlayTable').style.display = 'block';
        });

        document.getElementById('closeButton').addEventListener('click', function() {
            document.getElementById('overlayTable').style.display = 'none';
        });
    </script>

    {{-- JS FOR BUDGET --}}
    <script>
        document.getElementById('Button').addEventListener('click', function() {
            document.getElementById('budgets').style.display = 'block';
        });

        document.getElementById('close').addEventListener('click', function() {
            document.getElementById('budgets').style.display = 'none';
        });
    </script>

    {{-- JS FOR CONTRACT --}}
    <script>
        document.getElementById('contractButton').addEventListener('click', function() {
            document.getElementById('contract').style.display = 'block';
        });

        document.getElementById('closeContract').addEventListener('click', function() {
            document.getElementById('contract').style.display = 'none';
        });
    </script>


    {{-- JS FOR MEETING TABLE --}}

    <script>
        document.getElementById('MeetingButton').addEventListener('click', function() {
            document.getElementById('meeting').style.display = 'block';
        });

        document.getElementById('closemeeting').addEventListener('click', function() {
            document.getElementById('meeting').style.display = 'none';
        });
    </script>



    {{-- JS FOR ATTENDANCY TABLE --}}

    <script>
        document.getElementById('AttendanceButton').addEventListener('click', function() {
            document.getElementById('attendance').style.display = 'block';
        });

        document.getElementById('closeattendancy').addEventListener('click', function() {
            document.getElementById('attendance').style.display = 'none';
        });
    </script>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- End #main -->
@endsection
