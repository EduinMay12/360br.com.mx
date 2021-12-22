@extends('layouts.app')

@section('content')
<!---------- HEADER --------->
  @include("layouts.header")
<!---------- FIN HEADER --------->


    <div class="page-header min-vh-85" style="background-position-y: 50%;">

      <div class="position-absolute border-radius-lg border-top-start-radius-0 border-top-end-radius-0 border-bottom-end-radius-0 fixed-top ms-auto w-50 h-100 z-index-0 d-none d-sm-none d-md-block" style="background-image: url('../../image/{{ $blog->image }}'); background-size:cover;">
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-7 d-flex justify-content-center flex-column">
            <div class="card card-body blur d-flex justify-content-center px-5 shadow-lg mt-lg-5 mt-3 py-5">
              <h1 class="text-gradient text-primary mb-0">{{ $blog->titulo1 }}</h1>
              
            </div>
          </div>
        </div>
      </div>

    </div>
    
    <section class="py-4">
      <div class="container py-5">
        <div class="row align-items-center">

          <div class="col-md-6 mb-md-0 mb-4">
            <p class="mb-4">
              {!! html_entity_decode( $blog->tema1 ) !!}
            </p>
            
          </div>

          <div class="col-md-6">
            <div class="card p-0 rounded-3">
              <div class="blur-shadow-image">
                <img src="../../image/{{ $blog->image1 }}" class="img-fluid shadow rounded-3">
              </div>
            <div class="colored-shadow" style="background-image: url(&quot;../../image/{{ $blog->image1 }}&quot;);"></div></div>
            <br>  
            <div class="card p-0 rounded-3">
              <div class="blur-shadow-image">
                <img src="../../image/{{ $blog->image2 }}" class="img-fluid shadow rounded-3">
              </div>
            <div class="colored-shadow" style="background-image: url(&quot;../../image/{{ $blog->image2 }}&quot;);"></div></div>
            <br>
            <div class="card p-0 rounded-3">
              <div class="blur-shadow-image">
                <img src="../../image/{{ $blog->image3 }}" class="img-fluid shadow rounded-3">
              </div>
            <div class="colored-shadow" style="background-image: url(&quot;../../image/{{ $blog->image3 }}&quot;);"></div></div>
          </div>
          <br><br>
        <div class="col-lg-4 ms-auto me-auto">
          @include("form") 
        </div>
        </div>
        <a href="{{ url('blog') }}">
          <button type="button" class="btn bg-gradient-warning w-auto"> Regresar </button>
        </a>
      </div>

      <div class="row">

      </div>
    </div>
  </section>

  <!--------- FOOTER -------->
  @include("layouts.footer")
<!---------- FIN FOOTER --------->
@endsection