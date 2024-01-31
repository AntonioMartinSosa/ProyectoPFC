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
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h2 {
            color: {{ $colorSecundario }};
            text-align: center;
        }

        p {
            margin-bottom: 10px;
        }

        pre {
            white-space: pre-wrap;
            word-wrap: break-word;
        }

        .logo {
            display: block;
            max-width: 200px;
            margin: 20px auto;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Página Web Generada</h2>

        <table>
            <thead>
                <tr>
                    <th>Productos</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <img src="{{ asset('storage/' . $logo) }}" alt="Logo de la Página Web">

    </div>

</body>
</html>
