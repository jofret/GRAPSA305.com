@extends('index')
@section('content')
<section class="container" style="padding-top:80px;" id="Guia-de-Urbanidad-y-Valores">
	<div class="row">
		<div class="col-md-4">
			<img src="{{asset('assest/img/urbanidad_y_valores.jpg')}}" aria-label="Placeholder: Thumbnail">
		</div>

		<div class="col-md-8">
			<h2><small class="text-muted"><strong>Manual de Urbanidad y Valores</strong></small></h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            <div class="d-flex justify-content-between align-items-center">
	          <h3><small class="text-muted">Precio USD: 6.99</small></h3>
	          <!-- <button type="button" class="btn btn-primary">Comprar</button> -->
	          <!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="SSRWKUHNSS6TG">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			  </form> -->
			  

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
		</div>
	</div>
</section>
@endsection