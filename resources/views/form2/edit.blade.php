@extends('pannel.layouts.app')

@section('content')
    {{-- <!-- Add Student Button --> --}}
    <div class="mb-6">

        <h1 class="font-bold text-2xl underline "> Edit Student informations</h1>
        <!-- Go Back Button -->
        <div class="mb-8 flex justify-end">
            <a href="{{ url('form2') }}"
                class="inline-flex items-center px-4 py-2 bg-green-600 text-white font-bold rounded-lg shadow-md hover:bg-indigo-700">
                <i class="fas fa-arrow-left mr-2"></i>
                Go Back
            </a>
        </div>



        <form action="{{ route('form2.update', $form2->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <!-- Student Personal Information -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="studentName" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" value="{{ $form2->address }}" id="studentName" name="name"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="First Last">
                </div>
                <div>
                    <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                    <input type="date" value="{{ $form2->date }}" id="dob" name="date"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div>
                    <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                    <select id="gender" name="gender"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>

                <div>
                    <label for="region" class="block text-sm font-medium text-gray-700">Region/District</label>
                    <input type="text" id="region" name="region" value="{{ $form2->region }}"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                </div>

                <div>
                    <label for="region" class="block text-sm font-medium text-gray-700">Select Diocese</label>
                    <input type="text" id="region" name="dioces" value="{{ $form2->dioces }}"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                </div>

                <div>
                    <label for="nationality" class="block text-sm font-medium text-gray-700">Nationality/Citizenship</label>
                    <input type="text" id="nationality" name="nation" value="{{ $form2->nation }}"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

                </div>


                <div>
                    <label for="studentPhoto" class="block text-sm font-medium text-gray-700">Student Photo</label>
                    <input type="file" id="studentPhoto" value="{{ $form2->photo }}" name="photo"
                        class="mt-1 block w-full text-gray-700 border border-gray-300 rounded-md shadow-sm">
                </div>
            </div>

            <!-- Contact Information -->
            <div>
                <label for="address" class="block text-sm font-medium text-gray-700">Home Address</label>
                <input type="text" id="address" name="address" value="{{ $form2->address }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="1234 Main St">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="tel" id="phone" name="phone" value="{{ $form2->phone }}"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="(123) 456-7890">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ $form2->email }}"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="email@example.com">
                </div>
            </div>

            <!-- Parent/Guardian Information -->
            <div>
                <label for="guardianName" class="block text-sm font-medium text-gray-700">Parent/Guardian Name</label>
                <input type="text" id="guardianName" name="parname" value="{{ $form2->parname }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Full Name">
            </div>
            <div>
                <label for="guardianPhone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="tel" id="guardianPhone" name="parphone" value="{{ $form2->parphone }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="(123) 456-7890">
            </div>
            <div>
                <label for="guardianEmail" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="guardianEmail" name="paremail" value="{{ $form2->paremail }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="email@example.com">
            </div>

            <!-- Emergency Contact Information -->


            <div>
                <label for="emergencyContactPhone" class="block text-sm font-medium text-gray-700">Emergency Contact
                    Phone</label>
                <input type="text" id="emergencyContactPhone" name="emergencephone"
                    value="{{ $form2->emergencephone }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="(123) 456-7890">
            </div>

            <!-- Medical Information -->
            <div>
                <label for="medicalConditions" class="block text-sm font-medium text-gray-700">Health Problems</label>
                <input type="text" id="medicalConditions" name="health" value="{{ $form2->health }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="List any chronic conditions, allergies, or special medical needs"></input>
            </div>
            <div>
                <label for="medications" class="block text-sm font-medium text-gray-700">Physical Disabilities</label>
                <input type="text" id="medications" name="disability" value="{{ $form2->disability }}"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="List any current medications and dosages"></input>
            </div>
            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full bg-green-600 text-white py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update</button>
            </div>
        </form>

    </div>
@endsection
