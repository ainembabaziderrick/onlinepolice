<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuspectModel extends Model
{
    use HasFactory;

    protected $table = 'suspects';


    protected $fillable = [
        'name',
        'age',
        'image',
        'location',
        'crime',
        'offender_name',
        'description',
        'time',
        'date',
      
        
              
    ];

    public function getCase(){
        return $this->belongsTo(CaseModel::class,'cases');
    }

    public function getCrimeType(){
        return $this->belongsTo(CrimeModel::class,'crime');
    }

}
