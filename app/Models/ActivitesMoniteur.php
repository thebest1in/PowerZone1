<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivitesMoniteur extends Model
{
    use HasFactory;
    protected $table = 'activites_moniteur';
    protected $primaryKey = 'codeM';
    public $timestamps = false;

    protected $fillable = [
        'codeM',
        'idAct',
    ];

    public function moniteur()
    {
        return $this->belongsTo(Moniteur::class, 'codeM');
    }

    public function activite()
    {
        return $this->belongsTo(Activite::class, 'idAct');
    }
}
