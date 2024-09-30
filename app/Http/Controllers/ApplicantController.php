<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Student;
use App\Models\Interview; // Import the Interview model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource with optional search functionality.
     */
    public function index(Request $request)
{
    // Fetch search term from query parameters
    $search = $request->get('search');

    // Query applicants with optional search
    $applicants = Applicant::when($search, function ($query) use ($search) {
        return $query->where('full_name', 'LIKE', "%{$search}%")
                     ->orWhere('nationality', 'LIKE', "%{$search}%")
                     ->orWhere('religion', 'LIKE', "%{$search}%");
    })->paginate(1); // Set pagination as needed

    // Get counts for various time periods
    $totalApplicants = Applicant::count();

// Iterate over each student to calculate time passed since registration
foreach ($applicants as $applicant) {
   $applicant->time_since_registration = $applicant->created_at->diffForHumans();
}


    $appliedToday = Applicant::whereDate('created_at', now())->count();
    $appliedLastHour = Applicant::where('created_at', '>=', now()->subHour())->count();
    $appliedLastWeek = Applicant::where('created_at', '>=', now()->subWeek())->count();
    $appliedLastMonth = Applicant::where('created_at', '>=', now()->subMonth())->count();
    $appliedThisYear = Applicant::where('created_at', '>=', now()->startOfYear())->count();

    // Count total male and female applicants
    $totalMaleApplicants = Applicant::where('gender', 'male')->count();
    $totalFemaleApplicants = Applicant::where('gender', 'female')->count();

    // Count for specified time intervals
    $applied1SecondAgo = Applicant::where('created_at', '>=', now()->subSeconds(1))->count();
    $applied1MinuteAgo = Applicant::where('created_at', '>=', now()->subMinutes(1))->count();
    $applied1HourAgo = Applicant::where('created_at', '>=', now()->subHours(1))->count();
    $applied1DayAgo = Applicant::where('created_at', '>=', now()->subDays(1))->count();
    $applied1WeekAgo = Applicant::where('created_at', '>=', now()->subWeeks(1))->count();
    $applied1MonthAgo = Applicant::where('created_at', '>=', now()->subMonths(1))->count();
    $applied1YearAgo = Applicant::where('created_at', '>=', now()->subYears(1))->count();

    return view('applicants.index', compact(
        'applicants','search','totalApplicants',  'appliedToday',  'appliedLastHour', 'appliedLastWeek',
        'appliedLastMonth','appliedThisYear', 'totalMaleApplicants','totalFemaleApplicants','applied1SecondAgo',
        'applied1MinuteAgo','applied1HourAgo', 'applied1DayAgo','applied1WeekAgo', 'applied1MonthAgo','applied1YearAgo'
    ));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('applicants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'nationality' => 'required|string|max:255',
            'citizenship' => 'required|string|max:255',
            'religion' => 'required|string|max:255',
            'gender' => 'required|in:male,female', // Validation for gender
            'email' => 'required|email|unique:students,email', // Validation for email
            'parent_full_name' => 'required|string|max:255',
            'parent_nationality' => 'required|string|max:255',
            'parent_citizenship' => 'required|string|max:255',
            'parent_address' => 'required|string|max:255',
            'parent_residence' => 'required|string|max:255',
            'previous_schools' => 'nullable|string',
            'student_photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'parent_photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle student photo upload
        if ($request->hasFile('student_photo')) {
            $validatedData['student_photo'] = $request->file('student_photo')->store('photos/students', 'public');
        }

        // Handle parent photo upload
        if ($request->hasFile('parent_photo')) {
            $validatedData['parent_photo'] = $request->file('parent_photo')->store('photos/parents', 'public');
        }

        // Create a new student record
    Applicant::create($validatedData);

        return redirect('applicants')->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Apllicant $applicant)
    {
        return view('applicants.show', compact('applicant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Applicant $applicant)
    {
        return view('applicants.edit', compact('applicant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Applicant $applicant)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'nationality' => 'required|string|max:255',
            'citizenship' => 'required|string|max:255',
            'religion' => 'required|string|max:255',
            'gender' => 'required|in:male,female', // Validation for gender
            'email' => 'required|email|unique:students,email,' . $applicant->id, // Validation for email
            'parent_full_name' => 'required|string|max:255',
            'parent_nationality' => 'required|string|max:255',
            'parent_citizenship' => 'required|string|max:255',
            'parent_address' => 'required|string|max:255',
            'parent_residence' => 'required|string|max:255',
            'previous_schools' => 'nullable|string',
            'student_photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'parent_photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle student photo update
        if ($request->hasFile('student_photo')) {
            if ($applicant->student_photo) {
                Storage::disk('public')->delete($applicant->student_photo);
            }
            $validatedData['student_photo'] = $request->file('student_photo')->store('photos/students', 'public');
        }

        // Handle parent photo update
        if ($request->hasFile('parent_photo')) {
            if ($applicant->parent_photo) {
                Storage::disk('public')->delete($student->parent_photo);
            }
            $validatedData['parent_photo'] = $request->file('parent_photo')->store('photos/parents', 'public');
        }

        // Update student data
        $applicant->update($validatedData);

        return redirect('applicants')->with('success', 'applicant updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Applicant $applicant)
    {
        // Delete student photos if they exist
        if ($applicant->student_photo) {
            Storage::disk('public')->delete($applicant->student_photo);
        }
        if ($applicant->parent_photo) {
            Storage::disk('public')->delete($applicant->parent_photo);
        }

        // Delete the student record
        $applicant->delete();

        return redirect('applicants')->with('success', 'applicant deleted successfully.');
    }


    }













