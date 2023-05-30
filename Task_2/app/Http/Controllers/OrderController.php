<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Manager;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::with('manager')->paginate(50);

        return view('orders.index', [
            'orders' => $orders
        ]);
    }
}
