<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bedrooms',
        'bathrooms',
        'storeys',
        'garages',
        'price'
    ];

    public function scopeName($query, $name)
    {
        if($name) {
            return $query->where('name', $name);
        }
        return $query;
    }

    public function scopeBedrooms($query, $bedrooms)
    {
        if($bedrooms) {
            return $query->where('bedrooms', $bedrooms);
        }
        return $query;
    }

    public function scopeName($query, $name)
    {
        if($name) {
            return $query->where('name', $name);
        }
        return $query;
    }

    public function scopeName($query, $name)
    {
        if($name) {
            return $query->where('name', $name);
        }
        return $query;
    }
    
    public function scopeName($query, $name)
    {
        if($name) {
            return $query->where('name', $name);
        }
        return $query;
    }
}
