<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'amount',
        'message',
        'donation_date',
        'message'
    ];

    protected $casts = [
        'donation_date' => 'datetime',
    ];

    /**
     * Get the formatted donation date.
     *
     * @return string
     */
    public function getFormattedDonationDateAttribute()
    {
        return $this->donation_date->format('F j, Y');
    }
}
