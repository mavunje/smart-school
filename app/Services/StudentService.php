<?php

namespace App\Services;

use App\Models\Student;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
class StudentService
{
    // Search for students by various attributes
    public function searchStudents($query, $perPage = 5)
    {
        return Student::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('full_name', 'like', "%{$query}%")
                                 ->orWhere('nationality', 'like', "%{$query}%")
                                 ->orWhere('religion', 'like', "%{$query}%");
        })->paginate($perPage);
    }




    // Get total student count
    public function getTotalStudentCount()
    {
        return Student::count();
    }


    /**
     * Get time passed since each student was registered.
     */
    public function getTimeSinceRegistrationForEachStudent($students)
    {
        foreach ($students as $student) {
            $student->time_since_registration = $student->created_at->diffForHumans();
        }
        return $students;
    }

    // Get the count of students registered today
    public function getTodayRegistrationCount()
    {
        $todayDate = now()->format('Y-m-d');
        return Student::whereDate('created_at', $todayDate)->count();
    }


    // Get the time passed since the first student registered today
    public function getTimeSinceFirstStudentRegisteredToday()
    {
        $todayDate = now()->format('Y-m-d');
        $studentsToday = Student::whereDate('created_at', $todayDate)->get();

        return $studentsToday->isEmpty()
            ? "No students registered today yet."
            : $studentsToday->first()->created_at->diffForHumans();
    }


    // Get the count of students registered within the last hour
    public function getRegisteredLastHour()
    {
        return Student::where('created_at', '>=', now()->subHour())->count();
    }

    // Get the count of students registered within the last week
    public function getRegisteredLastWeek()
    {
        return Student::where('created_at', '>=', now()->subWeek())->count();
    }

    // Get the count of students registered within the last month
    public function getRegisteredLastMonth()
    {
        return Student::where('created_at', '>=', now()->subMonth())->count();
    }

    // Get the count of students registered within this year
    public function getRegisteredThisYear()
    {
        return Student::where('created_at', '>=', now()->startOfYear())->count();
    }

    // Get the count of male and female students
    public function getGenderCounts()
    {
        $totalMaleStudents = Student::where('gender', 'male')->count();
        $totalFemaleStudents = Student::where('gender', 'female')->count();

        return [
            'male' => $totalMaleStudents,
            'female' => $totalFemaleStudents,
        ];
    }

    // Get student counts for various time intervals (e.g., 1 second ago, 1 minute ago, etc.)
    public function getRegisteredWithinInterval($interval)
    {
        switch ($interval) {
            case 'second':
                return Student::where('created_at', '>=', now()->subSecond())->count();
            case 'minute':
                return Student::where('created_at', '>=', now()->subMinute())->count();
            case 'hour':
                return Student::where('created_at', '>=', now()->subHour())->count();
            case 'day':
                return Student::where('created_at', '>=', now()->subDay())->count();
            case 'week':
                return Student::where('created_at', '>=', now()->subWeek())->count();
            case 'month':
                return Student::where('created_at', '>=', now()->subMonth())->count();
            case 'year':
                return Student::where('created_at', '>=', now()->subYear())->count();
            default:
                return 0;
        }
    }
    public function getDayWithHighestRegistrationRate()
    {
        // Get total number of students registered
        $totalStudents = Student::count();

        if ($totalStudents === 0) {
            return [
                'message' => 'No students registered yet.',
                'day' => null,
                'highest_percentage' => null,
                'data' => [],
            ];
        }

        // Get registrations per day of the week
        $registrationsPerDayOfWeek = DB::table('students')
            ->select(DB::raw('DAYOFWEEK(created_at) as day_of_week, COUNT(*) as registrations'))
            ->groupBy('day_of_week')
            ->get();

        // Create an array to map numeric day_of_week to weekday names
        $weekDays = [
            1 => 'Sunday',
            2 => 'Monday',
            3 => 'Tuesday',
            4 => 'Wednesday',
            5 => 'Thursday',
            6 => 'Friday',
            7 => 'Saturday'
        ];

        $registrationRates = [];
        $highestRate = 0;
        $highestRateDay = null;

        // Calculate the percentage for each day
        foreach ($registrationsPerDayOfWeek as $data) {
            $dayName = $weekDays[$data->day_of_week];
            $percentage = ($data->registrations / $totalStudents) * 100;

            // Track the day with the highest percentage
            if ($percentage > $highestRate) {
                $highestRate = $percentage;
                $highestRateDay = $dayName;
            }

            $registrationRates[] = [
                'day' => $dayName,
                'percentage' => round($percentage, 2), // Round to 2 decimal places
                'registrations' => $data->registrations
            ];
        }

        return [
            'message' => 'Day with the highest registration rate',
            'day' => $highestRateDay,
            'highest_percentage' => $highestRate,
            'data' => $registrationRates,
        ];
    }
}
