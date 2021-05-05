<?php

namespace App\Http\Controllers;

use App\Company;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function listOrder(Request $request){
        $orders = Order::with('user.company')->orderby('id');

        // Filtro Data
        if(isset($request->periodo)){
            $date = explode(" - ", $request->periodo);
            $start = Carbon::createFromFormat('d/m/Y', $date[0])->format('Y-m-d');
            $finish = Carbon::createFromFormat('d/m/Y', $date[1])->format('Y-m-d');
            
            $orders = $orders->whereDate('created_at', '>=', $start)
                            ->whereDate('created_at', '<=', $finish);
        }

        // Filtro empresa
        if(!empty($request->empresa)){
            $orders = $orders->whereHas('user', function($q) use($request){
                                $q->where('company_id', $request->empresa);
                            });
        }

        // Filtro Status
        if(!empty($request->empresa)){
            $orders = $orders->where('status', $request->status_payment);
        }

        $orders = $orders->paginate(30);
        $status_payments = Order::selectraw('DISTINCT(status)')->get();
        $companies = Company::orderby('name','asc')->get();
        return view('order.list')->with(compact('orders', 'companies', 'status_payments', 'request'));
    }
}
