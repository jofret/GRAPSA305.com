@extends('index')
@section('content')
<section class="container yield" id="Guia-de-Urbanidad-y-Valores">
	<div class="row">
		<div class="col-md-4">
			<img src="{{asset('assest/img/urbanidad_y_valores.jpg')}}" aria-label="Placeholder: Thumbnail">
		</div>

		<div class="col-md-8">
			<h2><small class="text-muted"><strong>Manual de Urbanidad y Valores</strong></small></h2>
			<p>Precisamente esta nueva guía de modales
			 y valores tiene como propósito rescatar
			 estas pautas de buen comportamiento y
			 potenciar otras pero sobretodo aspira
			 a incentivar su práctica como medio 
			para contribuir a establecer y desarro
			llar relaciones más armoniosas en nuestra
			 vida cotidiana y en la convivencia humana.
			 en pro de su perfeccionamiento o 
			realización, para desarrollarlos es
			 indispensable que la persona conozca el
			 bien, ame el bien y haga el bien. El
			 secreto es que los adultos fomenten hábitos
			 operativos buenos en los niños, lo cual 
			ayudará a que adhieran afectivamente al
			 valor.</p>
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
						 window.location.href = "Guia-de-Urbanidad-y-Valores#Guia-de-Urbanidad-y-Valores";
					      },

					      onApprove: function(data, actions) {
					          return actions.order.capture().then(function(details) {
					          //alert('Transaction completed by ' + details.payer.name.given_name + '!');
						      window.location.href = "Guia-de-Urbanidad-y-Valores-Descarga";	
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