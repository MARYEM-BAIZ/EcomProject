@extends('page_admin')
@section('contenucontenu')

    <p class="titre">ajout sous_categorie</p>
    <section  class="" >
    <form action="{{ route('souscategorie.ajouter') }}"  class="text-center border border-light p-5" method="post">
    @csrf
   <input type="text" id="defaultLoginFormTache" class="form-control mb-4" name="souscategorie" placeholder="écrire la souscategorie">
   <!-- <input type="text" id="defaultLoginFormTache" class="form-control mb-4" name="categorie_id" placeholder="écrire un nombre"> -->
   <select class="form-control mb-4" name="select" id="">
   @if(isset($categories))
   @foreach($categories as $categorie)
    <option value="{{ $categorie->id }}">{{ $categorie->nom_categorie }}</option>
   @endforeach
   @endif
   </select>
   
   <button class="btn btn-info btn-block my-4"  type="submit">envoyer</button>
    </form>
    </section>


    @endsection