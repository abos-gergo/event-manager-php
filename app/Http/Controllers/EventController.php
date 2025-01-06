<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreeventRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = DB::table('events')->get();
        return view('events.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreeventRequest $request)
    {
        $validated = $request->validated();
        if (DB::table('events')->insert($validated)) {
            return redirect()->route('events.index')->with('success', 'Event created successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = DB::table('events')
            ->where('events.id', '=', $id)
            ->first();

        if (!$event) {
            abort(404);
        }

        return view('events.show', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = DB::table('events')
            ->where('events.id', '=', $id)
            ->first();
        return view('events.edit', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreeventRequest $request, string $id)
    {
        $validated = $request->validated();
        DB::table('events')
            ->where('id', '=', $id)
            ->update($validated);
        return redirect()->route('events.show', $id)->with('success', 'Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('events')->delete($id);
        return redirect()->route('events.index')->with('success', 'Event deleted successfully');
    }
}
