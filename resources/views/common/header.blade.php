<header>
  <div class="container">
    <div class="row">
      <div class="col-3 d-flex align-items-center">
        <img src="{{asset('img/logo.png')}}" alt="LOGO">
      </div>
      <div class="col d-flex align-items-center justify-content-center">
        <nav>
          <ul>
            <li><a href="/" class="btn btn-outline-primary">Home</a></li>
            <li><a href="{{route('bookings.index')}}" class="btn btn-outline-primary">Bookings List</a></li>
            <li><a href="{{route('bookings.create')}}" class="btn btn-outline-primary">New Booking</a></li>
          </ul>
        </nav>
        <div class="col d-flex align-items-center justify-content-end">
          <form class="" action="{{route('bookings.index')}}" method="get">
            <input type="text" name="search" placeholder="Find a guest...">
            <button type="submit" name="button" class="btn btn-outline-primary">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>
