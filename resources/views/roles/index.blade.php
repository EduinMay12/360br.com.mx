<!----
Pagina de Home los clientes podran ver y encargar sus propiedades en el sistema.
Programador Front-end y Back-end, Eduin A. May Uc.
--->
@extends('layouts.app')

@section('content')
<!---------- HEADER --------->
    @include("layouts.header")
<!---------- FIN HEADER --------->

<section class="py-7 bg-gradient-dark position-relative overflow-hidden">
    <div class="position-absolute w-100 z-inde-1 top-0 mt-n3">
      <svg width="100%" viewBox="0 -2 1920 157" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>Usuarios</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g fill="#FFFFFF" fill-rule="nonzero">
            <g>
              <path d="M0,60.8320331 C299.333333,115.127115 618.333333,111.165365 959,47.8320321 C1299.66667,-15.5013009 1620.66667,-15.2062179 1920,47.8320331 L1920,156.389409 L0,156.389409 L0,60.8320331 Z" transform="translate(960.000000, 78.416017) rotate(180.000000) translate(-960.000000, -78.416017) "></path>
            </g>
          </g>
        </g>
      </svg>
    </div>
    <div class="container-fluid py-4">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <a href="{{ route('perfil.edit') }}">
        <button type="button" class="btn bg-gradient-warning w-auto"> Regresar </button>
    </a>
      <div class="row">
        <div class="col-6">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Gestión de roles</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Roles</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($roles as $key => $role)
                    <tr>
                      <td>
                        <p class="text-xs text-secondary mb-0">{{ $role->name }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">
                        @if(!empty($rolePermissions))
                            @foreach($rolePermissions as $v)
                                <label class="label label-success">{{ $v->name }},</label>
                            @endforeach
                        @endif
                        </p>
                      </td>
                      <td class="align-middle text-center">
                      @can('Editar Rol')
                        <a class="btn bg-gradient-secondary" href="{{ route('roles.edit',$role->id) }}"> <i class="fa fa-edit"></i> </a>
                      @endcan
                    @can('Eliminar Rol')
                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('', ['class' => 'btn btn-danger fas fa-trash']) !!}
                        {!! Form::close() !!} 
                    @endcan
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            {!! $roles->render() !!}
          </div>
        </div>
 
        <div class="col-6">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Crear nuevo rol</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="card-header pb-0">
                @include("roles.create")
              </div>
            </div>
            {!! $roles->render() !!}
          </div>
        </div>
      </div>

    </div>
</section>
<!--------- FOOTER -------->
@include("layouts.footer")
<!---------- FIN FOOTER --------->
@endsection