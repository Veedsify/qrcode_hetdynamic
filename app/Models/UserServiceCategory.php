<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserServiceCategory extends Model
{
    /** @use HasFactory<\Database\Factories\UserServiceCategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_category_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function user_services()
    {
        return $this->hasMany(UserService::class);
    }
}
