<?php

namespace App\Http\Controllers;

use Mail;
use Carbon\Carbon;
use App\Models\Order;
use App\Mail\OrderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index()
    {   
        return view('app.orders.index');
    }

    public function create()
    {   
        return view('app.orders.create');
    }

    public function processOrder(Request $request)
    {
        // check if user is verified and has active billing details
        if(auth()->user()->canOrder()) {

            $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'email'     => 'required|email',
                'address'   => 'required',
                'city'      => 'required',
                'postcode'  => 'required',
                'country'   => 'required',
            ]);
    
            if ($validator->fails()) {
                return redirect()->route('app.orders.new')
                            ->withErrors($validator)
                            ->withInput();
            }

            $order = Order::create([
                'user_id'    => auth()->user()->id,
                'created_at' => Carbon::now(),
            ]);

            // send email
            Mail::to('ralph@thestartupgroup.net')->send(new OrderMail($validator->validated()));

            flash('Your order has been placed successfully')->success();
        }

        flash('Please contact us first before placing an order')->warning();
    }
}
