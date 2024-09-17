@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Pesanan</h1>
    
    <div class="card p-4">
        <h5>Nama:</h5>
        <p>{{ $orderData['customerName'] }}</p>
        
        <h5>Nomor Telepon:</h5>
        <p>{{ $orderData['phoneNumber'] }}</p>
        
        <h5>Kursi yang dipilih:</h5>
        <p>{{ $orderData['selectedSeats'] }}</p>
        
        <h5>Tanggal:</h5>
        <p>{{ $orderData['tanggal'] }}</p>
    </div>
</div>
@endsection
