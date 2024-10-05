<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserService extends Model
{
    /** @use HasFactory<\Database\Factories\UserServiceFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_category_id',
        'service_name',
        'service_cover',
        'service_content',
    ];
}
