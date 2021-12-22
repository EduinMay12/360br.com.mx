<!----
Pagina de Home los clientes podran ver y encargar sus propiedades en el sistema.
Programador Front-end y Back-end, Eduin A. May Uc.
--->


@foreach ($header as $header)
<a href="https://api.whatsapp.com/send?phone=+52{{ $header->whatsapp }}&text=Hola!%20Quiero%20mas%20información!" target="_blank" class="btn-flotante2" style="height: 60px;  width: 60px;"><center><i class="fab fa-whatsapp fa-3x pt-1"></i></center></a>

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
                <a class="nav-link pe-1" href="{{ $header->correo }}" target="_blank">
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
    <script type="text/javascript">
        CKEDITOR.replace('wysiwyg-editor', {
            filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
  <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/js/soft-design-system.js') }}" type="text/javascript"></script>


