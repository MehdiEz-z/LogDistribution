<?php

namespace App\Http\Controllers\admin\Vente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BonLivraisonController extends Controller
{
    public function ListeBonLivraison(){
        return view('admin.vente.livraison.bonlivraison');
    }
}
