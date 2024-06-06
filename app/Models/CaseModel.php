<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseModel extends Model
{
    use HasFactory;

    protected $table = 'cases';


    protected $fillable = [
        'victim_name',
        'crime',
        'offender_name',
        'image',
        'description',
        'location',
        'time',
        'date',
        
              
    ];

    public function getCrimeType(){
        return $this->belongsTo(CrimeModel::class,'crime');
    }

        
}
