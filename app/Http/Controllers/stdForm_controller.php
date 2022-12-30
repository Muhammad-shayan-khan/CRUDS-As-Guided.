<?php

namespace App\Http\Controllers;

use App\Models\stdForm_model;
use Illuminate\Http\Request;


class stdForm_controller extends Controller
{
    public function index()
    {
        return view('layouts.stdForm');
    }

    public function stdForm(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'country' => 'required',
            'city' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
        echo "<pre>";
        print_r($request->all());
        $stdForm_model = new stdForm_model;
        $stdForm_model->fname = $request['fname'];
        $stdForm_model->lname = $request['lname'];
        $stdForm_model->email = $request['email'];
        $stdForm_model->country = $request['country'];
        $stdForm_model->city = $request['city'];
        $stdForm_model->password = md5($request['password']);
        $stdForm_model->save();

        return redirect('/stdForm/view');
    }

    public function view(){
        $stdForm_model = stdForm_model::all();
        // echo "<pre>";
        // print_r($stdForm_model);
        // echo "</pre>";
        $data = compact('stdForm_model');
        return view('layouts.stdForm-view')->with($data);
    }

}
