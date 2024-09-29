<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Seat;
use App\Models\Time;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home()
    {
        if(User::find(auth()->id())->role !== 'admin') return redirect('/');
        $datas = Film::all();
        $seats = \App\Models\Seat::all();
        return view('dashboard.home', compact('datas', 'seats'));
    }
    public function pesan($id, $time)
    {
        $data = Film::findOrFail($id);
        $seats = Seat::where('time_id', $time)->get();

        $allReserved = $seats->every('is_reversed');
        if ($allReserved) {
            return redirect()->back();
        }

        return view('pesan', compact('data', 'seats'));
    }
    public function pesan2($id)
    {
        $data = Film::findOrFail($id);
        $times = Time::where('film_id', $id)->get();
        return view('pesan2', compact('data', 'times'));
    }
    public function deskripsi()
    {
        return view('deskripsi');
    }

    public function detail($id)
    {
        $data = Film::find($id);
        return view('detail', compact('data'));
    }
}
