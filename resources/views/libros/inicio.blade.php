@extends('index')
@section('content')
<section class="container yield">
  <div class="row">
    <aside class="col-md-3">
      <h2>Productos</h2>
      <ul>
        <li><a href="{{url('Guia-de-Urbanidad-y-Valores')}}">Manual de Urbanidad y Valores</a></li>
        <li><a href="{{url('Motivacion-para-el-Exito')}}">Motivación para el Éxito</a></li>
        <li><a href="{{url('Su-Tiempo-Es-Oro')}}">Su Tiempo es Oro</a></li>
        <li><a href="{{url('Las-Mejores-Recetas-de-la-Comida-Peruana')}}">Las Mejores Recetas de la Comida Peruana</a></li>
        <li><a href="{{url('Machu-Picchu')}}">Machu Picchu</a></li>
      </ul>
    </aside>

    <div class="col-md-9">
      <main role="main">
        <section class="text-center">
          <div>
            <h1 style="padding-bottom: 20px">Nuestra Colleción</h1>
          </div>
        </section>


        <div class="album py-5 bg-light">
          <div>
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
                        <a href="{{url('/Guia-de-Urbanidad-y-Valores')}}#Guia-de-Urbanidad-y-Valores"  type="button" class="btn btn-primary" style="margin-left:4px">Comprar <i class="lni lni-paypal-original"></i></a>
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
                        <a href="{{url('/Motivacion-para-el-Exito')}}#Motivacion-para-el-Exito"  type="button" class="btn btn-primary" style="margin-left:4px">Comprar <i class="lni lni-paypal-original"></i></a>
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
                        <a href="{{url('Su-Tiempo-Es-Oro')}}#Su-Tiempo-Es-Oro" type="button" class="btn btn-primary" style="margin-left:4px">Comprar <i class="lni lni-paypal-original"></i></a>
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
                      <h3><small class="text-muted"><strong>Precio USD: 9.99</strong></small></h3>
                      <div class="btn-group">
                        <a href="{{url('Las-Mejores-Recetas-de-la-Comida-Peruana')}}#Las-Mejores-Recetas-de-la-Comida-Peruana" type="button" class="btn btn-success">Ver más</a>
                        <a href="{{url('Las-Mejores-Recetas-de-la-Comida-Peruana')}}#Las-Mejores-Recetas-de-la-Comida-Peruana" type="button" class="btn btn-primary" style="margin-left:4px">Comprar <i class="lni lni-paypal-original"></i></a>
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
                      <h3><small class="text-muted"><strong>Precio USD: 9.99</strong></small></h3>
                      <div class="btn-group">
                        <a href="{{url('Machu-Picchu')}}#Machu-Picchu" type="button" class="btn btn-success">Ver más</a>
                        <a href="{{url('Machu-Picchu')}}#Machu-Picchu" type="button" class="btn btn-primary" style="margin-left:4px">Comprar <i class="lni lni-paypal-original"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </main>
    </div>
  </div>
</section>
@endsection