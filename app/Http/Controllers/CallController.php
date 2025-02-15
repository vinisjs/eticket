<?php

namespace App\Http\Controllers;

use App\Models\Calls;
use Illuminate\Http\Request;

class CallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calls = Call::all();
        return view('calls.index', compact('calls')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('calls.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'client_id' => 'required|exists:clients,id',
        ]);

        $call = Call::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'client_id' => $validated['client_id'],
            'opened_at' => now(),
            'status' => 'open',
        ]);

        return response()->json($call, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $call = Call::findOrFail($id);
        return view('calls.show', compact('call'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $call = Call::findOrFail($id);
        return view('calls.edit', compact('call'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'client_id' => 'required|exists:clients,id',
        ]);

        $call = Call::findOrFail($id);
        $call->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'client_id' => $validated['client_id'],
            'status' => 'open',
        ]);        

        return response()->json($call, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $call = Call::findOrFail($id);
        $call->delete();
        return response()->json(null, 204);
    }
}
