@extends('pannel.layouts.app')

@section('content')

@session('status')
<div id="success-message" class="bg-green-200 border border-green-400 text-green-700 px-4 py-3 rounded relative opacity-0 transition-opacity" role="alert">
  <span class="block sm:inline">{{ session('status') }}</span>
</div>

@endsession

    <div class="container mx-auto px-4 py-6">
        <div class="row">
            <div class="col mb-22">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-gray-200 p-4 flex items-center justify-between">
                        <h4 class="text-lg font-semibold">Form Two Records</h4>
                        <a href="{{ url('form2/create') }}"
                            class="flex items-center bg-green-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M29 22H5" />
                                <path d="M22 5l-7 7 7 7" />
                            </svg>
                            <span>Add Student</span>
                        </a>
                    </div>


                    <div class="p-4">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Id</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Name</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Date of Birth</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Gender</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Region</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Diocese</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nationality</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Address</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Phone</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Email</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            photo</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Parent</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Parent Phone</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Parent Email</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Emergency Phone</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Health Problems</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Physical Disability</th>
                                        <th
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Actions</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($form2s as $form2)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $form2->id }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $form2->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $form2->date }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $form2->gender }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $form2->region }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $form2->dioces }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $form2->nation }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $form2->address }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $form2->phone }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $form2->email }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap"> {{ $form2->photo }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $form2->parname }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $form2->parphone }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $form2->paremail }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $form2->emergencephone }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $form2->health }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $form2->disability }}</td>


                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex space-x-2">
                                                 <!-- Edit Link -->
<a href="{{ route('form2.edit', $form2->id) }}"
  class="bg-blue-500 text-white px-4 py-0.5 rounded-sm shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 flex items-center space-x-2 text-sm w-32 text-center transition-colors duration-200 ease-in-out">
   <i class="fas fa-edit"></i> <!-- Font Awesome icon for "Edit" -->
   <span>Edit</span>
</a>

<!-- Delete Link -->
<form action="{{ route('form2.destroy', $form2->id) }}" method="POST" class="inline">
   @csrf
   @method('DELETE')

   <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 flex items-center space-x-2 text-sm w-32 text-center">
       <i class="fas fa-trash"></i> <!-- Font Awesome icon for "Delete" -->
       <span>Delete</span>
   </button>
</form>



                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <!-- More rows as needed -->
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- PAGINATION CODE GOES HERE --}}
{{$form2s->links()}}

    <script>
        $(document).ready(function() {
            $('#student-select').select2({
                placeholder: 'Select a student',
                allowClear: true
            });
        });
    </script>



{{-- JAVASCRIPT FOR SUCCESS MESSSAGE --}}
<script>
  document.addEventListener('DOMContentLoaded', function () {
      const successMessage = document.getElementById('success-message');
      if (successMessage) {
          // Show the message
          successMessage.style.opacity = '2';
          successMessage.style.display = 'block';

          // Hide the message after a few seconds
          setTimeout(() => {
              successMessage.style.opacity = '0';
              setTimeout(() => {
                  successMessage.style.display = 'none';
              }, 500); // Match the duration of the fade-out transition
          }, 3000); // Show message for 3 seconds
      }
  });
</script>


    </body>

    </html>
@endsection
