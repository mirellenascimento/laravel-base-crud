<header>
  <div class="container">
    <div class="row">
      <div class="col d-flex align-items-center">
        <img src="{{asset('img/logo.png')}}" alt="LOGO">
      </div>
      <div class="col d-flex align-items-center justify-content-end">
        <nav>
          <ul>
            <li><a href="/" class="btn btn-outline-primary">Home</a></li>
            <li><a href="{{route('bookings.index')}}" class="btn btn-outline-primary">Bookings List</a></li>
            <li><a href="{{route('bookings.create')}}" class="btn btn-outline-primary">New Booking</a></li>
          </ul>
        </nav>

      </div>
    </div>
  </div>
</header>
