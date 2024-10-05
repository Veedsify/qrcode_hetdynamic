<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTestimonial extends Model
{
    /** @use HasFactory<\Database\Factories\UserTestimonialFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'position',
        'description',
        'image'
    ];
}
