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
              <div class="card-footer text-muted d-flex justify-content-around align-items-center">
                <a href="{{route('bookings.edit', $booking->id)}}" class="btn btn-secondary">Edit Booking</a>
                <form class="" action="{{route('bookings.destroy', $booking->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-secondary" name="button">Delete Booking</button>

                </form>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
</section>
@endsection
