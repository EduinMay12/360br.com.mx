@extends('layouts.app')

@section('content')
        <!---------- HEADER --------->
        @include("layouts.header")
        <!---------- FIN HEADER --------->

         <!-- MAIN -->
        @include("layouts.renta")
        
         <center><hr class="col-lg-9 col-md-12 col-12 btn bg-gradient-dark" disabled></center>

        @include("layouts.terreno")
        <!-- FIN MAIN -->

        <!--------- FOOTER -------->
        @include("layouts.footer")
        <!---------- FIN FOOTER --------->
@endsection