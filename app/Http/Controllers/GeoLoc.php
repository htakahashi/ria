<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Torann\GeoIP\Facades\GeoIP;

class GeoLoc extends Controller
{
    //Retrieves Geolocation and returns it to the view
    public function GeoLoc() {
        $location = GeoIP::getLocation();
        return view('spectral');
    }
}
