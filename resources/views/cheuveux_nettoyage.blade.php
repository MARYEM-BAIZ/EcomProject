@extends('template_cheuveux')
@section('produits')



@if(isset($cheuveuxtous))
   <div class="divimggamecorps">
   @foreach($cheuveuxtous as $cheuveux )
    
  <a style=" background-image: url('{{asset($cheuveux->image_produit)}}'); background-position: center; background-repeat: no-repeat; background-size: cover ;display:block ;margin-left:auto; margin-right:auto ; width:300px ; height:300px ; color: rgb(0,26,19) ; text-decoration: none" href="{{route('page.infoproduit',['id' => $cheuveux->id ])}}">

    <h4 style="margin-top:150px ; margin-left:30px">{{$cheuveux->description}}</h4>
  
  </a>
   @endforeach
   </div>
   {{ $cheuveuxtous->links() }}
   @endif


@endsection