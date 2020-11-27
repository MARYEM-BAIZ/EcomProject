@extends('template')
@section('contenu')




     <section style=" background-image: url('{{asset('photos/mika-baumeister-Y_LgXwQEx2c-unsplash1604534550.jpg')}}'); background-position: center; background-repeat: no-repeat; background-size: cover ;display:block ;margin-left:auto; margin-right:auto; margin-top:109px ">
     
    <h2 class="titre1">SOINS DU CORPS</h2>

    <section class="sectionpro">
  
     <div class="d-flex">
     <article class="article1sectionpro">
         <h3 style="color:rgb(0,26,19) ; text-align:center ; margin-bottom:30px ; font-family: 'Lobster', cursive" >{{ $produits->nom_produit}}</h3>
       <p>{{ $produits->description}}</p>
       <a class="btncommander" href="{{route('cart.ajoutproduitaupanier',['id' =>  $produits->id])}}">AJOUTER AU PANIER</a>
   </article>
   
   <article class="article2sectionpro mt-4">
       <img style="width:500px ; height:500px " src="{{asset( $produits->image_produit)}}" alt="immage">
   </article>
     </div>


        <div></div>
    </section>
     
     </section>





@endsection