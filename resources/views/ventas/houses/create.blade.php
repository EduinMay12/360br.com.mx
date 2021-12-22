<div class="container py-7">
  <div class="row mt-3">
    <div class="col-sm-4 col-6 mx-auto">
      <!-- Button trigger modal -->

      <!-- Modal -->
      <div class="modal fade" id="exampleModalhouse" tabindex="-1" aria-labelledby="exampleModalhouseLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalhouseLabel">Agregar nueva Town House en venta</h5>
              <button type="button" style="color:black" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <i class="fas fa-times"></i>
              </button>
            </div>
            <div class="modal-body">
            <h6 class="form-label text-center" for="">Portada</h6>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>¡Ups!</strong> Hubo algunos problemas con su entrada. <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('houses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="">Nombre* :</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre o Titulo del producto" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="">Descripción* :</label>
                        <textarea type="text" name="descripcion" class="form-control" placeholder="Pequeña descripción de portada" required></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="">Imagen de portada, Inicio* :</label>
                        <input type="file" name="imagen" class="form-control" placeholder="Imagen de portada" required>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="">Localización* :</label>
                        <input type="text" name="lugar" class="form-control" placeholder="Escribe el lugar deonde se localiza" required>
                    </div>
                </div>
                <hr>
                <h6 class="form-label text-center" for="">Detalles</h6>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="">Metros* :</label>
                        <input type="text" name="metros" class="form-control" placeholder="Escribe los metros del producto" required>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="">Precio* :</label>
                        <input type="text" name="pago" class="form-control" placeholder="Escribe el costo $$$" required>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="">Facilidad de Pago* :</label>
                        <input type="text" name="facilidad" class="form-control" placeholder="Ejem. 123 Meses sin interes" required>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="">Enganche* :</label>
                        <input type="text" name="enganche" class="form-control" placeholder="Ejem. 12%" required>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="">Caracteristica del producto* :</label>
                        <textarea class="ckeditor form-control" name="caracteristica" required></textarea>
                    </div>
                </div>
                <hr>
                <h6 class="form-label text-center" for="">Características</h6>

                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Baños :</label>
                            <select class="form-control" name="banos">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> 1/2 Baño</option>
                                <option value="2"> 2/2 Baños</option>
                                <option value="3"> 3/2 Baños</option>
                                <option value="4"> 4/2 Baños</option>
                                <option value="5"> 1 Baño</option>
                                <option value="6"> 2 Baños</option>
                                <option value="7"> 3 Baños</option>
                                <option value="8"> 4 Baños</option>
                                <option value="9"> 5 Baños</option>
                            </select>                        
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Habitaciones :</label>
                            <select class="form-control" name="habitaciones">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> 1 Habitaciones</option>
                                <option value="2"> 2 Habitaciones</option>
                                <option value="3"> 3 Habitaciones</option>
                                <option value="4"> 4 Habitaciones</option>
                                <option value="5"> 5 Habitaciones</option>
                            </select>                        
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Closet :</label>
                            <select class="form-control" name="closet">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                         
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Piscina :</label>
                            <select class="form-control" name="piscina">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                         
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Valcon :</label>
                            <select class="form-control" name="valcon">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                         
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Terraza :</label>
                            <select class="form-control" name="terraza">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                         
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-3 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Rooftop :</label>
                            <select class="form-control" name="rooftop">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                         
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Estacionamineto :</label>
                            <select class="form-control" name="estacionamiento">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> 1 Vehículo</option>
                                <option value="2"> 2 Vehículos</option>
                                <option value="3"> 3 Vehículos</option>
                                <option value="4"> 4 Vehículos</option>
                                <option value="5"> 5 Vehículos</option>
                            </select>                        
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Seguridad :</label>
                            <select class="form-control" name="seguridad">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                         
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-3 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Barda :</label>
                            <select class="form-control" name="barda">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                         
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Areas Verdes :</label>
                            <select class="form-control" name="verdes">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                         
                        </div>
                    </div>

                    <div class="col-xs-3 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Parque Recreativo :</label>
                            <select class="form-control" name="parque">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                        
                         </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Casa Club :</label>
                            <select class="form-control" name="casaclub">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                         
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Terraza :</label>
                            <select class="form-control" name="terraza">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                         
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Porton :</label>
                            <select class="form-control" name="porton">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                         
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Family Room :</label>
                            <select class="form-control" name="familyroom">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                         
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Sala :</label>
                            <select class="form-control" name="sala">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                        
                         </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Escalera :</label>
                            <select class="form-control" name="escalera">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                         
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Recamara Huesped :</label>
                            <select class="form-control" name="recamara">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                         
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Vestibulo :</label>
                            <select class="form-control" name="vestibulo">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                         
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Bodega :</label>
                            <select class="form-control" name="bodega">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>                        
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Área de Lavado :</label>
                            <select class="form-control" name="lavado">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                                
                            </select>                        
                        </div>
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="">Estudio :</label>
                            <select class="form-control" name="estudio">
                                <option value="">Seleccionar</option>
                                <option value="0"> No </option>
                                <option value="1"> Si </option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <hr>
                <hr>
                 <h6 class="form-label text-center" for="">Imagenes de Facebook</h6>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="">Imagen 1* :</label>
                            <input type="file" name="imagen1" class="form-control" placeholder="Link de Facebook 1" required>
                        </div>
                    </div>
    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="">Imagen 2* :</label>
                            <input type="file" name="imagen2" class="form-control" placeholder="Link de Facebook 2" required>
                        </div>
                    </div>
    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="">Imagen 3* :</label>
                            <input type="file" name="imagen3" class="form-control" placeholder="Link de Facebook 3" required>
                        </div>
                    </div>
    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="">Imagen 4* :</label>
                            <input type="file" name="imagen4" class="form-control" placeholder="Link de Facebook 4" required>
                        </div>
                    </div>
    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="">Imagen 5* :</label>
                            <input type="file" name="imagen5" class="form-control" placeholder="Link de Facebook 5" required>
                        </div>
                    </div>
    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="">Imagen 6* :</label>
                            <input type="file" name="imagen6" class="form-control" placeholder="Link de Facebook 6" required>
                        </div>
                    </div>
                   
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="">Imagen 7* :</label>
                            <input type="file" name="imagen7" class="form-control" placeholder="Link de Facebook 7" required>
                        </div>
                    </div>
    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="">Imagen 8* </label>
                            <input type="file" name="imagen8" class="form-control" placeholder="Link de Facebook 8" required>
                        </div>
                    </div>
    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="">Imagen 9* :</label>
                            <input type="file" name="imagen9" class="form-control" placeholder="Link de Facebook 9" required>
                        </div>
                    </div>
        
                <div class="mt-4">
                    <button type="submit" class="btn bg-gradient-success w-auto">Guardar</button>
                </div>

            </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




