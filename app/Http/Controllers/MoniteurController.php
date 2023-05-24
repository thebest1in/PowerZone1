<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoniteurController extends Controller
{
    //
    public function ajouter(Request $request)
    {
        // Check if user is logged in and authorized to add a moniteur
        if(!empty($_SESSION["id"]) && $_SESSION["id"] == $_SESSION["idTest"]) {
            // Check if form was submitted
            if ($request->isMethod('post')) {
                // Validate form data
                $validatedData = $request->validate([
                    'nom' => 'required|max:255',
                    'prenom' => 'required|max:255',
                    'tel' => 'required|numeric',
                ]);

                // Save moniteur to database
                // ...

                // Redirect to success page
                return redirect('/gestionnaire/moniteur')->with('success', 'Moniteur ajouté avec succès!');
            }

            // Display add moniteur form
            return view('gestionnaire.moniteur.ajouterM');
        } else {
            // User is not authorized to add a moniteur, redirect to login page
            return redirect('/login');
        }
    }}
