<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'show_profile',
        'username',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->password = Hash::make('password');
        });
    }

    // RelationShips
    public function userAbout()
    {
        return $this->hasMany(UserAbout::class);
    }


    public function userServices()
    {
        return $this->hasMany(UserService::class);
    }

    public function userContacts()
    {
        return $this->hasMany(UserContact::class);
    }

    public function userResumeSkills()
    {
        return $this->hasMany(UserResumeSkill::class);
    }

    public function userResumeServices()
    {
        return $this->hasMany(UserResumeService::class);
    }

    public function userResumeExperiences()
    {
        return $this->hasMany(UserResumeExperience::class);
    }

    public function userResumeEducations()
    {
        return $this->hasMany(UserResumeEducation::class);
    }

    public function userResumeCertifications()
    {
        return $this->hasMany(UserResumeCertification::class);
    }

    public function userData()
    {
        return $this->hasOne(UserData::class);
    }

    public function userResume()
    {
        return $this->hasOne(UserResume::class);
    }

    public function userSocial()
    {
        return $this->hasMany(UserSocial::class);
    }

    public function userTestimonials()
    {
        return $this->hasMany(UserTestimonial::class);
    }

    public function userServiceCategory()
    {
        return $this->hasMany(UserServiceCategory::class);
    }
}
