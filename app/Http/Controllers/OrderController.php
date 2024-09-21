<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function store(Request $request)
    {

        $film = \App\Models\Film::find($request->film_id);

        foreach ($request->kursi as $item) {
            \App\Models\Order::create([
                'film_id' => $request->film_id,
                'seat_id' => $item,
                'nama' => $request->nama,
                'total' => $request->total,
                'telp' => $request->telp,
                'tanggal' => $request->tanggal,
            ]);
        }

        

        // Redirect to the order details page
        return redirect()->route('beranda');
    }

    public function show($id)
    {
        // In a real application, retrieve the order data from the database using the ID
        $orderData = session('orderData');

        return view('order-details', ['orderData' => $orderData]);
    }


    public function struk(){
        return view('struk');
    }

}
