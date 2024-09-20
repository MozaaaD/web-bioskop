@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col mt-5">
      <img src="{{ '/storage/'.$data->image }}" alt="Image not found!" width="300" height="450" class="object-fit-cover">
    </div>
    <div class="col mt-5">
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
        <div class="p-3">

            <form method="POST" action="">
                @csrf
        
                <!-- Pilihan kursi -->
                <div class="form-group mb-4">
                    <label for="seats">Pilih Kursi:</label>
                    <div class="seat-container">
                        {{-- @foreach ($seats as $seat)
                            <label class="seat-label">
                                <input type="checkbox" name="seat_ids[]" value="{{ $seat->id }}" {{ $seat->is_reserved ? 'disabled' : '' }}>
                                Kursi {{ $seat->seat_number }}
                            </label>
                        @endforeach --}}
                    </div>
                </div>
        
                <!-- Informasi pelanggan -->
                <div class="form-group mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" required>
                </div>
        
                <div class="form-group mb-3">
                    <label for="telp">Nomor Telepon</label>
                    <input type="text" id="telp" name="telp" class="form-control" required>
                </div>
        
                <div class="form-group mb-3">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                </div>
        
                <div class="form-group mb-3">
                    <label for="film_id">ID Film</label>
                    <input type="number" id="film_id" name="film_id" class="form-control" required>
                </div>
        
                <!-- Tombol submit -->
                <button type="submit" class="btn btn-primary">Pesan Kursi</button>
            </form>

        </div>
      </div>
    </div>
  </div>
</div>

<style>
    .seat-label {
        display: inline-block;
        margin-right: 10px;
        margin-bottom: 10px;
    }

    .seat-container input[type="checkbox"]:disabled + label {
        background-color: #f44336;
        cursor: not-allowed;
        color: #fff;
    }
</style>
  @endsection