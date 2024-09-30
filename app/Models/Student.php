<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
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


      // Relationship: One Student belongs to one Applicant
      public function applicant()
      {
          return $this->belongsTo(Applicant::class);
      }

}
