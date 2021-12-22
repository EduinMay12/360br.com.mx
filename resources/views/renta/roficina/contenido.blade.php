<section class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">OFICINAS EN VENTA</h3>
        </div>
      </div>
      <div class="row">
      @foreach ($oficinas as $oficina)
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain card-blog">
            <div class="card-image border-radius-lg position-relative">
                    @can('Editar Blog')
                <form action="{{ route('oficina.destroy',$oficina->id) }}" method="POST">
                    
                    <a href="" class="btn bg-gradient-secondary w-auto">
                        <i class="fa fa-edit"></i>
                    </a>
                    @endcan

                    @can('Eliminar Blog')
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
                    @endcan
              <a href="{{ route('oficina.show',$oficina->id) }}">
                <img class="w-100 border-radius-lg move-on-hover shadow" src="https://360br.com.mx/public/oficina/{{ $oficina->imagen }}">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="{{ route('oficina.show',$oficina->id) }}" class="text-dark font-weight-bold">{{ $oficina->nombre }}</a>
              </h5>
              <p>
              {{ $oficina->descripcion }}
              </p>
              <a href="{{ route('oficina.show',$oficina->id) }}" class="text-info icon-move-right">Ver más información
                <i class="fas fa-arrow-right text-sm"></i>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>