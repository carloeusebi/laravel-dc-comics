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
        return Attribute::make(
            get: fn (float|null $price) => $price ? "$" . $price : null,
            set: fn (string|null $price) => $price ? (float) str_replace('$', '', $price) : null
        );
    }

    protected function artistsArray(): Attribute
    {
        return Attribute::make(
            get: fn (string|null $artists) => explode(',', $this->artists),
        );
    }

    protected function writersArray(): Attribute
    {
        return Attribute::make(
            get: fn (string|null $writers) => explode(', ', $this->writers),
        );
    }
}
