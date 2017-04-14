<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use \Torann\GeoIP\Facades\GeoIP;

class GeoLoc extends Controller
{
    //Retrieves Geolocation and returns it to the view
    public function Main() {
        $ip = Request::ip();
        $data = GeoIP::getLocation($ip);
        //$location = geoip('country');
        return view('spectral', compact('data'));
    }
}
