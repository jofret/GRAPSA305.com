@extends('index')
@section('content')
<section class="container" style="padding-top:80px;" id="Motivacion-para-el-Exito">
	<div class="row">
		<div class="col-md-4">
			<img src="{{asset('assest/img/motivacion_para_el_exito.jpg')}}" aria-label="Placeholder: Thumbnail">
		</div>

		<div class="col-md-8">
			<h2><small class="text-muted"><strong>Motivación Para El Éxito</strong></small></h2>
			<p>Un pensamiento reflexivo y profundo
			suele convertirse muchas veces en el
			“lei motiv”  de nuestra vida.
			¡Cuántas frases hay que nos han 
			motivado para vencer un momento de 
			amargura, de tristeza o decaimiento.
			Y hasta un refrán se convierte en 
			guía y norte de nuestro diario quehacer.
			Pero la fuerza de su convicción está no
			sólo en su mensaje,sino también en el
			valor y prestigio de los grandes 
			sabios y pensadores de toda la historia.</p>
            <div class="d-flex justify-content-between align-items-center">
	          <h3><small class="text-muted"><strong>Precio USD: 6.99</strong></small></h3>
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
					                      value: '6.99'
					                  }
					              }]
					          });
					      },
					       onCancel: function (data) {
					   	 // Show a cancel page, or return to cart
						 window.location.href = "Motivacion-para-el-Exito#Motivacion-para-el-Exito";
					      },

					      onApprove: function(data, actions) {
					          return actions.order.capture().then(function(details) {
					          //alert('Transaction completed by ' + details.payer.name.given_name + '!');
						      window.location.href = "motivacion_descarga";	
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