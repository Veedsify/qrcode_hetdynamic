<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showProfile($username)
    {

        $user = User::where('username', $username)->with([
            'userAbout',
            'userServices',
            'userContacts',
            'userResumeSkills',
            'userResumeServices',
            'userResumeExperiences',
            'userResumeEducations',
            'userResumeCertifications',
            'userData',
            'userResume',
            'userSocial',
            'userTestimonials',
            'userServiceCategory'
        ])->first();

        if (!$user) {
            $user = User::where('id', 2)->with([
                'userAbout',
                'userServices',
                'userContacts',
                'userResumeSkills',
                'userResumeServices',
                'userResumeExperiences',
                'userResumeEducations',
                'userResumeCertifications',
                'userData',
                'userResume',
                'userSocial',
                'userTestimonials',
                'userServiceCategory'
            ])->first();
        }

        $userServiceCategory = $user->userServiceCategory->pluck('service_category_name')->toArray();

        return view('index', [
            'user' => $user,
            'userServiceCategory' => $userServiceCategory
        ]);
        // return view('profile', ['username' => $username]);
    }
}
