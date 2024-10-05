<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos de Bombeo</title>
    <link rel="stylesheet" href="{{ asset('estilos/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <img src="{{ asset('imagenes/logo.png') }}" alt="Logo" class="logo">
            <ul>
                <li><a href="#">INICIO</a></li>
                <li><a href="#">NOSOTROS</a></li>
                <li><a href="#">EQUIPOS</a></li>
                <li><a href="#">CONTACTO</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <section class="hero" id="heroCarrusel">
        <div class="hero-content">
            <h1>EQUIPOS DE BOMBEO</h1>
            <h2>DE LA MÁS ALTA CALIDAD</h2>
        </div>
        <!-- Las imágenes del carrusel se insertarán aquí por JavaScript -->
    </section>
</main>

<section class="distribuidores">
    <h2>DISTRIBUIDORES AUTORIZADOS</h2>
    <div class="card-container">
        <a href="https://www.acfirepump.com" class="card" target="_blank">
            <img src="{{ asset('imagenes/ac-fire-pump-logo.png') }}" alt="AC Fire Pump">
        </a>
        <a href="https://www.honeywell.com" class="card" target="_blank">
            <img src="{{ asset('imagenes/honeywell-logo.png') }}" alt="Honeywell">
        </a>
        <a href="https://www.cstindustries.com" class="card" target="_blank">
            <img src="{{ asset('imagenes/cst-storage-logo.png') }}" alt="CST Storage">
        </a>
        <a href="https://www.autofirex.com" class="card" target="_blank">
            <img src="{{ asset('imagenes/autofirex-logo.png') }}" alt="AutoFireX">
        </a>
    </div>
</section>

    <footer>
        <div class="contact-info">
            <p>Teléfono: +52 (123) 456 7890</p>
            <p>Correo: <a href="mailto:correo@correo.com">correo@correo.com</a></p>
        </div>
        <div class="address">
            <p>Ubicación: Santiago de Querétaro, Qro.</p>
        </div>
    </footer>

        <!-- Agrega aquí el JavaScript -->
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const heroElement = document.getElementById('heroCarrusel');
            const images = [
                'url("{{ asset("imagenes/carrusel1.png") }}")',
                'url("{{ asset("imagenes/carrusel2.png") }}")',
                'url("{{ asset("imagenes/carrusel3.png") }}")',
                'url("{{ asset("imagenes/carrusel4.png") }}")'
            ];
            let currentImageIndex = 0;

            function createImageElement(imageUrl) {
                const div = document.createElement('div');
                div.className = 'carrusel-image';
                div.style.backgroundImage = imageUrl;
                return div;
            }

            function nextImage() {
                const currentImage = heroElement.querySelector('.carrusel-image.active');
                if (currentImage) {
                    currentImage.classList.remove('active');
                }

                currentImageIndex = (currentImageIndex + 1) % images.length;
                const nextImageElement = createImageElement(images[currentImageIndex]);
                nextImageElement.classList.add('active');
                heroElement.appendChild(nextImageElement);

                if (heroElement.children.length > 2) {
                    heroElement.removeChild(heroElement.children[1]);
                }
            }

            // Iniciar el carrusel
            heroElement.appendChild(createImageElement(images[0]));
            heroElement.lastChild.classList.add('active');
            setInterval(nextImage, 5000); // Cambiar imagen cada 5 segundos
        });
    </script>
</body>
</html>