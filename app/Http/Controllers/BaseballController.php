<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Homerun;

class BaseballController extends Controller
{
    public function top()
    {
        return view('top');
    }
    public function kojin()
    {
        $homeruns = Homerun::all();
        return view('kojin')->with(['homeruns' => $homeruns]);
    }
    
}
