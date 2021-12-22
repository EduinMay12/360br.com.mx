<!----
Pagina de Home los clientes podran ver y encargar sus propiedades en el sistema.
Programador Front-end y Back-end, Eduin A. May Uc.
--->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>360º Bienes Raices | Inmobiliaria Yucateca</title>
  <link rel="icon" href="{{ asset('assets/img/PNG/LOGO_CURVAS_360_BIENES_RAICES-14.png') }}" type="image/x-icon">
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Styles -->
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/soft-design-systema.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet">
  <style>

.btn-flotante2 {
	text-transform: uppercase; /* Texto en mayusculas */
	color: #ffffff; /* Color del texto */
	border-radius: 90px; /* Borde del boton */
	background-color: #25d366; /* Color de fondo */
	position: fixed;
	bottom: 90px;
	right: 25px;
	z-index: 99;
}
</style>

</head>
<body>

<!-- NAVBAR -->
  @include("layouts.navbar")
<!-- FIN NAVBAR -->
<!-- Main -->
  @yield('content')
<!-- FIN Main -->

<div class="container py-7">
  <div class="row mt-3">
    <div class="col-sm-4 col-6 mx-auto">
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir del Sistema 360º Bienes Raices?</h5>
              <button type="button" style="color:black" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <i class="fas fa-times"></i>
              </button>
            </div>
            <div class="modal-body">
            Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-info w-auto me-1 mb-0" data-bs-dismiss="modal" >Volver</button>
              <button type="button" class="btn btn-danger w-auto me-1 mb-0" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
