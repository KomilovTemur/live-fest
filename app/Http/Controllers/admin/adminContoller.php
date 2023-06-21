<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
// use App\Models\Ticket;
use Illuminate\Http\Request;

class adminContoller extends Controller
{
    public function index()
    {
        $orders = Order::all()->sortByDesc("id");
        $tatalSale = 0;
        foreach ($orders as $order) {
            foreach($order->tickets as $ticket) {
                $tatalSale += $ticket->price * $order->count;
            }
        }
        return view('admin.dashboard', compact('orders', 'tatalSale'));
    }
}
