<?php

namespace App\Models;

use Cknow\Money\Money;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'slug',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'created_at' => 'datetime:Y-m-d',
        'live_at' => 'datetime:Y-m-d H:i:s',
        'published_at' => 'datetime:Y-m-d H:i:s',
    ];

    public function formattedPrice(): Money
    {
        return Money::BRL($this->price);
    }

    public function variations()
    {
        return $this->hasMany(Variation::class);
    }
}
