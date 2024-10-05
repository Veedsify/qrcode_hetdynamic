<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResumeEducation extends Model
{
    /** @use HasFactory<\Database\Factories\UserResumeEducationFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'degree',
        'school',
        'education_start_date',
        'education_end_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
