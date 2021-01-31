@extends('layouts.main')

@section('content')
<section>
    <div class="container">
      <div class="row">
        <div class="col d-flex justify-content-center align-items-center">

          <div class="card border-dark mb-3">
            <div class="card-header">Booking ID: {{$booking->id}}</div>
            <div class="card-body text-dark">
              <h5 class="card-title">Name: {{$booking->guest_full_name}}</h5>
              <p class="card-text">Room: {{$booking->room}}</p>
              <p class="card-text">Check-in: {{$booking->from_date}} | Check-out: {{$booking->to_date}}</p>
              <p class="card-text">Credit Card Number: {{$booking->guest_credit_card}}</p>
              <p class="card-text">More details: {{$booking->more_details}}</p>
              <a href="{{route('bookings.index')}}"><h5 class="card-title">Back to All Bookings List</h5></a>
            </div>
          </div>

        </div>
      </div>
    </div>
</section>
@endsection
