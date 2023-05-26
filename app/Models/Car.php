<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $primaryKey = 'id';
    protected $fillable = ['license_plate', 'make', 'model', 'price', 'mileage', 'seats', 'doors', 'production_year', 'weight', 'color', 'image', 'sold_at', 'views'];
}
