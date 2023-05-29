<?php

namespace App\Http\Controllers\admin\Vente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FactureVenteController extends Controller
{
    public function ListeFactureVente(){
        // $factures = Http::get('https://iker.wiicode.tech/api/facture');
        // $dataFacture = $factures->json()['data'];

        return view('admin.vente.facture.listefacture');
    }
}
