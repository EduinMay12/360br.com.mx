<div class="container py-7">
  <div class="row mt-3">
    <div class="col-sm-4 col-6 mx-auto">
      <!-- Button trigger modal -->

      <!-- Modal -->
      <div class="modal fade" id="exampleModalBLOG" tabindex="-1" aria-labelledby="exampleModalBLOGLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalBLOGLabel">Agregar nuevo BLOG</h5>
              <button type="button" style="color:black" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <i class="fas fa-times"></i>
              </button>
            </div>
            <div class="modal-body">


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

            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="">Portada inicio* :</label>
                        <input type="file" name="image" class="form-control" placeholder="Imagen" >
                    </div>
                </div>

                <hr>

                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <label class="form-label" for="">Imagen de BLOG 1*</label>
                      <input type="file" name="image1" class="form-control" placeholder="Imagen" >
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <label class="form-label" for="">Titulo* :</label>
                      <input type="text" name="titulo1" class="form-control" placeholder="Titulo principal del BLOG" required>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="">Tema* :</label>
                        <textarea class="ckeditor form-control" name="tema1" required></textarea>

                    </div>
                </div>

                <hr>

                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <label class="form-label" for="">Imagen de BLOG 2*</label>
                      <input type="file" name="image2" class="form-control" placeholder="Imagen" >
                  </div>
                </div>

                <hr>

                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <label class="form-label" for="">Imagen de BLOG 3*</label>
                      <input type="file" name="image3" class="form-control" placeholder="Imagen" >
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
