@extends('template')

@section('lienstripe')
<script src="https://js.stripe.com/v3/"></script>
@endsection


@section('contenu')


 <div style="margin-top:109px" class="container">
 <div class="row">

  <div style="border:1px solid gray ; border-radius:7px" class="col-6">
  <p class="h1 mb-5">Checkout</p>
  <p >Détails</p> 
  
  

  <form action="" method="post">
  <label for="Email">L'addresse email</label>
  <input name="email" type="email" id="Email" class="form-control mb-4" >

  <label for="Nom">Le nom</label>
  <input name="nom" type="text" id="Nom" class="form-control mb-4" >

  <label for="Addresse">Addresse</label>
  <input name="addresse" type="text" id="Addresse" class="form-control mb-4" >

<div class="container">
<div class="row">
<div class="col-6">
  <label for="Ville">La ville</label>
  <input  name="ville" type="text" id="Ville" class="form-control mb-4 " >
  </div>

 <div class="col-6">
 <label for="Province">Province</label>
  <input name="province" type="text" id="Province" class="form-control mb-4" >
 </div>
</div>
</div>


<div class="container">
<div class="row">
<div class="col-6">
  <label for="Codepostale">Code postal</label>
  <input  name="codepostale" type="text" id="Codepostale" class="form-control mb-4 " >
  </div>

 <div class="col-6">
 <label for="Telephone">Téléphone</label>
  <input name="telephone" type="text" id="Telephone" class="form-control mb-4" >
 </div>
</div>
</div>

  


  </form>
    <hr>
  <p style="margin-top:40px;margin-bottom:40px"><strong>Détails du paiement</strong></p>

    
    <!-- debut du formulaire du carte boncaire -->




       <form id="payment-form" action="{{route('page.ckeckoutfin_store')}}" method="post">
           @csrf
       
       <label for="Nomcarte">Nom sur la carte</label>
  <input name="nomcarte" type="text" id="Nomcarte" class="form-control mb-4" >






    <div class="form-group">
    
    
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
    
    </div>
  <!-- <label for="Adrs">L'addresse </label>
  <input name="addressecarte" type="text" id="Adrs" class="form-control mb-4" >

  <label for="Numbrecarte">Nombre du credit card</label>
  <input name="nombrecarte" type="text" id="Numbrecarte" class="form-control mb-4" >
       

  <div class="container">
<div class="row">
<div class="col-6">
  <label for="Dateexriration">Date d'expiration</label>
  <input  name="dateexpiration" type="month" id="Dateexriration" class="form-control mb-4 "  >
  </div>

 <div class="col-6">
 <label for="CVC">Code CVC</label>
  <input name="codecvc" type="text" id="CVC" class="form-control mb-4" >
 </div>
</div>
</div> -->

  <input style=" background-color: rgb(0,26,19) ; display:block; text-align:center; color:white ; padding:15px ; border-radius:7px ;margin-bottom:20px ; border:none; width:100%" type="submit" value="terminer la commande">
       </form>





    <!-- fin du formulaire du carte boncaire -->



  </div>

  



  <div class="col-2"></div>


    


    <div class="col-4">
    
    @if($total)
    
    @foreach ($content as $item)
       <div> 
    <img  style=" height:150px ; display:block ; margin-left:auto; margin-right:auto" src="{{ asset($item->attributes->image)}}"  alt="immage">

 
                                <h5> <strong>nom produit :</strong>{{ $item->name }}</h5>
                                <p class="mb-0"><span><strong><strong>prix :</strong>{{$item->price}} DH</strong></span></p>
                                <p class="mb-3 text-muted "><strong>quantité :</strong>{{ $item->quantity }}</p>
                              </div> 

    @endforeach



          <!-- Card -->
          <div class="card mb-4">
                    <div class="card-body">
                
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
      
                    </div>
                  </div>
                  <!-- Card -->

    @endif




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



    <!-- end div row -->
 </div>
      <!-- end div container -->
 </div>

@endsection



@section('extra-js')
     <script>
      
    (function() {
          
          // Create a Stripe client.
var stripe = Stripe('pk_test_51HrjwPIH8JNCB932LezyqLn447Vft5C2DlC1HpejAZpApWqqAGv0cY6ZJeGONsILvREGdleazPfAnEf97xdizYgu00i9TI14Vr');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Syne Mono", monospace',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {
    style: style,
    hidePostalCode:true
    });

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.on('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  var options ={

      name: document.getElementById('Nomcarte').value,
      address_line1 :      document.getElementById('Addresse').value,
      address_city:      document.getElementById('Ville').value,
      address_state:      document.getElementById('Province').value,
      address_zip:      document.getElementById('Codepostale').value
  }

  stripe.createToken(card,options).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}

        })();

     </script>
@endsection