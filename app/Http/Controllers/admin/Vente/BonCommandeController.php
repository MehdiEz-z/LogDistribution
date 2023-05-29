<?php

namespace App\Http\Controllers\admin\Vente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class BonCommandeController extends Controller
{
    public function ListeBonCommande(){
        
        $bonCommandes = Http::get(app('backendUrl').'/boncommandevente');
        $dataBc = $bonCommandes->json()['data'];
        return view('admin.vente.commande.boncommande',compact('dataBc'));
    }
}
