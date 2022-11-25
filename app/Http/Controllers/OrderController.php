<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::latest()->paginate(15);
        return view('backend.order.index', compact('orders'));
    }

    public function show(Order $order) {
        $order_details = $order->order_details;
        return view('backend.order.show', compact('order', 'order_details'));
    }
}
