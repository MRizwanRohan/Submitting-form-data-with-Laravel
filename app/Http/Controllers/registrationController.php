<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationController extends Controller
{
    public function index(){
        return view('form');
    }

    public function store(Request $request){
        echo "<pre>";
        print_r($request->all());
    }
}
