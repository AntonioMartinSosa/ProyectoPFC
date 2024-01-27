<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Ingeniería y Diseño</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">

    <!-- Font Awesome for some icons (optional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
          integrity="sha384-rNf5Kx4k5PcOvQa1KQMXqMAqJ/ZB5Sz1Hv1+cbOxMRQ+12k1egGhFgY5fj2Y8tv1"
          crossorigin="anonymous">

    <!-- Livewire Styles -->
    @livewireStyles

    <style>
        body {
            background: linear-gradient(to right, #3498db, #2c3e50); /* Fondo degradado atractivo */
            color: #fff; /* Texto en color claro para contrastar con el fondo */
            font-family: 'Arial', sans-serif; /* Tipo de fuente elegante y legible */
            margin-top: 50px; /* Espaciado superior para mejorar la visualización */
        }


        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: linear-gradient(to right, #3498db, #2c3e50); /* Degradado azul atractivo */
            color: #fff;
            border-bottom: none;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 20px;
        }

        .card-body {
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco semi-transparente para contenido */
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            padding: 20px;
        }

        .form-label {
            color: #333; /* Color de texto oscuro para etiquetas de formulario */
        }

        .btn-primary {
            background-color: #3498db; /* Color azul brillante para botones */
            border-color: #3498db; /* Borde del mismo color que el fondo */
            font-weight: bold; /* Texto más grueso para resaltar */
        }

        .btn-primary:hover {
            background-color: #2980b9; /* Color azul más oscuro al pasar el ratón */
            border-color: #2980b9;
        }

        .btn-success {
            background-color: #2ecc71; /* Color verde para botones de éxito */
            border-color: #2ecc71;
            font-weight: bold; /* Texto más grueso para resaltar */
        }

        .btn-success:hover {
            background-color: #27ae60; /* Color verde más oscuro al pasar el ratón */
            border-color: #27ae60;
        }

        .btn-block {
            border-radius: 10px; /* Bordes redondeados para botones de ancho completo */
            margin-top: 15px; /* Espaciado superior para separar los botones */
        }

        .btn-sm {
            font-size: 14px; /* Tamaño de fuente más pequeño para botones pequeños */
        }

        .text-muted {
            font-size: 14px; /* Tamaño de fuente más pequeño para texto de menor importancia */
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="mb-0">Iniciar Sesión</h4>
                    <p class="mb-0">Accede a tu cuenta para explorar nuestras herramientas.</p>
                </div>
                <div class="card-body">
                    @livewire('login-register')
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS, jQuery, and Livewire Scripts -->
<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
        integrity="sha384-eSL6rIiiz4gGkYh2kFU7i2O2Er5jqvUz8ZfHrRe18KZbF4/AUg3dPnlW9JQIPNtF"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
@livewireScripts
</body>

</html>
