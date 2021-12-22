<section class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">TOWNHOUSES EN VENTA</h3>
        </div>
      </div>
      <div class="row">
      @foreach ($house as $house)
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain card-blog">
            <div class="card-image border-radius-lg position-relative">
                    @can('Editar Blog')
                <form action="{{ route('houses.destroy',$house->id) }}" method="POST">
                    
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
              <a href="{{ route('houses.show',$house->id) }}">
                <img class="w-100 border-radius-lg move-on-hover shadow" src="../tonw/{{ $house->imagen }}">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="{{ route('houses.show',$house->id) }}" class="text-dark font-weight-bold">{{ $house->nombre }}</a>
              </h5>
              <p>
              {{ $house->descripcion }}
              </p>
              <a href="{{ route('houses.show',$house->id) }}" class="text-info icon-move-right">Ver más información
                <i class="fas fa-arrow-right text-sm"></i>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>