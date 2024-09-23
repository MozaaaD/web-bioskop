<?php

namespace App\Http\Controllers;

use App\Models\Film;
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
    public function pesan($id)
    {
        $data = Film::findOrFail($id);
        $seats = \App\Models\Seat::all();
        return view('pesan', compact('data', 'seats'));
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
