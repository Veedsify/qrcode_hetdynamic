<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResumeSkill extends Model
{
    /** @use HasFactory<\Database\Factories\UserResumeSkillFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'skill_name',
        'skill_level',
    ];
}
