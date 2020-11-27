@extends('page_admin')
@section('contenucontenu')

  <p class="titre">modifier souscategorie</p>
    <section  class="" >
    <form action="{{ url('/so', ['id' => $id]) }}"  class="text-center border border-light p-5" method="post">
    @csrf
   <input type="text" id="defaultLoginFormTache" class="form-control mb-4" name="souscategoriemodifier" value="@if(isset($modi)) {{$modi->nom_souscategorie}} @endif" >
   
   <select class="form-control mb-4" name="select" id="">
   @if(isset($categories))
   @foreach($categories as $categorie)
    <option value="{{ $categorie->id }}">{{ $categorie->nom_categorie }}</option>
   @endforeach
   @endif
   </select>
   
   <button class="btn btn-info btn-block my-4"  type="submit">modifier</button>
    </form>
    </section>

    @endsection