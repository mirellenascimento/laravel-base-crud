<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();
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
    public function store(Request $request)
    {
        $newBooking = new Booking();
        $newBooking->guest_full_name = $request->input('new_guest_full_name');
        $newBooking->guest_credit_card = $request->input('new_guest_credit_card');
        $newBooking->room = $request->input('new_room');
        $newBooking->from_date = $request->input('new_from_date');
        $newBooking->to_date = $request->input('new_to_date');
        $newBooking->more_details = $request->input('new_more_details');

        $newBooking->Save();
        return view('bookings.new_booking_success');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
