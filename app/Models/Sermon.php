<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    protected $fillable = [
        'title',
        'description',
        'date',
        'speaker',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
