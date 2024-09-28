@extends('layouts.dashboard')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="col-md-4">
        <!-- Form Buat-->
        <form action="/store" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Judul</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="number" class="form-control" id="harga" name="harga">
            </div>
            <div class="mb-3">
              <label for="desctiption" class="form-label">Deskripsi</label>
              <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="mb-3">
              <label for="duration" class="form-label">Durasi</label>
              <input type="text" class="form-control" id="duaration" name="duration">
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Gambar</label>
              <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Buat</button>
          </form>
        <!-- End Form Buat-->
    </div>
</div>
@endsection