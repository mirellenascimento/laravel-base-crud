@extends('layouts.main')

@section('content')
<section>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card text-center">
          <div class="card-header">
            Booking created!
          </div>
          <div class="card-body">
            <h5 class="card-title">Well done!</h5>
            <p class="card-text">You have created the new booking successfuly.</p>
            <a href="{{route('bookings.index')}}" class="btn btn-primary">Back to Bookings List</a>
          </div>
          <div class="card-footer text-muted">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
