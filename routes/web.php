<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\StockController;
use App\Http\Controllers\Admin\BanqueController;
use App\Http\Controllers\admin\DepenseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\admin\WareHouseController;
use App\Http\Controllers\Admin\Vente\ClientController;
use App\Http\Controllers\Admin\Article\ArticlesController;
use App\Http\Controllers\Admin\Achat\BonCommandeController;
use App\Http\Controllers\Admin\Achat\BonReceptionController;
use App\Http\Controllers\admin\Achat\FactureAchatController;
use App\Http\Controllers\Admin\Achat\FournisseursController;
use App\Http\Controllers\Admin\Article\CategoriesController;
use App\Http\Controllers\admin\Personnel\EmployesController;
use App\Http\Controllers\Admin\Personnel\MagaziniersController;


Route::controller(DashboardController::class)->group(function() {
    Route::get('/', 'Index')->name('adminDashboard');
});

Route::controller(ArticlesController::class)->group(function() {
    Route::get('/articles', 'ListeArticle')->name('adminArticles');
});

Route::controller(CategoriesController::class)->group(function() {
    Route::get('/categories', 'ListeCategorie')->name('adminCategories');
    Route::post('/categories', 'StoreCategorie')->name('storeCategories');
    Route::put('/categories/{id?}', 'UpdateCategorie')->name('updateCategorie');
    Route::delete('/categories/{id}', 'DeleteCategorie')->name('deleteCategorie');
});

Route::controller(MagaziniersController::class)->group(function() {
    Route::get('/magaziniers', 'ListeMagazinier')->name('adminMagazinier');
});

Route::controller(EmployesController::class)->group(function() {
    Route::get('/employes', 'ListeEmploye')->name('adminEmploye');
});

// ----------------------------------------------------------------------- //
// ----------------------------     Achat     ---------------------------- //

Route::controller(FournisseursController::class)->group(function() {
    Route::get('/fournisseurs', 'ListeFournisseur')->name('achatFournisseur');
});

Route::controller(BonCommandeController::class)->group(function() {
    Route::get('/bon-commande', 'ListeBonCommande')->name('listeCommande');
    Route::get('/bon-commande/nouveau', 'CreateBonCommande')->name('createCommande');
    Route::get('/bon-commande/detail/{id}', 'ShowBonCommande')->name('showCommande');

});

Route::controller(App\Http\Controllers\Admin\Achat\BonLivraisonController::class)->group(function() {
    Route::get('/bon-livraison', 'ListeBonLivraison')->name('listeLivraison');
    Route::get('/bon-livraison/nouveau', 'CreateBonLivraison')->name('createLivraison');
    Route::get('/bon-livraison/detail/{id}', 'ShowBonLivraison')->name('showLivraison');
});

Route::controller(FactureAchatController::class)->group(function() {
    Route::get('/facture-achat', 'ListeFactureAchat')->name('achatFacture');
    Route::get('/facture-achat/nouveau', 'CreateFactureAchat')->name('createFacture');
    Route::get('/facture-achat/detail/{id}', 'ShowFacture')->name('showFacture');
});

Route::fallback(function () {
    return view('errors.404');
});

Route::controller(App\Http\Controllers\Admin\Achat\PaiementController::class)->group(function() {
    Route::get('/paiement-achat', 'Index')->name('achatPaiement');
});

// ----------------------------     Fin Achat     ---------------------------- //
// --------------------------------------------------------------------------- //



Route::controller(ClientController::class)->group(function() {
    Route::get('/clients', 'ListeClient')->name('venteClient');
});

// Route::controller(App\Http\Controllers\Admin\Vente\BonLivraisonController::class)->group(function() {
//     Route::get('/bon-livraison', 'Index')->name('venteLivraison');
// });

Route::controller(App\Http\Controllers\Admin\Vente\PaiementController::class)->group(function() {
    Route::get('/paiement-vente', 'Index')->name('ventePaiement');
});

Route::controller(BanqueController::class)->group(function() {
    Route::get('/banque', 'Index')->name('adminbanque');
});

Route::controller(StockController::class)->group(function() {
    Route::get('/Stock', 'Index')->name('adminStock');
});

Route::controller(WareHouseController::class)->group(function() {
    Route::get('/Warehouse', 'Index')->name('adminwarehouse');
});

Route::controller(RoleController::class)->group(function() {
    Route::get('/AdminRole', 'Index')->name('adminRole');
});

Route::controller(DepenseController::class)->group(function() {
    Route::get('/depense', 'Index')->name('admindepense');
     Route::post('/depense', 'Storedepense')->name('storedepense');
     Route::get('/depense/{id}', 'EditDepense')->name('editBanque');
     Route::put('/depense/{id?}', 'updateDepense')->name('updatedepense');
    Route::delete('/depense/{id}', 'Deletedepense')->name('deletedepense');
});