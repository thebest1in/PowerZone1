<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;
    protected $table = 'paiements';
    protected $primaryKey = 'numP';
    public $timestamps = false;

    protected $fillable = [
        'dateP',
        'montant',
        'num',
    ];

    public function abonnement()
    {
        return $this->belongsTo(abonnements::class, 'num');
    }
}
