 <!----Pagina de Home los clientes podran ver y encargar sus propiedades en el sistema. 
 Programador Front-end y Back-end, Eduin A. May Uc.--->
 <!-- START Blogs w/ 4 cards w/ image & text & link -->
  <section class="py-3">

  <center><hr class="col-lg-5 col-md-12 col-12 btn bg-gradient-dark"></center> 

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="mb-5">PROPIEDADES</h2>
        </div>
      </div>
      <div class="row">
        @foreach ($casa as $key => $casa)
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain card-blog">
            <div class="card-image border-radius-lg position-relative">
              <a href="javascript:;">
                <a href="{{ route('casas.show',$casa->id) }}">
                    <img class="w-100 border-radius-lg move-on-hover shadow" src="./casa/{{ $casa->imagen }}">
                </a>
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-info font-weight-bold">{{ $casa->nombre }}</a>
              </h5>
              <p>
                {{ $casa->descripcion }}
              </p>
              <a href="{{ route('casas.show',$casa->id) }}" class="text-white icon-move-right btn bg-gradient-info w-auto me-2">Ver más información
                <i class="fas fa-arrow-right text-sm"></i>
              </a>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-lg-3 col-md-12 col-12">
          <div class="card card-blog card-background">
            <div class="full-background" style="background-image: url('{{ asset('assets/img/Departamentos/1.jpg') }}')"></div>
            <div class="card-body">
              <div class="content-left text-start my-auto py-4">
                <a href="javascript:;">
                  <h2 class="card-title text-white">Propiedades Disponibes</h2>
                  <br><br><br><br><br><br><br><br>
                  <a href="{{ url('ventas/casas') }}" class="text-white icon-move-right badge bg-gradient-primary">Ver Más
                    <i class="fas fa-arrow-right text-sm"></i>
                  </a>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
  <center><hr class="col-lg-9 col-md-12 col-12 btn bg-gradient-dark"></center> 

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">OFICINAS</h3>
        </div>
      </div>
      <div class="row">
        @foreach ($oficina as $key => $oficina)
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain card-blog">
            <div class="card-image border-radius-lg position-relative">
              <a href="javascript:;">
                <a href="{{ route('oficina.show',$oficina->id) }}">
                    <img class="w-100 border-radius-lg move-on-hover shadow" src="./oficina/{{ $oficina->imagen }}">
                </a>
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-info font-weight-bold">{{ $oficina->nombre }}</a>
              </h5>
              <p>
                {{ $oficina->descripcion }}
              </p>
              <a href="{{ route('oficina.show',$oficina->id) }}" class="text-white icon-move-right btn bg-gradient-info w-auto me-2">Ver más información
                <i class="fas fa-arrow-right text-sm"></i>
              </a>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-lg-3 col-md-12 col-12">
          <div class="card card-blog card-background">
            <div class="full-background" style="background-image: url('{{ asset('assets/img/Departamentos/5.jpg') }}')"></div>
            <div class="card-body">
              <div class="content-left text-start my-auto py-4">
                <a href="javascript:;">
                  <h2 class="card-title text-white">Oficinas Disponibes</h2>
                  <br><br><br><br><br><br><br><br>
                  <a href="{{ url('ventas/oficina') }}" class=" text-white icon-move-right badge bg-gradient-primary">Ver Más
                    <i class="fas fa-arrow-right text-sm"></i>
                  </a>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
  <center><hr class="col-lg-9 col-md-12 col-12 btn bg-gradient-dark"></center> 

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">DEPARTAMENTOS</h3>
        </div>
      </div>
      <div class="row">
        @foreach ($departamento as $key => $departamento)
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain card-blog">
            <div class="card-image border-radius-lg position-relative">
              <a href="{{ route('departamento.show',$departamento->id) }};">
                <img class="w-100 border-radius-lg move-on-hover shadow" src="./departamento/{{ $departamento->imagen }}">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-info font-weight-bold">{{ $departamento->nombre }}</a>
              </h5>
              <p>
                {{ $departamento->descripcion }}
              </p>
              <a href="{{ route('departamento.show',$departamento->id) }}" class="text-white icon-move-right btn bg-gradient-info w-auto me-2">Ver más información
                <i class="fas fa-arrow-right text-sm"></i>
              </a>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-lg-3 col-md-12 col-12">
          <div class="card card-blog card-background">
            <div class="full-background" style="background-image: url('{{ asset('assets/img/Departamentos/4.jpg') }}')"></div>
            <div class="card-body">
              <div class="content-left text-start my-auto py-4">
                <a href="javascript:;">
                  <h2 class="card-title text-white">Departamentos Disponibes</h2>
                  <br><br><br><br><br><br><br><br>
                  <a href="{{ url('ventas/departamento') }}" class="text-white icon-move-right badge bg-gradient-primary">Ver Más
                    <i class="fas fa-arrow-right text-sm"></i>
                  </a>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
  <center><hr class="col-lg-9 col-md-12 col-12 btn bg-gradient-dark"></center>

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">RECIDENCIAS</h3>
        </div>
      </div>
      <div class="row">
        @foreach ($recidencia as $key => $recidencia)
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain card-blog">
            <div class="card-image border-radius-lg position-relative">
              <a href="javascript:;">
                <img class="w-100 border-radius-lg move-on-hover shadow" src="./recidencia/{{ $recidencia->imagen }}">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-info font-weight-bold">{{ $recidencia->nombre }}</a>
              </h5>
              <p>
                {{ $recidencia->descripcion }}
              </p>
              <a href="{{ route('recidencia.show',$recidencia->id) }}" class="text-white icon-move-right btn bg-gradient-info w-auto me-2">Ver más información
                <i class="fas fa-arrow-right text-sm"></i>
              </a>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-lg-3 col-md-12 col-12">
          <div class="card card-blog card-background">
            <div class="full-background" style="background-image: url('{{ asset('assets/img/Departamentos/2.jpg') }}')"></div>
            <div class="card-body">
              <div class="content-left text-start my-auto py-4">
                <a href="javascript:;">
                  <h2 class="card-title text-white">Recidencias Disponibes</h2>
                  <br><br><br><br><br><br><br><br>
                  <a href="{{ url('ventas/recidencia') }}" class="text-white icon-move-right badge bg-gradient-primary">Ver Más
                    <i class="fas fa-arrow-right text-sm"></i>
                  </a>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
  <center><hr class="col-lg-9 col-md-12 col-12 btn bg-gradient-dark" disabled></center>

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">TOWN HOUSES</h3>
        </div>
      </div>
      <div class="row">
        @foreach ($houses as $key => $houses)
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain card-blog">
            <div class="card-image border-radius-lg position-relative">
              <a href="javascript:;">
                <img class="w-100 border-radius-lg move-on-hover shadow" src="./town/{{ $houses->imagen }}">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-info font-weight-bold">{{ $houses->nombre }}</a>
              </h5>
              <p>
                {{ $houses->descripcion }}
              </p>
              <a href="{{ route('houses.show',$houses->id) }}" class="text-white icon-move-right btn bg-gradient-info w-auto me-2">Ver más información
                <i class="fas fa-arrow-right text-sm"></i>
              </a>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-lg-3 col-md-12 col-12">
          <div class="card card-blog card-background">
            <div class="full-background" style="background-image: url('{{ asset('assets/img/Departamentos/3.jpg') }}')"></div>
            <div class="card-body">
              <div class="content-left text-start my-auto py-4">
                <a href="javascript:;">
                  <h2 class="card-title text-white">Town Houses Disponibes</h2>
                  <br><br><br><br><br><br><br><br>
                  <a href="{{ url('ventas/houses') }}" class="text-white icon-move-right badge bg-gradient-primary">Ver Más
                    <i class="fas fa-arrow-right text-sm"></i>
                  </a>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- END Blogs w/ 4 cards w/ image & text & link -->