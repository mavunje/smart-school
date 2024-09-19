@extends('pannel.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1> Roles</h1>
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
                        <h4>List of Roles</h4>
                        <div class="text-center">

                            <!-- Link Button Section -->
                            @if (!empty($permissionAdd))
                                <a href="{{ url('pannel/role/add') }}" class="btn btn-primary float-end">Add</a>
                            @endif

                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    @if(!empty($permissionEdit) || !empty($permissionDelete))
                                    <th scope="col">Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($getRecord as $value)
                                    <tr>
                                        <th scope="row">{{ $value->id }}</th>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->created_at }}</td>
                                        <td>
                                            @if (!empty($permissionEdit))
                                                <a href="{{ url('pannel/role/edit/' . $value->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                            @endif
                                            @if (!empty($permissionDelete))
                                                <a href="{{ url('pannel/role/delete/' . $value->id) }}"
                                                    class="btn btn-danger btn-sm">Delete</a>
                                            @endif

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
