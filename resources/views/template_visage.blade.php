@extends('template')
@section('contenu')


      <section class="sectionvisage">
  

            <div class="divsectioncorps pull-right mt-5 mr-5">
            <h4 class="titrecategorie">SOINS DU VISAGE</h4>
              <p>Les soins de visage BEMA offrent un rituel complet, hydratant et tonifiant aux textures sanitées et aux formules naturelles et efficaces</p>
              <p>Ces parfums subtils et agréables et procur un réel plaisir</p>
            </div>
      
         

      </section>

       <section style=" background-color: rgb(245,246,247)">


  <div class="me">
    <a href="{{ route('page.templatevisagetous', ['id' => 4])}}">TOUS</a>
    <a href="{{ route('page.templatevisagehydratation')}}">HYDRATER VOTRE VISAGE</a>
    <a href="{{ route('page.templatevisagenettoyage')}}">NETTOYER VOTRE VISAGE</a>
    <a href="{{ route('page.templatevisagetonifier')}}">TONIFIER VOTRE VISAGE</a>
    <a href="{{ route('page.templatevisagetraiter')}}">TRAITER VOTRE VISAGE</a>
  </div>

       </section>

       <section style=" background-color: rgb(245,246,247)">
        @yield('produits')
       </section>

@endsection