<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PowerZone extends Controller
{
    public function index(){
        $act=DB::select("select distinct nomAct from activites");
        // $ab=DB::select("select nomAct,nomAb,prixActuel from tarif T inner join typeAbonnements ty on ty.idAb=T.idAb inner join activites a on T.idAct=a.idAct limit 3");
        $ab=DB::select("SELECT a.nomAct, nomAb, prixActuel FROM tarif T
        INNER JOIN typeAbonnements ty ON idAb = idAb
        INNER JOIN activites a ON idAct = idAct
        LIMIT 3;
        ");

        $an=DB::select("select * from annonces where dateFin >= curdate()");
        // $emG=DB::select("select nomgroupe,jour,heurFin,heurDebut from seances s inner join groupe g on g.idgroupe=s.idgroupe");
        $emG=DB::select("SELECT g.nomgroupe, s.jour, s.heurFin, s.heurDebut
        FROM seances s
        INNER JOIN groupe g ON idgroupe = idgroupe;
        ");
        $emM=DB::select("select nom,prenom,jour,heurFin,heurDebut from seances s inner join moniteur m on codeM=codeM");
        $j=['lundi','mardi','mercredi','jeudi','vendredi','samedi'];

        return view("home",["activites"=>$act,"Exempleabonnements"=>$ab,"annonces"=>$an,"emploiG"=>$emG,"emploiM"=>$emM,'jour'=>$j]);
    }
    public function indexAbonnement(){
        $ab=DB::select("SELECT nomAct, nomAb, prixActuel
                        FROM tarif T
                        INNER JOIN typeAbonnements ty
                        ON idAb = idAb
                        INNER JOIN activites a
                        ON idAct = idAct;");
        return view("abonnements",["abonnements"=>$ab]);
    }
    public function demander(Request $request){
        $nom=$request->input("nom");
        $prenom=$request->input("prenom");
        $date_naissance=$request->input("date_naissance");
        $tel=$request->input("tel");
        $count=DB::select("select count(*) as t from demande");
        foreach($count as $i){
            $code=$i->t+1;
        }
        DB::insert("insert into demande value(?,?,?,?,?)",[$code,$nom,$prenom,$tel,$date_naissance]);
        return redirect("/formulaire")->with('success','Merci pour le demande ! Attendez notre appel.');

    }





    public function verify(Request $request){
        $email=$request->input("email");
        $password=$request->input("password");
        $users=DB::select("select * from users");
        session_start();

        foreach($users as $user){
            if($user->email==$email && $user->password==$password){
                $_SESSION["id"] = $user->id;
                
                if($user->role=="admin"){
                    $_SESSION["idTest"] = $user->id;
                    return redirect("/admin");
                }if($user->role=="gestionnaire"){
                    $_SESSION["idTest"] = $user->id;
                    return redirect("/gestionnaire");
                }if($user->role=="directeur"){
                    $_SESSION["idTest"] = $user->id;
                    return redirect("/directeur");
                }
                
            }
            
        }
        if(url("/verify")){
            return view("login",["login"=>"error! Enter email et mot de passe correct"]);
        }
    }
    public function logout(){
        session_start();
        session_destroy();
        return redirect("/login");
    }
}
