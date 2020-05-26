@extends('index')
@section('content')
<section class="yield">
  <main role="main">

    <section class="text-center">
      <div class="container">
        <h1>Nuestra Colleción</h1>
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
              <a href="{{url('/Guia-de-Urbanidad-y-Valores')}}#Guia-de-Urbanidad-y-Valores"><img src="{{asset('assest/img/urbanidad_y_valores.jpg')}}" aria-label="Placeholder: Thumbnail"></a>
              <div class="card-body">
                <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                <h2><small class="text-muted"><strong>Manual de Urbanidad y Valores</strong></small></h2>
                <div class="d-flex justify-content-between align-items-center">
                	<h3><small class="text-muted"><strong>Precio USD: 6.99</strong></small></h3>
                	<div class="btn-group">
                    <a href="{{url('/Guia-de-Urbanidad-y-Valores')}}#Guia-de-Urbanidad-y-Valores" type="button" class="btn btn-success">Ver más</a>
                    <a href="{{url('/Guia-de-Urbanidad-y-Valores')}}#Guia-de-Urbanidad-y-Valores"  type="button" class="btn btn-primary" style="margin-left:4px">Comprar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          

          <div class="col-md-4" style="margin-top:20px">
            <div class="card mb-4 shadow-sm">
              <a href="{{url('/Motivacion-para-el-Exito')}}#Motivacion-para-el-Exito"><img src="{{asset('assest/img/motivacion_para_el_exito.jpg')}}" aria-label="Placeholder: Thumbnail"></a>
              <div class="card-body">
                <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                <h2><small class="text-muted"><strong>Motivación para el Éxito</strong></small></h2>
                <div class="d-flex justify-content-between align-items-center">
                	<h3><small class="text-muted"><strong>Precio USD : 6.99</strong></small></h3>
                  <div class="btn-group">
                    <a href="{{url('/Motivacion-para-el-Exito')}}#Motivacion-para-el-Exito" type="button" class="btn btn-success">Ver más</a>
                    <a href="{{url('/Motivacion-para-el-Exito')}}#Motivacion-para-el-Exito"  type="button" class="btn btn-primary" style="margin-left:4px">Comprar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4" style="margin-top:20px">
            <div class="card mb-4 shadow-sm">
              <a href="{{url('Su-Tiempo-Es-Oro')}}#Su-Tiempo-Es-Oro"><img src="{{asset('assest/img/su_tiempo_es_oro.jpg')}}" aria-label="Placeholder: Thumbnail"></a>

              <div class="card-body">
                <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                <h2><small class="text-muted"><strong>Su Tiempo es Oro</strong></small></h2>
                <div class="d-flex justify-content-between align-items-center">
                	<h3><small class="text-muted"><strong>Precio USD: 4.99</strong></small></h3>
                  <div class="btn-group">
                    <a href="{{url('Su-Tiempo-Es-Oro')}}#Su-Tiempo-Es-Oro" type="button" class="btn btn-success">Ver más</a>
                    <a href="{{url('Su-Tiempo-Es-Oro')}}#Su-Tiempo-Es-Oro" type="button" class="btn btn-primary" style="margin-left:4px">Comprar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4" style="margin-top:20px">
            <div class="card mb-4 shadow-sm">
              <a href="{{url('Las-Mejores-Recetas-de-la-Comida-Peruana')}}#Las-Mejores-Recetas-de-la-Comida-Peruana"><img src="{{asset('assest/img/receta_comida_peruana.jpg')}}" aria-label="Placeholder: Thumbnail"></a>

              <div class="card-body">
                <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                <h2><small class="text-muted"><strong>Las Mejores Recetas de la Comida Peruana</strong></small></h2>
                <div class="d-flex justify-content-between align-items-center">
                  <h3><small class="text-muted"><strong>Precio USD: 6.99</strong></small></h3>
                  <div class="btn-group">
                    <a href="{{url('Las-Mejores-Recetas-de-la-Comida-Peruana')}}#Las-Mejores-Recetas-de-la-Comida-Peruana" type="button" class="btn btn-success">Ver más</a>
                    <a href="{{url('Las-Mejores-Recetas-de-la-Comida-Peruana')}}#Las-Mejores-Recetas-de-la-Comida-Peruana" type="button" class="btn btn-primary" style="margin-left:4px">Comprar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4" style="margin-top:20px">
            <div class="card mb-4 shadow-sm">
              <a href="{{url('Machu-Picchu')}}#Machu-Picchu"><img src="{{asset('assest/img/machu_picchu.jpg')}}" aria-label="Placeholder: Thumbnail"></a>

              <div class="card-body">
                <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                <h2><small class="text-muted"><strong>Machu Picchu</strong></small></h2>
                <div class="d-flex justify-content-between align-items-center">
                  <h3><small class="text-muted"><strong>Precio USD: 4.99</strong></small></h3>
                  <div class="btn-group">
                    <a href="{{url('Machu-Picchu')}}#Machu-Picchu" type="button" class="btn btn-success">Ver más</a>
                    <a href="{{url('Machu-Picchu')}}#Machu-Picchu" type="button" class="btn btn-primary" style="margin-left:4px">Comprar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

</section>
@endsection