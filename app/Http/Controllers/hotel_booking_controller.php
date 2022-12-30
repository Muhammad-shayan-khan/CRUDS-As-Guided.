<?php

namespace App\Http\Controllers;

use App\Models\hotel_booking_model;
use Illuminate\Http\Request;

class hotel_booking_controller extends Controller
{
    public function index()
    {
        $url = url('/hotel_booking_form');
        $title = 'Hotel Booking';
        $data = compact('url', 'title');
        return view('layouts.hotel_booking_form')->with($data);
    }
    public function hotel_booking(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'guest' => 'required',
            'flight_no' => 'required'
        ]);
        $hotel_booking_model = new hotel_booking_model;
        $hotel_booking_model->name = $request['name'];
        $hotel_booking_model->email = $request['email'];
        $hotel_booking_model->check_in = $request['check_in'];
        $hotel_booking_model->check_out = $request['check_out'];
        $hotel_booking_model->guest = $request['guest'];
        $hotel_booking_model->flight_no = $request['flight_no'];
        $hotel_booking_model->save();

        return redirect('/hotel_booking/view');
    }

    public function view()
    {
        $hotel_booking_model = hotel_booking_model::all();
        $data = compact('hotel_booking_model');
        return view('layouts.hotel_booking-view')->with($data);
    }
    public function hotel_booking_home()
    {
        $hotel_booking_model = hotel_booking_model::all();
        $data = compact('hotel_booking_model');
        return view('layouts.hotel_booking')->with($data);
    }

    public function delete($id)
    {
        hotel_booking_model::find($id)->delete();
        return redirect()->back();
    }

  public function edit($id)
    {
        $hotel_booking_model = hotel_booking_model::find($id);
        if (is_null($hotel_booking_model)) {
            //not found
            return redirect('hotel_booking_form');
        } else {
            $title = 'Update Booking';
            $url = url('hotel_booking_form/update')."/".$id;
            $data = compact('hotel_booking_model', 'url', 'title');
            return view('layouts.hotel_booking_form')->with($data);
        }
    }
    public function update($id, Request $request){
        $hotel_booking_model = hotel_booking_model::find($id);
        $hotel_booking_model->name = $request['name'];
        $hotel_booking_model->email = $request['email'];
        $hotel_booking_model->check_in = $request['check_in'];
        $hotel_booking_model->check_out = $request['check_out'];
        $hotel_booking_model->guest = $request['guest'];
        $hotel_booking_model->flight_no = $request['flight_no'];
        $hotel_booking_model->save();
        return redirect('hotel_booking/view');
    }
}
