<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customerform_model;

class customerform_controller extends Controller
{
    public function index()
    {
        return view('layouts.customerform');
    }

    public function customerform(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        $customerform_model = new customerform_model;
        $customerform_model->name = $request['name'];
        $customerform_model->email = $request['email'];
        $customerform_model->password = md5($request['password']);
        $customerform_model->save();
    }
}
