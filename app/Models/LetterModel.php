<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterModel extends Model
{
    use HasFactory;

    protected $table = 'letter';


    protected $fillable = [
        'victim_name',
        'crime',
        'offender_name',
        
        'description',
        'location',
        'time',
        'date',
        
              
    ];

    public function getCrimeType(){
        return $this->belongsTo(CrimeModel::class,'crime');
    }
}
