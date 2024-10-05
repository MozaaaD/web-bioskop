<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Seat;
use App\Models\SeatTerpakai;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function store(Request $request)
    {

        $film = \App\Models\Film::find($request->film_id);
        
        $oid = Order::create([
            'film_id' => $request->film_id,
            'nama' => $request->nama,
            'total' => $request->total,
            'telp' => $request->telp,
        ]);

        foreach ($request->kursi as $item) {
            Seat::find($item)->update([
                'order_id' => $oid->id,
                'is_reversed' => true
            ]);
        }

        

        // Redirect to the order details page
        return redirect()->route('struk', $oid->id);
    }

    public function show($id)
    {
        // In a real application, retrieve the order data from the database using the ID
        $orderData = session('orderData');

        return view('order-details', ['orderData' => $orderData]);
    }


    public function struk($order_id){
        $d = Order::with(['film', 'seats', 'seats.time'])->find($order_id);
        return view('struk', compact('d'));
    }

}
