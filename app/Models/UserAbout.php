<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAbout extends Model
{
    /** @use HasFactory<\Database\Factories\UserAboutFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'icon',
        'title',
        'item',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
