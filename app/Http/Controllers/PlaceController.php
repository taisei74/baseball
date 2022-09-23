<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Profile;

class PlaceController extends Controller
{
    public function basho(Place $place)
    {
       
        $sumruns = Profile::select('place_id')
                    ->selectRaw('SUM(run) as sum_run')
                    ->groupBy('place_id',)
                    ->get();
        
        // $places = Place::select('places.id', 'places.name')
        // ->joinSub($sumruns, 'sum_run', function($join){
        //     $join->on('places.id', '=', 'sum_runs.places_id');
        // })->get();
        // dd($places);
       
        return view('place')->with(['places' => $place->get(),'sumruns'=>$sumruns]);
    }
}
