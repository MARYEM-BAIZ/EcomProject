<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Souscategorie;
use App\Models\Commande;
use Illuminate\Support\Facades\Auth;

class SouscategorieController extends Controller
{
    
    public function ajoutsouscategorie(){
        $categories= Categorie::all();
        return view('ajout_souscategorie')->with('categories',$categories);
    }

    public function ajout_souscategorie(Request $request){

        $article= $request->input('souscategorie');
        $article1= $request->input('select');
    
        $a= new Souscategorie;
        $a->nom_souscategorie=$article;
        $a->categorie_id=$article1;
    
        $a->save();
       
    
        $souscategories= Souscategorie::all();
    
        return  view('liste_souscategorie')->with('souscategories',$souscategories);
    
     }

     public function listesouscategorie(){
        $souscategories= Souscategorie::all();
        return view('liste_souscategorie')->with('souscategories',$souscategories);
    }



    public function supprimersouscategorie($id){
    
        $ar= Souscategorie::find($id)->delete();
  
        $souscategories= Souscategorie::all();
        return view('liste_souscategorie')->with('souscategories',$souscategories);
  
     }
     
     public function modifier($id){
  
      $modi=Souscategorie::find($id);
      $categories= Categorie::all();
      return  view('modifiersouscategorie')->with(['id' => $id ,'modi'=> $modi,'categories'=> $categories]);
  
     }
  
     public function modifiersouscategorie($id ,Request $request){
         
         $ar=$request->input('souscategoriemodifier');
         $article1= $request->input('select');
  
         $a=Souscategorie::find($id);
         $a->nom_souscategorie=$ar;
         $a->categorie_id=$article1;
  
         $a->save();
  
         $souscategories= Souscategorie::all();
         return view('liste_souscategorie')->with('souscategories',$souscategories);
  
     }

}
