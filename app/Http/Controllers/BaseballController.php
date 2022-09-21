<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Homerun;
use App\Place;
use App\User;

class BaseballController extends Controller
{
    public function top()
    {
        return view('top');
    }
    public function kojin()
    {
        
        $homeruns = Homerun::all()->sortBydesc('hon');
        
        
        
        return view('kojin')->with(['homeruns' => $homeruns]);
    }
    
    public function show()
    {
        $profiles = Profile::all();
        return view('show')->with(['profiles' => $profiles]);
    }
    
    public function place()
    {
        $place = Place::all();
        return view('place')->with(['places' => $place]);
    }
}
