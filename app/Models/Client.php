<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function beers()
    {
        return $this->belongsToMany(Beer::class);
    }

    public function store_type()
    {
        return $this->belongsTo(StoreType::class);
    }
}
