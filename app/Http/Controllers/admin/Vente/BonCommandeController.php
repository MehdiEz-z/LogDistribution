<?php

namespace App\Http\Controllers\admin\Vente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BonCommandeController extends Controller
{
    public function ListeBonCommande(){
        // $bonCommandes = Http::get('https://iker.wiicode.tech/api/boncommande');
        // $dataBc = $bonCommandes->json()['data'];

        return view('admin.vente.commande.boncommande');
    }
}
