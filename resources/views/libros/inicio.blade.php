@extends('index')
@section('content')
<section class="">
<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Nuestra Colleción</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <!-- <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p> -->
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4" style="margin-top:20px">
          <div class="card mb-4 shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Guía de Valores y Urbanidad</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
            <a href="{{url('/Guia-de-Urbanidad-y-Valores')}}#Guia-de-Urbanidad-y-Valores"><img src="{{asset('assest/img/urbanidad_y_valores.jpg')}}" aria-label="Placeholder: Thumbnail"></a>
            <div class="card-body">
              <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
              <h2><small class="text-muted"><strong>Manual de Urbanidad y Valores</strong></small></h2>
              <div class="d-flex justify-content-between align-items-center">
              	<h3><small class="text-muted">Precio USD: 6.99</small></h3>
              	<div class="row">
	              		<div class="col-md-6">
							<div id="paypal-button-container"></div>
							<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
							<!-- <script src="https://www.paypal.com/sdk/js?client-id=AZTnFaFjSU_zqETCtDnTJ3KE_-R0mqyak-3yRBk75b3MwwQ9U67vvmn6dgdhSZ6A2U_lL0tPfPbto3YD&currency=USD" data-sdk-integration-source="button-factory"></script> --> 
							<script>
							  paypal.Buttons({
							      style: {
							          shape: 'rect',
							          color: 'gold',
							          layout: 'vertical',
							          label: 'paypal',
							          
							      },

							      createOrder: function(data, actions) {
							          return actions.order.create({
							              purchase_units: [{
							                  amount: {
							                      value: '6.99'
							                  }
							              }]
							          });
							      },

							      onCancel: function (data) {
							   	 // Show a cancel page, or return to cart
								 window.location.href = "https://grapsa305.com/Guia-de-Urbanidad-y-Valores#Guia-de-Urbanidad-y-Valores";
							      },

							      onApprove: function(data, actions) {
							          return actions.order.capture().then(function(details) {
							              //alert('Transaction completed by ' + details.payer.name.given_name + '!');
								      window.location.href = "https://grapsa305.com/Guia-de-Urbanidad-y-Valores-Descarga";	
							          });
							      }
							  }).render('#paypal-button-container');
							</script>

						</div>
						<div class="col-md-6">
				            <div>
			                  <a href="{{url('/Guia-de-Urbanidad-y-Valores')}}#Guia-de-Urbanidad-y-Valores" type="button" class="btn btn-success">Ver más</a></p>
			                </div>
						</div>
				</div>
              </div>
            </div>
          </div>
        </div>

        

        <div class="col-md-4" style="margin-top:20px">
          <div class="card mb-4 shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Motivación para el Éxito</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill=s"#eceeef" dy=".3em">Thumbnail</text></svg> -->
            <img src="{{asset('assest/img/motivacion_para_el_exito.jpg')}}" aria-label="Placeholder: Thumbnail">
            <div class="card-body">
              <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
              <h2><small class="text-muted"><strong>Motivación para el Éxito</strong></small></h2>
              <div class="d-flex justify-content-between align-items-center">
              	<h3><small class="text-muted">Precio USD : 6.99</small></h3>
                <div class="btn-group">
                  <a href type="button" class="btn btn-success">Ver más</a>
                  <button type="button" class="btn btn-primary" style="margin-left:4px">Comprar</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4" style="margin-top:20px">
          <div class="card mb-4 shadow-sm">
            <img src="{{asset('assest/img/su_tiempo_es_oro.jpg')}}" aria-label="Placeholder: Thumbnail">

            <div class="card-body">
              <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
              <h2><small class="text-muted"><strong>Su Tiempo es Oro</strong></small></h2>
              <div class="d-flex justify-content-between align-items-center">
              	<h3><small class="text-muted">Precio USD: 4.99</small></h3>
                <div class="btn-group">
                  <a href type="button" class="btn btn-success">Ver más</a>
                  <button type="button" class="btn btn-primary" style="margin-left:4px">Comprar</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>

</main>

</section>
@endsection