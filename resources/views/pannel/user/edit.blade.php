@extends('pannel.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1><b>Edit User</b></h1>
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
                        <h5 class="card-title"><b>User</b></h5>

                        <!-- General Form Elements -->
                        <form action="" method="post">

                            {{ csrf_field() }}
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Name</label><br>
                                <div class="col-mb-12">
                                    <input type="text" name="name" value="{{ $getRecord->name }}" required
                                        class="form-control">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Email</label><br>
                                <div class="col-mb-12">
                                    <input type="email" name="email" value="{{ $getRecord->email }}" readonly
                                        class="form-control">

                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Password</label><br>
                                <div class="col-mb-12">
                                    <input type="password" name="password" class="form-control" >
                                    (Do you want to change password Add. Otherwise  leave it..)
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Role</label><br>
                                <div class="col-mb-12">
                                    <select name="role_id" id="" required class="form-control">
                                        <option value="">Select</option>
                                        @foreach ($getRole as $value)
                                            <option {{ ($getRecord->role_id == $value->id) ? 'selected' : '' }}
                                                value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update </button>
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
