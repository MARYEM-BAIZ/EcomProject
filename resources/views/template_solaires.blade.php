@extends('template')
@section('contenu')


      <section class="sectionsolaires">
  

            <div class="divsectioncorps pull-right mt-5 mr-5">
            <h4 class="titrecategorie">SOLAIRES</h4>
              <p>Les solaires BEMA offrent un rituel complet, hydratant et tonifiant aux textures sanitées et aux formules naturelles et efficaces</p>
              <p>Ces parfums subtils et agréables et procur un réel plaisir</p>
            </div>
      
         

      </section>

       <section style=" background-color: rgb(245,246,247)">


  <div class="me">
    <a href="{{ route('page.templatesolairetous', ['id' => 5])}}">TOUS</a>
    <a href="{{ route('page.templatesolairecreme')}}">créme solaire</a>
    <a href="{{ route('page.templatesolairelait')}}">lait solaire</a>
  </div>

       </section>

       <section style=" background-color: rgb(245,246,247)">
        @yield('produits')
       </section>

@endsection