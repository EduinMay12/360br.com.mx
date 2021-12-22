@extends('layouts.app')

@section('content')

<!---------- HEADER --------->
    @include("layouts.header")
<!---------- FIN HEADER --------->

<!---------- Scort ------------>
    @include("ventas.recidencia.card")
<!---------- Fin Scort ------------>

<!---------- recidencia --------->
    @include("ventas.recidencia.contenido")
<!---------- FIN recidencia --------->

<!--------- FOOTER -------->
    @include("layouts.footer")
<!---------- FIN FOOTER --------->

    @include("ventas.recidencia.create")

@endsection
