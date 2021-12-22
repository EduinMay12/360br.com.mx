<!----
Pagina de Blog aqui se podra publicar cards para los clientes del sistema.
Programador Front-end y Back-end, Eduin A. May Uc.
--->
@extends('layouts.app')

@section('content')
<!---------- HEADER --------->
  @include("layouts.header")
<!---------- FIN HEADER --------->
<div class="container mt-sm-5">
    <div class="page-header min-vh-50 my-sm-3 mb-3 border-radius-xl" style="background-image: url('https://emprendedoresnews.com/wp-content/uploads/2020/02/EMPRENDEDORES-imagen-compressed-scaled.jpg');">
      <span class="mask bg-gradient-dark"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 ms-lg-5">
            <h1 class="text-white">Editado de Blog informativo ( {{ $blog->titulo1 }} ) N.{{ $blog->id }} </h1>
          </div>
        </div>
      </div>
    </div>

    <a href="{{ url('blog') }}">
        <button type="button" class="btn bg-gradient-warning w-auto"> Regresar </button>
    </a>
    <div class="card">
        <div class="card-body">

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

            <form action="{{ route('blog.update', $blog->id) }}" method="POST">
            @csrf
            @method('PUT')

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="">Link Imagen de Facebook 1* :</label>
                        <input type="text" name="imagen1" class="form-control" value="{{ $blog->imagen1 }}" placeholder="Imagen en LINK" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="">Titulo* :</label>
                        <input type="text" name="titulo1" class="form-control" value="{{ $blog->titulo1 }}" placeholder="Titulo principal del BLOG" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="">Tema* :</label>
                        <textarea type="text" name="tema1" class="form-control" value="{{ $blog->tema1 }}" placeholder="Pequeña introducción" required>{{ $blog->tema1 }}</textarea>
                    </div>
                </div>

                <hr>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="">Tema* :</label>
                        <input type="text" name="tema2" class="form-control" value="{{ $blog->tema2 }}" placeholder="Titulo del Post" required>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="">Descripción* :</label>
                        <textarea type="text" name="descripcion" class="form-control" value="{{ $blog->descripcion }}" placeholder="Descripción" required>{{ $blog->descripcion }}</textarea>
                    </div>
                </div>

                <hr>
        
                <div class="mt-4">
                    <button type="submit" class="btn bg-gradient-success w-auto">Guardar</button>
                    <a href="{{ url('blog') }}">
                        <button type="button" class="btn bg-gradient-warning w-auto"> Regresar </button>
                    </a>
                </div>

            </form>

        </div>
    </div>
</div>


<!--------- FOOTER -------->
@include("layouts.footer")
<!---------- FIN FOOTER --------->
@endsection
