@extends('template_visage')
@section('produits')



@if(isset($visagetous))
   <div class="divimggamecorps">
   @foreach($visagetous as $visage )
    
 <a style=" background-image: url('{{asset($visage->image_produit)}}'); background-position: center; background-repeat: no-repeat; background-size: cover ;display:block ;margin-left:auto; margin-right:auto ; width:300px ; height:300px; color: rgb(0,26,19) ; text-decoration: none " href="{{route('page.infoproduit',['id' => $visage->id ])}}">
 
    <h4 style="margin-top:150px ; margin-left:30px">{{$visage->description}}</h4>
  
 </a>
   @endforeach
   </div>
   {{ $visagetous->links() }}
   @endif


@endsection