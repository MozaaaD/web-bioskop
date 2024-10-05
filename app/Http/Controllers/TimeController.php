<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Time;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function index()
    {
        $times = Time::with('film')->get();
        return view('times.index', compact('times'));
    }

    public function create()
    {
        $films = Film::all();
        return view('times.create', compact('films'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'film_id' => 'required|exists:films,id',
            'time' => 'required|string',
            'tgl' => 'required|string',
        ]);

        $d = Time::create([
            'film_id' => $request->film_id,
            'time' => $request->time,
            'tgl' => $request->tgl
        ]);

        $numberOfSeats = $request->input('seat_number');
        for ( $i = 1; $i <= $numberOfSeats; $i++)
        {
            \App\Models\Seat::create([
                'time_id' => $d->id,
                'seat_number' => $i
            ]);
        }

        return redirect()->route('times.index')->with('success', 'Time created successfully.');
    }

    public function show(Time $time)
    {
        return view('times.show', compact('time'));
    }

    public function edit(Time $time)
    {
        $films = Film::all();
        return view('times.edit', compact('time', 'films'));
    }

    public function update(Request $request, Time $time)
    {
        $request->validate([
            'film_id' => 'required|exists:films,id',
            'time' => 'required|string',
            'tgl' => 'required|string',
        ]);

        $time->update($request->all());
        return redirect()->route('times.index')->with('success', 'Time updated successfully.');
    }

    public function destroy(Time $time)
    {
        $time->delete();
        return redirect()->route('times.index')->with('success', 'Time deleted successfully.');
    }
}
