<?php

namespace App\Http\Controllers\admin\Achat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class FactureAchatController extends Controller
{
    public function ListeFactureAchat(){
        $factures = Http::get('https://iker.wiicode.tech/api/facture');
        $dataFacture = $factures->json()['data'];

        return view('admin.achat.facture.listefacture',compact('dataFacture'));
    }

    public function CreateFactureAchat(){
        $bonLivraisons = Http::get('https://iker.wiicode.tech/api/getblf');
        $dataBl = $bonLivraisons->json();

        return view('admin.achat.facture.createfacture',compact('dataBl'));
    }

    public function ShowFacture($id){
        $facture = Http::get('https://iker.wiicode.tech/api/facture/'.$id);
        $dataFacturee = $facture->json()['data'];
        
        $societe = Http::get('https://iker.wiicode.tech/public/api/societe');
        $dataSociete = $societe->json();

        return view('admin.achat.facture.showfacture',compact('dataFacturee','dataSociete'));
    }
}
