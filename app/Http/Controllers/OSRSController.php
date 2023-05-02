<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OSRSController extends Controller
{
    public function planned(){
        return view('osrsbotplanner');
    }
}
