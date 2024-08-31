@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <img src="hulk.jpg" alt="">
    </div>
    <div class="col">
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Kursi</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
  @endsection