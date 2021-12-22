<!----
Pagina de Blog aqui se podra publicar cards para los clientes del sistema.
Programador Front-end y Back-end, Eduin A. May Uc.
--->
@extends('layouts.app')

@section('content')
<!---------- HEADER --------->
  @include("layouts.header")
<!---------- FIN HEADER --------->
<!---------- Card --------->
@include("blog.card")
<!---------- FIN Card --------->
<!---------- Card --------->
@include("blog.contenido")
<!---------- FIN Card --------->
<!--------- FOOTER -------->
@include("layouts.footer")
<!---------- FIN FOOTER --------->
@include("blog.create")

@endsection