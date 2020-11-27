@extends('template')
@section('contenu')


      <section class="sectioncheuveux">
  

            <div class="divsectioncorps pull-right mt-5 mr-5">
            <h4 class="titrecategorie">SOINS DU CHEUVEUX</h4>
              <p>Les soins de cheuveux BEMA offrent un rituel complet, hydratant et tonifiant aux textures sanitées et aux formules naturelles et efficaces</p>
              <p>Ces parfums subtils et agréables et procur un réel plaisir</p>
            </div>
      
         

      </section>

       <section style=" background-color: rgb(245,246,247)">


  <div class="me">
    <a href="{{ route('page.templatecheuveuxtous', ['id' => 3])}}">TOUS</a>
    <a href="{{ route('page.templatecheuveuxhydratation')}}">HYDRATER VOTRE CHEUVEUX</a>
    <a href="{{ route('page.templatecheuveuxnettoyage')}}">NETTOYER VOTRE CHEUVEUX</a>
  
    <a href="{{ route('page.templatecheuveuxtraiter')}}">TRAITER VOTRE CHEUVEUX</a>
  </div>

       </section>

       <section style=" background-color: rgb(245,246,247)">
        @yield('produits')
       </section>

@endsection