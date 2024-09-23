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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins';
        }

        .min-margin {
            margin-top: -17px !important;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1><strong class="text-center fs-1">Struk Pesanan</strong> Tiket Bioskop</h1>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"><strong>Judul Film: </strong> {{ $d->film->title }}</p>
                <p class="card-text"><strong>Deskripsi: </strong> {{ $d->film->description }}</p>
                <p class="card-text"><strong>Durasi: </strong> {{ $d->film->duration }}</p>
                <p class="card-text"><strong>Harga Tiket: </strong> Rp {{ $d->total }}</p>
                <div class="d-flex">
                    <p class="card-text"><strong>Nomor Kursi:</strong>
                    @foreach($d->seats as $i)
                        {{ $i->seat_number }} , </p>
                    @endforeach
                </div>
                <p class="card-text"><strong>Nama Pemesan:</strong> {{ $d->nama }}</p>
                <p class="card-text"><strong>Nomor Telepon:</strong> {{ $d->telp }}</p>
                <p class="card-text"><strong>Tanggal Pemesanan:</strong> {{ $d->tanggal }}</p>
            </div>
        </div>
        <div class="d-flex mt-3">
            <p class="mt-2">*</p>
            <div>
                <p class="mt-2 ml-2">Silahkan tangkap layar halaman ini.</p>
                <p class="mt-2 ml-2 min-margin">Kirim struk tersebut ke Whatsapp Official</p>
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
