@extends('layouts.app')

@section('content')
<!---------- HEADER --------->
    @include("layouts.header")
<!---------- FIN HEADER --------->
<!---------- Card ------------>
    @include("ventas.departamento.card")
<!---------- Fin Card ------------>

<!---------- DEPARTAMENTO --------->
    @include("ventas.departamento.contenido")          
<!---------- FIN DEPARTAMENTO --------->
<!--------- FOOTER -------->
    @include("layouts.footer")
<!---------- FIN FOOTER --------->
    @include("ventas.departamento.create")
@endsection
