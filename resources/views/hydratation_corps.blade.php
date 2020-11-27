@extends('template_corps')
@section('produits')


@if(isset($corpstous))
   <div class="divimggamecorps">
   @foreach($corpstous as $corps )
    
  <a style=" background-image: url('{{asset($corps->image_produit)}}'); background-position: center; background-repeat: no-repeat; background-size: cover ;display:block ;margin-left:auto; margin-right:auto ; width:300px ; height:300px ; color: rgb(0,26,19) ; text-decoration: none" href="{{route('page.infoproduit',['id' => $corps->id ])}}">


    <h4 style="margin-top:150px ; margin-left:30px">{{$corps->description}}</h4>

  </a>
   @endforeach

 
   </div>
   {{ $corpstous->links() }}
   @endif


@endsection