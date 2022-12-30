<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer_model;

class customer_controller extends Controller
{
    public function index()
    {
        return view('layouts.customer');
    }

    public function customer(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'country' => 'required',
            'city' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'telephone' => 'required'
        ]);

        $customer_model = new customer_model;
        $customer_model->name = $request['name'];
        $customer_model->email = $request['email'];
        $customer_model->country = $request['country'];
        $customer_model->city = $request['city'];
        $customer_model->gender = $request['gender'];
        $customer_model->dob = $request['dob'];
        $customer_model->address = $request['address'];
        $customer_model->phone = $request['phone'];
        $customer_model->telephone = $request['telephone'];
        $customer_model->save();

        return redirect('/customer/view');
    }

    public function view(){

        $customer_model = customer_model::all();
        $data = compact('customer_model');
        return view('layouts.customer-view')->with($data);;
    }
}
