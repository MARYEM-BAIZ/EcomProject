@extends('page_admin')
@section('contenucontenu')


    
<p class="titre">produits</p>
    
    <section  class="" >
     <table>
     <thead>
  
    <th>#</th>
   <th>nom_produit</th>
   <th>description</th>
   <th>prix</th>
   <th>quantité</th>
   <th>sous_categorie</th>
   <th>image_produit</th>
   <th>mettre à jour</th>
   <th>supprimer</th>
 
   </thead>
   <tbody>
   
   @if(isset($produits))
  @foreach($produits as $produit)
    <tr>
    <th>{{ $produit->id }}</th>
    <td>{{ $produit->nom_produit }}</td> 
    <td>{{ $produit->description }}</td> 
    <td>{{ $produit->prix }}</td> 
    <td>{{ $produit->quantite }}</td> 
    <td>{{ $produit->souscategorie->nom_souscategorie }}</td>
    <td> <img  style="width:100px ; height:100px ;display:block ; margin-left:auto; margin-right:auto" src="{{asset($produit->image_produit)}}" alt="image"></td>
    
    <td><a href="{{ route('p',['id' => $produit->id]) }}" class="btn btn-info">modifier</a></td>
    <td><a href="{{ route('produit.supprimer',['id' => $produit->id]) }}" class="btn btn-danger">supprimer</a></td>
    </tr>
  @endforeach
  @endif
   
   </tbody>
     </table>

    </section>


@endsection