@extends('layouts.dashboard')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="col-md-4">
        <!-- Form Buat-->
        <div class="row">
          <div class="col">
            <img src="{{ 'storage/' . $data->image }}" alt="">
          </div>
          <div class="col">
            <form action="/edit/{{ $data->id }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}">
                </div>
                <div class="mb-3">
                  <label for="harga" class="form-label">Harga</label>
                  <input type="number" class="form-control" id="harga" name="harga" value="{{ $data->harga }}">
                </div>
                <div class="mb-3">
                  <label for="desctiption" class="form-label">description</label>
                  <input type="text" class="form-control" id="description" name="description" value="{{ $data->description }}">
                </div>
                <div class="mb-3">
                  <label for="duration" class="form-label">duration</label>
                  <input type="text" class="form-control" id="duration" name="duration" value="{{ $data->duration }}">
                </div>
                <div class="mb-3">
                  <label for="image" class="form-label">image</label>
                  <input type="file" class="form-control" id="image" name="image"  value="{{ $data->image }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            <!-- End Form Buat-->
          </div>
        </div>
    </div>
</div>
@endsection