<?php
namespace  App\Http\Controllers;
use App\Models\Student;
use App\Services\StudentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class StudentController extends Controller {



    protected $studentService;

    public function __construct( StudentService $studentService ) {
        $this->studentService = $studentService;
    }
    // student service layer for search ends

    public function index(Request $request)
{
    $search = $request->get('search');
    $students = $this->studentService->searchStudents($search, 5);

    // Get total student count
    $totalStudents = $this->studentService->getTotalStudentCount();

    // Get today's registration count
    $studentsToday = $this->studentService->getTodayRegistrationCount();

    // Time since first student registered today
    $timePassedSinceFirst = $this->studentService->getTimeSinceFirstStudentRegisteredToday();

    // Time since registration for each student
    $studentsWithTime = $this->studentService->getTimeSinceRegistrationForEachStudent($students);

    // Get students registered in the last hour, week, month, year
    $registeredLastHour = $this->studentService->getRegisteredLastHour();
    $registeredLastWeek = $this->studentService->getRegisteredLastWeek();
    $registeredLastMonth = $this->studentService->getRegisteredLastMonth();
    $registeredThisYear = $this->studentService->getRegisteredThisYear();

    // Get gender-specific student counts
    $genderCounts = $this->studentService->getGenderCounts();
    $totalMaleStudents = $genderCounts['male'];
    $totalFemaleStudents = $genderCounts['female'];

    // Get students registered within the last minute (dynamic interval example)
    $registered1MinuteAgo = $this->studentService->getRegisteredWithinInterval('minute');


// Get the day with the highest registration rate
$registrationStats = $this->studentService->getDayWithHighestRegistrationRate();


    // Pass data to the view
    return view('students.index', [
        'students' => $studentsWithTime,'totalStudents' => $totalStudents,'studentsToday' => $studentsToday,
        'timePassedSinceFirst' => $timePassedSinceFirst,'registeredLastHour' => $registeredLastHour,
        'registeredLastWeek' => $registeredLastWeek,'registeredLastMonth' => $registeredLastMonth,
        'registeredThisYear' => $registeredThisYear,'totalMaleStudents' => $totalMaleStudents,
        'totalFemaleStudents' => $totalFemaleStudents,'registered1MinuteAgo' => $registered1MinuteAgo,
        'registrationRates' => $registrationStats['data'],
    'highestRateDay' => $registrationStats['day'],'highestRatePercentage' => $registrationStats['highest_percentage']
    ]);
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
            'email' => 'required|email|unique:students,email, ' . $student->id, // Validation for email
            'parent_full_name' => 'required|string|max:255',
            'parent_nationality' => 'required|string|max:255',
            'parent_citizenship' => 'required|string|max:255',
            'parent_address' => 'required|string|max:255',
            'parent_residence' => 'required|string|max:255',
            'previous_schools' => 'nullable|string',
            'student_photo' => 'nullable|image|mimes:jpg, jpeg, png|max:2048',
            'parent_photo' => 'nullable|image|mimes:jpg, jpeg, png|max:2048',
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
        header('Content-Disposition: attachment;
        filename = "' . $csvFileName . '"');

        // Add CSV header
        fputcsv($handle, ['ID', 'Full Name', 'Nationality', 'Religion', 'Gender', 'Email', 'Parent Full Name', 'Student Photo', 'Parent Photo' ] );

        // Add student data to CSV
        foreach ( $students as $student ) {
            fputcsv( $handle, [
                $student->id,
                $student->full_name,
                $student->nationality,
                $student->religion,
                $student->gender, // Include gender in CSV
                $student->email,  // Include email in CSV
                Storage::url( $student->student_photo ),
                Storage::url( $student->parent_photo ),
            ] );
        }

        fclose( $handle );
        exit;
    }
}
