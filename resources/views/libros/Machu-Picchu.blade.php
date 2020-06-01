@extends('index')
@section('content')
<section class="container yield" id="Machu-Picchu">
	<div class="row">
		<div class="col-md-4">
			<img src="{{asset('assest/img/machu_picchu.jpg')}}" aria-label="Placeholder: Thumbnail">
		</div>

		<div class="col-md-8">
			<h2><small class="text-muted"><strong>Machu Picchu</strong></small></h2>
			<p>El libro que les brindamos a continuación es un homenaje a esta maravilla del mundo y a sus más de 100 años de reconocimiento mundial.<br> Las diferentes fotografías que presentamos han sido cuidadosamente seleccionadas para que el lector sienta la magia y el misticismo que siente aquella persona que visita Machu Picchu una y otra vez.</p>
            <div class="d-flex justify-content-between align-items-center">
	          <h3><small class="text-muted"><strong>Precio USD: 6.99</strong></small></h3>
			  <div>
			  	<div class="col-md-6">
					<div id="paypal-button-container"></div>
					<script src="https://www.paypal.com/sdk/js?client-id=AZTnFaFjSU_zqETCtDnTJ3KE_-R0mqyak-3yRBk75b3MwwQ9U67vvmn6dgdhSZ6A2U_lL0tPfPbto3YD&currency=USD" data-sdk-integration-source="button-factory"></script> 
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
					                      value: '9.99'
					                  }
					              }]
					          });
					      },
					       onCancel: function (data) {
					   	 // Show a cancel page, or return to cart
						 window.location.href = "Machu-Picchu#Machu-Picchu";
					      },

					      onApprove: function(data, actions) {
					          return actions.order.capture().then(function(details) {
					          //alert('Transaction completed by ' + details.payer.name.given_name + '!');
						      window.location.href = "machu_picchu_descarga";	
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