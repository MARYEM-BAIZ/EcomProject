@extends('template')
@section('contenu')



     <section class="firstsection" >
    
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active slider">
        
      <!-- <img style=" width: 100%; height: 500px" src="{{asset('photos/hello-i-m-nik-z1d-LP8sjuI-unsplash1604417482.jpg')}}" class="d-block w-100" alt="..."> -->
    </div>
    <div class="carousel-item">
      <img style=" width: 100%; height: 500px" src="{{asset('photos/highlight-id-roHpoNuME1w-unsplash1604406032.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img style=" width: 100%; height: 500px" src="{{asset('photos/mika-baumeister-Y_LgXwQEx2c-unsplash1604534550.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

     </section>



     <section>

       <h3 class="titre" >NOS GAMMES</h3>

      <div class="divimggames">



     <!-- <img style="display:block ;margin-left:auto; margin-right:auto ; width:250px ; height:250px" src="{{asset('photos/mika-baumeister-Y_LgXwQEx2c-unsplash1604534550.jpg')}}" alt="image">
     <img style="display:block ;margin-left:auto; margin-right:auto ; width:250px ; height:250px" src="{{asset('photos/mika-baumeister-Y_LgXwQEx2c-unsplash1604534550.jpg')}}" alt="image">
     <img style="display:block ;margin-left:auto; margin-right:auto ; width:250px ; height:250px" src="{{asset('photos/mika-baumeister-Y_LgXwQEx2c-unsplash1604534550.jpg')}}" alt="image">
     <img style="display:block ;margin-left:auto; margin-right:auto ; width:250px ; height:250px" src="{{asset('photos/mika-baumeister-Y_LgXwQEx2c-unsplash1604534550.jpg')}}" alt="image">
     <img style="display:block ;margin-left:auto; margin-right:auto ; width:250px ; height:250px" src="{{asset('photos/mika-baumeister-Y_LgXwQEx2c-unsplash1604534550.jpg')}}" alt="image">
     <img style="display:block ;margin-left:auto; margin-right:auto ; width:250px ; height:250px" src="{{asset('photos/mika-baumeister-Y_LgXwQEx2c-unsplash1604534550.jpg')}}" alt="image"> -->

     
    
    
    <a style=" background-image: url('{{asset('photos/mika-baumeister-Y_LgXwQEx2c-unsplash1604534550.jpg')}}'); background-position: center; background-repeat: no-repeat; background-size: cover ;display:block ;margin-left:auto; margin-right:auto ; width:300px ; height:300px ; color: rgb(0,26,19) ; text-decoration: none" href="{{ route('page.templatecorpstous',['id' => 2])}}">

    <h4 style="margin-top:150px ; margin-left:100px">CORPS</h4>
  </a>
   
  
  <a style=" background-image: url('{{asset('photos/mika-baumeister-Y_LgXwQEx2c-unsplash1604534550.jpg')}}'); background-position: center; background-repeat: no-repeat; background-size: cover ;display:block ;margin-left:auto; margin-right:auto ; width:300px ; height:300px ; color: rgb(0,26,19) ; text-decoration: none" href="{{ route('page.templatecheuveuxtous',['id' => 3])}}">

<h4 style="margin-top:150px ; margin-left:100px">CAPPILAIRES</h4>
</a>


<a style=" background-image: url('{{asset('photos/mika-baumeister-Y_LgXwQEx2c-unsplash1604534550.jpg')}}'); background-position: center; background-repeat: no-repeat; background-size: cover ;display:block ;margin-left:auto; margin-right:auto ; width:300px ; height:300px ; color: rgb(0,26,19) ; text-decoration: none" href="{{ route('page.templatevisagetous',['id' => 4])}}">

<h4 style="margin-top:150px ; margin-left:100px">VISAGE</h4>
</a>


<a style=" background-image: url('{{asset('photos/mika-baumeister-Y_LgXwQEx2c-unsplash1604534550.jpg')}}'); background-position: center; background-repeat: no-repeat; background-size: cover ;display:block ;margin-left:auto; margin-right:auto ; width:300px ; height:300px ; color: rgb(0,26,19) ; text-decoration: none" href="{{ route('page.templatesolairetous',['id' => 5])}}">

<h4 style="margin-top:150px ; margin-left:100px">SOLAIRES</h4>
</a>
   
  


      </div>

     </section>


@endsection