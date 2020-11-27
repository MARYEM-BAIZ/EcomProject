@extends('template_solaires')
@section('produits')


@if(isset($solairetous))
   <div class="divimggamecorps">
   @foreach($solairetous as $solaire )
    
  <a  style=" background-image: url('{{asset($solaire->image_produit)}}'); background-position: center; background-repeat: no-repeat; background-size: cover ;display:block ;margin-left:auto; margin-right:auto ; width:300px ; height:300px ; color: rgb(0,26,19) ; text-decoration: none  " href="{{route('page.infoproduit',['id' => $solaire->id ])}}">
  
    <h4 style="margin-top:150px ; margin-left:30px">{{$solaire->description}}</h4>
   
  </a>
   
   @endforeach
   </div>
   {{ $solairetous->links() }}
   @endif


@endsection