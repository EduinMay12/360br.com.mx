<div class="container">
    <div class="page-header min-vh-50 my-sm-3 mb-3 border-radius-xl" style="background-image: url('{{ asset('assets/img/Departamentos/1.jpg') }}');">
      <span class="mask bg-gradient-dark"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 ms-lg-5">
            <h1 class="text-white">Venta de Oficinas</h1>
          </div>
        </div>
      </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success text-white font-weight-bold">
          <p>{{ $message }}</p>
        </div>
     @endif 
  </div>
  <div class="container mt-sm-1">
  @can('Crear Lotes')
    <a href="{{ route('perfil.edit') }}">
        <button type="button" class="btn bg-gradient-warning w-auto"> Regresar </button>
    </a>
    
    <a href="{{ route('oficina.create') }}" class="btn bg-gradient-success w-auto" data-bs-toggle="modal" data-bs-target="#exampleModalOficina">
         <i class="fa fa-plus"></i>
    </a>
    @endcan
  </div>