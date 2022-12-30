<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form_twoController extends Controller
{
    public function index(){
        return view('layouts.form_two');
    }

    public function form_two(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'confirm_password'=> 'required|same:password'
        ]);
        echo "<pre>";
        print_r($request->all());
        echo "</pre>";
    }
}
