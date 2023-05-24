<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class gestionnaireController extends Controller
{

    // public function moniteur(){
    //     $m=DB::select("select codeM,nom,prenom,tel from moniteur");
    //     return view("admin.moniteur.moniteur",["moniteur"=>$m]);
    // }
    // public function ajouterMoniteur(Request $request){
    //     $count=DB::select("select count(*) as t from moniteur");
    //     foreach($count as $i){
    //         $code=$i->t+1;
    //     }
    //     $nom=$request->input("nom");
    //     $prenom=$request->input("prenom");
    //     $tel=$request->input("tel");
    //     DB::insert("insert into moniteur value(?,?,?,?)",[$code,$nom,$prenom,$tel]);
    //     return redirect("/admin/moniteur");
    // }
    // public function getMoniteur($n){
    //     $rs=DB::select("select codeM,nom,prenom,tel from moniteur where codeM=?",[$n]);
    //     return view("admin.moniteur.updateM",["moniteur"=>$rs]);
    // }
    // public function updateMoniteur(Request $request){
    //     $code=$request->input("code");
    //     $nom=$request->input("nom");
    //     $prenom=$request->input("prenom");
    //     $tel=$request->input("tel");
    //     DB::update("update moniteur set  nom=? , prenom=? , tel=? where codeM=? ",[$nom,$prenom,$tel,$code]);
    //     return redirect("/admin/moniteur");
    // }
    // public function deleteMoniteur($n){
    //     DB::delete("delete from moniteur where codeM = ?",[$n]);
    //     return redirect("/admin/moniteur");
    // }

    public function Moniteur(){
        $m=DB::select("select codeM,nom,prenom,tel from moniteur");
        $m_act=DB::select("select codeM,nomAct from activites_moniteur am inner join activites a on am.idAct=a.idAct");
        return view("gestionnaire.moniteur.moniteur",["moniteur"=>$m,"m_act"=>$m_act]);
    }

    
    public function Activites(){
            $act=DB::select("select idAct,nomAct from activites");
            return view("gestionnaire.activites.activites",["activites"=>$act]);
    }
    public function getActivite($n){
        $act=DB::select("select idAct,nomAct from activites where idAct=?",[$n]);
        return view("gestionnaire.activites.updateA",["activites"=>$act]);
    }
    public function updateActivite(Request $request){
        $code=$request->input("id");
        $nom=$request->input("nom");
        
        DB::update("update activites set  nomAct=? where idAct=? ",[$nom,$code]);
        return redirect("/gestionnaire/activites");
    }
    public function deleteActivite($n){
        DB::delete("delete from activites where idAct = ?",[$n]);
        return redirect("/gestionnaire/activites");
    }
//     public function ajouter(Request $request)
//     {
//         // Check if user is logged in and authorized to add a moniteur
//         if(!empty($_SESSION["id"]) && $_SESSION["id"] == $_SESSION["idTest"]) {
//             // Check if form was submitted
//             if ($request->isMethod('post')) {
//                 // Validate form data
//                 $validatedData = $request->validate([
//                     'nom' => 'required|max:255',
//                     'prenom' => 'required|max:255',
//                     'tel' => 'required|numeric',
//                 ]);

//                 // Save moniteur to database
//                 // ...

//                 // Redirect to success page
//                 return redirect('/gestionnaire/moniteur')->with('success', 'Moniteur ajouté avec succès!');
//             }

//             // Display add moniteur form
//             return view('gestionnaire.moniteur.ajouterM');
//         } else {
//             // User is not authorized to add a moniteur, redirect to login page
//             return redirect('/login');
//         }
// }
// public function ajouter(Request $request)
//     {
//         $codeM = $request->input('codeM');
//         $nom = $request->input('nom');
//         $prenom = $request->input('prenom');
//         $tel = $request->input('tel');

//         // Insert the new monitor into the "moniteur" table
//         DB::table('moniteur')->insert([
//             'codeM' => $codeM,
//             'nom' => $nom,
//             'prenom' => $prenom,
//             'tel' => $tel
//         ]);

//         // Redirect to the previous page
//         return redirect()->back()->with('success', 'Le moniteur a été ajouté avec succès.');
//     }
// }
public function gotoajouter()
{
    // some code here...
    return  view('gestionnaire.moniteur.ajouterM');
}


}