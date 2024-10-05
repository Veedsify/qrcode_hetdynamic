<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserContact extends Model
{
    /** @use HasFactory<\Database\Factories\UserContactFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email_address',
        'message',
    ];
}
