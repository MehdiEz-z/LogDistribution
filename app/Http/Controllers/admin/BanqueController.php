<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class BanqueController extends Controller
{
    public function Index(){
       


        return view('admin.redirects.Banque.banque');
    }
}
