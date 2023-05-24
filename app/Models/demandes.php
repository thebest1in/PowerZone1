<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demandes extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nom', 'prenom', 'tel', 'date_naissance'
    ];
}
