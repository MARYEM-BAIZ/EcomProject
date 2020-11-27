<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Souscategorie;
use App\Models\Commande;
use Illuminate\Support\Facades\Auth;

class CategorieController extends Controller
{
    public function ajoutcategorie(){
        return view('ajout_categorie');
    }

    public function ajout_categorie(Request $request){

            $categorie= $request->input('categorie');
        
            $c= new Categorie;
            $c->nom_categorie=$categorie;
        
            $c->save();
           
        
            $categories= Categorie::all();
        
            return  view('liste_categorie')->with('categories',$categories);
        
    }


    public function listecategorie(){
        $categories= Categorie::all();
        return view('liste_categorie')->with('categories',$categories);
    }

    public function modifier($id){

        $modi=Categorie::find($id);

       return  view('modifiercategorie')->with(['id' => $id ,'modi'=> $modi]);
  }

  public function modifiercategorie($id , Request $request){

        $categorie= $request->input('categoriemodifier');

        // $ca=new Categorie;
        $ca = Categorie::find($id);
        $ca->nom_categorie=$categorie;

        $ca->save();
        $categories= Categorie::all();

        return  view('liste_categorie')->with('categories',$categories);
  }

  public function supprimercategorie($id){
    $c= new Categorie;
    $c=Categorie::find($id)->delete();

    $categories= Categorie::all();

    return  view('liste_categorie')->with('categories',$categories);
    
}

}
