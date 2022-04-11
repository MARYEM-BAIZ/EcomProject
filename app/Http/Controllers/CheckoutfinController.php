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
use Session;

class CheckoutfinController extends Controller
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
        return view('checkoutfin', compact('content', 'total'));
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
        try {
        //  \Stripe::stripe()->setApiKey(env('STRIPE_SECRET'));
        //     $charge= \Stripe::charges()->create([

        //      'amount' => Cart::getTotal()/100,
        //      'currency' => 'MAD',
        //      'source' =>  $request->stripeToken,
        //      'description' => 'order',
        //      'receipt_email' => $request->email,
        //      'metadata' => [

        //      ],


        //     ]);

        //    return back()->with('success_message','thank you');


        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        \Stripe\Charge::create ([
                "amount" => 100 * Cart::getTotal(),
                "currency" => 'MAD',
                "source" => $request->stripeToken,
                "description" => "Making test payment." ,
                'receipt_email' => $request->email,
                'metadata' => [

                ]
            
        ]);

        Session::flash('success', 'Payment has been successfully processed.');

        return back();

        } catch (Exception $e) {
            //throw $th;
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
