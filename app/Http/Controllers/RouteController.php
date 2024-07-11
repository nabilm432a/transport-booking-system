<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Route;
use App\Http\Requests\StoreRouteRequest;
use App\Http\Requests\UpdateRouteRequest;
use App\Models\Transport;
use Illuminate\Database\QueryException;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $routes = Route::all();
        return view('admin_panel.route', compact('routes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = Location::all();
        $transports = Transport::all();
        return view('admin_panel.routes.create', compact('locations', 'transports'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'source' => 'required|exists:locations,id',
            'destination' => 'required|different:source|exists:locations,id',
            'vehicle_id' => 'required|exists:transports,id',
            'price' => 'required|numeric|min:0',
            'departure_time' => 'required|after:now',
            'arrival_time' => 'required|after:departure_time',
        ]);

        try {
            $data = [
                'source' => $request->input('source'),
                'destination' => $request->input('destination'),
                'vehicle_id' => $request->input('vehicle_id'),
                'price' => $request->input('price'),
                'departure_time' => $request->input('departure_time'),
                'arrival_time' => $request->input('arrival_time'),
            ];
            Route::create($data);
            return redirect()->route('routes.index')->with('message', 'New Route Created');
        } catch (QueryException $e) {
            return redirect()->route('routes.index')->with('message', 'Failed to create route');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Route $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Route $route)
    {
        return view('admin_panel.routes.edit', compact('route'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\Illuminate\Http\Request $request, Route $route)
    {

        $request->validate([
            'price' => 'required|numeric|min:0',
            'departure_time' => 'required|after:now',
            'arrival_time' => 'required|after:departure_time',
        ]);
        try {
            $route->update([
                'price' => $request->input('price'),
                'departure_time' => $request->input('departure_time'),
                'arrival_time' => $request->input('arrival_time'),
            ]);
            $message = "Successfully Modified";
        } catch (QueryException $e) {
            $message = "An error occurred trying to edit the data";
        }
        return redirect()->route('routes.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Route $route)
    {
        try {
            $route->delete();
            return redirect()->route('routes.index')->with('message', 'Route deleted successfully');
        } catch (QueryException $e) {
            Log::error('Failed to delete route: '.$e->getMessage());
            return redirect()->route('routes.index')->with('message', 'Failed to delete route');
        }
    }
}
