@extends('layouts.main')

@section('content')
<section>
  <div class="container">
    <div class="row">
      <div class="col new_booking_form">
        <form action="{{route('bookings.update', $booking['id'])}}" method="post">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label for="new_guest_full_name" class="form-label">Guest Full Name:</label>
            <input type="text" class="form-control" id="guest_full_name" name="guest_full_name" value="{{$booking['guest_full_name']}}">
          </div>
          <div class="mb-3">
            <div class="booking_date">
              <label for="room" class="form-label">Room:</label>
              <input type="number" class="form-control" id="room" name="room" value="{{$booking['room']}}">
            </div>
            <div class="booking_date">
              <label for="from_date" class="form-label ">Check-in:</label>
              <input type="text" class="form-control" id="from_date" name="from_date" value="{{$booking['from_date']}}">
            </div>
            <div class="booking_date">
              <label for="to_date" class="to-label ">Check-out:</label>
              <input type="text" class="form-control" id="to_date" name="to_date" value="{{$booking['to_date']}}">
            </div>
          </div>
          <div class="mb-3">
            <label for="new_guest_credit_card" class="form-label">Credit Card Number:</label>
            <input type="number" class="form-control" id="guest_credit_card" name="guest_credit_card" value="{{$booking['guest_credit_card']}}">
          </div>
          <div class="mb-3">
            <h5>More details:</h5>
            <textarea name="more_details" rows="8" cols="120">{{$booking['more_details']}}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Edit Booking</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
