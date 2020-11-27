<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Produit;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Souscategorie;
use App\Models\Commande;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Cart::getContent();
        $total = Cart::getTotal();
        
        return view('checkout', compact('content', 'total'));
    }


 


    public function ajoutproduitaupanier($id)
    {
        $produit = Produit::find($id); 
        Cart::add([
            'id' => $produit->id,
            'name' => $produit->nom_produit,
            'price' => $produit->prix,
            'quantity' => 1,
            'attributes' => [
                'image'  => $produit->image_produit ,
                'description' => $produit->description,
                'quantite' => $produit->quantite
            ],
            'associatedModel' => $produit,
          ]
        );
      // dd(Cart::clear());
        //   dd(Cart::getContent()); 
          return redirect()->back();

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Cart::update($id, [
            'quantity' => ['relative' => false, 'value' => $request->quantity],
        ]);
        return redirect(route('page.ckeckout'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect(route('page.ckeckout'));
    }




  

}
