@extends('pannel.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1><b>Add New User</b></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('pannel/dashboard') }}">Home</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b> New User</b></h5>

                        <!-- General Form Elements -->
                        <!-- Update enctype to handle file uploads -->
                        <form action="" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <!-- Name Field -->
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Name</label><br>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{ old('name') }}" required class="form-control">
                                </div>
                            </div>

                            <!-- Email Field -->
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label><br>
                                <div class="col-sm-10">
                                    <input type="email" name="email" value="{{ old('email') }}" required class="form-control">
                                    <div style="color: red"> {{ $errors->first('email') }}</div>
                                </div>
                            </div>

                            <!-- Password Field -->
                            <div class="row mb-3">
                                <label for="password" class="col-sm-2 col-form-label">Password</label><br>
                                <div class="col-sm-10">
                                    <input type="password" name="password" required class="form-control">
                                </div>
                            </div>

                            <!-- Role Field -->
                            <div class="row mb-3">
                                <label for="role_id" class="col-sm-2 col-form-label">Role</label><br>
                                <div class="col-sm-10">
                                    <select class="form-control" name="role_id" required>
                                        <option value="">Select</option>
                                        @foreach ($getRole as $value)
                                            <option {{ (old('role_id') == $value->id) ? 'selected' : '' }} value="{{ $value->id }}">
                                                {{ $value->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Photo Field -->
                            <div class="row mb-3">
                                <label for="photo" class="col-sm-2 col-form-label">Photo</label><br>
                                <div class="col-sm-10">
                                    <input type="file" name="photo" class="form-control" accept="image/*">
                                    <div style="color: red"> {{ $errors->first('photo') }}</div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- End #main -->
@endsection
