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
                <h4 class="font-weight-bolder">Resgistro</h4>
              </div>
              <div class="card-body">
                  Para el registro en el sistema 360 Bienes Raices debes contactar en info@360br.com.mx
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
@endsection
