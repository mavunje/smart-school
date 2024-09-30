<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use PDF;

class TeacherController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::paginate(10);
        return view('teacher.index',[
            'teachers' => $teachers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'fname'                => 'required|string|max:255',
            'lname'                => 'required|string|max:255',
            'gender'               => 'required|string|in:male,female', // Adjust or add more gender options if needed
            'accountNumber'        => 'required|string|max:255',
            'phone'                => 'required|string|regex:/^(\+?1\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/', // Adjust regex for phone validation as needed
            'email'                => 'required|email|max:255',
            'jobTitle'             => 'required|string|in:academic,teacher,labTechnician,headmaster,headmistress,administrativeStaff', // Adjust or add more job titles if needed
            'department'           => 'required|string|in:mathematics,science,english,history,geography,languages,arts', // Adjust or add more departments if needed
            'employmentType'       => 'required|string|in:full-time,part-time,contract',
            'startDate'            => 'required|date',
            'endDate'              => 'required|date|after_or_equal:startDate', // Ensure endDate is after startDate
            'workDays'             => 'required|integer|between:5,7', // Ensure workDays is within the expected range
            'workHoursPerDay'      => 'required|integer|between:4,10', // Ensure workHoursPerDay is within the expected range
            'certifications'       => 'nullable|array', // Accept array for certifications
            'certifications.*'     => 'file|mimes:pdf,jpg,jpeg,png|max:2048' // File validation for each certification
        ]);

        // Create a new Teacher record
        Teacher::create([
            'fname'                => $request->fname,
            'lname'                => $request->lname,
            'gender'               => $request->gender,
            'accountNumber'        => $request->accountNumber,
            'phone'                => $request->phone,
            'email'                => $request->email,
            'jobTitle'             => $request->jobTitle,
            'department'           => $request->department,
            'employmentType'       => $request->employmentType,
            'startDate'            => $request->startDate,
            'endDate'              => $request->endDate,
            'workDays'             => $request->workDays,
            'workHoursPerDay'      => $request->workHoursPerDay,
            'certifications'       => json_encode($request->certifications), // Store certifications as JSON
        ]);

        // Redirect or return response as needed
        return redirect('teacher')->with('success', 'Teacher record created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show( teacher $teacher)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
        return view('teacher.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|email|max:255',
            'jobTitle' => 'required|string|in:academic,teacher,labTechnician,headmaster,headmistress,administrativeStaff',
            'department' => 'required|string|in:mathematics,science,english,history,geography,languages,arts',
            'employmentType' => 'required|string|in:full-time,part-time,contract',
            'startDate' => 'required|date',
            'endDate' => 'nullable|date|after_or_equal:startDate',
            'workDays' => 'required|integer|between:5,7',
            'workHoursPerDay' => 'required|integer|between:4,10',
            'certifications.*' => 'nullable|file|mimes:pdf,doc,docx|max:2048' // Adjust file validation as needed
        ]);

        // Find the teacher and update the record
        $teacher = Teacher::findOrFail($id);
        $teacher->fname = $request->input('fname');
        $teacher->lname = $request->input('lname');
        $teacher->phone = $request->input('phone');
        $teacher->email = $request->input('email');
        $teacher->jobTitle = $request->input('jobTitle');
        $teacher->department = $request->input('department');
        $teacher->employmentType = $request->input('employmentType');
        $teacher->startDate = $request->input('startDate');
        $teacher->endDate = $request->input('endDate');
        $teacher->workDays = $request->input('workDays');
        $teacher->workHoursPerDay = $request->input('workHoursPerDay');

        // Handle file uploads
        if ($request->hasFile('certifications')) {
            foreach ($request->file('certifications') as $file) {
                // Store the file and update the model accordingly
                $path = $file->store('certifications', 'public');
                // Logic to associate the file with the teacher's record, if needed
            }
        }

        $teacher->save();

        return redirect('teacher')->with('success', 'Teacher contract updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */

    //  PERMANENT DELETING FUNCTION
    public function destroy(teacher $teacher)
    {
         $teacher->forceDelete();

        // $teacher->delete();
        return redirect('teacher')->with('success','teacher Record Deleted Successfully');
    }

//RESTORING DELETED RECORDS

/**
 * Restore a soft-deleted teacher.
 */
public function restore($id)
{
    // Find the soft-deleted teacher using `withTrashed()` so you can also retrieve soft-deleted records
    $teacher = Teacher::withTrashed()->findOrFail($id);

    // Restore the teacher record, this will set `deleted_at` to NULL
    $teacher->restore();

    // Redirect back to the list with a success message
    return redirect()->route('teacher.index')->with('success', 'Teacher record restored successfully.');
}




    public function pdf_generator_get(Request $request)
    {
$users = Teacher::get();
$data = [
    'title' => 'ST.JOSEPH SEMINARY KAENGESA ',
    'date' => date('m/d/Y'),
    'users' => $users
];

$pdf = PDF::loadview('myPDF', $data);
return $pdf->download('Kaengesa-Seminary.pdf');
    }
}
