<!DOCTYPE html>
<html lang="es" prefix="og: http://ogp.me/ns#">
<head>
    <title>Tximista</title>

    @include('section.head.meta') {{-- The meta tags section --}}
    @include('section.head.css')  {{-- The link tags section --}}

    @section('css')
    @show {{-- The custom css --}}

</head>
<body>

    @section('body')
    @show {{-- The custom body --}}

    @include('section.body.script') {{-- The application main scripts --}}    

    @section('scripts')
    @show {{-- The custom scripts --}}

</body>
</html>