<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Web Generada</title>
    <style>
        body {
            background-color: {{ $colorPrincipal }};
            color: {{ $colorSecundario }};
            font-family: Arial, sans-serif;
            margin: 20px;
        }
    </style>
</head>
<body>

    <h2>Página Web Generada</h2>

    <p>Color Principal: {{ $colorPrincipal }}</p>
    <p>Color Secundario: {{ $colorSecundario }}</p>
    <p>Productos:</p>
    <pre>{{ $productos }}</pre>

    <!-- Puedes mostrar el logo si es necesario -->
    @if($logo)
        <img src="{{ asset('storage/'.$logo->store('logos', 'public')) }}" alt="Logo">
    @endif

</body>
</html>
