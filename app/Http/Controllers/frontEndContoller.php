<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use App\Models\Order;
use App\Models\Ticket;
use Illuminate\Http\Request;

class frontEndContoller extends Controller
{
    // Home
    public function index()
    {
        return view('frontend.index');
    }
    public function contactForm(Request $request)
    {
        ContactForm::create($request->all());
        return redirect()->route('index', '#section_6')->with("success", "Your message has been sent");
    }

    // Ticket
    public function ticket()
    {
        $tickets = Ticket::all();
        return view('frontend.ticket', compact('tickets'));
    }
    public function buyTicket(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "phone" => "required|integer",
            "ticket_id" => "required",
            "count" => "required",
        ]);
        $order = Order::create($request->all());
        $order->tickets()->attach($request->ticket_id);
        return redirect()->route('ticket')->with('success', 'The order was placed');
    }
}
