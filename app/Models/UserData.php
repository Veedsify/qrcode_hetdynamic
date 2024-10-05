<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    /** @use HasFactory<\Database\Factories\UserDataFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'profession',
        'fullname',
        'introduction',
        'born_in',
        'experience',
        'date_of_birth',
        'profile_picture',
        'about_me',
        'address',
        'phone_number',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
