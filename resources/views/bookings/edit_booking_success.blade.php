@extends('layouts.main')

@section('content')
<section>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card text-center">
          <div class="card-header">
            booking <strong>id {{$booking->id}}</strong> edited successfuly!
          </div>
          <div class="card-body">
            <h5 class="card-title">Name: {{$booking->guest_full_name}}</h5>
            <p class="card-text">Room: {{$booking->room}}</p>
            <p class="card-text">Check-in: {{$booking->from_date}} | Check-out: {{$booking->to_date}}</p>
            <p class="card-text">Credit Card Number: {{$booking->guest_credit_card}}</p>
            <p class="card-text">More details: {{$booking->more_details}}</p>
          </div>
          <div class="card-footer text-muted d-flex justify-content-around align-items-center">
            <a href="{{route('bookings.index')}}" class="btn btn-primary">Back to bookings List</a>
            <a href="{{route('bookings.edit', $booking->id)}}" class="btn btn-primary">Edit Booking</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
@endsection
