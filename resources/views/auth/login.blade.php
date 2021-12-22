@extends('layouts.app')

@section('content')
<style>
  .bg-gradient-login {
    background-image: linear-gradient(
310deg, #adb5bd40 0%, #adb5bd 100%);
}
</style>
  <section>
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h4 class="font-weight-bolder">Iniciar sesión</h4>
                <p class="mb-0">Ingrese su correo electrónico y contraseña para iniciar sesión</p>
                <p class="mb-0">(SOLO AGAENTES, INMOBILIARIOS 360)</p>
              </div>
              <div class="card-body">
                <form role="form" method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="mb-3">
                      <!-- Email -->
                    <input for="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo electronico" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <div class="mb-3">
                      <!-- Contraseña -->
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraeña">
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="rememberMe">Recordar</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-lg bg-gradient-info btn-lg w-100 mt-4 mb-0">Acceder</button>
                  </div>
                    
                </form>
              </div>
            </div>
          </div>
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
            <div class="position-relative bg-gradient-login h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
              <img src="assets/img/shapes/pattern-lines.svg" alt="pattern-lines" class="position-absolute opacity-4 start-0">
              <div class="position-relative">
                <img class="max-width-500 w-100 position-relative z-index-2" src="assets/img/PNG/LOGO_CURVAS_360_BIENES_RAICES-05.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----
Pagina de Home los clientes podran ver y encargar sus propiedades en el sistema.
Programador Front-end y Back-end, Eduin A. May Uc.
--->
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
                <a class="nav-link pe-1" href="#" target="_blank">
                  <i class="fab fa-facebook text-lg opacity-8"></i>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link pe-1" href="#" target="_blank">
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
                | CIPAL WEB S.A de C.V
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/js/soft-design-system.js') }}" type="text/javascript"></script>
@endsection
