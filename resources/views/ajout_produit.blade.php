@extends('page_admin')
@section('contenucontenu')


<p class="titre">ajout produit</p>
    <section  class="" >
    <form action="{{ route('produit.ajouter') }}"  class="text-center border border-light p-5" enctype="multipart/form-data" method="post">
    @csrf
   <input type="text" id="defaultLoginFormTache" class="form-control mb-4" name="nomproduit" placeholder="écrire le nom du produit">
   <input type="text" id="defaultLoginFormDescription" class="form-control mb-4" name="description" placeholder="écrire la description du produit">
   <input type="file" class="form-control mb-4" name="image">
   <input type="text" id="defaultLoginFormPrix" class="form-control mb-4" name="prix" placeholder="prix ?">
   <input type="text" id="defaultLoginFormQuantite" class="form-control mb-4" name="quantite" placeholder="quantité ?">

   <select class="form-control mb-4" name="select" id="">
   @if(isset($souscategories))
   @foreach($souscategories as $souscategorie)
    <option value="{{ $souscategorie->id }}">{{ $souscategorie->nom_souscategorie }}</option>
   @endforeach
   @endif
   </select>
   
   <button class="btn btn-info btn-block my-4"  type="submit">envoyer</button>
    </form>
    </section>


@endsection