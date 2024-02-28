<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $empresa }} - Tienda Online</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;700&display=swap"
          rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: {{ $colorPrincipal }};
            color: {{ $colorSecundario }};
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        header {
            background-color: {{ $colorSecundario }};
            color: {{ $colorPrincipal }};
            padding: 1.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 2;
        }

        header img {
            max-width: 150px;
        }

        header h1 {
            font-size: 2rem;
            margin-left: 1rem;
            font-weight: 700;
        }

        main {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            color: {{ $colorSecundario }}
        }

        section {
            background-color: #f9f9f9;
            border-radius: 20px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            width: 100%;
            max-width: 1200px;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
            color: {{ $colorPrincipal }};
        }

        .product {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .product::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.1));
            z-index: 1;
            transition: opacity 0.3s ease;
        }

        .product:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        .product:hover::before {
            opacity: 0;
        }

        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 20px;
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease;
            z-index: 0;
        }

        .product:hover img {
            transform: scale(1.1);
        }

        .product h2 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-top: 1.5rem;
            color: #333;
        }

        .product p {
            color: #555;
            margin-top: 1rem;
            line-height: 1.6;
        }

        .product .price {
            font-size: 1.5rem;
            font-weight: 700;
            color: #e44d26;
            margin-top: 1.5rem;
        }

        footer {
            background-color: {{ $colorSecundario }};
            color: {{ $colorPrincipal }};
            padding: 1rem;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 2rem;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>

<body class="font-sans">

<header>
    <img src="{{ asset('storage/' . $logo) }}" alt="Logo de la Página Web">
    <h1>{{ $empresa }}</h1>
</header>

<main>
    <section class="mt-8 mx-auto">
        <h1 class="text-4xl font-semibold mb-8">{{ $empresa }} - Descubre Nuestros Productos</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @foreach ($productos as $producto)
                <div class="product">
                    <img src="{{ asset('storage/' . $producto['foto']) }}" alt="Imagen del Producto"
                         class="mx-auto transition-transform duration-300 ease-in-out transform hover:scale-105">
                    <h2>{{ $producto['nombre'] }}</h2>
                    <p>{{ $producto['descripcion'] }}</p>
                    <div class="price">${{ $producto['precio'] }}</div>
                </div>
            @endforeach
        </div>
    </section>
</main>

<footer>
    <p>&copy; {{ date('Y') }} {{ $empresa }} - Todos los derechos reservados.</p>
    <button id="downloadButton">Descargar Página</button>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.0/jszip.min.js"></script>
<script>
    document.getElementById('downloadButton').addEventListener('click', function () {
        var button = this; // Referencia al botón de descarga

        button.style.display = 'none';

        var zip = new JSZip();

        // Función para descargar una imagen y agregarla al archivo ZIP
        function addImageToZip(imageUrl, zip, filename) {
            return new Promise((resolve, reject) => {
                // Descargar la imagen como blob
                fetch(imageUrl)
                    .then(response => response.blob())
                    .then(blob => {
                        // Agregar la imagen al archivo ZIP
                        zip.file(filename, blob);
                        resolve();
                    })
                    .catch(error => {
                        console.error('Error al descargar la imagen:', error);
                        reject(error);
                    });
            });
        }

        // Agregar el HTML de la página al archivo ZIP
        var htmlContent = document.documentElement.outerHTML;
        zip.file('index.html', htmlContent);

        // Obtener todas las imágenes de la página
        var images = document.querySelectorAll('img');
        var promises = [];

        // Recorrer todas las imágenes y agregarlas al archivo ZIP
        images.forEach((image, index) => {
            var imageUrl = image.src;
            var filename = 'image_' + index + '.' + imageUrl.split('.').pop(); // Nombre de archivo único
            promises.push(addImageToZip(imageUrl, zip, filename));
        });

        // Generar el archivo ZIP después de que se hayan agregado todas las imágenes
        Promise.all(promises)
            .then(() => {
                zip.generateAsync({ type: "blob" })
                    .then(function (content) {
                        // Crear un enlace para la descarga
                        var link = document.createElement('a');
                        link.download = "pagina.zip";
                        link.href = window.URL.createObjectURL(content);
                        link.click();
                    });
            })
            .catch(error => {
                console.error('Error al agregar imágenes al ZIP:', error);
            });
    });
</script>

</body>
</html>
