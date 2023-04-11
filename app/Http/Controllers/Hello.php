<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Hello extends Controller
{
    public function index()
    {
        return view('helloworld/view_hello');
    }
    
}
