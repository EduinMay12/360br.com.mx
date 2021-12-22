@extends('layouts.app')

@section('content')
<!---------- HEADER --------->
    @include("layouts.header")
<!---------- FIN HEADER --------->
<!---------- Scort ------------>
    @include("ventas.casas.card")
<!---------- Fin Scort ------------>

<!---------- CASAS --------->
    @include("ventas.casas.contenido")
<!---------- FIN CASAS --------->
<!--------- FOOTER -------->
    @include("layouts.footer")
<!---------- FIN FOOTER --------->
    @include("ventas.casas.create")
    <script type="text/javascript">
        CKEDITOR.replace('wysiwyg-editor', {
            filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>

@endsection
