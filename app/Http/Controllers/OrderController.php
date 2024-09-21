<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function store(Request $request)
    {
        $request->validate([
            'customerName' => 'required|string|max:255',
            'phoneNumber' => 'required|numeric',
            'selectedSeats' => 'required|string',
            'tanggal' => 'required|date',
            'film_id' => 'required|exists:films,id',
        ]);

        \App\Models\Order::create([
            'film_id' => $request->film_id,
            'nama' => $request->nama,
            'telp' => $request->telp,
            'kursi' => $request->kursi,
            'tanggal' => $request->tanggal,
        ]);

        

        // Redirect to the order details page
        return redirect()->back();
    }

    public function show($id)
    {
        // In a real application, retrieve the order data from the database using the ID
        $orderData = session('orderData');

        return view('order-details', ['orderData' => $orderData]);
    }

}
