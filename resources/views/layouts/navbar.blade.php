<!----
Pagina de Home los clientes podran ver y encargar sus propiedades en el sistema.
Programador Front-end y Back-end, Eduin A. May Uc.
--->
<!-- Navbar Transparent -->
  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-11">
        <nav class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid px-0">
            <a class="navbar-brand font-weight-bolder ms-sm-3" href="{{ url('/') }}" rel="tooltip" data-placement="bottom">
              <img src="{{ asset('assets/img/PNG/LOGO_CURVAS_360_BIENES_RAICES-09.png') }}" width="150" height="50">
            </a>

            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>

            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
              <ul class="navbar-nav navbar-nav-hover ms-lg-12 ps-lg-5 w-100">
                <!--- Seccion de Rentas 
                <li class="nav-item dropdown dropdown-hover pt-3">
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownRentas" data-bs-toggle="dropdown" aria-expanded="false">
                    <h6>Rentas</h6>
                    <img src="{{ asset('assets/img/down-arrow-white.svg') }}" alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                    <img src="{{ asset('assets/img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                  </a>
                  <ul class="dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdown">

                    <div class="d-none d-lg-block">
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('rentas/casas') }}">
                          <div class="d-flex">
                            <div class="icon h-10 me-3 d-flex mt-1">
                              <i class="fa fa-home text-gradient text-primary"></i>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Casas</h6>
                              </div>
                              <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow">
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('rentas/oficina') }}">
                          <div class="d-flex">
                            <div class="icon h-10 me-3 d-flex mt-1">
                              <i class="fa fa-building text-gradient text-primary"></i>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Oficinas</h6>
                              </div>
                              <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow">
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('rentas/departamento') }}">
                          <div class="d-flex">
                            <div class="icon h-10 me-3 d-flex mt-1">
                              <i class="fas fa-hotel text-gradient text-primary"></i>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Departamentos</h6>
                              </div>
                              <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow">
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('rentas/recidencia') }}">
                          <div class="d-flex">
                            <div class="icon h-10 me-3 d-flex mt-1">
                              <i class="ni ni-notification-70 text-gradient text-primary"></i>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Residencias</h6>
                              </div>
                              <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow">
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('rentas/houses') }}">
                          <div class="d-flex">
                            <div class="icon h-10 me-3 d-flex mt-1">
                              <i class="ni ni-app text-gradient text-primary"></i>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">TownHouses</h6>
                              </div>
                              <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow">
                            </div>
                          </div>
                        </a>
                      </li>
                    </div>

                    <div class="row d-lg-none">
                      <div class="col-md-12">
                        <div class="d-flex mb-2">
                          <div class="icon h-10 me-3 d-flex mt-1">
                            <i class="fa fa-home text-gradient text-primary"></i>
                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between">
                            <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('rentas/casas') }}">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Casas</h6>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="d-flex mb-2 mt-3">
                          <div class="icon h-10 me-3 d-flex mt-1">
                            <i class="fa fa-building text-gradient text-primary"></i>
                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between">
                            <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('rentas/oficina') }}">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Oficinas</h6>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="d-flex mb-2 mt-3">
                          <div class="icon h-10 me-3 d-flex mt-1">
                            <i class="ni ni-badge text-gradient text-primary"></i>
                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between">
                            <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('rentas/departamento') }}">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Departamentos</h6>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="d-flex mb-2 mt-3">
                          <div class="icon h-10 me-3 d-flex mt-1">
                            <i class="ni ni-notification-70 text-gradient text-primary"></i>
                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between">
                            <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('rentas/recidencia') }}">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Residencias</h6>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="d-flex mb-2 mt-3">
                          <div class="icon h-10 me-3 d-flex mt-1">
                            <i class="ni ni-app text-gradient text-primary"></i>
                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between">
                            <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('rentas/houses') }}">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">TownHouses</h6>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                  </ul>
                </li>
                 Fin de Rentas --->
                <!--- Seccion de Ventas --->
                <li class="nav-item dropdown dropdown-hover pt-3">
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownRentas" data-bs-toggle="dropdown" aria-expanded="false">
                    <h6>Ventas</h6>
                    <img src="{{ asset('assets/img/down-arrow-white.svg') }}" alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                    <img src="{{ asset('assets/img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                  </a>
                  <ul class="dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdown">

                    <div class="d-none d-lg-block">
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('ventas/casas') }}">
                          <div class="d-flex">
                            <div class="icon h-10 me-3 d-flex mt-1">
                              <i class="fa fa-home text-gradient text-primary"></i>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Casas</h6>
                              </div>
                              <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow">
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('ventas/oficina') }}">
                          <div class="d-flex">
                            <div class="icon h-10 me-3 d-flex mt-1">
                              <i class="fa fa-building text-gradient text-primary"></i>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Oficinas</h6>
                              </div>
                              <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow">
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('ventas/departamento') }}">
                          <div class="d-flex">
                            <div class="icon h-10 me-3 d-flex mt-1">
                              <i class="fas fa-hotel text-gradient text-primary"></i>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Departamentos</h6>
                              </div>
                              <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow">
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('ventas/recidencia') }}">
                          <div class="d-flex">
                            <div class="icon h-10 me-3 d-flex mt-1">
                              <i class="ni ni-notification-70 text-gradient text-primary"></i>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Residencias</h6>
                              </div>
                              <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow">
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('ventas/houses') }}">
                          <div class="d-flex">
                            <div class="icon h-10 me-3 d-flex mt-1">
                              <i class="ni ni-app text-gradient text-primary"></i>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">TownHouses</h6>
                              </div>
                              <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow">
                            </div>
                          </div>
                        </a>
                      </li>
                    </div>

                    <div class="row d-lg-none">
                      <div class="col-md-12">
                        <div class="d-flex mb-2">
                          <div class="icon h-10 me-3 d-flex mt-1">
                            <i class="fa fa-home text-gradient text-primary"></i>
                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between">
                            <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('ventas/casas') }}">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Casas</h6>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="d-flex mb-2 mt-3">
                          <div class="icon h-10 me-3 d-flex mt-1">
                            <i class="fa fa-building text-gradient text-primary"></i>
                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between">
                            <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('ventas/oficina') }}">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Oficinas</h6>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="d-flex mb-2 mt-3">
                          <div class="icon h-10 me-3 d-flex mt-1">
                            <i class="ni ni-badge text-gradient text-primary"></i>
                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between">
                            <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('ventas/departamento') }}">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Departamentos</h6>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="d-flex mb-2 mt-3">
                          <div class="icon h-10 me-3 d-flex mt-1">
                            <i class="ni ni-notification-70 text-gradient text-primary"></i>
                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between">
                            <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('ventas/recidencia') }}">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Residencias</h6>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="d-flex mb-2 mt-3">
                          <div class="icon h-10 me-3 d-flex mt-1">
                            <i class="ni ni-app text-gradient text-primary"></i>
                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between">
                            <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ url('ventas/houses') }}">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">TownHouses</h6>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                  </ul>
                </li>
                <!--- Fin de Ventas --->
                <!--- Seccion de Terrenos --->
                <a class="nav-link nav-link-icon" href="{{ url('terreno') }}">
                    <li class="nav-item dropdown dropdown-hover pt-3">
                        <p class="d-inline text-sm z-index-1 font-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Terrenos en venta">
                          <h6>Lotes</h6>
                        </p>
                    </li>
                </a>
                <!--- Fin de Terrenos --->
                <!--- Seccion de Vender Propiedad --->
                <a class="nav-link nav-link-icon" href="{{ url('venta') }}">
                    <li class="nav-item dropdown dropdown-hover pt-3">
                        <p class="d-inline text-sm z-index-1 font-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="¿Le gustaria vender?">
                            <h6>¿Quiere vender?</h6>
                        </p>
                </li>
                </a>
                <!--- Fin de Vender Propiedad --->
                <!--- Seccion de Nosotros --->
               
                <!--- Fin de Nosotros --->
                <!--- Seccion de Contacto --->
                <a class="nav-link nav-link-icon " href="{{ url('contacto') }}">
                    <li class="nav-item dropdown dropdown-hover pt-3">
                        <p class="d-inline text-sm z-index-1 font-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Contactanos">
                          <h6>Contactanos</h6>
                        </p>
                    </li>
                </a>
                <!--- Fin de Contacto --->
                <!--- Seccion de Blog --->
                <a class="nav-link nav-link-icon" href="{{ url('blog') }}">
                    <li class="nav-item dropdown dropdown-hover pt-3">
                        <p class="d-inline text-sm z-index-1 font-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Blog">
                          <h6>Blog</h6>
                        </p>
                    </li>
                </a>
                <!--- Fin de Blog --->
                <li class="nav-item ms-lg-auto">
                  @if (Route::has('login'))
                  @auth
                  <li class="nav-item dropdown dropdown-hover my-auto ms-3 ms-lg-0">
                    <a class="nav-link d-flex justify-content-between cursor-pointer align-items-center btn btn-sm  bg-gradient-dark  btn-round mb-0 me-0 mt-1 mt-md-1 text-white" id="dropdownRentas" data-bs-toggle="dropdown" aria-expanded="false">
                      
                      <img class="avatar avatar-sm rounded-circle" alt="Imagen de Perfil" src="../uploads/avatars/{{ auth()->user()->avatar }}"> &nbsp;&nbsp;{{ Auth::user()->name }}
                      <img src="{{ asset('assets/img/down-arrow-white.svg') }}" alt="down-arrow" class="arrow ms-1 d-lg-block d-none">
                      <img src="{{ asset('assets/img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-1 d-lg-none d-block">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-animation dropdown-sm dropdown-sm-responsive border-radius-sm mt-0 mt-lg-3" aria-labelledby="dropdown">

                    <div class="d-none d-sm-block">
                      <p class="text-center">Bienvenido <br> {{ Auth::user()->name }}</p>
                      <hr>
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="{{ route('perfil.edit') }}">
                          <div class="d-flex">
                            <div class="icon h-10 me-3 d-flex mt-1">
                              <i class="ni ni-single-02 text-gradient text-primary"></i>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Perfil</h6>
                              </div>
                              <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow">
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <div class="d-flex">
                            <div class="icon h-10 me-3 d-flex mt-1">
                              <i class="ni ni-button-power text-gradient text-primary"></i>
                            </div>
                            <div class="w-100 d-flex align-items-center justify-content-between">
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">{{ __('Salir') }}</h6>
                              </div>
                              <img src="{{ asset('assets/img/down-arrow.svg') }}" alt="down-arrow" class="arrow">
                            </div>
                          </div>
                        </a>
                      </li>
                    </div>

                    <div class="row d-lg-none">
                      <div class="col-md-5">
                      <br>
                      <p class="text-center">Bienvenido {{ Auth::user()->name }}</p>
                      <hr>
                        <div class="d-flex mb-2">
                          <div class="icon h-10 me-3 d-flex mt-1">
                            <i class="ni ni-single-02 text-gradient text-primary"></i>
                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between">
                            <a href="{{ route('perfil.edit') }}">
                              <div>
                                  <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Peril</h6>
                              </div>
                            </a>
                          </div>
                        </div>

                        <div class="d-flex mb-2 mt-3">
                          <div class="icon h-10 me-3 d-flex mt-1">
                            <i class="ni ni-button-power text-gradient text-primary"></i>
                          </div>
                          <div class="w-100 d-flex align-items-center justify-content-between">
                            <a class="dropdown-item py-2 ps-3 border-radius-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              <div>
                                  <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">{{ __('Salir') }}</h6>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                  </form> 
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                  </ul>
                  </li>
                  @else
                    <li class="nav-item my-auto ms-3 ms-lg-0">
                        <a href="{{ route('login') }}" class="btn btn-sm  bg-gradient-dark  btn-round mb-0 me-1 mt-2 mt-md-0">Entrar</a>
                    </li>
                    
                    @if (Route::has('register'))
                    @endif
                  @endauth
                  @endif
                  
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>

<!-- End Navbar -->


  