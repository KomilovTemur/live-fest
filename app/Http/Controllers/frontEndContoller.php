<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
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
        return view('frontend.ticket');
    }
    public function buyTicket(Request $request)
    {
        // dd($request->all());
        $request->validate([
            // "ticket-form-name" => "required",
            // "ticket-form-email" => "required|email|unique:tickets,ticket-form-email",
            // "ticket-form-phone" => "required|integer|unique:tickets,ticket-form-phone",
            // "form-check-input" => "required",
            // "ticket-form-number" => "required|integer",
            "name" => "required",
            "email" => "required|email|unique:tickets,email",
            "phone" => "required|integer|unique:tickets,phone",
            "ticket_type" => "required",
        ]);
        Ticket::create($request->all());
        return redirect()->route('ticket')->with('success', 'The order was placed');
    }
}
