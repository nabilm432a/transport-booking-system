<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RealTimeTrackController extends Controller
{
    public function view_list() {
        $routes = Route::all();
        return view('realtime_availability', compact('routes'));
    }


}
