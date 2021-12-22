<!----
Pagina de ventas para que el usuario pueda registrarse, 
asi poder vender su propiedad en el sistema de 360º Bienes raices.
Programador Front-end y Back-end, Eduin A. May Uc.
--->
@extends('layouts.app')
@section('content')
<!---------- HEADER --------->
<body class="pricing bg-gray-100">
  <!-- -------- START HEADER 11 w/ carousel ------- -->
  <header>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">


        <div class="carousel-item active">
          <div class="page-header min-vh-75 m-3 border-radius-xl" style="background-image: url(&quot;../assets/video/convertio.gif&quot;);">
            <span class="mask bg-gradient-dark"></span>
            <div class="container">
              <div class="row">
                <div class="col-lg-6 my-auto">
                  <h4 class="text-white mb-0 fadeIn1 fadeInBottom">¿Te gustaria vender alguna Propiedad?</h4>
                  <h1 class="text-white fadeIn2 fadeInBottom">Vende Tu proiedad con nosotros</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-sm-n8 mt-n7">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 mb-lg-auto mb-4 my-auto p-md-0 ms-auto">
                  <div class="card border-radius-top-end-lg-0 border-radius-bottom-end-lg-0">
                    <div class="card-header text-center pt-4 pb-3">
                      <h1 class="font-weight-bolder">
                        <small>Propiedad</small>
                      </h1>
                    </div>
                    <div class="card-body mx-auto pt-0">
                      <div class="justify-content-start d-flex px-2 py-1">
                        <div>
                          <i class="fas fa-check text-info text-sm" aria-hidden="true"></i>
                        </div>
                        <div class="ps-2">
                          <span class="text-sm">Publicación en sistema 360br</span>
                        </div>
                      </div>
                      <div class="justify-content-start d-flex px-2 py-1">
                        <div>
                          <i class="fas fa-check text-info text-sm" aria-hidden="true"></i>
                        </div>
                        <div class="ps-2">
                          <span class="text-sm">Implementaciones de Marketing</span>
                        </div>
                      </div>
                      <div class="justify-content-start d-flex px-2 py-1">
                        <div>
                          <i class="fas fa-check text-info text-sm" aria-hidden="true"></i>
                        </div>
                        <div class="ps-2">
                          <span class="text-sm">Venta en poco tiempo</span>
                        </div>
                      </div>
                      <div class="justify-content-start d-flex px-2 py-1">
                        <div>
                          <i class="fas fa-check text-info text-sm" aria-hidden="true"></i>
                        </div>
                        <div class="ps-2">
                          <span class="text-sm">Orientación de venta</span>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer pt-0">
                      <a href="javascript:;" class="btn w-100 btn-warning mb-0" style="background: #939393;">
                        Contacta 360 Bienes Raíces
                        <i  class="fas fa-arrow-right ms-1" aria-hidden="true"></i>
                      </a>
                      <br><br>
                      <a href="https://www.facebook.com/360inmobiliaria.mx" class="btn w-100 btn-info mb-0">
                        Facebook
                        <i class="fa fa-facebook ms-1" aria-hidden="true"></i>
                      </a>
                      <br><br>
                      <a href="javascript:;" class="btn w-100 btn-success mb-0">
                        WhatsApp
                        <i class="fa fa-whatsapp ms-1" aria-hidden="true"></i>
                      </a>
                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 p-md-0 mb-lg-auto mb-4 z-index-2">
                  <div class="card">
                    <div class="card-header text-center pt-4 pb-3">
                      <h1 class="font-weight-bolder">
                        <small>Renta </small>
                      </h1>
                    </div>
                    <div class="card-body mx-auto pt-0">
                      <div class="justify-content-start d-flex px-2 py-1">
                        <div>
                          <i class="fas fa-check text-info text-sm" aria-hidden="true"></i>
                        </div>
                        <div class="ps-2">
                          <span class="text-sm">Información del cliente</span>
                        </div>
                      </div>
                      <div class="justify-content-start d-flex px-2 py-1">
                        <div>
                          <i class="fas fa-check text-info text-sm" aria-hidden="true"></i>
                        </div>
                        <div class="ps-2">
                          <span class="text-sm">Contratos</span>
                        </div>
                      </div>
                      <div class="justify-content-start d-flex px-2 py-1">
                        <div>
                          <i class="fas fa-check text-info text-sm" aria-hidden="true"></i>
                        </div>
                        <div class="ps-2">
                          <span class="text-sm">Publicación en sistema 360br</span>
                        </div>
                      </div>
                      <div class="justify-content-start d-flex px-2 py-1">
                        <div>
                          <i class="fas fa-check text-info text-sm" aria-hidden="true"></i>
                        </div>
                        <div class="ps-2">
                          <span class="text-sm">Implementaciones de Marketing</span>
                        </div>
                      </div>
                      <div class="justify-content-start d-flex px-2 py-1">
                        <div>
                          <i class="fas fa-check text-info text-sm" aria-hidden="true"></i>
                        </div>
                        <div class="ps-2">
                          <span class="text-sm">Venta en poco tiempo</span>
                        </div>
                      </div>
                      <div class="justify-content-start d-flex px-2 py-1">
                        <div>
                          <i class="fas fa-check text-info text-sm" aria-hidden="true"></i>
                        </div>
                        <div class="ps-2">
                          <span class="text-sm">Orientación de venta</span>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer pt-0">
                      <a href="javascript:;" class="btn w-100 btn-warning mb-0" style="background: #939393;">
                        Contacta 360 Bienes Raíces
                        <i  class="fas fa-arrow-right ms-1" aria-hidden="true"></i>
                      </a>
                      <br><br>
                      <a href="https://www.facebook.com/360inmobiliaria.mx" class="btn w-100 btn-info mb-0">
                        Facebook
                        <i class="fa fa-facebook ms-1" aria-hidden="true"></i>
                      </a>
                      <br><br>
                      <a href="javascript:;" class="btn w-100 btn-success mb-0">
                        WhatsApp
                        <i class="fa fa-whatsapp ms-1" aria-hidden="true"></i>
                      </a>
                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 mb-lg-auto mb-4 my-auto p-md-0 me-auto">
                  <div class="card border-radius-top-start-lg-0 border-radius-bottom-start-lg-0">
                    <div class="card-header text-center pt-4 pb-2">
                      <h1 class="font-weight-bolder">
                        <small>Lote</small>
                      </h1>
                    </div>
                    <div class="card-body mx-auto pt-0">
                      <div class="justify-content-start d-flex px-2 py-1">
                        <div>
                          <i class="fas fa-check text-info text-sm" aria-hidden="true"></i>
                        </div>
                        <div class="ps-2">
                          <span class="text-sm">Publicación en sistema 360br</span>
                        </div>
                      </div>
                      <div class="justify-content-start d-flex px-2 py-1">
                        <div>
                          <i class="fas fa-check text-info text-sm" aria-hidden="true"></i>
                        </div>
                        <div class="ps-2">
                          <span class="text-sm">Implementaciones de Marketing</span>
                        </div>
                      </div>
                      <div class="justify-content-start d-flex px-2 py-1">
                        <div>
                          <i class="fas fa-check text-info text-sm" aria-hidden="true"></i>
                        </div>
                        <div class="ps-2">
                          <span class="text-sm">Venta en poco tiempo</span>
                        </div>
                      </div>
                      <div class="justify-content-start d-flex px-2 py-1">
                        <div>
                          <i class="fas fa-check text-info text-sm" aria-hidden="true"></i>
                        </div>
                        <div class="ps-2">
                          <span class="text-sm">Orientación de venta</span>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer pt-0">
                      <a href="javascript:;" class="btn w-100 btn-warning mb-0" style="background: #939393;">
                        Contacta 360 Bienes Raíces
                        <i class="fas fa-arrow-right ms-1" aria-hidden="true"></i>
                      </a>
                      <br><br>
                      <a href="https://www.facebook.com/360inmobiliaria.mx" class="btn w-100 btn-info mb-0">
                        Facebook
                        <i class="fa fa-facebook ms-1" aria-hidden="true"></i>
                      </a>
                      <br><br>
                      <a href="javascript:;" class="btn w-100 btn-success mb-0">
                        WhatsApp
                        <i class="fa fa-whatsapp ms-1" aria-hidden="true"></i>
                      </a>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- -------- END HEADER 11 w/ carousel ------- -->



  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/mattboldt/typed.js/ -->
  <script src="../assets/js/plugins/typedjs.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="../assets/js/plugins/parallax.min.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the GlideJS Carousel, full documentation here: http://kenwheeler.github.io/slick/ -->
  <script src="../assets/js/plugins/glidejs.min.js" type="text/javascript"></script>
  <!--  Plugin for the blob animation -->
  <script src="../assets/js/plugins/anime.min.js" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
  <script src="../assets/js/soft-design-system-pro.min.js?v=1.0.8" type="text/javascript"></script>
  <script>
  </script>
  <script>
    if (document.getElementsByClassName('page-header')) {
      window.addEventListener('scroll', function() {
        var scrollPosition = window.pageYOffset;
        var bgParallax = document.querySelector('.page-header');
        var limit = bgParallax.offsetTop + bgParallax.offsetHeight;
        if (scrollPosition > bgParallax.offsetTop && scrollPosition <= limit) {
          bgParallax.style.backgroundPositionY = (50 - 10 * scrollPosition / limit * 3) + '%';
        } else {
          bgParallax.style.backgroundPositionY = '50%';
        }
      });
    }
  </script>


<iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" src="https://vars.hotjar.com/box-d09a446edefba0dcce5d5143e1840e9a.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;">
</iframe>
<iframe id="epik_localstore" src="https://www.pinterest.com/ct.html" width="1" height="1" style="display: none;">
</iframe>
</body>      

<!--------- FOOTER -------->
@include("layouts.footer")
<!---------- FIN FOOTER --------->
@endsection