<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class adminContoller extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('admin.dashboard', compact('tickets'));
    }
}
