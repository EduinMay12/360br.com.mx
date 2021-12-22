
        <div class="container">
            <div class="row">
                @foreach ($terrenos as $terreno)
                <div class="col-lg-4 col-md-6">
                    <div class="card card-blog card-plain">
                        <div class="position-relative">
                            <a href="{{ route('terreno.show',$terreno->id) }}" class="d-block blur-shadow-image">
                                <img src="./lote/{{ $terreno->imagen }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                            </a>
                            <div class="colored-shadow" style="background-image: url(&quot;{{ $terreno->imagen }}&quot;);">
                            </div>
                        </div>
                        <div class="card-body">
                            <span class="badge bg-gradient-success badge-pill"><i class="fas fa-map-pin"></i> {{ $terreno->lugar }} </span>
                            
                                <h5>{{ $terreno->nombre }}</h5>
                           
                                <p>{{ $terreno->descripcion }}</p>
                                
                                <form action="{{ route('terreno.destroy',$terreno->id) }}" method="POST">
                                    <a href="{{ route('terreno.show',$terreno->id) }}">
                                        <button type="button" class="btn btn-info">Detalle</button>
                                    </a>
                                @can('Editar Lotes')
                                    <a href="" class="btn bg-gradient-secondary w-auto">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                @endcan
                                @can('Eliminar Lotes')
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                @endcan
                                </form>
                                
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

