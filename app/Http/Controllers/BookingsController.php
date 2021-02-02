<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;

use Illuminate\Support\Facades\Validator;

use App\Http\Requests\BookingFormRequest;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $searchValidate = Validator::make(
        $request->all(),
        [
          'search'=>'bail|string|min:3'
        ]
      );

      if (!$searchValidate->fails()) {
        $bookings = Booking::where('guest_full_name', 'LIKE', "%$request->search%")->get();
      } else {
        $bookings = Booking::all();
      }

      return view('bookings.list', compact('bookings'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingFormRequest $request)
    {
        $validated = $request->validated();
        $booking = new Booking();
        $booking->guest_full_name = $validated['guest_full_name'];
        $booking->guest_credit_card = $validated['guest_credit_card'];
        $booking->room = $validated['room'];
        $booking->from_date = $validated['from_date'];
        $booking->to_date = $validated['to_date'];
        $booking->more_details = $validated['more_details'];

        $booking->Save();
        return view('bookings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $booking = Booking::find($id);
      return view('bookings.details', compact('booking'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::find($id);
        return view('bookings.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookingFormRequest $request, $id)
    {
        $validated = $request->validated();
        $booking = Booking::find($id);
        $booking->guest_full_name = $validated['guest_full_name'];
        $booking->guest_credit_card = $validated['guest_credit_card'];
        $booking->room = $validated['room'];
        $booking->from_date = $validated['from_date'];
        $booking->to_date = $validated['to_date'];
        $booking->more_details = $validated['more_details'];

        $booking->Save();
        return view('bookings.edit_booking_success', compact('booking'));



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::destroy($id);
        return redirect()->route('bookings.index');
    }
}
