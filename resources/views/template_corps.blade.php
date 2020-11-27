@extends('template')
@section('contenu')


      <section class="sectioncorps">
  

            <div class="divsectioncorps pull-right mt-5 mr-5">
            <h4 class="titrecategorie">SOINS DU CORPS</h4>
              <p>Les soins de corps BEMA offrent un rituel complet, hydratant et tonifiant aux textures sanitées et aux formules naturelles et efficaces</p>
              <p>Ces parfums subtils et agréables et procur un réel plaisir</p>
            </div>
      
         

      </section>

       <section style=" background-color: rgb(245,246,247)">


  <div class="me">
    <a href="{{ route('page.templatecorpstous', ['id' => 2])}}">TOUS</a>
    <a href="{{ route('page.templatecorpshydratation')}}">HYDRATER VOTRE CORPS</a>
    <a href="{{ route('page.templatecorpsnettoyage')}}">NETTOYER VOTRE CORPS</a>
    <a href="{{ route('page.templatecorpstonifier')}}">TONIFIER VOTRE CORPS</a>
    <a href="{{ route('page.templatecorpstraiter')}}">TRAITER VOTRE CORPS</a>
  </div>

       </section>

       <section style=" background-color: rgb(245,246,247)">
        @yield('produits')
       </section>

@endsection