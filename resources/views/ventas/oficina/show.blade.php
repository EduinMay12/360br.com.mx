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
              <h5 class="mb-4">Detalle {{ $oficina->nombre }}</h5>
              <span class="badge bg-gradient-success badge-pill"><i class="fas fa-map-pin"></i> {{ $oficina->lugar }} </span>
              <div class="row">

                <div class="col-xl-8 p-3">
                  <div class="card">
                    <div class="card-header p-3 mt-4">
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show position-relative active height-600 border-radius-sm" id="cam1" role="tabpanel" aria-labelledby="cam1" style="background-image: url('../../oficina/{{ $oficina->imagen }}'); background-size:100% 100%; background-repeat: no-repeat;">
                          <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../../oficina/{{ $oficina->imagen }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 border-radius-sm" id="cam2" role="tabpanel" aria-labelledby="cam2" style="background-image: url('../../oficina/{{ $oficina->imagen1 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../../oficina/{{ $oficina->imagen1 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 border-radius-sm" id="cam3" role="tabpanel" aria-labelledby="cam3" style="background-image: url('../../oficina/{{ $oficina->imagen2 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../../oficina/{{ $oficina->imagen2 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 border-radius-sm" id="cam4" role="tabpanel" aria-labelledby="cam4" style="background-image: url('../../oficina/{{ $oficina->imagen3 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../../oficina/{{ $oficina->imagen3 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 border-radius-sm" id="cam5" role="tabpanel" aria-labelledby="cam5" style="background-image: url('../../oficina/{{ $oficina->imagen4 }}'); background-size:100% 100%; background-repeat: no-repeat; background-size:100% 100%; background-repeat: no-repeat; background-size:100% 100%; background-repeat: no-repeat; background-size:100% 100%; background-repeat: no-repeat; background-size:100% 100%; background-repeat: no-repeat; background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../../oficina/{{ $oficina->imagen4 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 border-radius-sm" id="cam6" role="tabpanel" aria-labelledby="cam6" style="background-image: url('../../oficina/{{ $oficina->imagen5 }}'); background-size:100% 100%; background-repeat: no-repeat; background-size:100% 100%; background-repeat: no-repeat; background-size:100% 100%; background-repeat: no-repeat; background-size:100% 100%; background-repeat: no-repeat; background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../../oficina/{{ $oficina->imagen5 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 border-radius-sm" id="cam7" role="tabpanel" aria-labelledby="cam7" style="background-image: url('../../oficina/{{ $oficina->imagen6 }}'); background-size:100% 100%; background-repeat: no-repeat; background-size:100% 100%; background-repeat: no-repeat; background-size:100% 100%; background-repeat: no-repeat; background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../../oficina/{{ $oficina->imagen6 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 border-radius-sm" id="cam8" role="tabpanel" aria-labelledby="cam8" style="background-image: url('../../oficina/{{ $oficina->imagen7 }}'); background-size:100% 100%; background-repeat: no-repeat; background-size:100% 100%; background-repeat: no-repeat; background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../../oficina/{{ $oficina->imagen7 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 border-radius-sm" id="cam9" role="tabpanel" aria-labelledby="cam9" style="background-image: url('../../oficina/{{ $oficina->imagen8 }}'); background-size:100% 100%; background-repeat: no-repeat; background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../../oficina/{{ $oficina->imagen8 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 border-radius-sm" id="cam10" role="tabpanel" aria-labelledby="cam10" style="background-image: url('../../oficina/{{ $oficina->imagen9 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../../oficina/{{ $oficina->imagen9 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
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
                              <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../../oficina/{{ $oficina->imagen }}">
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam2" role="tab" aria-controls="cam2" aria-selected="false">
                              <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../../oficina/{{ $oficina->imagen1 }}">
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam3" role="tab" aria-controls="cam3" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../../oficina/{{ $oficina->imagen2 }}">

                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam4" role="tab" aria-controls="cam4" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../../oficina/{{ $oficina->imagen3 }}">

                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam5" role="tab" aria-controls="cam5" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../../oficina/{{ $oficina->imagen4 }}">

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
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../../oficina/{{ $oficina->imagen5 }}">

                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam7" role="tab" aria-controls="cam7" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../../oficina/{{ $oficina->imagen6 }}">
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam8" role="tab" aria-controls="cam8" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../../oficina/{{ $oficina->imagen7 }}">
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam9" role="tab" aria-controls="cam9" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../../oficina/{{ $oficina->imagen8 }}">
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam10" role="tab" aria-controls="cam10" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../../oficina/{{ $oficina->imagen9 }}">
                            </a>
                          </li>

                        </ul>  
                      </div>
                    </div>
                    <br>
                  </div>
                </div>



                <div class="col-lg-4 mx-auto">
                  <h3 class="mt-lg-0 mt-4">{{ $oficina->nombre }}</h3>
                  <br>
                  <h6 class="mb-0 mt-3">Precio</h6>
                  <h5>${{ $oficina->pago }}</h5>
                  <span class="badge bg-gradient-danger">{{ $oficina->facilidad }}</span> <span class="badge bg-gradient-success">Enganche: {{ $oficina->enganche }}</span>
                  <br>
                                    <ul>
                    <div class="row">
                      <!---- Metros ---->
                      <div class="col-xs-6 col-sm-6 col-md-6">
                        <li><i class="fas fa-arrows-alt-h"></i> Metros: {{ $oficina->metros }}</li>
                      </div>
                      <!---- Baños ---->
                      @if ($oficina->banos == 0)
                          
                        @elseif($oficina->banos == 1)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 1/2 Baño
                        </div>
                        @elseif($oficina->banos == 2)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 2/2 Baños
                        </div>
                        @elseif($oficina->banos == 3)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 3/2 Baños
                        </div>
                        @elseif($oficina->banos == 4)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 4/2 Baños
                        </div>
                        @elseif($oficina->banos == 5)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 1 Baño
                        </div>
                        @elseif($oficina->banos == 6)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 2 Baños
                        </div>
                        @elseif($oficina->banos == 7)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 3 Baños
                        </div>
                        @elseif($oficina->banos == 8)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 4 Baños
                        </div>
                        @elseif($oficina->banos == 9)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 5 Baños
                        </div>
                      @endif
                      <!---- Habitaciones ---->
                      @if ($oficina->habitaciones == 0)
                          
                          @elseif($oficina->habitaciones == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 1 Habitaciones
                          </div>
                          @elseif($oficina->habitaciones == 2)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 2 Habitaciones
                          </div>
                          @elseif($oficina->habitaciones == 3)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 3 Habitaciones
                          </div>
                          @elseif($oficina->habitaciones == 4)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 4 Habitaciones
                          </div>
                          @elseif($oficina->habitaciones == 5)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 5 Habitaciones
                          </div>
                      @endif
                      <!---- Closet ---->
                      @if ($oficina->habitaciones == 0)

                          @elseif($oficina->closet == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-suitcase"></i> Closet
                          </div>
                      @endif
                      <!---- Piscina ---->
                      @if ($oficina->piscina == 0)

                          @elseif($oficina->piscina == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-swimmer"></i> 1 Piscina
                          </div>
                      @endif
                      <!---- Valcon ---->
                      @if ($oficina->valcon == 0)

                          @elseif($oficina->valcon == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-smoking"></i> Valcon
                          </div>
                      @endif
                      <!---- Valcon ---->
                      @if ($oficina->terraza == 0)

                          @elseif($oficina->terraza == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-hotel"></i> Terraza
                          </div>
                      @endif
                      <!---- Rooftop ---->
                      @if ($oficina->rooftop == 0)

                          @elseif($oficina->rooftop == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-glass-martini-alt"></i> Rooftop
                          </div>
                      @endif
                      <!---- Estacionamineto ---->
                      @if ($oficina->estacionamiento == 0)

                          @elseif($oficina->estacionamiento == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 1 Vehículo
                          </div>
                          @elseif($oficina->estacionamiento == 2)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 2 Vehículos
                          </div>
                          @elseif($oficina->estacionamiento == 3)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 3 Vehículos
                          </div>
                          @elseif($oficina->estacionamiento == 4)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 4 Vehículos
                          </div>
                          @elseif($oficina->estacionamiento == 5)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 5 Vehículos
                          </div>
                      @endif
                      <!---- Seguridad ---->
                      @if ($oficina->seguridad == 0)

                          @elseif($oficina->seguridad == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-shield-alt"></i> Seguridad 24/7 hr.
                          </div>
                      @endif
                      <!---- Barda ---->
                      @if ($oficina->barda == 0)

                          @elseif($oficina->barda == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fab fa-buromobelexperte"></i> Barda
                          </div>
                      @endif
                      <!---- Áreas Verdes ---->
                      @if ($oficina->verdes == 0)

                          @elseif($oficina->verdes == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-seedling"></i> Áreas Verdes
                          </div>
                      @endif
                      <!---- Parque Recreativo ---->
                      @if ($oficina->parque == 0)

                          @elseif($oficina->parque == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-volleyball-ball"></i> Parque Recreativo
                          </div>
                      @endif
                      <!---- oficina Club ---->
                      @if ($oficina->oficinaclub == 0)

                          @elseif($oficina->oficinaclub == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-dice"></i> Casa Club 
                          </div>
                      @endif
                      <!---- Porton ---->
                      @if ($oficina->porton == 0)

                          @elseif($oficina->porton == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-unlock"></i> Porton
                          </div>
                      @endif
                      <!---- FamilyRoom ---->
                      @if ($oficina->familyroom == 0)

                          @elseif($oficina->familyroom == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-tv"></i> Family Room
                          </div>
                      @endif
                      <!---- Sala ---->
                      @if ($oficina->sala == 0)

                          @elseif($oficina->sala == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-theater-masks"></i> Sala
                          </div>
                      @endif
                      <!---- Escalera ---->
                      @if ($oficina->escalera == 0)

                          @elseif($oficina->escalera == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-house-damage"></i> Escalera
                          </div>
                      @endif
                      <!---- Servicios ---->
                      @if ($oficina->recamara == 0)

                          @elseif($oficina->recamara == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-concierge-bell"></i> Recamara Huesped
                          </div>
                      @endif
                      <!---- Vestibulo ---->
                      @if ($oficina->vestibulo == 0)

                          @elseif($oficina->vestibulo == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-magic"></i> Vestibulo
                          </div>
                      @endif
                      <!---- Lavado ---->
                      @if ($oficina->lavado == 0)

                          @elseif($oficina->lavado == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-sink"></i> Área de Lavado
                          </div>
                      @endif

                       <!---- Bodega ---->
                      @if ($oficina->bodega == 0)

                          @elseif($oficina->bodega == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-igloo"></i> Bodega
                          </div>
                      @endif
                      <!---- Estudio ---->
                      @if ($oficina->estudio == 0)

                          @elseif($oficina->estudio == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-book-reader"></i> Estudio
                          </div>
                      @endif
                      
                    </div>
                  </ul>
                  <label class="mt-4">Entrega : <span class="badge bg-gradient-secondary">{{ $oficina->entrega }}</span> </label>
                  
                  <label class="mt-4">Formas de Pago : <span>{{ $oficina->forma }}</span> </label>
                  
                  <label class="mt-4">Cuota de Mantenimiento : <span>{{ $oficina->cuota }}</span> </label>
                  <br>
                  <label class="mt-4">Descripción</label>
                  <p> {!! html_entity_decode($oficina->caracteristica) !!}</p> 
                  @include("form") 
                  <div class="row mt-4">
                    <div class="col-lg-5">
                        <a href="https://www.instagram.com/360ibr/" target="_blank">
                            <button class="btn bg-gradient-warning mb-0 mt-lg-auto w-100" type="button" name="button"><i class="fa fa-instagram fa-2x"></i></button>
                        </a>
                    </div>
                    <br>
                    <div class="col-lg-5">
                        <a href="https://www.facebook.com/360inmobiliaria.mx" target="_blank">
                            <button class="btn btn-info mb-0 mt-lg-auto w-100" type="button" name="button"><i class="fa fa-facebook fa-2x"></i></button>
                        </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-4">
                <a href="{{ url('ventas/casas') }}">
                <button type="button" class="btn bg-gradient-warning w-auto"> Regresar </button>
                </a>
              </div>
            </div>
          </div>

<!---------- FIN Card --------->
<!--------- FOOTER -------->
  @include("layouts.footer")
<!---------- FIN FOOTER --------->
@endsection
