<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function kojin(Profile $profile)
    {
        return view('kojin')->with(['profiles' => $profile->orderBy('run', 'desc')->get()]);
    }
    public function top()
    {
        return view('top');
    }
    public function show(Profile $profile)
    {
       
        return view('show')->with(['profile' => $profile]);
    }
}
