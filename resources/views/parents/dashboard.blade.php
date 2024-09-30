@extends('pannel.layouts.app')

@section('content')
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container mt-3">
        <div class="row">
            <!-- Profile Card -->
            <div class="col-md-6 mb-1">
                <div class="card h-50 shadow-sm">
                    <div class="card-body d-flex align-items-center">
                        <img src="{{ asset('assets/img/messages-1.jpg') }}" alt="Profile Picture" class="rounded-circle me-3"
                            style="width: 100px; height: 100px; object-fit: cover;">
                        <div>
                            <p class="h5 mb-0">Welcome Parent</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notice Board Card -->
            <div class="col-md-6 mb-1">
                <div class="card h-70 shadow-sm">
                    <div class="card-body text-center">
                        <h4 class="card-title">Notice Board</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-decoration-none fw-bold text-primary">01 Oct 2024: Teachers
                                    Meeting</a></li>
                            <li><a href="#" class="text-decoration-none fw-bold text-primary">05 Oct 2024: Curriculum
                                    Update Discussion</a></li>
                            <li><a href="#" class="text-decoration-none fw-bold text-primary">10 Oct 2024:
                                    Parent-Teacher Conference</a></li>
                            <li><a href="#" class="text-decoration-none fw-bold text-primary">15 Oct 2024: School Trip
                                    Preparation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Horizontal Cards Section -->
    <div class="row mt-1 ">
        <!-- Progress Subjects Card (Scrollable) -->
        <div class="col-md-4 mb-3 d-flex">
            <div class="card h-50 shadow-sm flex-fill">
                <h5 class="fw-bold text-center pt-3">Progress Subjects</h5>
                <hr>
                <div class="card-body" style="max-height: 400px; overflow-y: auto;">
                    <ul class="list-unstyled">
                        <li>Math - 80% complete</li>
                        <li>English - 75% complete</li>
                        <li>History - 65% complete</li>
                        <li>Science - 90% complete</li>
                        <li>Geography - 85% complete</li>
                        <li>Physics - 70% complete</li>
                        <li>Biology - 60% complete</li>
                        <li>Chemistry - 50% complete</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Upcoming Classes Card (Scrollable) -->
        <div class="col-md-4 mb-3 d-flex ">
            <div class="card h-50 shadow-sm flex-fill">
                <h5 class="fw-bold text-center pt-3">Upcoming Classes</h5>
                <hr>
                <div class="card-body" style="max-height: 400px; overflow-y: auto;">
                    <div class="d-flex flex-column">
                        <!-- Class Entries -->
                        @for ($i = 0; $i < 8; $i++)
                            <div
                                class="d-flex mb-2 justify-content-between align-items-center bg-primary-subtle rounded-4 text-center p-1">
                                <img src="{{ asset('assets/img/messages-1.jpg') }}" alt="Subject Teacher"
                                    class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                <div class="text-center">
                                    Name<br>
                                    Math
                                </div>
                                <div class="text-center">
                                    Venue: Room 101<br>
                                    Time: 10:00 AM
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <!-- Homework Card -->
        <div class="col-md-4 mb-3 d-flex">
            <div class="card h-50 shadow-sm flex-fill">
                <h5 class="fw-bold text-center pt-3">Homework</h5>
                <hr>
                <div class="card-body" style="padding-top: 1rem;">
                    <ul class="list-unstyled">
                        <li>Math: Complete exercise 5</li>
                        <li>English: Write a 300-word essay</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
