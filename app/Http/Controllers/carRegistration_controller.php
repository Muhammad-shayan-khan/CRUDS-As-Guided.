<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carRegistration_model;

class carRegistration_controller extends Controller
{
    public function index()
    {
        return view('layouts.carRegistration');
    }

    public function carRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'registration_no' => 'required',
            'color' => 'required',
            'make' => 'required',
            'model' => 'required'
        ]);
        $carRegistration_model = new carRegistration_model;
        $carRegistration_model->name = $request['name'];
        $carRegistration_model->email = $request['email'];
        $carRegistration_model->registration_no = $request['registration_no'];
        $carRegistration_model->color = $request['color'];
        $carRegistration_model->make = $request['make'];
        $carRegistration_model->model = $request['model'];
        $carRegistration_model->save();

        return redirect('/carRegistration');
    }

    public function view()
    {
        $carRegistration_model = carRegistration_model::all();
        $data = compact('carRegistration_model');
        return view('layouts.carRegistration-view')->with($data);
    }

    public function carRegistrationHome()
    {
        $carRegistration_model = carRegistration_model::all();
        $data = compact('carRegistration_model');
        return view('layouts.carRegistrationHome')->with($data);
    }

    public function delete($id){
        carRegistration_model::find($id)->delete();
        return redirect()->back();

    }
}
