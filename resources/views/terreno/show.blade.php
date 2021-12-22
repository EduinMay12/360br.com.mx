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
              <span class="badge bg-gradient-success badge-pill"><i class="fas fa-map-pin"></i> {{ $terreno->lugar }} </span>
              <div class="row">

                <div class="col-xl-8 p-3">
                  <div class="card">
                    <div class="card-header p-3 mt-4">
                      <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show position-relative active height-600 with-600 border-radius-sm" id="cam1" role="tabpanel" aria-labelledby="cam1" style="background-image: url('../lote/{{ $terreno->imagen }}'); background-size:100% 100%; background-repeat: no-repeat;">
                          <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../lote{{ $terreno->imagen }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam2" role="tabpanel" aria-labelledby="cam2" style="background-image: url('../lote/{{ $terreno->imagen1 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../lote/{{ $terreno->imagen1 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam3" role="tabpanel" aria-labelledby="cam3" style="background-image: url('../lote/{{ $terreno->imagen2 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../lote/{{ $terreno->imagen2 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam4" role="tabpanel" aria-labelledby="cam4" style="background-image: url('../lote/{{ $terreno->imagen3 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../lote/{{ $terreno->imagen3 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam5" role="tabpanel" aria-labelledby="cam5" style="background-image: url('../lote/{{ $terreno->imagen4 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../lote/{{ $terreno->imagen4 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam6" role="tabpanel" aria-labelledby="cam6" style="background-image: url('../lote/{{ $terreno->imagen5 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../lote/{{ $terreno->imagen5 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam7" role="tabpanel" aria-labelledby="cam7" style="background-image: url('../lote/{{ $terreno->imagen6 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../lote/{{ $terreno->imagen6 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam8" role="tabpanel" aria-labelledby="cam8" style="background-image: url('../lote/{{ $terreno->imagen7 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../lote/{{ $terreno->imagen7 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam9" role="tabpanel" aria-labelledby="cam9" style="background-image: url('../lote/{{ $terreno->imagen8 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../lote/{{ $terreno->imagen8 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
                                <span class="btn btn-info w-auto">
                                  <i class="fas fa-compress" aria-hidden="true"></i>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade position-relative height-600 with-400 border-radius-sm" id="cam10" role="tabpanel" aria-labelledby="cam10" style="background-image: url('../lote/{{ $terreno->imagen9 }}'); background-size:100% 100%; background-repeat: no-repeat;">
                        <div class="position-absolute d-flex top-0 w-100">
                            
                            <div class="ms-auto p-3">
                              <a href="../lote/{{ $terreno->imagen9 }}" itemprop="contentUrl" data-size="500x600" target="_blank">
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
                              <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../lote/{{ $terreno->imagen }}" >
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam2" role="tab" aria-controls="cam2" aria-selected="false">
                              <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../lote/{{ $terreno->imagen1 }}" >
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam3" role="tab" aria-controls="cam3" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../lote/{{ $terreno->imagen2 }}" >

                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam4" role="tab" aria-controls="cam4" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../lote/{{ $terreno->imagen3 }}" >

                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam5" role="tab" aria-controls="cam5" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../lote/{{ $terreno->imagen4 }}" >

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
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../lote/{{ $terreno->imagen5 }}" >

                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam7" role="tab" aria-controls="cam7" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../lote/{{ $terreno->imagen6 }}" >
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam8" role="tab" aria-controls="cam8" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../lote/{{ $terreno->imagen7 }}" >
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam9" role="tab" aria-controls="cam9" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../lote/{{ $terreno->imagen8 }}" >
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam10" role="tab" aria-controls="cam10" aria-selected="false">
                            <img class="w-55 min-height-100 max-height-100 border-radius-lg shadow" src="../lote/{{ $terreno->imagen9 }}" >
                            </a>
                          </li>

                        </ul>  
                      </div>
                    </div>
                    <br>
                  </div>
                </div>



                <div class="col-lg-4 mx-auto">
                  <h3 class="mt-lg-0 mt-4">{{ $terreno->nombre }}</h3>
                  <br>
                  <h6 class="mb-0 mt-3">Precio</h6>
                  <h5>${{ $terreno->pago }}</h5>
                  <span class="badge bg-gradient-danger">{{ $terreno->facilidad }}</span> <span class="badge bg-gradient-success">Enganche: {{ $terreno->enganche }}</span>

                  <br>
                  <label class="mt-4">Descripcion</label>
                  <p> {!! html_entity_decode( $terreno->caracteristica ) !!}</p> 
                  <ul>
                    <div class="row">
                      <!---- Metros ---->
                      <div class="col-xs-6 col-sm-6 col-md-6">
                        <li><i class="fas fa-arrows-alt-h"></i> Metros: {{ $terreno->metros }}</li>
                      </div>
                      <!---- Baños ---->
                      @if ($terreno->banos == 0)
                          
                        @elseif($terreno->banos == 1)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 1/2 Baño
                        </div>
                        @elseif($terreno->banos == 2)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 2/2 Baños
                        </div>
                        @elseif($terreno->banos == 3)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 3/2 Baños
                        </div>
                        @elseif($terreno->banos == 4)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 4/2 Baños
                        </div>
                        @elseif($terreno->banos == 5)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 1 Baño
                        </div>
                        @elseif($terreno->banos == 6)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 2 Baños
                        </div>
                        @elseif($terreno->banos == 7)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 3 Baños
                        </div>
                        @elseif($terreno->banos == 8)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 4 Baños
                        </div>
                        @elseif($terreno->banos == 9)
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <li><i class="fas fa-toilet"></i> Baños: 5 Baños
                        </div>
                      @endif
                      <!---- Habitaciones ---->
                      @if ($terreno->habitaciones == 0)
                          
                          @elseif($terreno->habitaciones == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 1 Habitaciones
                          </div>
                          @elseif($terreno->habitaciones == 2)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 2 Habitaciones
                          </div>
                          @elseif($terreno->habitaciones == 3)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 3 Habitaciones
                          </div>
                          @elseif($terreno->habitaciones == 4)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 4 Habitaciones
                          </div>
                          @elseif($terreno->habitaciones == 5)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-bed"></i> 5 Habitaciones
                          </div>
                      @endif
                      <!---- Closet ---->
                      @if ($terreno->habitaciones == 0)

                          @elseif($terreno->closet == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-suitcase"></i> Closet
                          </div>
                      @endif
                      <!---- Piscina ---->
                      @if ($terreno->piscina == 0)

                          @elseif($terreno->piscina == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-swimmer"></i> 1 Piscina
                          </div>
                      @endif
                      <!---- Valcon ---->
                      @if ($terreno->valcon == 0)

                          @elseif($terreno->valcon == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-smoking"></i> Valcon
                          </div>
                      @endif
                      <!---- Valcon ---->
                      @if ($terreno->terraza == 0)

                          @elseif($terreno->terraza == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-hotel"></i> Terraza
                          </div>
                      @endif
                      <!---- Rooftop ---->
                      @if ($terreno->rooftop == 0)

                          @elseif($terreno->rooftop == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-glass-martini-alt"></i> Rooftop
                          </div>
                      @endif
                      <!---- Estacionamineto ---->
                      @if ($terreno->estacionamiento == 0)

                          @elseif($terreno->estacionamiento == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 1 Vehiculo
                          </div>
                          @elseif($terreno->estacionamiento == 2)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 2 Vehiculos
                          </div>
                          @elseif($terreno->estacionamiento == 3)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 3 Vehiculos
                          </div>
                          @elseif($terreno->estacionamiento == 4)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 4 Vehiculos
                          </div>
                          @elseif($terreno->estacionamiento == 5)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-car"></i> 5 Vehiculos
                          </div>
                      @endif
                      <!---- Seguridad ---->
                      @if ($terreno->seguridad == 0)

                          @elseif($terreno->seguridad == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-shield-alt"></i> Seguridad 24/7 hr.
                          </div>
                      @endif
                      <!---- Barda ---->
                      @if ($terreno->barda == 0)

                          @elseif($terreno->barda == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fab fa-buromobelexperte"></i> Barda
                          </div>
                      @endif
                      <!---- Áreas Verdes ---->
                      @if ($terreno->verdes == 0)

                          @elseif($terreno->verdes == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-seedling"></i> Areas Verdes
                          </div>
                      @endif
                      <!---- Parque Recreativo ---->
                      @if ($terreno->parque == 0)

                          @elseif($terreno->parque == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-volleyball-ball"></i> Parque Recreativo
                          </div>
                      @endif
                      <!---- terreno Club ---->
                      @if ($terreno->terrenoclub == 0)

                          @elseif($terreno->terrenoclub == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-dice"></i> terreno Club 
                          </div>
                      @endif
                      <!---- Porton ---->
                      @if ($terreno->porton == 0)

                          @elseif($terreno->porton == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-unlock"></i> Porton
                          </div>
                      @endif
                      <!---- FamilyRoom ---->
                      @if ($terreno->familyroom == 0)

                          @elseif($terreno->familyroom == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-tv"></i> Family Room
                          </div>
                      @endif
                      <!---- Sala ---->
                      @if ($terreno->sala == 0)

                          @elseif($terreno->sala == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fas fa-theater-masks"></i> Sala
                          </div>
                      @endif
                      <!---- Escalera ---->
                      @if ($terreno->escalera == 0)

                          @elseif($terreno->escalera == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-house-damage"></i> Escalera
                          </div>
                      @endif
                      <!---- Servicios ---->
                      @if ($terreno->recamara == 0)

                          @elseif($terreno->recamara == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-concierge-bell"></i> Recamara Huesped
                          </div>
                      @endif
                      <!---- Vestibulo ---->
                      @if ($terreno->vestibulo == 0)

                          @elseif($terreno->vestibulo == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-magic"></i> Vestibulo
                          </div>
                      @endif
                      <!---- Lavado ---->
                      @if ($terreno->lavado == 0)

                          @elseif($terreno->lavado == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-sink"></i> Área de Lavado
                          </div>
                      @endif

                       <!---- Bodega ---->
                      @if ($terreno->bodega == 0)

                          @elseif($terreno->bodega == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-igloo"></i> Bodega
                          </div>
                      @endif
                      <!---- Estudio ---->
                      @if ($terreno->estudio == 0)

                          @elseif($terreno->estudio == 1)
                          <div class="col-xs-6 col-sm-6 col-md-6">
                            <li><i class="fa fa-book-reader"></i> Estudio
                          </div>
                      @endif
                      
                    </div>
                  </ul>
                    @include("form")
                    <div class="mt-4">
                        <a href="{{ url('/terreno') }}">
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
