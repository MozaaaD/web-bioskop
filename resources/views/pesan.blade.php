@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col mt-5 text-center">
      <img src="{{ '/storage/'.$data->image }}" alt="Image not found!" class="img-fluid rounded shadow zoom-image" style="max-width: 350px; height: auto; border: 5px solid #ddd;">
    </div>
    <div class="col mt-5">
      <div class="bg-light p-3 rounded shadow-sm">
        <h2 class="text-primary fs-5">Judul</h2>
        <p class="fw-bold fs-6">{{ $data->title }}</p>
      </div>
      <div class="bg-light p-3 rounded shadow-sm mt-2">
        <h2 class="text-primary fs-5">Deskripsi</h2>
        <p class="fw-semibold fs-6">{{ $data->description }}</p>
      </div>
      <div class="bg-light p-3 rounded shadow-sm mt-2">
        <h2 class="text-primary fs-5">Harga</h2>
        <p class="fw-semibold fs-6">Rp. {{ number_format($data->harga, 0, ',', '.') }}</p>
      </div>
      <div class="bg-light p-3 rounded shadow-sm mt-2">
        <h2 class="text-primary fs-5">Durasi</h2>
        <p class="fw-semibold fs-6">{{ $data->duration }}</p>
      </div>

      <div class="card mt-3">
        <div class="p-3">
            <form method="POST" action="{{ route('order.create') }}">
                @csrf

                <!-- Pilihan kursi -->
                <div class="form-group mb-4">
                    <label for="seats" class="fw-bold">Pilih Kursi:</label>
                    <div class="text-center">
                        <p class="mb-1">LAYAR</p>
                        <div style="background-color: black; padding: 6px; width: 360px; margin: 0 auto;"></div>
                    </div>
                    <div class="seat-container container mt-2">
                        <div class="row justify-content-center">
                            @foreach ($seats as $seat)
                                <label class="seat-label col-1 mx-1">
                                    <input type="checkbox" class="haha" onchange="haha(this)" name="kursi[]" value="{{ $seat->id }}" {{ $seat->is_reversed ? 'disabled checked' : '' }}>
                                    <span class="seat-number" {{ $seat->is_reversed ? 'style=color:red' : ''}}> {{ $seat->seat_number }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>

                <script>
                    let total = 0;
                    function haha(e) {
                        let h = {!! $data->harga !!};
                        let d = e.checked;
                        let el = document.getElementById('total');

                        total += d ? h : -h;
                        el.value = total;
                    }
                </script>

                <!-- Informasi pelanggan -->
                <div class="form-group mb-3">
                    <label for="total">Harga</label>
                    <input type="text" id="total" name="total" class="form-control" readonly>
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
                <button type="submit" class="btn btn-primary">Pesan Kursi</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
    .seat-label {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 5px; /* Reduced margin for tighter spacing */
        transition: transform 0.2s;
    }

    .seat-label:hover {
        transform: scale(1.05); /* Slight zoom on hover */
    }

    .seat-number {
        font-size: 12px;
        font-weight: bold;
        margin-top: 5px;
    }

    .seat-container input[type="checkbox"]:disabled + label {
        background-color: #f44336;
        cursor: not-allowed;
        color: #fff;
    }

    .zoom-image {
        transition: transform 0.3s ease; /* Smooth transition */
    }

    .zoom-image:hover {
        transform: scale(1.1); /* Zoom effect */
    }
</style>
@endsection