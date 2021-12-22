  <div class="container">
  @if ($message = Session::get('success'))
    <div class="alert alert-success text-white font-weight-bold">
      <p>{{ $message }}</p>
    </div>
  @endif
    @can('Crear Blog')
    <a href="{{ route('perfil.edit') }}">
        <button type="button" class="btn bg-gradient-warning w-auto"> Regresar </button>
    </a>
    
    <a href="{{ route('blog.create') }}" class="btn bg-gradient-success w-auto" data-bs-toggle="modal" data-bs-target="#exampleModalBLOG">
         <i class="fa fa-plus"></i>
    </a>
    @endcan
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="row">
          @foreach ($blogs as $blog)
          
            <div class="col-lg-4 mb-lg-0 mb-4">
              <!-- Start Card Blog Fullbackground - text centered -->
              <a href="{{ route('blog.show',$blog->id) }}">
                <div class="card card-background move-on-hover">
                  <div class="full-background" style="background-image: url('../image/{{ $blog->image }}')"></div>
                  <div class="card-body pt-12">
                      <br>
                        <h3 class="text-white">{{ $blog->titulo1 }}</h3>
                      <br>
                  </div>
                </div>
              </a>
              <br>
              <form action="{{ route('blog.destroy',$blog->id) }}" method="POST">
              @can('Editar Blog')
              <!--a href="{{ route('blog.edit',$blog->id) }}" class="btn bg-gradient-secondary w-auto">
                <i class="fa fa-edit"></i>
              </a-->
              @endcan

              @can('Eliminar Blog')
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i>
              </button>
              </form>
              @endcan
              <!-- End Card Blog Fullbackground - text centered --><br>
            </div>
            
          @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

