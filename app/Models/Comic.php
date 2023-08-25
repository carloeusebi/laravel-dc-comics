<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type', 'artists', 'writers'];

    protected function price(): Attribute
    {
        return Attribute::make(set: fn (string|null $price) => '$' . $price);
    }

    protected function artists(): Attribute
    {
        return Attribute::make(get: fn (string|null $artists) => explode(',', $artists));
    }

    protected function writers(): Attribute
    {
        return Attribute::make(get: fn (string|null $writers) => explode(', ', $writers));
    }
}
