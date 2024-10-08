<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResume extends Model
{
    /** @use HasFactory<\Database\Factories\UserResumeFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'resume_content',
        'resume_file_cv',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
