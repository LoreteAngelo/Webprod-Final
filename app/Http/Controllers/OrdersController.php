<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all(); // Fetch all orders
        return view('admin.orders.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer',
            'customer_name' => 'required|string',
        ]);

        $order = new Order();
        $order->product_id = $validatedData['product_id'];
        $order->quantity = $validatedData['quantity'];
        $order->customer_name = $validatedData['customer_name'];
        $order->save();

        return redirect()->route('admin.orders.index'); // Redirect to index page after submission
    }
}
