<?php

namespace App\Http\Controllers\admin\Vente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class BonLivraisonController extends Controller
{
    public function ListeBonLivraison(){
        $bonLivraison = Http::get(app('backendUrl').'/bonlivraisonvente');
        $dataBl = $bonLivraison->json()['data'];

        return view('admin.vente.livraison.bonlivraison',compact('dataBl'));
    }

    public function CreateBonLivraison(){
        $bonCommandes = Http::get(app('backendUrl').'/getbcv');
        $dataBc = $bonCommandes->json();

        return view('admin.vente.livraison.createbonlivraison',compact('dataBc'));
    }
}
