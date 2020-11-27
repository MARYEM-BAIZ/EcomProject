@extends('page_admin')
@section('contenucontenu')


<p class="titre">modifier produit</p>
    <section  class="" >
    <form action="{{ url('/pr', ['id' => $id]) }}"  class="text-center border border-light p-5" enctype="multipart/form-data" method="post">
    @csrf
   <input type="text" id="defaultLoginFormTache" class="form-control mb-4" name="nomproduit1" value="@if(isset($modi)) {{$modi->nom_produit}} @endif">
   <input type="text" id="defaultLoginFormDescription" class="form-control mb-4" name="description1" value="@if(isset($modi)) {{$modi->description}} @endif">
   <input type="file" class="form-control mb-4" name="image1" value="@if(isset($modi)) {{$modi->image_produit}} @endif">
   <input type="text" id="defaultLoginFormPrix" class="form-control mb-4" name="prix1" value="@if(isset($modi)) {{$modi->prix}} @endif">
   <input type="text" id="defaultLoginFormQuantite" class="form-control mb-4" name="quantite1" value="@if(isset($modi)) {{$modi->quantite}} @endif">

   <select class="form-control mb-4" name="select1" id="">
   @if(isset($souscategories))
   @foreach($souscategories as $souscategorie)
    <option value="{{ $souscategorie->id }}">{{ $souscategorie->nom_souscategorie }}</option>
   @endforeach
   @endif
   </select>
   
   <button class="btn btn-info btn-block my-4"  type="submit">modifier</button>
    </form>
    </section>


@endsection