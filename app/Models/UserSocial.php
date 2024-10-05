<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    /** @use HasFactory<\Database\Factories\UserSocialFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'icon',
        'link',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
