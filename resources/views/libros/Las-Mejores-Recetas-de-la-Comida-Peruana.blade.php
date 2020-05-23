@extends('index')
@section('content')
<section class="container" style="padding-top:80px;" id="Guia-de-Urbanidad-y-Valores">
	<div class="row">
		<div class="col-md-4">
			<img src="{{asset('assest/img/urbanidad_y_valores.jpg')}}" aria-label="Placeholder: Thumbnail">
		</div>

		<div class="col-md-8">
			<h2><small class="text-muted"><strong>Las-Mejores-Recetas-de-la-Comida-Peruana</strong></small></h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
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
					                      value: '6.99'
					                  }
					              }]
					          });
					      },
					       onCancel: function (data) {
					   	 // Show a cancel page, or return to cart
						 window.location.href = "https://grapsa305.com/Las-Mejores-Recetas-de-la-Comida-Peruana#Guia-de-Urbanidad-y-Valores";
					      },

					      onApprove: function(data, actions) {
					          return actions.order.capture().then(function(details) {
					          //alert('Transaction completed by ' + details.payer.name.given_name + '!');
						      window.location.href = "https://grapsa305.com/Las-Mejores-Recetas-de-la-Comida-Peruana-Descarga";	
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