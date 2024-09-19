
@extends('pannel.layouts.app')

@section('content')


      {{-- <!-- Add Student Button --> --}}
      <div class="mb-6">

          <h1 class="font-bold text-2xl underline ">Student Detailed informations</h1>
          <!-- Go Back Button -->
          <div class="mb-8 flex justify-end">
              <a href="{{ url('form3') }}"
                  class="inline-flex items-center px-4 py-2 bg-green-600 text-white font-bold rounded-lg shadow-md hover:bg-indigo-700">
                  <i class="fas fa-arrow-left mr-2"></i>
                  Go Back
              </a>
          </div>


      </div>

      <form action="{{ route('form3.store') }}" method="POST" class="space-y-6">
          @csrf

          <!-- Student Personal Information -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                  <label for="studentName" class="block text-sm font-medium text-gray-700">Full Name</label>
                  <input type="text" id="studentName" name="name"
                      class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                      placeholder="First Last">
              </div>
              @error('name')
                  <span class="text-red-600">{{ $message }}</span>
              @enderror
              <div>
                  <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                  <input type="date" id="dob" name="date"
                      class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
              @error('date')
                  <span class="text-red-600">{{ $message }}</span>
              @enderror
              <div>
                  <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                  <select id="gender" name="gender"
                      class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <option>Male</option>
                      <option>Female</option>
                      <option>Other</option>
                  </select>
              </div>
              @error('gender')
                  <span class="text-red-600">{{ $message }}</span>
              @enderror

              <div>
                  <label for="region" class="block text-sm font-medium text-gray-700">Region/District</label>
                  <input type="text" id="region" name="region"
                      class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

              </div>
              @error('region')
                  <span class="text-red-600">{{ $message }}</span>
              @enderror
              <div>
                  <label for="region" class="block text-sm font-medium text-gray-700">Select Diocese</label>
                  <input type="text" id="region" name="dioces"
                      class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

              </div>
              @error('dioces')
                  <span class="text-red-600">{{ $message }}</span>
              @enderror
              <div>
                  <label for="nationality" class="block text-sm font-medium text-gray-700">Nationality/Citizenship</label>
                  <input type="text" id="nationality" name="nation"
                      class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">

              </div>
              @error('nation')
                  <span class="text-red-600">{{ $message }}</span>
              @enderror

              <div>
                  <label for="studentPhoto" class="block text-sm font-medium text-gray-700">Student Photo</label>
                  <input type="text" id="studentPhoto" name="photo"
                      class="mt-1 block w-full text-gray-700 border border-gray-300 rounded-md shadow-sm">
              </div>
          </div>
          @error('photo')
              <span class="text-red-600">{{ $message }}</span>
          @enderror
          <!-- Contact Information -->
          <div>
              <label for="address" class="block text-sm font-medium text-gray-700">Home Address</label>
              <input type="text" id="address" name="address"
                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  placeholder="1234 Main St">
          </div>
          @error('address')
              <span class="text-red-600">{{ $message }}</span>
          @enderror
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                  <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                  <input type="tel" id="phone" name="phone"
                      class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                      placeholder="(123) 456-7890">
              </div>
              @error('phone')
                  <span class="text-red-600">{{ $message }}</span>
              @enderror
              <div>
                  <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                  <input type="email" id="email" name="email"
                      class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                      placeholder="email@example.com">
              </div>
              @error('email')
                  <span class="text-red-600">{{ $message }}</span>
              @enderror
          </div>

          <!-- Parent/Guardian Information -->
          <div>
              <label for="guardianName" class="block text-sm font-medium text-gray-700">Parent/Guardian Name</label>
              <input type="text" id="guardianName" name="parname"
                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  placeholder="Full Name">
          </div>
          @error('parname')
              <span class="text-red-600">{{ $message }}</span>
          @enderror
          <div>
              <label for="guardianPhone" class="block text-sm font-medium text-gray-700">Phone Number</label>
              <input type="tel" id="guardianPhone" name="parphone"
                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  placeholder="(123) 456-7890">
          </div>
          @error('parphone')
              <span class="text-red-600">{{ $message }}</span>
          @enderror
          <div>
              <label for="guardianEmail" class="block text-sm font-medium text-gray-700">Email Address</label>
              <input type="email" id="guardianEmail" name="paremail"
                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  placeholder="email@example.com">
          </div>
          @error('paremail')
              <span class="text-red-600">{{ $message }}</span>
          @enderror
          <!-- Emergency Contact Information -->


          <div>
              <label for="emergencyContactPhone" class="block text-sm font-medium text-gray-700">Emergency Contact
                  Phone</label>
              <input type="tel" id="emergencyContactPhone" name="emergencephone"
                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  placeholder="(123) 456-7890">
          </div>
          @error('emergencephone')
              <span class="text-red-600">{{ $message }}</span>
          @enderror
          <!-- Medical Information -->
          <div>
              <label for="medicalConditions" class="block text-sm font-medium text-gray-700">Health Problems</label>
              <textarea id="medicalConditions" name="health"
                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  placeholder="List any chronic conditions, allergies, or special medical needs"></textarea>
          </div>
          @error('health')
              <span class="text-red-600">{{ $message }}</span>
          @enderror
          <div>
              <label for="medications" class="block text-sm font-medium text-gray-700">Physical Disabilities</label>
              <textarea id="medications" name="disability"
                  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  placeholder="List any current medications and dosages"></textarea>
          </div>
          @error('disability')
              <span class="text-red-600">{{ $message }}</span>
          @enderror
          <!-- Submit Button -->
          <div>
              <button type="submit"
                  class="w-full bg-green-600 text-white py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Register</button>
          </div>
      </form>
</div>
  @endsection

