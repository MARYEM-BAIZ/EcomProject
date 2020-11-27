<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/accueil.css')}}">
    <title>template</title>
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
</head>
<body>
<header>
<header>

<section class="logo">

<div>
<a style="text-decoration: none" href=""><i style="color:rgb(0,26,19) ; margin-top:30px " class="fa fa-facebook " aria-hidden="true"></i></a>
<a style="text-decoration: none" href=""><i style="color:rgb(0,26,19) ; margin-top:30px" class="fa fa-instagram ml-3" aria-hidden="true"></i></a>
</div>

<div>
    <a style="color:rgb(0,26,19); text-align:center ; font-size:45px ;text-decoration: none ;font-family: 'Acme', sans-serif;font-family: 'Arimo', sans-serif  " href="{{ route('page.accueil')}}">BEMA</a>
</div>

<div>
<a style="text-decoration: none" href=""> <i style="color:rgb(0,26,19); margin-top:30px" class="fa fa-search mr-3" aria-hidden="true"></i></a>
<a style="text-decoration: none" href=""><i style="color:rgb(0,26,19); margin-top:30px" class="fa fa-envelope " aria-hidden="true"></i></a>
</div>
</section>

<section  class="navbar">
    
     <div style="text-align:center">
     <p style=" color:white"> PAGE ADMIN</p>
     </div>
    
    </section>

</header>
</header>

    <main>

        <section class="sectionpageadmin">
        <div class="container">
        <div class="row">
        <div class="col-3">
        @include('inc.liste')
        </div>
        <div class="col-9">
        @yield('contenucontenu')
        </div>
        </div>
        </div>
        </section>

    </main>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/pub.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>   
</body>


<footer>

   <div class="div1footer"> <a  href="">BEMA</a></div>
   
   <div class="div2footer">
       <h6>Retrouvez tous les soins dans nos boutiques ou commandez par téléphone :</h6>
       <address style="font-family: 'Anton', sans-serif" >05 24 33 55 44</address>
   </div>

   <div class="div3footer">
       <h6 >©2017 botanikamarrakech.com – Conception et réalisation de site web par <a style="color:yellow" href="">Flow44.com</a></h6>
   </div>

</footer>
</html>