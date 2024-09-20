<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function store(Request $request)
    {
        // Validate the request
        // $request->validate([
        //     'customerName' => 'required|string|max:255',
        //     'phoneNumber' => 'required|numeric',
        //     'selectedSeats' => 'required|string',
        //     'tanggal' => 'required|date',
        // ]);

        // Store the order details
        // In a real application, you would save this to a database
        $orderData = $request->only(['customerName', 'phoneNumber', 'selectedSeats', 'tanggal']);

        // You would typically save this data to the database and then retrieve it
        $orderId = 1; // Dummy order ID for demonstration

        \App\Models\Order::create([
            'nama' => $request->nama,
            'telp' => $request->telp,
            'kursi' => $request->kursi,
            'tanggal' => $request->tanggal,
        ]);

        

        // Redirect to the order details page
        return redirect()->route('order.show', ['id' => $orderId])->with('orderData', $orderData);
    }

    public function show($id)
    {
        // In a real application, retrieve the order data from the database using the ID
        $orderData = session('orderData');

        return view('order-details', ['orderData' => $orderData]);
    }

}
