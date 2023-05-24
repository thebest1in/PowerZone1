<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    //
    public function LineChart()
{
    $result = DB::select(DB::raw('SELECT m.nom, m.prenom, s.heurFin AS profit, s.heurDebut AS expense
        FROM seances s
        INNER JOIN moniteur m ON s.codeM = codeM;'));

    $data = "";

    foreach ($result as $val) {
        $data .= "['" . $val->nom . ' ' . $val->prenom . "'," . $val->profit . "," . $val->expense . "],";
    }

    return view('directeur.statistique.statistique', compact('data'));

}
}
