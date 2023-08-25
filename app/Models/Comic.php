<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected function artists(): Attribute
    {
        return Attribute::make(fn (string $artists) => explode(',', $artists));
    }

    protected function writers(): Attribute
    {
        return Attribute::make(fn (string $writers) => explode(', ', $writers));
    }
}
