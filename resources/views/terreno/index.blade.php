<!----
Pagina de Terrnos en esta vista los clientes registrados podrn vender sus propiedades .
Programador Front-end y Back-end, Eduin A. May Uc.
--->
@extends('layouts.app')

@section('content')
<!---------- HEADER --------->
    @include("layouts.header")
<!---------- FIN HEADER --------->
<!---------- Scort ------------>
    @include("terreno.card")
<!---------- Fin Scort ------------>

<!---------- TERRENO --------->
    @include("terreno.contenido")
<!---------- FIN TERRENO --------->
<!--------- FOOTER -------->
    @include("layouts.footer")
<!---------- FIN FOOTER --------->
    @include("terreno.create")
@endsection
