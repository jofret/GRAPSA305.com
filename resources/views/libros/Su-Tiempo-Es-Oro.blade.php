@extends('index')
@section('content')
<section class="container yield" id="Su-Tiempo-Es-Oro">
	<div class="row">
		<div class="col-md-4">
			<img src="{{asset('assest/img/su_tiempo_es_oro.jpg')}}" aria-label="Placeholder: Thumbnail">
		</div>

		<div class="col-md-8">
			<h2><small class="text-muted"><strong>Su Tiempo Es Oro</strong></small></h2>
			<p>Su tiempo es oro
				El tiempo es el recurso más
				valioso que tenemos. Su uso,
				organización y administración
				son factores importantes en
				la vida de todo ser humano,
				para poder gozar de una vida
				sin estrés ydisfrutar de 
				tiempo de calidad!!!</p>
            <div class="d-flex justify-content-between align-items-center">
	          <h3><small class="text-muted">Precio USD: 4.99</small></h3>
	          	 <div>
			  	<div class="col-md-6">
							<div id="paypal-button-container"></div>
							<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script> 

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
							                      value: '4.99'
							                  }
							              }]
							          });
							      },
							       onCancel: function (data) {
							   	 // Show a cancel page, or return to cart
								 window.location.href = "/Su-Tiempo-Es-Oro#Su-Tiempo-Es-Oro";
							      },

							      onApprove: function(data, actions) {
							          return actions.order.capture().then(function(details) {
							          //alert('Transaction completed by ' + details.payer.name.given_name + '!');
								      window.location.href = "su_tiempo_es_oro_descarga";	
							          });
							      }

							  }).render('#paypal-button-container');
							</script>
						</div>
					</div>

          	</div>
		</div>
	</div>
</section>
@endsection