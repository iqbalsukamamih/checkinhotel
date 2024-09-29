<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = [
        'guest_id',
        'checkout_date',
        'checkout_time',
    ];
}
