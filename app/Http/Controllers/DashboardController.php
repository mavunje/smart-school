<?php

namespace App\Http\Controllers;
use App\Services\StudentService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    protected $studentService;

    public function __construct( StudentService $studentService ) {
        $this->studentService = $studentService;
    }

    public function dashboard ()
    {

        // Get total student count
    $totalStudents = $this->studentService->getTotalStudentCount();


// Get total student count in this year
    $registeredThisYear = $this->studentService->getRegisteredThisYear();

    // Get today's registration count
    $studentsToday = $this->studentService->getTodayRegistrationCount();


// Get the day with the highest registration rate
$registrationStats = $this->studentService->getDayWithHighestRegistrationRate();

        return view('pannel.dashboard',['totalStudents' =>$totalStudents,'studentsToday' => $studentsToday,'registeredThisYear' => $registeredThisYear,
        'registrationRates' => $registrationStats['data'],
        'highestRateDay' => $registrationStats['day'],
        'highestRatePercentage' => $registrationStats['highest_percentage']]);

    }
}
