<div class="container py-7">
  <div class="row mt-3">
    <div class="col-sm-4 col-6 mx-auto">
      <!-- Button trigger modal -->

      <!-- Modal -->
      <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModal1Label">Edita tu información de perfil</h5>
              <button type="button" style="color:black" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <i class="fas fa-times"></i>
              </button>
            </div>
            <div class="modal-body">

            <div class="text-center">
              <form enctype="multipart/form-data" action="./edit" method="POST">
                <img src="../uploads/avatars/{{ auth()->user()->avatar }}" width="200" height="200" class="rounded-circle"><br><br>
                <input type="file" name="avatar">
                <input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="pull-right btn bg-gradient-success">Guardar foto</button>
              </form>
            </div>
            <hr>

            <form method="POST" action="{{ route('perfil.update') }}" autocomplete="off">
              @csrf
              @method('put')
              <div class="row">
                <div class="col {{ $errors->has('name') ? ' has-danger' : '' }}">
                  <label class="form-control-label" for="input-name">{{ __('Nombre de la Persona*') }}</label>
                  <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus>
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
              </div> 

              <div class="row">
                <div class="col {{ $errors->has('telefono') ? ' has-danger' : '' }}">
                  <label class="form-control-label" for="input-telefono">{{ __('Telefono*') }}</label>
                  <input type="number" name="telefono" id="input-telefono" class="form-control form-control-alternative{{ $errors->has('telefono') ? ' is-invalid' : '' }}" placeholder="{{ __('Telefono') }}" value="{{ old('telefono', auth()->user()->telefono) }}" required>
                    @if ($errors->has('telefono'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('telefono') }}</strong>
                    </span>
                    @endif
                </div>
              </div>  

              <div class="row">
                <div class="col {{ $errors->has('lugar') ? ' has-danger' : '' }}">
                  <label class="form-control-label" for="input-lugar">{{ __('Lugar*') }}</label>
                  <input type="text" name="lugar" id="input-lugar" class="form-control form-control-alternative{{ $errors->has('lugar') ? ' is-invalid' : '' }}" placeholder="{{ __('Localización') }}" value="{{ old('lugar', auth()->user()->lugar) }}" >
                    @if ($errors->has('lugar'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('lugar') }}</strong>
                    </span>
                    @endif
                </div>
              </div>  

              <div class="row">
                <div class="col{{ $errors->has('email') ? ' has-danger' : '' }}">
                  <label class="form-control-label" for="input-email">{{ __('Correo Electronico*') }}</label>
                  <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
              </div>

              <div class="row">
                <div class="col {{ $errors->has('descripcion') ? ' has-danger' : '' }}">
                  <label class="form-control-label" for="input-descripcion">{{ __('Descripción*') }}</label>
                  <input type="text" name="descripcion" id="input-descripcion" class="form-control form-control-alternative{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" placeholder="{{ __('descripcion') }}" value="{{ old('lugar', auth()->user()->descripcion) }}">
                    @if ($errors->has('descripcion'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('descripcion') }}</strong>
                    </span>
                    @endif
                </div>
              </div> 

              <div class="row">
                <div class="col{{ $errors->has('facebook') ? ' has-danger' : '' }}">
                  <label class="form-control-label" for="input-facebook">{{ __('Facebook:') }}</label>
                  <input type="text" name="facebook" id="input-facebook" class="form-control form-control-alternative{{ $errors->has('facebook') ? ' is-invalid' : '' }}" placeholder="{{ __('facebook') }}" value="{{ old('facebook', auth()->user()->facebook) }}">
                  @if ($errors->has('facebook'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('facebook') }}</strong>
                    </span>
                  @endif
                </div>

                <div class="col{{ $errors->has('instagram') ? ' has-danger' : '' }}">
                  <label class="form-control-label" for="input-instagram">{{ __('instagram:') }}</label>
                  <input type="text" name="instagram" id="input-instagram" class="form-control form-control-alternative{{ $errors->has('instagram') ? ' is-invalid' : '' }}" placeholder="{{ __('instagram') }}" value="{{ old('instagram', auth()->user()->instagram) }}">

                  @if ($errors->has('instagram'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('instagram') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <br>
              <div class="text-center">
                <button type="submit" class="btn bg-gradient-success">{{ __('Guardar') }}</button>
              </div>
            </form>
            
            <hr>

            <form method="POST" action="{{ route('perfil.password') }}" autocomplete="on">
              @csrf
              @method('put')
              @if (session('password_status'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('password_status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
              <div class="row">
                <div class="col{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                  <label class="form-control-label" for="input-current-password">{{ __('Antigua Contraseña:') }}</label>
                  <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('*****') }}" value="" required>
                  @if ($errors->has('old_password'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('old_password') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="col{{ $errors->has('password') ? ' has-danger' : '' }}">
                  <label class="form-control-label" for="input-password">{{ __('Nueva Contraseña:') }}</label>
                  <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('*****') }}" value="" required>

                  @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="input-password-confirmation">{{ __('Confirmar Nueva Contraseña:') }}</label>
                  <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('*****') }}" value="" required>
                </div>
              </div><br>
              <div class="text-center">
                <button type="submit" class="btn bg-gradient-warning">{{ __('Cambiar Contraseña') }}</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>