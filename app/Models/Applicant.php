<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
        'dob',
         'email',
        'gender',
        'nationality',
        'citizenship',
        'religion',
        'parent_full_name',
        'parent_nationality',
        'parent_citizenship',
        'parent_address',
        'parent_residence',
        'previous_schools',
        'student_photo', // Student photo
        'parent_photo', // Parent photo
    ];

    /**
     * Get the student record associated with the applicant.
     */
    public function student()
    {
        // One-to-One relationship: An applicant can become one student.
        return $this->hasOne(Student::class);
    }

    
}


