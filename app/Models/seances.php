<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seances extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'jour',
        'heurFin',
        'heurDebut',
        'idgroupe',
        'codeM',
        'idAct',
    ];
    public function groupe()
    {
        return $this->belongsTo('App\Models\Groupe');
    }

    public function moniteur()
    {
        return $this->belongsTo('App\Models\Moniteur');
    }

    public function activites()
    {
        return $this->belongsTo('App\Models\Activites');
    }

}
