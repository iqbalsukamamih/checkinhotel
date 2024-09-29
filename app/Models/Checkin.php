<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    protected $fillable = [
        'guest_id',
        'checkin_date',
        'checkin_time',
    ];
}
