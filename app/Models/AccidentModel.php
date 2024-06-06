<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentModel extends Model
{
    use HasFactory;

    protected $table = 'accidents';


    protected $fillable = [
        'victim_name',
        
        'offender_name',
        'image',
        'description',
        'location',
        'time',
        'date',
        
              
    ];
}
