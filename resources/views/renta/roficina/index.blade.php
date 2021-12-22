@extends('layouts.app')

@section('content')
<!---------- HEADER --------->
    @include("layouts.header")
<!---------- FIN HEADER --------->
<!---------- Card ------------>
    @include("ventas.oficina.card")
<!---------- Fin Card ------------>

<!---------- CASAS --------->
    @include("ventas.oficina.contenido")
<!---------- FIN CASAS --------->
<!--------- FOOTER -------->
    @include("layouts.footer")
<!---------- FIN FOOTER --------->
    @include("ventas.oficina.create")
@endsection
