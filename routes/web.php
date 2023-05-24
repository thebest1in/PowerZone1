<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PowerZone;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\MoniteurController;
use App\Http\Controllers\directeurController;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Http\Controllers\gestionnaireController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PowerZone::class,"index"]);
Route::get('/abonnements/{n?}', [PowerZone::class,"indexAbonnement"]);
Route::get('/emploiG/{n?}', [PowerZone::class,"emploiG"]);
Route::get('/emploiM/{n?}', [PowerZone::class,"emploiM"]);
Route::get('/formulaire',function (){return view('formulaire');});
Route::post('/demander', [PowerZone::class,"demander"]);

Route::get('/login',function (){return view('login');});
Route::post('/verify', [PowerZone::class,"verify"]);
Route::get('/logout', [PowerZone::class,"logout"]);

Route::get('/admin', function (){return view('admin.admin');});
Route::get('/gestionnaire', function (){return view('gestionnaire.gestionnaire');});
Route::get('/directeur', function (){return view('directeur.directeur');});


// had xi 3la hsab admin

Route::get('/admin/utilisateur', [adminController::class,"utilisateur"]);
Route::get('/ajouterUtilisateur', function (){return view('admin.utilisateur.ajouterU');});
Route::post('/ajouterU',[adminController::class,"ajouterUtilisateur"]);
Route::get('/deleteUtilisateur/{n}',[adminController::class,"deleteUtilisateur"]);

Route::get('/admin/compte', [adminController::class,"compteAdmin"]);
Route::post('/updateAdmin', [adminController::class,"updateAdmin"]);







// // had xi 3la hsab gestionnaire

// Route::get('/gestionnaire/adherent', [PowerZone::class,"gestionnaireAdherent"]);
// Route::post('/gestionnaire/adherent/recherche', [PowerZone::class,"gestionnaireRadherent"]);
// Route::get('/getAdherent/{n}',[PowerZone::class,"getAdherent"]);
// Route::post('/updateAdherent',[PowerZone::class,"updateAdherent"]);

Route::get('/gestionnaire/moniteur', [gestionnaireController::class,"Moniteur"]);
//Route::post('/ajouterM', [MoniteurController::class, 'index']);
//Route::post('/ajouterM', [gestionnaireController::class, 'ajouter']);

//Route::post('/ajouterM',[gestionnaireController::class,"ajouter"]);

Route::post('/ajouterM',[gestionnaireController::class,"gotoajouter"])->name('ajouterM');





Route::get('/gestionnaire/activites', [gestionnaireController::class,"Activites"]);
Route::get('/updateActivites/{n}',[gestionnaireController::class,"getActivite"]);
Route::post('/modifierActivites',[gestionnaireController::class,"updateActivite"]);
Route::get('/deleteActivites/{n}',[gestionnaireController::class,"deleteActivite"]);





// had xi 3la 7sab directeur
//Route::get('/directeur/statistique', [directeurController::class,"statistique"]);
//Route::get('/directeur/statistiques', [directeurController::class, 'statistiques'])->name('directeur.statistiques');
//Route::get('/directeur/statistique', [directeurController::class, 'statistique']);


//Route::get('/directeur/revenu', function (){return view('directeur.revenu.revenu');});
Route::get('/directeur/revenu', [RevenueController::class, 'index']);

Route::post('/directeur/revenu/recherche', [directeurController::class,"revenu"]);

//Route::get('/directeur/compte', [directeurController::class,"compteDirecteur"]);
Route::get('/directeur/compte', [directeurController::class, 'gererComptes'])->name('directeur.gererComptes');
Route::put('/modifier-role/{id}', [directeurController::class, 'modifierRole'])->name('directeur.compte.modifierRole');
//compte
Route::get('/gerer-comptes', [directeurController::class, 'gererComptes'])->name('directeur.compte.gererComptes');

//Route::post('/updateDirecteur', [directeurController::class,"updateDirecteur"]);

//chart
Route::get('/directeur/statistique', [ChartController::class,"LineChart"]);
Route::get('chart', function () {
    $chart = (new LarapexChart)->pieChart()
        ->setTitle('Top 3 scorers of the team.')
        ->setSubtitle('Season 2021.')
        ->setDataset([20, 24, 30]) // Utilisez setDataset au lieu de addData
        ->setLabels(['Player 7', 'Player 10', 'Player 9']);
    return view('chart', compact('chart'));
});
Route::get('chart', function () {
    $result = DB::select(DB::raw('SELECT m.nom, m.prenom, s.heurFin AS profit, s.heurDebut AS expense
        FROM sence s
        INNER JOIN moniteur m ON s.codeM = m.codeM;'));
    
    $data = collect($result)->map(function ($item) {
        return [
            'Name' => $item->nom.' '.$item->prenom,
            'Profit' => $item->profit,
            'Expense' => $item->expense,
        ];
    });
    
    $chart = (new LarapexChart)->lineChart()
        ->setTitle('Profit and Expense by Moniteur')
        ->setSubtitle('Season 2021.')
        ->setXAxis(['Name'])
        ->setDataset($data->pluck('Profit')->toArray(), 'Profit')
        ->setDataset($data->pluck('Expense')->toArray(), 'Expense')
        ->setColors(['#3498db', '#e74c3c']);
        
    return view('chart', compact('chart'));
});
