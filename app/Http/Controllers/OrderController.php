<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function listOrder(){
        $orders = Order::paginate(30);
        return view('order.list')->with(compact('orders'));
    }
}
