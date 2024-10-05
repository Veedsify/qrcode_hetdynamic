<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResumeCertification extends Model
{
    /** @use HasFactory<\Database\Factories\UserResumeCertificationFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'certification_name',
        'receive_date',
        'description',
        'link'
    ];
}
