<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('app.products');
    }

    public function webcam()
    {
        return view('app.products.webcam');
    }

    public function monitor1()
    {
        return view('app.products.monitor1');
    }

    public function monitor2()
    {
        return view('app.products.monitor2');
    }

    public function headset1()
    {
        return view('app.products.headset1');
    }

    public function headset2()
    {
        return view('app.products.headset2');
    }

    public function headset3()
    {
        return view('app.products.headset3');
    }
}
