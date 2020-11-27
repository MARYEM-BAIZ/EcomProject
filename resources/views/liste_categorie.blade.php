@extends('page_admin')
@section('contenucontenu')

<p class="titre">categories</p>
    
    <section  class="" >
     <table>
     <thead>
  
  <th>#</th>
   <th>categorie</th>
   <th>mettre à jour</th>
   <th>supprimer</th>
 
   </thead>
   <tbody>
   
   @if(isset($categories))
  @foreach($categories as $categorie)
    <tr>
    <th>{{ $categorie->id }}</th>
    <td>{{ $categorie->nom_categorie }}</td>
    <td><a href="{{ route('c',['id' => $categorie->id]) }}" class="btn btn-info">modifier</a></td>
    <td><a href="{{ route('categorie.supprimer',['id' => $categorie->id]) }}" class="btn btn-danger">supprimer</a></td>
    </tr>
  @endforeach
  @endif
   
   </tbody>
     </table>

    </section>


    @endsection