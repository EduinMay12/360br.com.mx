<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Configuración de Pertada y Tema</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="card-header pb-0"">
                @can('Administrador')
                <form method="POST" action="{{ url('/header/' . $header->id) }}" accept-charset="UTF-8" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <br>
                    <h6 class="text-center">Texto de Portada</h6>

                    <label for="">Titulo*</label>
                    <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $header->titulo) }}">

                    <br>
                    <h6 class="text-center">Redes Sociales</h6>

                    <label for="">Facebook*</label>
                    <input type="text" name="facebook" class="form-control" value="{{ old('facebook', $header->facebook) }}">

                    <label for="">Instagram*</label>
                    <input type="text" name="instagram" class="form-control" value="{{ old('instagram', $header->instagram) }}">

                    <label for="">Correo Electronico*</label>
                    <input type="text" name="correo" class="form-control" value="{{ old('correo', $header->correo) }}">

                    <label for="">WhatsApp*</label>
                    <input type="text" name="whatsapp" class="form-control" value="{{ old('whatsapp', $header->whatsapp) }}">

                    <br>
                    <h6 class="text-center">Colores de Fondo</h6>

                    <label for="">Fondo 1 Derecho</label>
                    <input type="color" name="color1" class="form-control" value="{{ old('color1', $header->color1) }}">

                    <label for="">Fondo 2 Izquierdo</label>
                    <input type="color" id="color2" class="form-control" name="color2" value="{{ old('color2', $header->color2) }}">

                    <br>
                    <h6 class="text-center">Pie de Pagina</h6>
                    <label for="">Pie de Pagina*</label>
                    <input type="text" name="footer" class="form-control" value="{{ old('footer', $header->footer) }}">

                    <br>
                    <button type="submit" class="btn btn-success">Guardar</button>                       
                </form>
                @endcan
                </div>
            </div>
        </div>
    </div>
</div>



