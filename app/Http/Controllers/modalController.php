<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class modalController extends Controller
{
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

        return redirect()->route('modals');
    }

}
