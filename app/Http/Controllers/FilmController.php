<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FilmController extends Controller
{

    // untuk buat
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description'  => 'required',
            'duration' => 'required' ,
            'image' => 'required',
        ]);

        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('films', 'public');
            
            Film::create([
                'title' => $request->title,
                'description' => $request->description,
                'duration' => $request->duration,
                'image' => $imagePath,  
            ]);
        }

        return redirect()->route('home');
    }

    // untuk edit
    public function edit(Request $request ,$id)
    {
        $data = Film::find($id);
        $updateCok = $request->all();
        $data->update($updateCok);
        return redirect()->route('home');
    }

    // tampilan rdit
    public function update($id)
    {
        $data = Film::find($id);
        $image = Film::all();
        return view('dashboard.update', compact('data', 'image'));
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function delete($id)
    {
        $data = Film::find($id);
        $data->delete();
        return redirect()->route('home');
    } 

}
