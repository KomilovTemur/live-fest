<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        "ticket-form-name",
        "ticket-form-email",
        "ticket-form-phone",
        "form-check-input",
        "ticket-form-number",
        "ticket-form-message"
    ];
}
