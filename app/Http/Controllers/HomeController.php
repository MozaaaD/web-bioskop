<?php

namespace App\Http\Controllers;

use App\Models\Film;
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
        $datas = Film::all();
        return view('dashboard.home', compact('datas'));
    }
    public function pesan($id)
    {
        $data = Film::find($id);
        return view('pesan', compact('data'));
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
