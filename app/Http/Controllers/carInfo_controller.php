<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\carInfo_model;

class carInfo_controller extends Controller
{
    public function index()
    {
        return view('layouts.carInfo');
    }

    public function carInfo(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'registration_no' => 'required',
            'color' => 'required',
            'make' => 'required',
            'model' => 'required',
            'body_type' => 'required',
            'model_year' => 'required'
        ]);
        $carInfo_model = new carInfo_model;
        $carInfo_model->name = $request['name'];
        $carInfo_model->email = $request['email'];
        $carInfo_model->registration_no = $request['registration_no'];
        $carInfo_model->color = $request['color'];
        $carInfo_model->make = $request['make'];
        $carInfo_model->model = $request['model'];
        $carInfo_model->body_type = $request['body_type'];
        $carInfo_model->model_year = $request['model_year'];
        $carInfo_model->save();

        return redirect('/carInfoThankyou');
    }

    public function view()
    {
        $carInfo_model = carInfo_model::all();
        $data = compact('carInfo_model');
        return view('layouts.carInfo-view')->with($data);
    }

    public function thankyou()
    {
        $carInfo_model = carInfo_model::all();
        $data = compact('carInfo_model');
        return view('layouts.carInfoThankyou')->with($data);
    }
}
