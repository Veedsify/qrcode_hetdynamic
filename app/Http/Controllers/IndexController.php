<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\User;
use App\Models\UserContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            $user = User::where('username', 'henryezeribe')->with([
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


    public function contact (Request $request, $userId){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $contact = new UserContact();
        $contact->user_id = $userId;
        $contact->name = $request->name;
        $contact->email_address = $request->email;
        $contact->message = $request->message;
        $contact->save();

        $user = User::find($userId);

        // Mail to admin
        Mail::to($user->userData->email)->send(new ContactMail($contact));

        return redirect()->back()->with('success', 'Message sent successfully');

    }
}
