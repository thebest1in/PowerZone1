<?php

namespace App\Http\Controllers;
use App\Models\abonnements;
use App\Models\paiement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class directeurController extends Controller
{
    
    public function gererComptes()
    {
        // Récupérer tous les utilisateurs
        $utilisateurs = DB::table('users')->get();

        // Afficher la vue avec la liste des utilisateurs
        return view('directeur.compte.compte', compact('utilisateurs'));
    }

    public function modifierRole(Request $request, $id)
    {
        // Récupérer le nouvel rôle pour l'utilisateur
        $nouveauRole = $request->input('role');

        // Mettre à jour l'utilisateur dans la base de données
        DB::table('users')
            ->where('id', $id)
            ->update(['role' => $nouveauRole]);

        // Rediriger vers la page de gestion des comptes
        return redirect()->route('directeur.compte.gererComptes');
    }
    }

