<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrimeModel extends Model
{
    use HasFactory;

    protected $table = 'crimes';


    protected $fillable = [
        'crime_type',
              
    ];
    
}
