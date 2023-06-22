<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FestDate extends Model
{
    use HasFactory;
    protected $guarded = [
        'start_date',
        'due_day',
        'month',
        'location'
    ];
}
