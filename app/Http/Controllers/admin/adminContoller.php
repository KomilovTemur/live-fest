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
        $orders = Order::all();
        return view('admin.dashboard', compact('orders'));
    }
}
