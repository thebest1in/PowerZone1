<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    protected $table = 'groupe';
    public $timestamps = false;

    protected $fillable = [
        'nomgroupe',
    ];
    public function abonnements()
    {
        return $this->hasMany(Abonnement::class, 'idgroupe');
    }
}