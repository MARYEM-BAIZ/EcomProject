@extends('template_corps')
@section('produits')



  
   <!-- @if(isset($corpstous))
   <div class="divimggamecorps">
   @foreach($corpstous as $corps )
   @foreach($corps->produits as $produit )
    <a style=" color: rgb(0,26,19) ; text-decoration: none" href="{{route('page.infoproduit',['id' => $produit->id ])}}"> <img  style="display:block ;margin-left:auto; margin-right:auto ; width:300px ; height:300px" src="{{asset($produit->image_produit)}}" alt="image"></a>
    @endforeach
   @endforeach
   </div>
   @endif -->

   <div class="divimggamecorps">
    <a style=" color: rgb(0,26,19) ; text-decoration: none" href=""> <img  style="display:block ;margin-left:auto; margin-right:auto ; width:300px ; height:300px" src="{{url('/photos/corps1.jpg')}}" alt="image"></a>
    <a style=" color: rgb(0,26,19) ; text-decoration: none" href=""> <img  style="display:block ;margin-left:auto; margin-right:auto ; width:300px ; height:300px" src="{{url('/photos/corps7.jpg')}}" alt="image"></a>
    <a style=" color: rgb(0,26,19) ; text-decoration: none" href=""> <img  style="display:block ;margin-left:auto; margin-right:auto ; width:300px ; height:300px" src="{{url('/photos/corps3.jpg')}}" alt="image"></a>
    <a style=" color: rgb(0,26,19) ; text-decoration: none" href=""> <img  style="display:block ;margin-left:auto; margin-right:auto ; width:300px ; height:300px" src="{{url('/photos/corps8.jpg')}}" alt="image"></a>
    <a style=" color: rgb(0,26,19) ; text-decoration: none" href=""> <img  style="display:block ;margin-left:auto; margin-right:auto ; width:300px ; height:300px" src="{{url('/photos/corps5.jpg')}}" alt="image"></a>
    <a style=" color: rgb(0,26,19) ; text-decoration: none" href=""> <img  style="display:block ;margin-left:auto; margin-right:auto ; width:300px ; height:300px" src="{{url('/photos/corps6.jpg')}}" alt="image"></a>
   </div>




@endsection