<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Página Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select {
            margin-bottom: 10px;
            width: 100%;
            padding: 8px;
        }
        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h2>Formulario para Página Web</h2>

    <form id="webForm" method="post" action="/generar-pagina" enctype="multipart/form-data">
        @csrf
        <label for="colorPrincipal">Color Principal:</label>
        <input type="color" id="colorPrincipal" name="colorPrincipal" required>

        <label for="colorSecundario">Color Secundario:</label>
        <input type="color" id="colorSecundario" name="colorSecundario" required>

        <label for="logo">Logo de la Página Web:</label>
        <input type="file" id="logo" name="logo" accept="image/*" required>

        <label for="productos">Productos que va a vender:</label>
        <textarea id="productos" name="productos" rows="4" required></textarea>

        <button type="submit">Generar Página Web</button>
    </form>
</body>
</html>
