<!----
Pagina de Blog aqui se podra publicar cards para los clientes del sistema.
Programador Front-end y Back-end, Eduin A. May Uc.
--->
@extends('layouts.app')

@section('content')
<!---------- HEADER --------->
  @include("layouts.header")
<!---------- FIN HEADER --------->
<!---------- Card --------->
          <div class="container mt-sm-1">
            <div class="card-body">
              <span class="badge bg-gradient-success badge-pill"><i class="fas fa-map-pin"></i> {{ $departamento->lugar }} </span>
              <div class="row">

                <div class="col-xl-8 p-3">
                  <div class="card">
                    <div class="card-header p-3 mt-4">
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane show position-relative active height-600 with-400 border-radius" id="cam1" role="tabpanel" aria-labelledby="cam1" style="background-image: url('https://360br.com.mx/public/departamento/{{ $departamento->imagen }}'); background-size:100% 100%; background-repeat: no-repeat;">
                          <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/departamento/{{ $departamento->imagen }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam2" role="tabpanel" aria-labelledby="cam2" style="background-image: url('https://360br.com.mx/public/departamento/{{ $departamento->imagen1 }}'); background-size:100% 100%; background-repeat: no-repeat;;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/departamento/{{ $departamento->imagen1 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam3" role="tabpanel" aria-labelledby="cam3" style="background-image: url('https://360br.com.mx/public/departamento/{{ $departamento->imagen2 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/departamento/{{ $departamento->imagen2 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam4" role="tabpanel" aria-labelledby="cam4" style="background-image: url('https://360br.com.mx/public/departamento/{{ $departamento->imagen3 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/departamento/{{ $departamento->imagen3 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam5" role="tabpanel" aria-labelledby="cam5" style="background-image: url('https://360br.com.mx/public/departamento/{{ $departamento->imagen4 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/departamento/{{ $departamento->imagen4 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam6" role="tabpanel" aria-labelledby="cam6" style="background-image: url('https://360br.com.mx/public/departamento/{{ $departamento->imagen5 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/departamento/{{ $departamento->imagen5 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam7" role="tabpanel" aria-labelledby="cam7" style="background-image: url('https://360br.com.mx/public/departamento/{{ $departamento->imagen6 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/departamento/{{ $departamento->imagen6 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam8" role="tabpanel" aria-labelledby="cam8" style="background-image: url('https://360br.com.mx/public/departamento/{{ $departamento->imagen7 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/departamento/{{ $departamento->imagen7 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam9" role="tabpanel" aria-labelledby="cam9" style="background-image: url('https://360br.com.mx/public/departamento/{{ $departamento->imagen8 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/departamento/{{ $departamento->imagen8 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam10" role="tabpanel" aria-labelledby="cam10" style="background-image: url('https://360br.com.mx/public/departamento/{{ $departamento->imagen9 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/departamento/{{ $departamento->imagen9 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-body d-flex pb-0 p-3">
                      <div class="nav-wrapper position-relative ms-auto w-100">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                          
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam1" role="tab" aria-controls="cam1" aria-selected="false">
                              <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/departamento/{{ $departamento->imagen }}" >
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam2" role="tab" aria-controls="cam2" aria-selected="false">
                              <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/departamento/{{ $departamento->imagen1 }}" >
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam3" role="tab" aria-controls="cam3" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/departamento/{{ $departamento->imagen2 }}" >

                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam4" role="tab" aria-controls="cam4" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/departamento/{{ $departamento->imagen3 }}" >

                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam5" role="tab" aria-controls="cam5" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/departamento/{{ $departamento->imagen4 }}" >

                            </a>
                          </li>

                        </ul>  
                      </div>
                    </div>
                    <div class="card-body d-flex pb-0 p-3">
                      <div class="nav-wrapper position-relative ms-auto w-100">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">

                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam6" role="tab" aria-controls="cam6" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/departamento/{{ $departamento->imagen5 }}" >

                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam7" role="tab" aria-controls="cam7" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/departamento/{{ $departamento->imagen6 }}" >
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam8" role="tab" aria-controls="cam8" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/departamento/{{ $departamento->imagen7 }}" >
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam9" role="tab" aria-controls="cam9" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/departamento/{{ $departamento->imagen8 }}" >
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam10" role="tab" aria-controls="cam10" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/departamento/{{ $departamento->imagen9 }}" >
                            </a>
                          </li>

                        </ul>  
                      </div>
                    </div>
                    <br>
                  </div>
                </div>



                <div class="col-lg-4 mx-auto">
                  <h3 class="mt-lg-0 mt-4">{{ $departamento->nombre }}</h3>
                  <br>
                  <h6 class="mb-0 mt-3">Precio</h6>
                  <h5>{{ $departamento->pago }}</h5>
                  <span class="badge bg-gradient-danger">{{ $departamento->facilidad }}</span> <span class="badge bg-gradient-success">Enganche: {{ $departamento->enganche }}</span>

                  <br>
                  <p class="mt-4"> {{ $departamento->descripcion  }}</p> 
                  <ul>
                    <div class="row">
                      <!---- Metros ---->
                      <div class="col-xs-6 col-sm-6 col-md-6">
                        <li><i class="fas fa-arrows-alt-h"></i> {{ $departamento->metros }}</li>
                      </div>
                      <!---- Baños ---->
                      @if ($departamento->banos == 0)
                          
                        @elseif($departamento->banos == 1)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 1 y 1/2 
                        </div>
                        @elseif($departamento->banos == 2)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 2 y 1/2 
                        </div>
                        @elseif($departamento->banos == 3)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 3 y 1/2 
                        </div>
                        @elseif($departamento->banos == 4)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 4 y 1/2 
                        </div>
                        @elseif($departamento->banos == 5)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 1 
                        </div>
                        @elseif($departamento->banos == 6)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 2 
                        </div>
                        @elseif($departamento->banos == 7)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 3 
                        </div>
                        @elseif($departamento->banos == 8)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 4 
                        </div>
                        @elseif($departamento->banos == 9)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 5 
                        </div>
                      @endif
                      <!---- Habitaciones ---->
                      @if ($departamento->habitaciones == 0)
                          
                          @elseif($departamento->habitaciones == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 1 Habitación
                          </div>
                          @elseif($departamento->habitaciones == 2)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 2 Habitaciones
                          </div>
                          @elseif($departamento->habitaciones == 3)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 3 Habitaciones
                          </div>
                          @elseif($departamento->habitaciones == 4)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 4 Habitaciones
                          </div>
                          @elseif($departamento->habitaciones == 5)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 5 Habitaciones
                          </div>
                      @endif
                      <!---- Closet ---->
                      @if ($departamento->habitaciones == 0)

                          @elseif($departamento->closet == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-suitcase"></i> Closet
                          </div>
                      @endif
                      <!---- Piscina ---->
                      @if ($departamento->piscina == 0)

                          @elseif($departamento->piscina == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-swimmer"></i> 1 Piscina
                          </div>
                      @endif
                      <!---- Valcon ---->
                      @if ($departamento->valcon == 0)

                          @elseif($departamento->valcon == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-smoking"></i> Valcon
                          </div>
                      @endif
                      <!---- Valcon ---->
                      @if ($departamento->terraza == 0)

                          @elseif($departamento->terraza == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-hotel"></i> Terraza
                          </div>
                      @endif
                      <!---- Rooftop ---->
                      @if ($departamento->rooftop == 0)

                          @elseif($departamento->rooftop == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-glass-martini-alt"></i> Rooftop
                          </div>
                      @endif
                      <!---- Estacionamineto ---->
                      @if ($departamento->estacionamiento == 0)

                          @elseif($departamento->estacionamiento == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 1 Vehículo
                          </div>
                          @elseif($departamento->estacionamiento == 2)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 2 Vehículos
                          </div>
                          @elseif($departamento->estacionamiento == 3)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 3 Vehículos
                          </div>
                          @elseif($departamento->estacionamiento == 4)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 4 Vehículos
                          </div>
                          @elseif($departamento->estacionamiento == 5)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 5 Vehículos
                          </div>
                      @endif
                      <!---- Seguridad ---->
                      @if ($departamento->seguridad == 0)

                          @elseif($departamento->seguridad == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-shield-alt"></i> Seguridad 24/7 hr.
                          </div>
                      @endif
                      <!---- Barda ---->
                      @if ($departamento->barda == 0)

                          @elseif($departamento->barda == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fab fa-buromobelexperte"></i> Barda
                          </div>
                      @endif
                      <!---- Áreas Verdes ---->
                      @if ($departamento->verdes == 0)

                          @elseif($departamento->verdes == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-seedling"></i> Áreas Verdes
                          </div>
                      @endif
                      <!---- Parque Recreativo ---->
                      @if ($departamento->parque == 0)

                          @elseif($departamento->parque == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-volleyball-ball"></i> Parque Recreativo
                          </div>
                      @endif
                      <!---- departamento Club ---->
                      @if ($departamento->departamentoclub == 0)

                          @elseif($departamento->departamentoclub == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-dice"></i> departamento Club 
                          </div>
                      @endif
                      <!---- Porton ---->
                      @if ($departamento->porton == 0)

                          @elseif($departamento->porton == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-unlock"></i> Porton
                          </div>
                      @endif
                      <!---- FamilyRoom ---->
                      @if ($departamento->familyroom == 0)

                          @elseif($departamento->familyroom == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-tv"></i> Family Room
                          </div>
                      @endif
                      <!---- Sala ---->
                      @if ($departamento->sala == 0)

                          @elseif($departamento->sala == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-couch"></i> Sala
                          </div>
                      @endif
                      <!---- Escalera ---->
                      @if ($departamento->escalera == 0)

                          @elseif($departamento->escalera == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-house-damage"></i> Escalera
                          </div>
                      @endif
                      <!---- Servicios ---->
                      @if ($departamento->recamara == 0)

                          @elseif($departamento->recamara == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-concierge-bell"></i> Recamara Huesped
                          </div>
                      @endif
                      <!---- Vestibulo ---->
                      @if ($departamento->vestibulo == 0)

                          @elseif($departamento->vestibulo == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-magic"></i> Vestibulo
                          </div>
                      @endif
                      <!---- Lavado ---->
                      @if ($departamento->lavado == 0)

                          @elseif($departamento->lavado == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-sink"></i> Área de Lavado
                          </div>
                      @endif

                       <!---- Bodega ---->
                      @if ($departamento->bodega == 0)

                          @elseif($departamento->bodega == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-box-open"></i> Bodega
                          </div>
                      @endif
                      <!---- Estudio ---->
                      @if ($departamento->estudio == 0)

                          @elseif($departamento->estudio == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-book-reader"></i> Estudio
                          </div>
                      @endif
                      
                    </div>
                  </ul>
                  <label class="mt-4">Entrega : <span class="badge bg-gradient-secondary">{{ $departamento->entrega }}</span> </label>
                  
                  <label class="mt-4">Formas de Pago : <span>{{ $departamento->forma }}</span> </label>
                  
                  <label class="mt-4">Cuota de Mantenimiento : <span>{{ $departamento->cuota }}</span> </label>
                  
                  <br>
                    <label class="mt-2">Descripción :</label>
                    <p class="col-5"> {!! html_entity_decode($departamento->caracteristica) !!}</p>
                    @include("form")
                  <div class="mt-4">
                    <a href="{{ url('ventas/departamento') }}">
                        <button type="button" class="btn bg-gradient-danger w-auto"> Regresar </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

<!---------- FIN Card --------->
<!--------- FOOTER -------->
  @include("layouts.footer")
<!---------- FIN FOOTER --------->
@endsection