<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $datas = \App\Models\Film::all();
        return view('welcome', compact('datas'));
    }
}
