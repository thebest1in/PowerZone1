<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_abonnements extends Model
{
    use HasFactory;
    protected $table = 'typeabonnements';
    protected $fillable = [
        'nomAb',
    ];
    
}
