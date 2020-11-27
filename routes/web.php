<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil',['uses'=>'ProduitController@accueil','as'=>'page.accueil']);


Route::get('/templatecorps',['uses'=>'ProduitController@templatecorps','as'=>'page.templatecorps']);

Route::get('/templatecorpstous/{id}',['uses'=>'ProduitController@templatecorpstous','as'=>'page.templatecorpstous']);

Route::get('/templatecorpshydratation',['uses'=>'ProduitController@templatecorpshydratation','as'=>'page.templatecorpshydratation']);

Route::get('/templatecorpsnettoyage',['uses'=>'ProduitController@templatecorpsnettoyage','as'=>'page.templatecorpsnettoyage']);

Route::get('/templatecorpstonifier',['uses'=>'ProduitController@templatecorpstonifier','as'=>'page.templatecorpstonifier']);

Route::get('/templatecorpstraiter',['uses'=>'ProduitController@templatecorpstraiter','as'=>'page.templatecorpstraiter']);








Route::get('/templatecheuveux',['uses'=>'ProduitController@templatecheuveux','as'=>'page.templatecheuveux']);

Route::get('/templatecheuveuxtous/{id}',['uses'=>'ProduitController@templatecheuveuxtous','as'=>'page.templatecheuveuxtous']);

Route::get('/templatecheuveuxhydratation',['uses'=>'ProduitController@templatecheuveuxhydratation','as'=>'page.templatecheuveuxhydratation']);

Route::get('/templatecheuveuxnettoyage',['uses'=>'ProduitController@templatecheuveuxnettoyage','as'=>'page.templatecheuveuxnettoyage']);

Route::get('/templatecheuveuxtonifier',['uses'=>'ProduitController@templatecheuveuxtonifier','as'=>'page.templatecheuveuxtonifier']);

Route::get('/templatecheuveuxtraiter',['uses'=>'ProduitController@templatecheuveuxtraiter','as'=>'page.templatecheuveuxtraiter']);










Route::get('/templatevisage',['uses'=>'ProduitController@templatevisage','as'=>'page.templatevisage']);

Route::get('/templatevisagetous/{id}',['uses'=>'ProduitController@templatevisagetous','as'=>'page.templatevisagetous']);

Route::get('/templatevisagehydratation',['uses'=>'ProduitController@templatevisagehydratation','as'=>'page.templatevisagehydratation']);

Route::get('/templatevisagenettoyage',['uses'=>'ProduitController@templatevisagenettoyage','as'=>'page.templatevisagenettoyage']);

Route::get('/templatevisagetonifier',['uses'=>'ProduitController@templatevisagetonifier','as'=>'page.templatevisagetonifier']);

Route::get('/templatevisagetraiter',['uses'=>'ProduitController@templatevisagetraiter','as'=>'page.templatevisagetraiter']);



Route::get('/templatesolaire',['uses'=>'ProduitController@templatesolaire','as'=>'page.templatesolaire']);

Route::get('/templatesolairetous/{id}',['uses'=>'ProduitController@templatesolairetous','as'=>'page.templatesolairetous']);
Route::get('/templatesolairecreme',['uses'=>'ProduitController@templatesolairecreme','as'=>'page.templatesolairecreme']);
Route::get('/templatesolairelait',['uses'=>'ProduitController@templatesolairelait','as'=>'page.templatesolairelait']);


Route::get('/pageadmin',['uses'=>'Controller@pageadmin','as'=>'page.admin']);


Route::get('/ajoutcategorie',['uses'=>'CategorieController@ajoutcategorie','as'=>'page.ajoutcategorie']);
Route::post('/ajoutcategorieee',['uses'=>'CategorieController@ajout_categorie','as'=>'categorie.ajouter']);

Route::get('/listecategorie',['uses'=>'CategorieController@listecategorie','as'=>'page.listecategorie']);
Route::get('/suppcat/{id}',['uses'=>'CategorieController@supprimercategorie','as'=>'categorie.supprimer']);
Route::get('/ca/{id}',['uses'=>'CategorieController@modifier','as'=>'c']);
Route::post('/ca/{id}',['uses'=>'CategorieController@modifiercategorie','as'=>'categorie.modifier']);


Route::get('/ajoutsouscategorie',['uses'=>'SouscategorieController@ajoutsouscategorie','as'=>'page.ajoutsouscategorie']);
Route::post('/ajoutsouscategorieee',['uses'=>'SouscategorieController@ajout_souscategorie','as'=>'souscategorie.ajouter']);

Route::get('/listesouscategorie',['uses'=>'SouscategorieController@listesouscategorie','as'=>'page.listesouscategorie']);
Route::get('/suppar/{id}',['uses'=>'SouscategorieController@supprimersouscategorie','as'=>'souscategorie.supprimer']);
Route::get('/so/{id}',['uses'=>'SouscategorieController@modifier','as'=>'s']);
Route::post('/so/{id}',['uses'=>'SouscategorieController@modifiersouscategorie','as'=>'souscategorie.modifier']);



Route::get('/ajoutproduit',['uses'=>'ProduitController@ajoutproduit','as'=>'page.ajoutproduit']);
Route::post('/ajoutproduittt',['uses'=>'ProduitController@ajout_produit','as'=>'produit.ajouter']);
Route::get('/listeproduit',['uses'=>'ProduitController@listeproduit','as'=>'page.listeproduit']);
Route::get('/supppr/{id}',['uses'=>'ProduitController@supprimerproduit','as'=>'produit.supprimer']);
Route::get('/pr/{id}',['uses'=>'ProduitController@modifier','as'=>'p']);
Route::post('/pr/{id}',['uses'=>'ProduitController@modifierproduit','as'=>'produit.modifier']);


Route::get('/infoproduit/{id}',['uses'=>'ProduitController@infoproduit','as'=>'page.infoproduit']);

Route::get('/ajoutproduitaupanier/{id}',['uses'=>'CartController@ajoutproduitaupanier','as'=>'cart.ajoutproduitaupanier']);

Route::get('/checkout',['uses'=>'CartController@index','as'=>'page.ckeckout']);

Route::post('/paniermodifier/{id}',['uses'=>'CartController@update','as'=>'panier.modifier']);

Route::post('/paniersupprimer/{id}',['uses'=>'CartController@destroy','as'=>'panier.supprimer']);

Route::get('/checkoutfin',['uses'=>'CheckoutfinController@index','as'=>'page.ckeckoutfin']);
Route::post('/checkoutfin_store',['uses'=>'CheckoutfinController@store','as'=>'page.ckeckoutfin_store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
