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
        'user_service_category_id',
        'service_name',
        'service_cover',
        'service_content',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service_category()
    {
        return $this->belongsTo(UserServiceCategory::class);
    }
}
