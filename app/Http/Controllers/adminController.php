<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{

    

    
    public function compteAdmin(){
        $rs=DB::select("select * from users where role='admin' ");
        return view("admin.compte.compte",["admin"=>$rs]);
    }
    public function updateAdmin(Request $request){
        $email=$request->input("email");
        $password=$request->input("password");
        $c=$request->input("confirmer");
        if($password == $c){
            DB::update("update users set  email=? , password=? where role='admin' ",[$email,$password]);
            return redirect("/admin");
        }else{
            $rs=DB::select("select * from users where role='admin' ");
            return view("admin.compte.compte",["admin"=>$rs,"error"=>"la confirmation est inccorect"]);
        }
        
    }
}
