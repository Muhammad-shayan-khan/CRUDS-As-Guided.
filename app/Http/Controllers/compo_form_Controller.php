<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class compo_form_Controller extends Controller
{
    public function index()
    {
        return view('layouts.compo_form');
    }

    public function compo_form(Request $request){
      $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required',
        'confirm_password'=>'required|same:password'
      ]);
      echo '<pre>';
      print_r($request->all());
      echo '</pre>';
    }

}
