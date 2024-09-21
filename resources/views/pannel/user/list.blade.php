 @extends('pannel.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Users</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('pannel/dashboard') }}">Home</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">


            <div class="col-lg-12">
                {{-- success messages --}}

                @include('message')

                <div class="card">
                    <div class="card-body">
                        <h4>List of users</h4>
                        <div class="text-center">

                            <!-- Link Button Section -->

                            <a href="{{ url('pannel/user/add') }}" class="btn btn-primary float-end">Add</a>


                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($getRecord as $value)
                                    <tr>
                                        <th scope="row">{{ $value->id }}</th>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->role_name }}</td>


                                        <td>
                                            @if($value->photo)
                                                <img src="{{ asset('uploads/photos/' .$value->photo) }}" alt="Photo" width="50">
                                            @endif
                                        </td>

                                        <td>{{ $value->created_at }}</td>
                                        <td>


                                            <a href="{{ url('pannel/user/edit/' . $value->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>



                                            <a href="{{ url('pannel/user/delete/' . $value->id) }}"
                                                class="btn btn-danger btn-sm">Delete</a>

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

    </section>

    <!-- End #main -->
@endsection
