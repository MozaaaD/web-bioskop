@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <img src="{{ '/storage/'.$data->image }}" alt="Image not found!" width="300" height="450" class="object-fit-cover">
    </div>
    <div class="col">
      <div>
        <h5>Judul</h5>
        <h2 class="fw-bold">{{ $data->title }}</h2>
        <h5>Deskripsi</h5>

        <p class="fw-semibold">{{ $data->description }}</p>
        <h5>Harga</h5>

        <p class="fw-semibold">Rp. {{ $data->harga }}</p>
        <h5>durasi</h5>

        <p>{{ $data->duration }}</p>
      </div>
      <div class="card">
        <form class="p-3">
          <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Kursi Bioskop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .seat {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin: 5px;
            text-align: center;
            line-height: 40px;
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            background-color: #e0e0e0;
        }
        .seat.selected {
            background-color: #4caf50;
            color: #fff;
        }
        .seat.reserved {
            background-color: #f44336;
            color: #fff;
            cursor: not-allowed;
        }
        .seat-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .seat-container label {
            display: inline-block;
            margin: 5px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Pilih Kursi</h1>
    
    <div class="seat-container">
        <div id="seats">
            <!-- Kursi akan ditambahkan secara otomatis oleh JavaScript -->
        </div>
    </div>

    <form method="POST" action="{{ route('order.create') }}">
      @csrf
      <div class="form-group">
          <label for="customerName">Nama</label>
          <input type="text" id="customerName" name="customerName" required>
      </div>
      <div class="form-group">
          <label for="customerName">Total Harga</label>
          <input type="text" id="ttl" name="customerName" disabled>
      </div>
  
      <div class="form-group">
          <label for="phoneNumber">Nomor Telepon</label>
          <input type="number" id="phoneNumber" name="phoneNumber" required>
      </div>
  
      <div class="form-group">
          <label for="selectedSeats">Kursi yang dipilih</label>
          <input type="text" id="selectedSeats" name="selectedSeats" readonly>
      </div>
  
      <div class="mb-3 form-group">
          <label for="tanggal">Tanggal</label>
          <input type="date" id="tanggal" name="tanggal">
      </div>
  
      <div class="form-group">
          <button type="submit" id="submitButton">Pesan Kursi</button>
      </div>
  </form>
  
</div>

<script>
    let totalll = 0;
    function createSeats() {
        const seatsContainer = document.getElementById('seats');
        for (let i = 1; i <= 25; i++) {
            const seat = document.createElement('div');
            seat.className = 'seat';
            seat.id = 'seat' + i;
            seat.textContent = i;
            seat.addEventListener('click', () => toggleSeat(seat));
            seatsContainer.appendChild(seat);
        }
    }

    // Fungsi untuk toggle kursi
    function toggleSeat(seat) {
      if (seat.classList.contains('reserved')) return;
      if(seat.classList.contains('selected')) {
        totalll -= {{ $data->harga }}
      } else {
        totalll += {{ $data->harga }}
      }
      
        seat.classList.toggle('selected');
        document.getElementById('ttl').value = totalll;
        updateSelectedSeats();
    }

    // Fungsi untuk memperbarui kursi yang dipilih
    function updateSelectedSeats() {
        const selectedSeats = document.querySelectorAll('.seat.selected');
        const seatNumbers = Array.from(selectedSeats).map(seat => seat.textContent);
        document.getElementById('selectedSeats').value = seatNumbers.join(', ');
    }

    // Fungsi untuk menangani tombol pesanan
    document.getElementById('submitButton').addEventListener('click', () => {
        const customerName = document.getElementById('customerName').value;
        const phoneNumber = document.getElementById('phoneNumber').value;
        const selectedSeats = document.getElementById('selectedSeats').value;

        if (!customerName || !phoneNumber || !selectedSeats) {
            alert('Silakan lengkapi semua informasi.');
            return;
        }

        alert(`Pesanan berhasil!\n\nNama: ${customerName}\nTelepon: ${phoneNumber}\nKursi yang dipilih: ${selectedSeats}`);
    });

    // Inisialisasi kursi
    createSeats();
</script>

</body>
</html>

        </form>
      </div>
    </div>
  </div>
</div>
  @endsection