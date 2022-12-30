<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validationController extends Controller
{
    public function index(){
        return view('layouts.validation_form');
    }

public function validation(Request $request){
    $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'address'=>'required',
        'country'=>'required',
        'password'=>'required',
        'confirm_password'=>'required|same:password'
    ]);
    echo "<pre>";
    print_r($request->all());
    echo "</pre>";
}
}

