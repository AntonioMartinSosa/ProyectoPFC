<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Página Web</title>
    <!-- Agregamos Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            color: #4CAF50;
        }
        label {
            margin-bottom: 5px;
        }
        input, select, textarea {
            margin-bottom: 10px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <h2 class="text-center">Formulario para Página Web</h2>

            <form id="webForm" method="post" action="/generar-pagina" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="colorPrincipal">Color Principal:</label>
                    <input type="color" id="colorPrincipal" name="colorPrincipal" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="colorSecundario">Color Secundario:</label>
                    <input type="color" id="colorSecundario" name="colorSecundario" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="logo">Logo de la Página Web:</label>
                    <input type="file" id="logo" name="logo" class="form-control-file" accept="image/*" required>
                </div>

                <div class="form-group">
                    <label for="productos">Productos que va a vender:</label>
                    <textarea id="productos" name="productos" rows="4" class="form-control" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Generar Página Web</button>
            </form>
        </div>
    </div>
</div>

<!-- Agregamos Bootstrap JS y Popper.js para funcionalidad opcional -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
