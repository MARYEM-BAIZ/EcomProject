@extends('template')
@section('contenu')




     <!--Main layout-->
     <main>
          <div style="margin-top:200px" class="container">
      
            <!--Section: Block Content-->
            <section class="mt-5 mb-4">
      
              <!--Grid row-->
              <div class="row">
      
                <!--Grid column-->
                <div class="col-lg-8">
      
                  <!-- Card -->
                  @if($total)
                  <div class="card wish-list mb-4">
                    <div class="card-body">
      
                      <h5 class="mb-4">Panier ({{Cart::getTotalQuantity()}}) articles</h5>
                     
                      <div class="row mb-4">
                      @foreach ($content as $item)
                        <div style="margin-bottom:50px" class="col-md-5 col-lg-3 col-xl-3">
                          <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                            <img class="img-fluid w-100" style=" height:150px ; display:block ; margin-left:auto; margin-right:auto" src="{{ asset($item->attributes->image)}}"  alt="Sample">
                            <a href="#!">
                                <div class="mask rgba-black-slight waves-effect waves-light"></div>
                            </a>
                          </div>
                        </div>
                       
                       
                        <div class="col-md-7 col-lg-9 col-xl-9">
                          <div>
                            <div class="d-flex justify-content-between">




                            <form action="{{ route('panier.modifier', $item->id) }}" method="POST">
                               @csrf
                                 
                              <div>
                                <h5>{{ $item->name }}</h5>
                                <p class="mb-3 text-muted text-uppercase small">{{ $item->attributes->description }}</p>
                                <p class="mb-3 text-muted  small">{{ $item->attributes->quantite }} g</p>
                              </div>
                              <div>
                                <div class="def-number-input number-input safari_only mb-2 w-100">
                                  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus btn-success">-</button>
                                  <input class="quantity" min="0" name="quantity" value="{{ $item->quantity }}" type="number">
                                  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus btn-success">+</button>
                                </div>
                              </div>




                              </form>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">




                              <div>
                                <form action="{{ route('panier.supprimer', $item->id) }}" method="POST">
                                          @csrf
                                     
           
                                         <button type="submit">supprimer</button>
                                         </form> 
                              </div>




                              <p class="mb-0"><span><strong>{{$item->price}} DH</strong></span></p>
                            </div>
                          </div>
                        </div>
                       
                        @endforeach
                 
                      </div>

      
                    </div>
                  </div>
                  @endif
                  <!-- Card -->
      
                  <!-- Card -->
                  <div class="card mb-4">
                    <div class="card-body">
      
                      <div class="mb-3">
                        <div class="pt-4">
                
                          <h5 class="mb-4">Date de livraison</h5>
                          <div class="well">
                          <div id="datetimepicker1" class="input-append date">
                            <input data-format="dd/MM/yyyy hh:mm:ss" type="date" style="color:#4AAE34;"></input>
                            <input type="time" id="appt" style="color:#4AAE34;"name="appt"min="09:00" max="18:00" required></input>
                           
                          </div>
                        </div>
                        </div>
                      </div>
                
                    </div>
                  </div>
                  <!-- Card -->
      
                  <!-- Card -->
                  <div class="card mb-4">
                    <div class="card-body">
      
                      <h5 class="mb-4">On accepte</h5>
      
                      <img class="mr-2" width="45px" src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg" alt="Visa">
                      <img class="mr-2" width="45px" src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg" alt="American Express">
                      <img class="mr-2" width="45px" src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg" alt="Mastercard">
                    </div>
                  </div>
                  <!-- Card -->
      
                </div>
                <!--Grid column-->
                
      
                <!--Grid column-->
                <div class="col-lg-4">
      
                  <!-- Card -->
                  <div class="card mb-4">
                    <div class="card-body">
                    @if($total)
                      <h5 class="mb-3">Total</h5>
      
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                          Sous-total
                          <span>{{$total}} DH</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                          Livraison
                          <span>Gratuite</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                          <div>
                            <strong>Total TTC</strong>
                          </div>
                          <span><strong>{{$total}} DH</strong></span>
                        </li>
                      </ul>
      
                      <a style=" background-color: rgb(0,26,19) ; display:block; text-align:center; color:white ; padding:15px ; border-radius:7px ;margin-bottom:20px" href="{{route('page.ckeckoutfin')}}">finaliser votre commande</a>
                      <a style=" background-color: rgb(5, 90, 67) ; display:block; text-align:center; color:white ; padding:15px ; border-radius:7px" href="{{route('page.accueil')}}">continuer votre achat</a>
             @endif
                    </div>
                  </div>
                  <!-- Card -->
      

                  <!-- Card -->
                  <div class="card mb-4">
                    <div class="card-body">
      
                      <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="text-decoration: none;color: #4AAE34;font-weight: bold;">
                        Ajouter un code promo
                        <span><i class="fa fa-chevron-down pt-1"></i></span>
                      </a>
      
                      <div class="collapse" id="collapseExample">
                        <div class="mt-3">
                          <div class="md-form md-outline mb-0">
                            <input type="text" id="discount-code" class="form-control font-weight-light" placeholder="Enter discount code">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Card -->
      
                </div>
                <!--Grid column-->
      
              </div>
              <!--Grid row-->
      
            </section>
            <!--Section: Block Content-->
      
          </div>
        </main>

@endsection