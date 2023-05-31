<?php

namespace App\Http\Controllers\admin\Secteur;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class BonSortieController extends Controller
{
    public function listeBonSortie(){
        $bonSorties = Http::get(app('backendUrl').'/bonsortie');
        $dataBs = $bonSorties->json();

        return view('admin.secteur.sortie.bonsortie',compact('dataBs'));
    }

    public function CreateBonSortie(){
        $vendeurs = Http::get(app('backendUrl').'/vendeur');
        $dataVendeur = $vendeurs->json();

        $entrepots = Http::get(app('backendUrl').'/warehouse');
        $dataentrepot = $entrepots->json();

        $camions = Http::get(app('backendUrl').'/camion');
        $datacamion = $camions->json();
        
        $articles = Http::get(app('backendUrl').'/articles');
        $dataArticle = $articles->json()['data'];

        return view('admin.secteur.sortie.createbonsortie',compact('dataVendeur','dataentrepot','dataArticle','datacamion'));
    }
}
