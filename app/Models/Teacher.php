<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory,SoftDeletes;


    protected $table = 'teachers';


    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'fname',                // First Name
        'lname',                // Last Name
        'gender',               // Gender
        'accountNumber',        // Account Number
        'phone',                // Phone
        'email',                // Email
        'jobTitle',             // Job Title
        'department',           // Department
        'employmentType',       // Employment Type
        'startDate',            // Start Date
        'endDate',              // End Date
        'workDays',             // Work Days Per Week
        'workHoursPerDay',      // Working Hours Per Day
        'certifications',       // Certifications (to store file paths or URLs)
    ];

}
