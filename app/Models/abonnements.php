<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abonnements extends Model
{
    use HasFactory;

    protected $primaryKey = 'num';
    public $timestamps = false;

    public function paiement()
    {
        return $this->hasMany(paiement::class, 'num');
    }
    public function groupe()
    {
        return $this->belongsTo(Groupe::class, 'idgroupe');
    }
}