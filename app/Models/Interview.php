<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'applicant_id',
        'interview_date',
        'interviewer_name',
        'location',
        'duration',
        'attended',
        'score',
        'remarks',
        'result',
    ];

    /**
     * Get the applicant associated with the interview.
     */
    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
