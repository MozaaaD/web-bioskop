@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col mt-5 text-center">
      <img src="{{ '/storage/'.$data->image }}" alt="Image not found!" class="img-fluid rounded shadow zoom-image" style="max-width: 350px; height: auto; border: 5px solid #ddd;">
    </div>
    <div class="col mt-5">
        @foreach ($times as $time)
        <div class="seat-label mx-1">
            <a href="/pesan/{{ $data->id }}/{{ $time->id }}" class="time-link">
                <span class="time-icon">🕒</span> {{ $time->time }},
                <span class="date-icon">📅</span> {{ $time->tgl }}
            </a>
        </div>
        @endforeach
    </div>
  </div>
</div>

<style>
    .seat-label {
        font-size: 35px;
        margin: 5px; /* Reduced margin for tighter spacing */
        transition: transform 0.2s;
        background-color: #f8f9fa; /* Light background */
        padding: 10px;
        border-radius: 8px; /* Rounded corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Soft shadow */
    }

    .seat-label:hover {
        transform: scale(1.05); /* Slight zoom on hover */
        background-color: #e9ecef; /* Slightly darker on hover */
    }

    .time-link {
        text-decoration: none; /* Remove underline */
        color: #333; /* Dark color for text */
    }

    .time-icon, .date-icon {
        margin-right: 5px; /* Space between icon and text */
        font-size: 30px; /* Larger size for icons */
        vertical-align: middle; /* Align icon with text */
    }

    .time-link:hover {
        color: #007bff; /* Change color on hover */
    }

    .zoom-image {
        transition: transform 0.3s ease; /* Smooth transition */
    }

    .zoom-image:hover {
        transform: scale(1.1); /* Zoom effect */
    }
</style>
@endsection
