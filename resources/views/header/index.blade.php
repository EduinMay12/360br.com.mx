<!----
Pagina de Blog aqui se podra publicar cards para los clientes del sistema.
Programador Front-end y Back-end, Eduin A. May Uc.
--->
@extends('layouts.app')

@section('content')
<!---------- HEADER --------->
  @include("layouts.header")
<!---------- FIN HEADER --------->
<!---------- Livewire --------->
<section class="py-7 bg-gradient-dark position-relative overflow-hidden">
    <div class="position-absolute w-100 z-inde-1 top-0 mt-n3">
      <svg width="100%" viewBox="0 -2 1920 157" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>Usuarios</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g fill="#FFFFFF" fill-rule="nonzero">
            <g>
              <path d="M0,60.8320331 C299.333333,115.127115 618.333333,111.165365 959,47.8320321 C1299.66667,-15.5013009 1620.66667,-15.2062179 1920,47.8320331 L1920,156.389409 L0,156.389409 L0,60.8320331 Z" transform="translate(960.000000, 78.416017) rotate(180.000000) translate(-960.000000, -78.416017) "></path>
            </g>
          </g>
        </g>
      </svg>
    </div>
  <div class="container-fluid py-4">
    <a href="{{ route('perfil.edit') }}">
      <button type="button" class="btn bg-gradient-warning w-auto"> Regresar </button>
    </a>
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Color de Fondos Portada</h6>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Titulo</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Color 1</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Color 2</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Redes Sociales</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pie de Página</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($header as $header)
                      <tr>
                        <td class="align-middle text-center">
                          <h6 class="text-xs font-weight-bold mb-0">{{ $header->titulo }}</h6>
                          <p class="text-xs text-secondary mb-0">Titulo de Portada</p>
                        </td>
                        <td class="align-middle text-center">
                          <span class="badge badge-sm bg-gradient-success" style="background:{{ $header->color1 }}">{{ $header->color1 }}</span>
                          <p class="text-xs text-secondary mb-0">Primer color del fondo de portada</p>
                        </td>
                        <td class="align-middle text-center">
                          <span class="badge badge-sm bg-gradient-success" style="background:{{ $header->color2 }}">{{ $header->color2 }}</span>
                          <p class="text-xs text-secondary mb-0">Segundo color del fondo de portada</p>
                        </td>
                        <td class="align-middle text-center">
                          <p class="text-xs text-secondary mb-0"><i class="fab fa-facebook text-lg"></i> {{ $header->facebook }}</p>
                          <br>
                          <p class="text-xs text-secondary mb-0"><i class="fab fa-instagram text-lg "></i> {{ $header->instagram }}</p>
                          <br>
                          <p class="text-xs text-secondary mb-0"><i class="fas fa-at text-lg"></i> {{ $header->correo }}</p>
                          <br>
                          <p class="text-xs text-secondary mb-0"><i class="fab fa-whatsapp text-lg "></i> {{ $header->whatsapp }}</p>
                        </td>
                        <td class="align-middle text-center">
                          <h6 class="text-xs font-weight-bold mb-0">{{ $header->footer }}</h6>
                          <p class="text-xs text-secondary mb-0">Pie de la Pagina</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        @include("header.edit")
  </div>
</section>
<a href="https://api.whatsapp.com/send?phone=+52{{ $header->whatsapp }}&text=Hola!%20Quiero%20mas%20informaci贸n!" target="_blank" class="btn-flotante2" style="height: 60px;  width: 60px;"><center><i class="fab fa-whatsapp fa-3x pt-1"></i></center></a>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
  FB.init({
    xfbml            : true,
    version          : 'v12.0'
  });
};

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
  attribution="install_email"
  attribution_version="biz_inbox"
  page_id="102070908879084">
</div>

<footer class="footer pt-5 mt-5">
    <hr class="horizontal dark mb-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-3 mb-4 ms-auto">
          <div>
            <img src="{{ asset('assets/img/PNG/LOGO_CURVAS_360_BIENES_RAICES-09.png') }}" width="90" height="30">
          </div>
          <div>
            <h6 class="mt-3 mb-2 opacity-8">Red Social</h6>
            <ul class="d-flex flex-row ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link pe-1" href="{{ $header->facebook }}" target="_blank">
                  <i class="fab fa-facebook text-lg opacity-8"></i>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link pe-1" href="{{ $header->instagram }}" target="_blank">
                  <i class="fab fa-instagram text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="#" target="_blank">
                  <i class="fas fa-at text-lg opacity-8"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-md-3 mb-4 ms-auto">
          <div>
            <img src="{{ asset('assets/img/PNG/negro.png') }}" width="90" height="30">
          </div>
        </div>
        <div class="col-12">
          <div class="text-center">
                <p class="my-4 text-sm">
                    Copyright © 
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    | {{ $header->footer }} 
                </p>
           
          </div>
        </div>
      </div>
    </div>
  </footer>
@endforeach
  
  <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/js/soft-design-system.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/facebook.js') }}" type="text/javascript"></script>
  

@endsection