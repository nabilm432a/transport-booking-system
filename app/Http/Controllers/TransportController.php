<?php

namespace App\Http\Controllers;


use Illuminate\Database\QueryException;
use App\Models\Transport;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transports = Transport::all();
        return view('admin_panel.transport', compact('transports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_panel.transports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(\Illuminate\Http\Request $request)
    {
        try {
            Transport::create([
                'license' => $request->input('license'),
                'seats' => $request->input('seats'),
                'type' => $request->input('type'),
            ]);
            $message = "Successfully inserted";
        } catch (QueryException $e) {
            $message = "Failed to insert";
        }
        return redirect()->route('transports.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transport $transport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transport $transport)
    {
        return view('admin_panel.transports.edit', compact('transport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\Illuminate\Http\Request $request, Transport $transport)
    {
        try {
            $transport->update([
                'license' => $request->input('license'),
                'seats' => $request->input('seats'),
                'type' => $request->input('type'),
            ]);
            $message = "Successfully Modified";
        } catch (QueryException $e) {
            $message = "An error occurred trying to edit the data";
        }
        return redirect()->route('transports.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transport $transport)
    {
        try {
            $transport->delete();
            return redirect()->route('transports.index');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] === 1451) {
                return redirect()->route('transports.index')->with('message', 'The Vehicle data is currently in use, unable to remove');
            } else {
                return redirect()->route('transports.index')->with('message', 'An error occurred while processing your request.');
            }
        }
    }
}
