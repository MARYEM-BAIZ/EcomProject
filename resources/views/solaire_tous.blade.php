@extends('template_solaires')
@section('produits')


@if(isset($solairetous))
   <div class="divimggamecorps">
   @foreach($solairetous as $solaire )
   @foreach($solaire->produits as $produit ) 
   <a style=" color: rgb(0,26,19) ; text-decoration: none" href="{{route('page.infoproduit',['id' => $produit->id ])}}">
   <img  style="display:block ;margin-left:auto; margin-right:auto ; width:300px ; height:300px" src="{{asset($produit->image_produit)}}" alt="image">
</a>
  
   @endforeach
   @endforeach
   </div>
   @endif



@endsection