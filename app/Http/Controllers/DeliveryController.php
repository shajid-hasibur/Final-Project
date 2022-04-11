<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;

class DeliveryController extends Controller
{
    public function show(){
        return view('delivery');
    }

    public function fetch(){
        $users=Delivery::all();
        return view('delivery',compact('users'));
    }
}
