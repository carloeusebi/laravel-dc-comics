<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type', 'artists', 'writers'];

    /**
     * Puts a $ in front of the price
     */
    protected function signedPrice(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->price ? "$" . $this->price : null,
        );
    }

    /**
     * Transform the comma separated string of artists in an array
     */
    protected function artistsArray(): Attribute
    {
        return Attribute::make(
            get: fn () => explode(',', $this->artists),
        );
    }

    /**
     * Transform the comma separated string of writers in an array
     * 
     */
    protected function writersArray(): Attribute
    {
        return Attribute::make(
            get: fn () => explode(', ', $this->writers),
        );
    }
}
