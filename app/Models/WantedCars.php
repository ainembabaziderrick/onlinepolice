<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WantedCars extends Model
{
    use HasFactory;

    protected $table = 'wanted_cars';

    protected $fillable = [
        'name',
        'number',
        'image',
        'description', 
               
    ];
}
