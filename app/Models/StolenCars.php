<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StolenCars extends Model
{
    use HasFactory;

    protected $table = 'stolen_cars';

    protected $fillable = [
        'name',
        'number',
        'image',
        'description', 
               
    ];

}
