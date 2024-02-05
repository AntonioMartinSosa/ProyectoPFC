<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Web Generada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: {{ $colorPrincipal }};
            color: {{ $colorSecundario }};
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: {{ $colorSecundario }};
            color: {{ $colorPrincipal }};
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-shrink: 0;
        }

        .navbar-logo {
            max-width: 100px;
            margin-right: auto;
        }

        .navbar-title {
            font-size: 24px;
            margin-left: auto;
        }

        .container {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: {{ $colorSecundario }};
            color: {{ $colorPrincipal }};
        }

        .product-image {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <img src="{{ asset('storage/' . $logo) }}" alt="Logo de la Página Web" class="navbar-logo">
        <div class="navbar-title">Página Web Generada</div>
    </div>

    <div class="container">

        <table>
            <thead>
                <tr>
                    <th colspan="2">Productos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto }}</td>
                        <td><img src="" alt="Imagen" class="product-image"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
