@extends('page_admin')
@section('contenucontenu')


<p class="titre">soucategories</p>
    
    <section  class="" >
     <table>
     <thead>
  
  <th>#</th>
   <th>souscategorie</th>
   <th>categorie</th>
   <th>mettre à jour</th>
   <th>supprimer</th>
 
   </thead>
   <tbody>
   
   @if(isset($souscategories))
  @foreach($souscategories as $souscategorie)
    <tr>
    <th>{{ $souscategorie->id }}</th>
    <td>{{ $souscategorie->nom_souscategorie }}</td> 
 
    <td>{{ $souscategorie->categorie->nom_categorie }}</td>
    <td><a href="{{ route('s',['id' => $souscategorie->id]) }}" class="btn btn-info">modifier</a></td>
    <td><a href="{{ route('souscategorie.supprimer',['id' => $souscategorie->id]) }}" class="btn btn-danger">supprimer</a></td>
    </tr>
  @endforeach
  @endif
   
   </tbody>
     </table>

    </section>


@endsection