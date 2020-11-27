@extends('page_admin')
@section('contenucontenu')


<h3 class="titre">ajout catrgorie</h3>
    <section  class="" >
    <form action="{{ route('categorie.ajouter') }}"  class="text-center border border-light p-5" method="post">
    @csrf
   <input type="text" id="defaultLoginFormTache" class="form-control mb-4" name="categorie" placeholder="écrire votre categorie">
  
   
   <button class="btn btn-info btn-block my-4"  type="submit">envoyer</button>
    </form>
    </section>



@endsection