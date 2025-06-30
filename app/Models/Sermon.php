<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

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

    // app/Models/Sermon.php

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
