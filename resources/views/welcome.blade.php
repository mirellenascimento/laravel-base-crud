@extends('layouts.main')
@section('content')
<section>
  <div class="container welcome">
    <div class="row">
      <div class="col d-flex align-items-center justify-content-center flex-column">
        <h1>Welcome to my Hotel!</h1>
          <img src="{{asset('img/logo.png')}}" alt="LOGO">
      </div>
    </div>
    <div class="row">
      <div class="welcome col d-flex align-items-center justify-content-center">
        <a href="{{route('bookings.index')}}" class="btn btn-primary">Bookings List</a>
        <a href="{{route('bookings.create')}}" class="btn btn-primary">Add New Booking</a>
      </div>
    </div>
  </div>
</section>
@endsection
