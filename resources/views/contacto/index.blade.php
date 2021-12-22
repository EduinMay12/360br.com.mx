<!----
Pagina de Home los clientes podran ver y encargar sus propiedades en el sistema.
Programador Front-end y Back-end, Eduin A. May Uc.
--->
@extends('layouts.app')

@section('content')
        <!---------- HEADER --------->
        @include("layouts.header")
        <!---------- FIN HEADER --------->

         <!-- MAIN -->
  <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
  <div class="container">
    <div class="row py-4">
      <div class="col-lg-6">
        <h3 class="text-gradient text-primary mb-0 mt-2">Contactanos</h3>
        <h3>Redes Sociales</h3>
        <td class="align-middle text-center">
            <p class="text-xs text-secondary mb-0"><i class="fab fa-facebook text-lg"> <a href="https://www.facebook.com/360inmobiliaria.mx">Facebook | 360º Bienes Raices</a> </i> </p>
            <br>
            <p class="text-xs text-secondary mb-0"><i class="fab fa-instagram text-lg "> <a href="https://www.instagram.com/360ibr/">Instagram | 360º Bienes Raicess</a></i> </p>
            <br>
            <p class="text-xs text-secondary mb-0"><i class="fas fa-at text-lg"> <a href="#">info@360br.com.mx | 360º Bienes Raices</a></i> </p>
            <br>
            <p class="text-xs text-secondary mb-0"><i class="fab fa-whatsapp text-lg "> <a href="#">WhatsApp | 99999999</a></i> </p>
            <br><br>
            <div class="mapouter">
            <div style="width: 100%">
                <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Calle%201%20156,%20Mulsay%20I,%2097246%20M%C3%A9rida,%20Yuc.+(360%20Bienes%20Raices)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    <a href="https://www.mapsdirections.info/marcar-radio-circulo-mapa/">360 Bienes Raíces</a>
                </iframe>
            </div>
        </div> 
        </td> 
      </div>
      <div class="col-lg-6 mt-lg-0 mt-5 ps-lg-0 ps-0">
        <div class="p-3 info-horizontal">
          <div class="icon icon-shape rounded-circle bg-gradient-danger shadow text-center">
            <i class="fa fa-user opacity-10"></i> 
          </div>
          <div class="description ps-3">
            <h3>Misión</h3>
            <p class="mb-0">Brindar asesoramiento inmobiliario personalizado.<br> Ofrecer un catálogo con opciones variadas a los clientes junto la mejor asesoría legal.</p>
          </div>
        </div>
  
        <div class="p-3 info-horizontal">
          <div class="icon icon-shape rounded-circle bg-gradient-danger shadow text-center">
            <i class="fas fa-handshake opacity-10"></i>
          </div>
          <div class="description ps-3">
            <h3>Visión</h3>
            <p class="mb-0">Ser la inmobiliaria con el mejor asesoramiento en la ciudad de Mérida.</p>
          </div>
        </div>
        <div class="p-3 info-horizontal">
          <div class="icon icon-shape rounded-circle bg-gradient-danger shadow text-center">
            <i class="fas fa-hourglass opacity-10"></i>
          </div>
          <div class="description ps-3">
            <h3>Valores</h3>
            <p class="mb-0">•	Transparencia: Nos encargamos de explicar el paso a paso del proceso de compra y resolver las dudas.</p><br/>
            <p class="mb-0">•	Empatía: Entendemos las necesidades de nuestros clientes, así comovemos por sus gustos y economía. </p><br/>
            <p class="mb-0">•   Eficacia: Enfocados en hacer un proceso de compra, asesoramiento y escrituración en el menor tiempo posible.</p>
          </div>
          <br>
          @include("form")
        </div>
      </div>
    </div>
  </div>
  
  <!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->
  
    
        <!-- FIN MAIN -->

        <!--------- FOOTER -------->
        @include("layouts.footer")
        <!---------- FIN FOOTER --------->
@endsection
