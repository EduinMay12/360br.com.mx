
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
              <span class="badge bg-gradient-success badge-pill"><i class="fas fa-map-pin"></i> {{ $recidencium->lugar }} </span>
              <div class="row">

                <div class="col-xl-8 p-3">
                  <div class="card">
                    <div class="card-header p-3 mt-4">
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane show position-relative active height-600 with-400 border-radius" id="cam1" role="tabpanel" aria-labelledby="cam1" style="background-image: url('https://360br.com.mx/public/recidencia/{{ $recidencium->imagen }}'); background-size:100% 100%; background-repeat: no-repeat;">
                          <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                               
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam2" role="tabpanel" aria-labelledby="cam2" style="background-image: url('https://360br.com.mx/public/recidencia/{{ $recidencium->imagen1 }}'); background-size:100% 100%; background-repeat: no-repeat;;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen1 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam3" role="tabpanel" aria-labelledby="cam3" style="background-image: url('https://360br.com.mx/public/recidencia/{{ $recidencium->imagen2 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen2 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam4" role="tabpanel" aria-labelledby="cam4" style="background-image: url('https://360br.com.mx/public/recidencia/{{ $recidencium->imagen3 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen3 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam5" role="tabpanel" aria-labelledby="cam5" style="background-image: url('https://360br.com.mx/public/recidencia/{{ $recidencium->imagen4 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen4 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam6" role="tabpanel" aria-labelledby="cam6" style="background-image: url('https://360br.com.mx/public/recidencia/{{ $recidencium->imagen5 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen5 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam7" role="tabpanel" aria-labelledby="cam7" style="background-image: url('https://360br.com.mx/public/recidencia/{{ $recidencium->imagen6 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen6 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam8" role="tabpanel" aria-labelledby="cam8" style="background-image: url('https://360br.com.mx/public/recidencia/{{ $recidencium->imagen7 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen7 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam9" role="tabpanel" aria-labelledby="cam9" style="background-image: url('https://360br.com.mx/public/recidencia/{{ $recidencium->imagen8 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen8 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam10" role="tabpanel" aria-labelledby="cam10" style="background-image: url('https://360br.com.mx/public/recidencia/{{ $recidencium->imagen9 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen9 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
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
                              <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen }}" >
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam2" role="tab" aria-controls="cam2" aria-selected="false">
                              <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen1 }}" >
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam3" role="tab" aria-controls="cam3" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen2 }}" >

                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam4" role="tab" aria-controls="cam4" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen3 }}" >

                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam5" role="tab" aria-controls="cam5" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen4 }}" >

                            </a>
                          </li>

                        </ul>  
                      </div>
                    </div>
                    <div class="card-body d-flex pb-0">
                      <div class="nav-wrapper position-relative ms-auto w-100">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">

                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam6" role="tab" aria-controls="cam6" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen5 }}" >

                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam7" role="tab" aria-controls="cam7" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen6 }}" >
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam8" role="tab" aria-controls="cam8" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen7 }}" >
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam9" role="tab" aria-controls="cam9" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen8 }}" >
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam10" role="tab" aria-controls="cam10" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="https://360br.com.mx/public/recidencia/{{ $recidencium->imagen9 }}" >
                            </a>
                          </li>

                        </ul>  
                      </div>
                    </div>
                    <br>
                  </div>
                </div>




                <div class="col-lg-4 mx-auto">
                  <h3 class="mt-lg-0 mt-4">{{ $recidencium->nombre }}</h3>
                  <br>
                  <h6 class="mb-0 mt-3">Precio</h6>
                  <h5>${{ $recidencium->pago }}</h5>
                  <span class="badge bg-gradient-danger">{{ $recidencium->facilidad }}</span> <span class="badge bg-gradient-success">Enganche: {{ $recidencium->enganche }}</span>

                  <br>
                  <p class="mt-4"> {{ $recidencium->descripcion  }}</p> 
                  <ul>
                    <div class="row">
                      <!---- Metros ---->
                      <div class="col-xs-6 col-sm-6 col-md-6">
                        <li><i class="fas fa-arrows-alt-h"></i> {{ $recidencium->metros }}</li>
                      </div>
                      <!---- Baños ---->
                      @if ($recidencium->banos == 0)
                          
                        @elseif($recidencium->banos == 1)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 1 y 1/2 Baño
                        </div>
                        @elseif($recidencium->banos == 2)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 2 y 1/2 Baños
                        </div>
                        @elseif($recidencium->banos == 3)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 3 y 1/2 Baños
                        </div>
                        @elseif($recidencium->banos == 4)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 4 y 1/2 Baños
                        </div>
                        @elseif($recidencium->banos == 5)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 1 Baño
                        </div>
                        @elseif($recidencium->banos == 6)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 2 Baños
                        </div>
                        @elseif($recidencium->banos == 7)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 3 Baños
                        </div>
                        @elseif($recidencium->banos == 8)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 4 Baños
                        </div>
                        @elseif($recidencium->banos == 9)
                        <div classrecidencium="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 5 Baños
                        </div>
                      @endif
                      <!---- Habitaciones ---->
                      @if ($recidencium->habitaciones == 0)
                          
                          @elseif($recidencium->habitaciones == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 1 Habitacione
                          </div>
                          @elseif($recidencium->habitaciones == 2)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 2 Habitaciones
                          </div>
                          @elseif($recidencium->habitaciones == 3)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 3 Habitaciones
                          </div>
                          @elseif($recidencium->habitaciones == 4)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 4 Habitaciones
                          </div>
                          @elseif($recidencium->habitaciones == 5)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 5 Habitaciones
                          </div>
                      @endif
                      <!---- Closet ---->
                      @if ($recidencium->habitaciones == 0)

                          @elseif($recidencium->closet == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-suitcase"></i> Closet
                          </div>
                      @endif
                      <!---- Piscina ---->
                      @if ($recidencium->piscina == 0)

                          @elseif($recidencium->piscina == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-swimmer"></i> 1 Piscina
                          </div>
                      @endif
                      <!---- Valcon ---->
                      @if ($recidencium->valcon == 0)

                          @elseif($recidencium->valcon == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-smoking"></i> Valcon
                          </div>
                      @endif
                      <!---- Valcon ---->
                      @if ($recidencium->terraza == 0)

                          @elseif($recidencium->terraza == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-hotel"></i> Terraza
                          </div>
                      @endif
                      <!---- Rooftop ---->
                      @if ($recidencium->rooftop == 0)

                          @elseif($recidencium->rooftop == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-glass-martini-alt"></i> Rooftop
                          </div>
                      @endif
                      <!---- Estacionamineto ---->
                      @if ($recidencium->estacionamiento == 0)

                          @elseif($recidencium->estacionamiento == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 1 Vehículo
                          </div>
                          @elseif($recidencium->estacionamiento == 2)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 2 Vehículos
                          </div>
                          @elseif($recidencium->estacionamiento == 3)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 3 Vehículos
                          </div>
                          @elseif($recidencium->estacionamiento == 4)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 4 Vehículos
                          </div>
                          @elseif($recidencium->estacionamiento == 5)
                          <div claa="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 5 Vehículos
                          </div>
                      @endif
                      <!---- Seguridad ---->
                      @if ($recidencium->seguridad == 0)

                          @elseif($recidencium->seguridad == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-shield-alt"></i> Seguridad 24/7 hr.
                          </div>
                      @endif
                      <!---- Barda ---->
                      @if ($recidencium->barda == 0)

                          @elseif($recidencium->barda == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fab fa-buromobelexperte"></i> Barda
                          </div>
                      @endif
                      <!---- Áreas Verdes ---->
                      @if ($recidencium->verdes == 0)

                          @elseif($recidencium->verdes == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-seedling"></i> Áreas Verdes
                          </div>
                      @endif
                      <!---- Parque Recreativo ---->
                      @if ($recidencium->parque == 0)

                          @elseif($recidencium->parque == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-volleyball-ball"></i> Parque Recreativo
                          </div>
                      @endif
                      <!---- Casa Club ---->
                      @if ($recidencium->casaclub == 0)

                          @elseif($recidencium->casaclub == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-dice"></i> Casa Club 
                          </div>
                      @endif
                      <!---- Porton ---->
                      @if ($recidencium->porton == 0)

                          @elseif($recidencium->porton == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-unlock"></i> Porton
                          </div>
                      @endif
                      <!---- FamilyRoom ---->
                      @if ($recidencium->familyroom == 0)

                          @elseif($recidencium->familyroom == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-tv"></i> Family Room
                          </div>
                      @endif
                      <!---- Sala ---->
                      @if ($recidencium->sala == 0)

                          @elseif($recidencium->sala == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-theater-masks"></i> Sala
                          </div>
                      @endif
                      <!---- Escalera ---->
                      @if ($recidencium->escalera == 0)

                          @elseif($recidencium->escalera == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-house-damage"></i> Escalera
                          </div>
                      @endif
                      <!---- Servicios ---->
                      @if ($recidencium->recamara == 0)

                          @elseif($recidencium->recamara == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-concierge-bell"></i> Recamara Huesped
                          </div>
                      @endif
                      <!---- Vestibulo ---->
                      @if ($recidencium->vestibulo == 0)

                          @elseif($recidencium->vestibulo == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-magic"></i> Vestibulo
                          </div>
                      @endif
                      <!---- Lavado ---->
                      @if ($recidencium->lavado == 0)

                          @elseif($recidencium->lavado == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-sink"></i> Área de Lavado
                          </div>
                      @endif

                       <!---- Bodega ---->
                      @if ($recidencium->bodega == 0)

                          @elseif($recidencium->bodega == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-box-open"></i> Bodega
                          </div>
                      @endif
                      <!---- Estudio ---->
                      @if ($recidencium->estudio == 0)

                          @elseif($recidencium->estudio == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-book-reader"></i> Estudio
                          </div>
                      @endif
                      
                    </div>
                  </ul>
                  <label class="mt-4">Entrega : <span class="badge bg-gradient-secondary">{{ $recidencium->entrega }}</span> </label>
                  
                  <label class="mt-4">Formas de Pago : <span>{{ $recidencium->forma }}</span> </label>
                  
                  <label class="mt-4">Cuota de Mantenimiento : <span>{{ $recidencium->cuota }}</span> </label>
                  
                  <br>
                    <label class="mt-2">Descripción</label>
                    <p class="col-5"> {!! html_entity_decode($recidencium->caracteristica) !!}</p>
                 @include("form") 
                  <div class="mt-4">
                    <a href="{{ url('ventas/recidencia') }}">
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