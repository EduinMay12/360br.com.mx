<!----
Pagina de Home los clientes podran ver y encargar sus propiedades en el sistema.
Programador Front-end y Back-end, Eduin A. May Uc.
--->
@extends('layouts.app')

@section('content')
<!---------- HEADER --------->
    @include("layouts.header")
<!---------- FIN HEADER --------->
@if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
@endif
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
    <img src="./../public/assets/img/shapes/waves-white.svg" class="position-absolute opacity-6 h-100 top-0 d-md-block d-none" alt="fondo">
    <div class="container pt-6 pb-5 position-relative z-index-3">
    <a href="{{ route('perfil.edit') }}">
      <button type="button" class="btn bg-gradient-warning w-auto"> Regresar </button>
    </a>
    
    <button type="button" class="btn bg-gradient-success w-auto" data-bs-toggle="modal" data-bs-target="#exampleModaluser">
      <i class="fas fa-plus text-white text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
    </button>
    
    <div class="row">
        <div class="col-md-6 mx-auto text-center">
          <h2 class="text-white mb-3">Gestión de usuarios</h2>
        </div>
      </div>
      <div class="row mt-8">
      @foreach ($data as $key => $user)
          <div class="col-md-4 mb-md-0 mb-7">
            <div class="card">
              <div class="text-center mt-n5 z-index-1">
                <div class="position-relative">
                  <div class="blur-shadow-avatar">
                    <img class="avatar avatar-xxl shadow-lg" src="../../uploads/avatars/{{ $user->avatar }}" alt="avatar">
                  </div>
                  
              </div>
            </div>
            <div class="card-body text-center pb-0">
              <h4 class="mb-0">{{ $user->name }}</h4>
              <p>{{ $user->email }}</p>
              <p class="mt-2">
              {{ $user->descripcion }}
                @if(!empty($user->getRoleNames()))
                  @foreach($user->getRoleNames() as $v)
                  <br>
                    <label class="badge bg-gradient-secondary">{{ $v }}</label>
                  @endforeach
                @endif
              </p>
              @can('Ver Lista Rol')
              
                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('', ['class' => 'btn btn-danger fas fa-trash']) !!}
                {!! Form::close() !!}
              @endcan
            </div>
          </div>
          <br><br><br>
        </div>
      @endforeach
      </div>
    </div>
    {!! $data->render() !!}
    <div class="position-absolute w-100 bottom-0">
      <svg width="100%" viewBox="0 -1 1920 166" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>wave-up</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(0.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <g transform="translate(0.000000, -5.000000)">
              <path d="M0,70 C298.666667,105.333333 618.666667,95 960,39 C1301.33333,-17 1621.33333,-11.3333333 1920,56 L1920,165 L0,165 L0,70 Z"></path>
            </g>
          </g>
        </g>
      </svg>
    </div>
  </section>



<!--------- FOOTER -------->
    @include("layouts.footer")
<!---------- FIN FOOTER --------->
@include('users.create')

@endsection