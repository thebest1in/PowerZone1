<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RevenueController extends Controller
{
    //
   public function index()
    {
        // $revenueByCustomer = DB::table('paiement')
        //     ->join('abonnements', 'paiement.num', '=', 'abonnements.num')
        //     ->select('abonnements.num', DB::raw('SUM(paiement.montant) as total'))
        //     ->groupBy('abonnements.num')
        //     ->get();
        
        // $revenueByMonth = DB::table('paiement')
        //     ->select(DB::raw('DATE_FORMAT(dateP, "%Y-%m") as month'), DB::raw('SUM(montant) as total'))
        //     ->groupBy('month')
        //     ->get();
        
        // $totalRevenue = $revenueByCustomer->sum('total');

        // $revenueByCustomer = DB::table('paiement')
        //     ->join('abonnements', 'paiement.num', '=', 'abonnements.num')
        //     ->select('abonnements.num as customer_number', DB::raw('SUM(paiement.montant) as total'))
        //     ->groupBy('abonnements.num')
        //     ->get();
        
        // $revenueByMonth = DB::table('paiement')
        //     ->select(DB::raw('DATE_FORMAT(dateP, "%Y-%m") as month'), DB::raw('SUM(montant) as total'))
        //     ->groupBy('month')
        //     ->get();
        
        // $totalRevenue = $revenueByCustomer->sum('total');
        // return view('directeur.revenu.revenu', compact('revenueByCustomer', 'revenueByMonth', 'totalRevenue'));
        $revenueByCustomer = DB::table('paiements')
    ->join('abonnements', 'paiements.num', '=', 'abonnements.num')
    ->select('abonnements.num as customer_number', DB::raw('SUM(paiements.montant) as total'), DB::raw('DATE_FORMAT(dateP, "%Y-%m") as month'))
    ->groupBy('abonnements.num', 'month')
    ->get();
        
$revenueByMonth = DB::table('paiements')
    ->select(DB::raw('DATE_FORMAT(dateP, "%Y-%m") as month'), DB::raw('SUM(montant) as total'))
    ->groupBy('month')
    ->get();
        
$totalRevenue = $revenueByCustomer->sum('total');
return view('directeur.revenu.revenu', compact('revenueByCustomer', 'revenueByMonth', 'totalRevenue'));

    }
}


