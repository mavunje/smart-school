<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

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
}
