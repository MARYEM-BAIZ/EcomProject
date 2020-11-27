<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Souscategorie;
use App\Models\Commande;
use Illuminate\Support\Facades\Auth;

class ProduitController extends Controller
{
    
    public function accueil(){

        // return redirect()->route('page.page'); 
        $categories=Categorie::all();
        return view('accueil')->with('categories',$categories);
    }

    public function templatecorps(){
        $categories = Categorie::all(); 
        return view('template_corps')->with( 'categories', $categories);
    }

    public function templatecorpstous($id){
        // $corpstous= Produit::select()->where('user_id',$id)->get();
        $corpstous=Souscategorie::select()->where('categorie_id',$id)->get();
        return view('corps_tous')->with('corpstous',$corpstous);
    }

    public function templatecorpshydratation(){
      
        $corpstous= Produit::select()->where('souscategorie_id',2)->simplePaginate(1);
        return view('hydratation_corps')->with('corpstous',$corpstous);
    }

    public function templatecorpsnettoyage(){

        $corpstous= Produit::select()->where('souscategorie_id',3)->simplePaginate(1);
        return view('corps_nettoyage')->with('corpstous',$corpstous);
    }

    public function templatecorpstonifier(){
        $corpstous= Produit::select()->where('souscategorie_id',4)->simplePaginate(1);
        return view('corps_tonifier')->with('corpstous',$corpstous);
    }

    public function templatecorpstraiter(){

        $corpstous= Produit::select()->where('souscategorie_id',5)->simplePaginate(1);
        return view('corps_traiter')->with('corpstous',$corpstous);
    }









    public function templatecheuveux(){
        return view('template_cheuveux');
    }

    public function templatecheuveuxtous($id){
       $cheuveuxtous=Souscategorie::select()->where('categorie_id',$id)->get();
        return view('cheuveux_tous')->with('cheuveuxtous',$cheuveuxtous);
    }

    public function templatecheuveuxhydratation(){
        $cheuveuxtous= Produit::select()->where('souscategorie_id',6)->simplePaginate(1);
        return view('hydratation_cheuveux')->with('cheuveuxtous',$cheuveuxtous);
    }

    public function templatecheuveuxnettoyage(){
        $cheuveuxtous= Produit::select()->where('souscategorie_id',7)->simplePaginate(1);
        return view('cheuveux_nettoyage')->with('cheuveuxtous',$cheuveuxtous);
    }

    public function templatecheuveuxtraiter(){
        $cheuveuxtous= Produit::select()->where('souscategorie_id',8)->simplePaginate(1);
        return view('cheuveux_traiter')->with('cheuveuxtous',$cheuveuxtous);
    }
  









    public function templatevisage(){
        return view('template_visage');
    }

    public function templatevisagetous($id){
        $visagetous=Souscategorie::select()->where('categorie_id',$id)->get();
        return view('visage_tous')->with('visagetous',$visagetous);
    }

    public function templatevisagehydratation(){
        $visagetous= Produit::select()->where('souscategorie_id',9)->simplePaginate(1);
        return view('hydratation_visage')->with('visagetous',$visagetous);
    }

    public function templatevisagenettoyage(){
        $visagetous= Produit::select()->where('souscategorie_id',10)->simplePaginate(1);
        return view('visage_nettoyage')->with('visagetous',$visagetous);
    }

    public function templatevisagetonifier(){
        $visagetous= Produit::select()->where('souscategorie_id',11)->simplePaginate(1);
        return view('visage_tonifier')->with('visagetous',$visagetous);
    }

    public function templatevisagetraiter(){
        $visagetous= Produit::select()->where('souscategorie_id',12)->simplePaginate(1);
        return view('visage_traiter')->with('visagetous',$visagetous);
    }








    public function templatesolaire(){
        return view('template_solaire');
    }

    public function templatesolairetous($id){
        $solairetous=Souscategorie::select()->where('categorie_id',$id)->get();
        return view('solaire_tous')->with('solairetous',$solairetous);
    }

    public function templatesolairecreme(){
        $solairetous= Produit::select()->where('souscategorie_id',13)->simplePaginate(1);
        return view('solaire_creme')->with('solairetous',$solairetous);
    }

    public function templatesolairelait(){
        $solairetous= Produit::select()->where('souscategorie_id',14)->simplePaginate(1);
        return view('solaire_lait')->with('solairetous',$solairetous);
    }







    public function ajoutproduit(){
        $souscategories= Souscategorie::all();
        return view('ajout_produit')->with('souscategories',$souscategories);
    }

    
    public function ajout_produit(Request $request){

        $nomproduit=$request->input('nomproduit');
        $desciption=$request->input('description');
        $prix=$request->input('prix');
        $quantite=$request->input('quantite');
        $souscategorie=$request->input('select');

        $original_name =  $request->image->getClientOriginalName();

       $filename =  pathinfo($original_name,PATHINFO_FILENAME); 
   
       $extension =  $request->image->getClientOriginalExtension(); 
   
       $filename_store = $filename.time().'.'.$extension;
   
       $request->image->move('photos', $filename_store);


       $p=new Produit;
       $p->nom_produit=$nomproduit;
       $p->description=$desciption;
       $p->prix=$prix;
       $p->quantite=$quantite;
       $p->souscategorie_id=$souscategorie;
       $p->image_produit='photos/'.$filename_store;
       $p->save();


       $produits= Produit::all();

       return  view('liste_produit')->with('produits',$produits);


    }

    public function listeproduit(){
        $produits= Produit::all();
        $souscategories= Souscategorie::all();
     
        return  view('liste_produit')->with(['produits'=> $produits,'souscategories'=> $souscategories]);
    }


    public function supprimerproduit($id){
    
        $ar= Produit::find($id)->delete();
  
        $produits= Produit::all();
        $souscategories= Souscategorie::all();
        return  view('liste_produit')->with(['produits'=> $produits,'souscategories'=> $souscategories]);
  
     }
     
     public function modifier($id){
  
      $modi=Produit::find($id);
      $souscategories= Souscategorie::all();
      
      return  view('modifierproduit')->with(['id' => $id ,'modi'=> $modi,'souscategories'=> $souscategories]);
  
     }
  
     public function modifierproduit($id ,Request $request1){
        $p1=Produit::find($id);

  if (isset($request1->image1)) {
    $original_name1 =  $request1->image1->getClientOriginalName();

    $filename1 =  pathinfo($original_name1,PATHINFO_FILENAME); 

    $extension1 =  $request1->image1->getClientOriginalExtension(); 

    $filename_store1 = $filename1.time().'.'.$extension1;

    $request1->image1->move('photos', $filename_store1);
    $p1->image_produit='photos/'.$filename_store1;
  }
 

        $nomproduit1=$request1->input('nomproduit1');
        $desciption1=$request1->input('description1');
        $prix1=$request1->input('prix1');
        $quantite1=$request1->input('quantite1');
        $souscategorie1=$request1->input('select1');

       


     
       $p1->nom_produit=$nomproduit1;
       $p1->description=$desciption1;
       $p1->prix=$prix1;
       $p1->quantite=$quantite1;
       $p1->souscategorie_id=$souscategorie1;
      
       $p1->save();


       $produits= Produit::all();

       return  view('liste_produit')->with('produits',$produits);
  
     }



     public function infoproduit($id){
        $produits=Produit::find($id);
  
        return view('infoproduit')->with('produits',$produits);
     }


}
