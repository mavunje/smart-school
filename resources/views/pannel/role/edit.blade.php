@extends('pannel.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1><b>Edit Role</b></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('pannel/dashboard') }}">Home</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-9">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Edit role</b></h5>

                        <!-- General Form Elements -->
                        <form action="" method="POST">

                            {{ csrf_field() }}
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Role</label><br>
                                <div class="col-mb-12">
                                    <input type="text" name="name" value="{{ $getRecord->name }}" required
                                        class="form-control">
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label "
                                    style="display: block;margin-bottom: 20px"><b>Permission</b></label><br>
                                @foreach ($getPermission as $value)
                                    <div class="row" style="margin-bottom: 20px">
                                        <div class="col-md-3">
                                            {{ $value['name'] }}
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                @foreach ($value['group'] as $group)
                                                    @php
                                                        $checked = '';
                                                    @endphp
                                                    @foreach ($getRolePermission as $role)
                                                        @if ($role->permission_id == $group['id'])
                                                            @php
                                                                $checked = 'checked';
                                                            @endphp
                                                        @endif
                                                    @endforeach
                                                    <div class="col-md-3">

                                                        <label>
                                                            <input type="checkbox" {{ $checked }}
                                                                value="{{ $group['id'] }}" name="permission_id[]">
                                                            {{ $group['name'] }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>


                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
