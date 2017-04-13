<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Torann\GeoIP\Facades\GeoIP;

class GeoLoc extends Controller
{
    //Retrieves Geolocation and returns it to the view
    public function Main() {
        $data = GeoIP::getLocation();
        //$location = geoip('country');
        return view('spectral', compact('data'));
    }
}
