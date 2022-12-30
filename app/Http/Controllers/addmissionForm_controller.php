<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addmissionForm_model;

class addmissionForm_controller extends Controller
{
    public function index(){
        return view('layouts.addmissionForm');
    }

    public function addmissionForm(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'school'=>'required',
            'dob'=> 'required',
            'address'=> 'required',
            'country'=> 'required',
            'city'=>'required',
            'phone'=>'required',
            'telephone'=>'required'
        ]);
        $addmissionForm_model = new addmissionForm_model;
        $addmissionForm_model->name = $request['name'];
        $addmissionForm_model->email = $request['email'];
        $addmissionForm_model->school = $request['school'];
        $addmissionForm_model->dob = $request['dob'];
        $addmissionForm_model->address = $request['address'];
        $addmissionForm_model->country = $request['country'];
        $addmissionForm_model->city = $request['city'];
        $addmissionForm_model->phone = $request['phone'];
        $addmissionForm_model->telephone = $request['telephone'];
        $addmissionForm_model->save();

        return redirect('/addmissionFormThankyou');
    }

    public function view(){
        $addmissionForm_model = addmissionForm_model::all();
        $data = compact('addmissionForm_model');
        return view('layouts.addmissionForm-view')->with($data);
    }

    public function thankyou(){
        $addmissionForm_model = addmissionForm_model::all();
        $data = compact('addmissionForm_model');
        return view('layouts.addmissionFormThankyou')->with($data);
    }
}
