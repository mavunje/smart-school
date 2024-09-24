<?php
namespace  App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource with optional search functionality.
     */
    public function index(Request $request)
    {
        // Fetch search term from query parameters
        $search = $request->get('search');

        // Query students with optional search
        $students = Student::when($search, function ($query) use ($search) {
            return $query->where('full_name', 'LIKE', "%{$search}%")
                         ->orWhere('nationality', 'LIKE', "%{$search}%")
                         ->orWhere('religion', 'LIKE', "%{$search}%");
        })->paginate(5); // Set pagination as needed

        // Get counts for various time periods
        $totalStudents = Student::count();

         // Iterate over each student to calculate time passed since registration
         foreach ($students as $student) {
            $student->time_since_registration = $student->created_at->diffForHumans();
        }


        // Get today's date without time
$todayDate = now()->format('Y-m-d');

// Get all students registered today
$studentsToday = Student::whereDate('created_at', $todayDate)->get();

// Count total students registered today
$totalToday = $studentsToday->count();

// Calculate time passed since first student registered today
$timePassedSinceFirst = $studentsToday->isEmpty()
    ? "No students registered today yet."
    : $studentsToday->first()->created_at->diffForHumans();


        $registeredLastHour = Student::where('created_at', '>=', now()->subHour())->count();
        $registeredLastWeek = Student::where('created_at', '>=', now()->subWeek())->count();
        $registeredLastMonth = Student::where('created_at', '>=', now()->subMonth())->count();
        $registeredThisYear = Student::where('created_at', '>=', now()->startOfYear())->count();

        // Count total male and female students
        $totalMaleStudents = Student::where('gender', 'male')->count();
        $totalFemaleStudents = Student::where('gender', 'female')->count();

        // Count for specified time intervals
        $registered1SecondAgo = Student::where('created_at', '>=', now()->subSeconds(1))->count();
        $registered1MinuteAgo = Student::where('created_at', '>=', now()->subMinutes(1))->count();
        $registered1HourAgo = Student::where('created_at', '>=', now()->subHours(1))->count();
        $registered1DayAgo = Student::where('created_at', '>=', now()->subDays(1))->count();
        $registered1WeekAgo = Student::where('created_at', '>=', now()->subWeeks(1))->count();
        $registered1MonthAgo = Student::where('created_at', '>=', now()->subMonths(1))->count();
        $registered1YearAgo = Student::where('created_at', '>=', now()->subYears(1))->count();



        return view('students.index', compact(
            'students', 'search', 'totalStudents','totalToday','timePassedSinceFirst','registeredLastHour','registeredLastWeek',
            'registeredLastMonth', 'registeredThisYear', 'totalMaleStudents','totalFemaleStudents',
            'registered1SecondAgo', 'registered1MinuteAgo', 'registered1HourAgo','registered1DayAgo',
            'registered1WeekAgo','registered1MonthAgo','registered1YearAgo'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
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
        Student::create($validatedData);

        return redirect('students')->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'nationality' => 'required|string|max:255',
            'citizenship' => 'required|string|max:255',
            'religion' => 'required|string|max:255',
            'gender' => 'required|in:male,female', // Validation for gender
            'email' => 'required|email|unique:students,email,' . $student->id, // Validation for email
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
            if ($student->student_photo) {
                Storage::disk('public')->delete($student->student_photo);
            }
            $validatedData['student_photo'] = $request->file('student_photo')->store('photos/students', 'public');
        }

        // Handle parent photo update
        if ($request->hasFile('parent_photo')) {
            if ($student->parent_photo) {
                Storage::disk('public')->delete($student->parent_photo);
            }
            $validatedData['parent_photo'] = $request->file('parent_photo')->store('photos/parents', 'public');
        }

        // Update student data
        $student->update($validatedData);

        return redirect('students')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        // Delete student photos if they exist
        if ($student->student_photo) {
            Storage::disk('public')->delete($student->student_photo);
        }
        if ($student->parent_photo) {
            Storage::disk('public')->delete($student->parent_photo);
        }

        // Delete the student record
        $student->delete();

        return redirect('students')->with('success', 'Student deleted successfully.');
    }

    /**
     * Download the students list as a CSV file.
     */
    public function download()
    {
        $students = Student::all();

        $csvFileName = 'students_list_' . date('Y-m-d_H-i', time()) . '.csv';
        $handle = fopen('php://output', 'w');

        // Set headers for CSV download
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $csvFileName . '"');

        // Add CSV header
        fputcsv($handle, ['ID', 'Full Name', 'Nationality', 'Religion', 'Gender', 'Email', 'Parent Full Name', 'Student Photo', 'Parent Photo']);

        // Add student data to CSV
        foreach ($students as $student) {
            fputcsv($handle, [
                $student->id,
                $student->full_name,
                $student->nationality,
                $student->religion,
                $student->gender, // Include gender in CSV
                $student->email,  // Include email in CSV
                Storage::url($student->student_photo),
                Storage::url($student->parent_photo),
            ]);
        }

        fclose($handle);
        exit;
    }
}
