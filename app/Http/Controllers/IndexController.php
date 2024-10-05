<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showProfile($username)
    {

        $user = User::where('username', $username)->with(['userResume', 'userResumeServices', 'userContacts'])->first();

        if (!$user) {
            $user = User::where('id', 2)->with(['userResume', 'userResumeServices', 'userContacts'])->first();
        }

        dd($user);
        // return view('profile', ['username' => $username]);
    }
}
