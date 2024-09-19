@extends('pannel.layouts.app')

@section('content')
    @if (session('status'))
        <div id="success-message" class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Search Form Section -->
    <div class="container mt-4">
        <form action="search_data" method="GET" class="form-inline my-2 my-lg-0">
            <input
                type="text"
                name="search"
                placeholder="Search..."
                class="form-control mr-2"
            />
            <button class="btn btn-outline-secondary" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form One Records</h4>
                <a href="{{ url('form1/create') }}" class="btn btn-primary float-right">
                    <i class="fas fa-plus"></i> Add Student
                </a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Region</th>
                            <th>Diocese</th>
                            <th>Nationality</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>photo</th>
                            <th>Parent</th>
                            <th>Parent Phone</th>
                            <th>Parent Email</th>
                            <th>Emergency Phone</th>
                            <th>Health Problems</th>
                            <th>Physical Disability</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($form1s as $form1)
                            <tr>
                                <td>{{ $form1->id }}</td>
                                <td>{{ $form1->name }}</td>
                                <td>{{ $form1->date }}</td>
                                <td>{{ $form1->gender }}</td>
                                <td>{{ $form1->region }}</td>
                                <td>{{ $form1->dioces }}</td>
                                <td>{{ $form1->nation }}</td>
                                <td>{{ $form1->address }}</td>
                                <td>{{ $form1->phone }}</td>
                                <td>{{ $form1->email }}</td>
                                <td>{{ $form1->photo }}</td>
                                <td>{{ $form1->parname }}</td>
                                <td>{{ $form1->parphone }}</td>
                                <td>{{ $form1->paremail }}</td>
                                <td>{{ $form1->emergencephone }}</td>
                                <td>{{ $form1->health }}</td>
                                <td>{{ $form1->disability }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('form1.edit', $form1->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{ $form1->id }}">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    {{ $form1s->links() }}

    <!-- JavaScript for success message -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                // Show the message
                successMessage.style.display = 'block';
                setTimeout(() => {
                    successMessage.style.opacity = '0';
                    setTimeout(() => {
                        successMessage.style.display = 'none';
                    }, 500);
                }, 3000);
            }
        });
    </script>

@endsection
