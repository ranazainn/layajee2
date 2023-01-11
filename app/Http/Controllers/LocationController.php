<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver_st_end;

class LocationController extends Controller
{

    
    public function latLong(Request $request) {
 
        $lati = (float)$request->latitude;
        $longt = (float)$request->longtitude;
        $rad = (int)$request->radius;
        
        
        
        $distance_result = "(6371 * acos(cos(radians($lati))
        * cos(radians(latit))
        * cos(radians(longt)
        - radians($longt))
        + sin(radians($lati))
        * sin(radians(latit))))";
        
        
        $driver = Driver_st_end::select('id', 'name')
            ->selectRaw("{$distance_result} AS distance")
            ->whereRaw("{$distance_result} < ?", [$rad])
            ->get();
        
        
        
        return view('test')->with('nearbys', $warhouses);
    }
}
