<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table='products';

    protected $guarded=[];

    protected function status() : Attribute{
        return Attribute::make(
            get:fn(string $value)=> ($value == 1) ? "active" : "inactive",
        );
    }

    protected function isfavourite() : Attribute{
        return Attribute::make(
            get:fn(string $item)=>($item == 1) ? "yes" : "no",
        );
    }
}
