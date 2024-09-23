@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col mt-5">
      <img src="{{ '/storage/'.$data->image }}" alt="Image not found!" width="300" height="450" class="object-fit-cover">
    </div>
    <div class="col mt-5">
      <div>
        <h2>Judul</h2>
        <p class="fw-bold">{{ $data->title }}</p>
        <h2>Deskripsi</h2>

        <p class="fw-semibold">{{ $data->description }}</p>
        <h2>Harga</h2>

        <p class="fw-semibold">Rp. {{ $data->harga }}</p>
        <h2>Durasi</h2>

        <p>{{ $data->duration }}</p>
      </div>
      <div class="card">
        <div class="p-3">

            <form method="POST" action="{{ route('order.create') }}">
                @csrf
        
                <!-- Pilihan kursi -->
                <div class="form-group mb-4">
                    <label for="seats">Pilih Kursi:</label>
                    <div class="seat-container container">
                        <div class="row">
                            @foreach ($seats as $seat)
                                <label class="seat-label col col-lg-2">
                                    <input type="checkbox" onchange="haha(this)" name="kursi[]" value="{{ $seat->id }}" {{ $seat->is_reversed ? 'disabled' : '' }}>
                                    <span style="font-size: 12px">Kursi {{ $seat->seat_number }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>

                <script>
                    let total = 0;
                    function haha(e) {
                        let h = {!! $data->harga !!}
                        let d = e.checked;
                        let el = document.getElementById('total')

                        if(d) {
                            total += h;
                        } else {
                            total -= h;
                        }

                        el.value = total;
                    }
                </script>
        
                <!-- Informasi pelanggan -->
                
                <div class="form-group mb-3">
                    <label for="nama">Harga</label>
                    <input type="text" id="total" name="total" class="form-control">
                </div>

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

                <input type="hidden" name="film_id" value="{{ $data->id }}">

                {{-- <input type="hidden" name="seat_id" value="{{ $seats->id }}"> --}}

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