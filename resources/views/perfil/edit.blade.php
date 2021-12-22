<!----
Pagina de Home los clientes podran ver y encargar sus propiedades en el sistema.
Programador Front-end y Back-end, Eduin A. May Uc.
--->
    @extends('layouts.app')

    @section('content')

    <!-- MAIN -->
    <div class="container-fluid">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('{{ asset('assets/video/convertio.gif') }}'); background-position-y: 50%;">
        <span class="mask bg-gradient-info opacity-6"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src=".././uploads/avatars/{{ auth()->user()->avatar }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
              {{ Auth::user()->name }}
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                360 Bienes Raices / {{ Auth::user()->email }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-4">
    @include("perfil.card")
    <br>  
      <div class="row">
        <div class="col-12 col-xl-4">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">VENDER PROPIEDAD</h6>
            </div>
            <div class="card-body p-3">
              <h6 class="text-uppercase text-body text-xs font-weight-bolder">TIPOS DE VENTA</h6>
              @can('Administrador')
              <ul class="list-group">
                <li class="list-group-item border-0 px-0">
                  <div class="dropdown">
                    <button class="btn bg-gradient-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Venta de Propiedad
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    
                      <li><a class="dropdown-item" href="{{ url('ventas/casas') }}">Casa</a></li>
                      <li><a class="dropdown-item" href="{{ url('ventas/departamento') }}">Departamentos</a></li>
                      <li><a class="dropdown-item" href="{{ url('ventas/oficina') }}">Oficinas</a></li>
                      <li><a class="dropdown-item" href="{{ url('ventas/recidencia') }}">Recidencia</a></li>
                      <li><a class="dropdown-item" href="{{ url('ventas/houses') }}">Town Houses</a></li>
                    
                    </ul>
                  </div>
                </li>
                <li class="list-group-item border-0 px-0">
                  <a href="{{ url('#') }}">
                    <button type="button" class="btn bg-gradient-light w-auto">Renta de Propiedad</button>
                  </a>
                </li>
                
                <li class="list-group-item border-0 px-0">
                  <a href="{{ url('terreno') }}">
                    <button type="button" class="btn bg-gradient-success w-auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Venta de Lotes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                  </a>
                </li>
              </ul>
              @endcan
              
              <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">BLOG</h6>
              <ul class="list-group">
                <li class="list-group-item border-0 px-0">
                  <div class="form-check form-switch ps-0">
                    <a href="{{ url('blog') }}">
                      <button type="button" class="btn bg-gradient-warning w-auto"> &nbsp;&nbsp;Publicar Nuevo &nbsp;&nbsp; </button>
                    </a>
                  </div>
                </li>
              </ul>
              
            </div>
          </div>
        </div>
        <br>
        <div class="col-12 col-xl-4">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                  <h6 class="mb-0">INFORMACION PERSONAL</h6>
                </div>
                <div class="col-md-4 text-end">
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    <i class="fas fa-user-edit text-secondary text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                </button>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <p class="text-sm">
                {{ Auth::user()->descripcion }}              
              <hr class="horizontal gray-light my-4">
              <ul class="list-group">
                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nombre:</strong> &nbsp; {{ Auth::user()->name }}</li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Telefono :</strong> &nbsp; {{ Auth::user()->telefono }}</li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Correo Electronico:</strong> &nbsp; {{ Auth::user()->email }}</li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Localizacion :</strong> &nbsp; {{ Auth::user()->lugar }}</li>
                <li class="list-group-item border-0 ps-0 pb-0">
                  <strong class="text-dark text-sm">Redes Sociales:</strong> &nbsp;
                  <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="{{ Auth::user()->facebook }}" target="_blank">
                    <i class="fab fa-facebook fa-lg"></i>
                  </a>
                  <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="{{ Auth::user()->email }}" target="_blank">
                    <i class="fas fa-at fa-lg"></i>
                  </a>
                  <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="{{ Auth::user()->instagram }}" target="_blank">
                    <i class="fab fa-instagram fa-lg"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <br>
        <div class="col-12 col-xl-4">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">PROPIEDADES RESIENTES</h6>
            </div>
            <div class="card-body p-3">


              <ul class="list-group">
              <h6 class="mb-0 text-sm">Casas <span class="badge bg-gradient-warning badge-pill">{{ $casa_count }}</span></h6>
                @foreach ($casa as $key => $casa)
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                    
                  <div class="avatar me-3">
                    <img src="../../casa/{{ $casa->imagen }}" alt="kal" class="border-radius-lg shadow">
                  </div>
                  
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">{{ $casa->nombre }}</h6>
                    <span class="badge bg-gradient-success badge-pill"><i class="fas fa-map-pin"></i> {{ $casa->lugar }} </span>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="{{ route('casas.show',$casa->id) }}">Ver</a>
                </li>
                @endforeach
                
                <h6 class="mb-0 text-sm">Departamentos <span class="badge bg-gradient-warning badge-pill">{{ $departamento_count }}</span></h6>
                @foreach ($departamento as $key => $departamento)
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                    
                  <div class="avatar me-3">
                    <img src="../../departamento/{{ $departamento->imagen }}" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">{{ $departamento->nombre }}</h6>
                    <span class="badge bg-gradient-success badge-pill"><i class="fas fa-map-pin"></i> {{ $departamento->lugar }} </span>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="{{ route('departamento.show',$departamento->id) }}">Ver</a>
                </li>
                @endforeach
                
                <h6 class="mb-0 text-sm">Oficinas <span class="badge bg-gradient-warning badge-pill">{{ $oficina_count }}</sapn></h6>
                @foreach ($oficina as $key => $oficina)
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                  <div class="avatar me-3">
                    <img src="../../oficina/{{ $oficina->imagen }}" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">{{ $oficina->nombre }}</h6>
                    <span class="badge bg-gradient-success badge-pill"><i class="fas fa-map-pin"></i> {{ $oficina->lugar }} </span>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="{{ route('oficina.show',$oficina->id) }}">Ver</a>
                </li>
                @endforeach
                
                <h6 class="mb-0 text-sm">Lotes <span class="badge bg-gradient-warning badge-pill">{{ $terreno_count }}</sapn></h6>
                @foreach ($data as $key => $terreno)
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                  <div class="avatar me-3">
                    <img src="../../lote/{{ $terreno->imagen }}" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">{{ $terreno->nombre }}</h6>
                    <span class="badge bg-gradient-success badge-pill"><i class="fas fa-map-pin"></i> {{ $terreno->lugar }} </span>
                  </div>
                  <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="{{ route('terreno.show',$terreno->id) }}">Ver</a>
                </li>
                @endforeach
                
              </ul>


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN MAIN -->
<!--------- FOOTER -------->
    @include("layouts.footer")
<!---------- FIN FOOTER --------->
<!--------- MODAL -------->
@include("perfil.modal")
<!---------- FIN MODAL --------->
@endsection



