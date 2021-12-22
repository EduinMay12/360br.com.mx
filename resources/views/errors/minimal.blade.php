@extends('layouts.app')

@section('content')
<br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row mt-lg-0 mt-8">
        <div class="col-lg-5 my-auto">
            <h1 class="display-1 text-bolder text-gradient text-danger fadeIn1 fadeInBottom mt-5"> @yield('code')</h1>
            <h2 class="fadeIn3 fadeInBottom opacity-8">@yield('message')</h2>
            <p class="lead opacity-6 fadeIn2 fadeInBottom">Le sugerimos que vaya a la página de inicio mientras resolvemos este problema.</p>
            <a href="https://360br.com.mx/public/">
                <button type="button" class="btn bg-gradient-warning mt-4 fadeIn2 fadeInBottom">Ir a la página de inicio</button>
            </a>
        </div>
        <div class="col-lg-7 my-auto">
            <img class="w-100 fadeIn1 fadeInBottom" src="{{ asset('assets/img/PNG/LOGO_CURVAS_360_BIENES_RAICES-09.png') }}" alt="500-error">
        </div>
    </div>
</div>

@endsection


