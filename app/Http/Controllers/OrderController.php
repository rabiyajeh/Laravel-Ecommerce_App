<?php


namespace App\Http\Controllers;

use App\Models\Order; // Make sure to include the correct namespace for the Order model
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::all(); // Retrieve all orders

        return view('order', ['orders' => $orders]);
        return redirect()->route('thankyou');
    }
}
