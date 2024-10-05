<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResumeService extends Model
{
    /** @use HasFactory<\Database\Factories\UserResumeServiceFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'icon',
        'title',
        'description',
        'link'
    ];
}
