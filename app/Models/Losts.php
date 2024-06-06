<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Losts extends Model
{
    use HasFactory;

    protected $table = 'losts';

    protected $fillable = [
        'title',
        'text',
        'image',        
    ];
}
