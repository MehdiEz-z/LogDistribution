<?php

namespace App\Http\Controllers\admin\Achat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class BonLivraisonController extends Controller
{
    public function ListeBonLivraison(){
        $bonLivraison = Http::get('https://iker.wiicode.tech/api/bonlivraison');
        $dataBl = $bonLivraison->json()['data'];

        return view('admin.achat.livraison.bonlivraison',compact('dataBl'));
    }

    public function CreateBonLivraison(){
        $bonCommandes = Http::get('https://iker.wiicode.tech/api/getbc');
        $dataBc = $bonCommandes->json();

        return view('admin.achat.livraison.createbonlivraison',compact('dataBc'));
    }

    public function ShowBonLivraison($id){
        $bonlivraison = Http::get('https://iker.wiicode.tech/api/bonlivraison/'.$id);
        $dataBonLivraison = $bonlivraison->json();

        $societe = Http::get('https://iker.wiicode.tech/public/api/societe');
        $dataSociete = $societe->json();

        return view('admin.achat.Livraison.showbonlivraison',compact('dataBonLivraison','dataSociete'));
    }
}
