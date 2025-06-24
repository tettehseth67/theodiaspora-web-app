<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description',
        'location',
        'date',
        'time'
    ];

    protected $casts = [
        'date' => 'datetime',
        'time' => 'datetime:H:i',
    ];
}
