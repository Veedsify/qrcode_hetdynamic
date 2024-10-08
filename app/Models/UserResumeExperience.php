<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResumeExperience extends Model
{
    /** @use HasFactory<\Database\Factories\UserResumeExperienceFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_name',
        'job_title',
        'start_date',
        'end_date',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
