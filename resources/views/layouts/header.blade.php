  <!----
Pagina de Home los clientes podran ver y encargar sus propiedades en el sistema.
Programador Front-end y Back-end, Eduin A. May Uc.
--->
@foreach ($header as $header)
<style>
  .bg-gradient-dark {
  background-image: linear-gradient(310deg,  {{ $header->color1 }} 0%, {{ $header->color2 }}   100%); }
</style>
  <!-- -------- START HEADER 7 w/ text and video ------- -->
  <header class="bg-gradient-dark">
    <div class="page-header min-vh-75" style="background-image: url('../assets/video/convertio.gif');">
      <span class="mask bg-gradient-info opacity-8"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto">
            <br><br><br>
            <h1 class="text-white"> {{ $header->titulo }} </h1>
            <br>
            <h6 class="text-white mb-2 mt-5">Encuéntranos en</h6>
            <div class="d-flex justify-content-center">
              <a href="{{ $header->facebook }}" target="_blank"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
              <a href="{{ $header->instagram }}" target="_blank"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
              <a href="https://api.whatsapp.com/send?phone=+52{{ $header->whatsapp }}&text=Hola!%20Quiero%20mas%20informaci贸n!" target="_blank"><i class="fab fa-whatsapp text-lg text-white me-4"></i></a>
              <a href="{{ $header->correo }}" target="_blank"><i class="fas fa-at text-lg text-white"></i></a>
            </div>
          </div>
        </div>
      </div>
  
      <div class="position-absolute w-100 z-index-1 bottom-0">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="moving-waves">
            <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
            <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
            <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
            <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1" />
          </g>
        </svg>
      </div>
    </div>
  </header>
  <!-- -------- END HEADER 7 w/ text and video ------- -->
  @endforeach