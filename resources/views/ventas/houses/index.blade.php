@extends('layouts.app')

@section('content')
<!---------- HEADER --------->
    @include("layouts.header")
<!---------- FIN HEADER --------->
<!---------- Card ------------>
    @include("ventas.houses.card")
<!---------- Fin Card ------------>

<!---------- CASAS --------->
    @include("ventas.houses.contenido")
<!---------- FIN CASAS --------->
<!--------- FOOTER -------->
    @include("layouts.footer")
<!---------- FIN FOOTER --------->
@include("ventas.houses.create")
@endsection