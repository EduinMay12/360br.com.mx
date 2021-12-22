<!----
Pagina de Home los clientes podran ver y encargar sus propiedades en el sistema.
Programador Front-end y Back-end, Eduin A. May Uc.
--->
  @foreach ($data as $key => $terreno)


  <section class="pt-lg-7 pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-8 order-2 order-md-2 order-lg-1">
          <div class="position-relative ms-lg-5 mb-0 mb-md-7 mb-lg-0 d-none d-md-block d-lg-block d-xl-block h-75">
            <div class="bg-gradient-dark w-100 h-100 border-radius-xl position-absolute d-lg-block d-none"></div>
            <img src="./lote/{{ $terreno->imagen }}" class="w-100 border-radius-xl mt-6 ms-lg-5 position-relative z-index-5" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-12 ms-auto order-1 order-md-1 order-lg-1">
          <div class="p-3 pt-0">
            
            <h4 class="text-gradient text-primary mb-0">LOTES EN VENTA</h4>
            <h4 class="mb-4"><a href="{{ route('terreno.show',$terreno->id) }}" target="blank">{{ $terreno->nombre }}</a></h4>
            <p>{{ $terreno->descripcion }}</p>
            <a href="{{ url('terreno') }}" rel="nofollow" class="text-dark icon-move-right">Ver Mas
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach


  <!--  {!! $data->render() !!}
  END Section Content -->
