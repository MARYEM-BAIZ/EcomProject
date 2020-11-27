@extends('page_admin')
@section('contenucontenu')

<p class="titre">modifier categorie</p>
    <section  class="" >
    <form action="{{ url('/ca', ['id' => $id]) }}"  class="text-center border border-light p-5" method="post">
    @csrf
   <input type="text" id="defaultLoginFormTache" class="form-control mb-4" name="categoriemodifier" value="@if(isset($modi)) {{$modi->nom_categorie}} @endif" >
  
   
   <button class="btn btn-info btn-block my-4"  type="submit">modifier</button>
    </form>
    </section>


    @endsection