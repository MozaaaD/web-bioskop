{{-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Struk Pesanan Tiket Bioskop</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Struk Pesanan Tiket Bioskop</h1>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">{{ $film->judul }}</h5>
                <p class="card-text"><strong>Deskripsi:</strong> {{ $film->deskripsi }}</p>
                <p class="card-text"><strong>Durasi:</strong> {{ $film->durasi }} menit</p>
                <p class="card-text"><strong>Harga Tiket:</strong> Rp {{ number_format($film->harga_tiket, 0, ',', '.') }}</p>
                <p class="card-text"><strong>Nomor Kursi:</strong> {{ $pesanan->nomor_kursi }}</p>
                <p class="card-text"><strong>Nama Pemesan:</strong> {{ $pesanan->nama_pemesan }}</p>
                <p class="card-text"><strong>Nomor Telepon:</strong> {{ $pesanan->nomor_telepon }}</p>
                <p class="card-text"><strong>Tanggal Pemesanan:</strong> {{ \Carbon\Carbon::parse($pesanan->tanggal_pemesanan)->format('d-m-Y') }}</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('home') }}" class="btn btn-primary">Kembali ke Halaman Utama</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Struk Pesanan Tiket Bioskop</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Struk Pesanan Tiket Bioskop</h1>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"><strong>Deskripsi:</strong> {{ $film->deskripsi }}</p>
                <p class="card-text"><strong>Durasi:</strong>  menit</p>
                <p class="card-text"><strong>Harga Tiket:</strong> Rp  </p>
                <p class="card-text"><strong>Nomor Kursi:</strong> </p>
                <p class="card-text"><strong>Nama Pemesan:</strong> </p>
                <p class="card-text"><strong>Nomor Telepon:</strong> </p>
                <p class="card-text"><strong>Tanggal Pemesanan:</strong> </p>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('home') }}" class="btn btn-primary">Kembali ke Halaman Utama</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
