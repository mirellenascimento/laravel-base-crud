@extends('layouts.main')

@section('content')
<section>
    <div class="container">
      <div class="row">
        <div class="col">

          @foreach($bookings as $booking)
          <div class="card border-dark mb-3">
            <div class="card-header">Booking ID: {{$booking->id}}</div>
            <div class="card-body text-dark">
              <h5 class="card-title">Name: {{$booking->guest_full_name}}</h5>
              <p class="card-text">Room: {{$booking->room}}</p>
              <p class="card-text">Check-in: {{$booking->from_date}} | Check-out: {{$booking->to_date}}</p>
              <a href="{{route('bookings.show', $booking->id)}}"><h5 class="card-title">More Details</h5></a>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
</section>
@endsection
