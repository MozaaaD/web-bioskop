<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
        }
        .card {
            background-color: #1f1f1f;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.5);
        }
        .card-title {
            color: #ffdd57; /* Gold color */
            font-weight: 600;
        }
        .btn-primary {
            background: linear-gradient(90deg, #ffdd57, #f8b400);
            border: none;
            transition: background 0.3s;
        }
        .btn-primary:hover {
            background: linear-gradient(90deg, #f8b400, #ffdd57);
        }
        .min-margin {
            margin-top: -17px !important;
        }
        .qr-code {
            width: 300px; /* Adjust size as needed */
            height: auto;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.5);
        }
        .footer-note {
            color: #ffdd57;
        }
        .highlight {
            background-color: #333;
            border-radius: 5px;
            padding: 5px 10px;
        }
        .text-muted {
            color: #cccccc;
        }
    </style>
    <title>Struk Pesanan Tiket Bioskop</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center fs-1">Struk Pesanan Tiket Bioskop</h1>
        <div class="card mt-4 p-4 d-flex flex-row">
            <div class="flex-grow-1">
                <h5 class="card-title"><strong>Judul:</strong> {{ $d->film->title }}</h5>
                <p class="card-text"><strong>Deskripsi:</strong> {{ $d->film->description }}</p>
                <p class="card-text"><strong>Durasi:</strong> {{ $d->film->duration }}</p>
                <p class="card-text"><strong>Harga Tiket:</strong><span class="highlight">Rp {{ number_format($d->total, 0, ',', '.') }}</span></p>
                <p class="card-text"><strong>Nomor Kursi:</strong>
                    @foreach($d->seats as $i)
                        {{ $i->seat_number }}{{ !$loop->last ? ', ' : '' }}
                    @endforeach
                </p>
                <p class="card-text"><strong>Nama Pemesan:</strong> {{ $d->nama }}</p>
                <p class="card-text"><strong>Nomor Telepon:</strong> {{ $d->telp }}</p>
                <p class="card-text"><strong>Tanggal Pemesanan:</strong> {{ $d->tanggal }}</p>
            </div>
            <div class="ml-3">
                <img src="/Qr.jpg" alt="QR Code" class="qr-code">
            </div>
        </div>
        <div class="d-flex mt-3">
            <p class="mt-2 text-muted">*</p>
            <div>
                <p class="mt-2 ml-2">Silahkan tangkap layar halaman ini.</p>
                <p class="mt-2 ml-2 min-margin">Anda bisa membayar lewat QR atau bisa menghubungi <a href="http://wa.me/6285870504353" class="text-warning">Whatsapp Seller</a></p>
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
