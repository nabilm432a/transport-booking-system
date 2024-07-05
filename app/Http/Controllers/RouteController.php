<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Route;
use App\Http\Requests\StoreRouteRequest;
use App\Http\Requests\UpdateRouteRequest;
use App\Models\Transport;

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
        //
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
        return view('admin_panel.routes.edit', $route);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\Illuminate\Http\Request $request, Route $route)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Route $route)
    {
        //
    }
}
