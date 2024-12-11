<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCOSBO</title>
    <link rel="stylesheet" href="{{ asset('estilos/style.css') }}">
    <!-- Añadir Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="assets/imagenes/logo.png" type="imagenes/png">
</head>

<body>
    <!-- Cabecera de la página -->
    <header>
    <nav>
        <!-- Logo de la empresa -->
        <img src="{{ asset('imagenes/logo.png') }}" alt="Logo" class="logo">
        <!-- Menú de navegación -->
        <ul>
            <li><a href="welcome">INICIO</a></li>
            <li><a href="nosotros">NOSOTROS</a></li>
            <li class="dropdown">
                <a href="equipos" class="dropbtn">EQUIPOS <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                <a href="hidroneumaticos">Hidroneumáticos</a>
                <a href="contraincendios">Contra-Incendios</a>
                <a href="limf">LIMF</a>
                </div>
            </li>
            <li><a href="servicios">SERVICIOS</a></li>
            <li><a href="contacto">CONTACTO</a></li>
        </ul>
    </nav>
</header>

    <!-- Contenido principal de la página -->
    <main>
        <!-- Sección Hero, utilizada como imagen destacada principal con textos descriptivos -->
        <section class="hero" id="heroCarrusel">
            <div class="hero-content">
                <!-- Título y subtítulo dinámicos del carrusel -->
                <h1 id="carrusel-title">EQUIPOS DE BOMBEO</h1>
                <h2 id="carrusel-subtitle">DE LA MÁS ALTA CALIDAD</h2>
            </div>
        </section>
    </main>

    <!-- Sección de distribuidores autorizados -->
    <section class="distribuidores">
        <h2>DISTRIBUIDORES AUTORIZADOS</h2>
        <div class="card-container">
            <!-- Distribuidores autorizados con sus respectivos enlaces e imágenes -->
            <a href="https://www.bombasklassen.com/" class="card" target="_blank">
                <img src="{{ asset('imagenes/BKlogo.png') }}" alt="KLASSEN">
            </a>
            <a href="https://www.blue-tank.net/inicio" class="card" target="_blank">
                <img src="{{ asset('imagenes/BTlogo.png') }}" alt="BLUE TANK">
            </a>
            <a href="https://www.clarkefire.com/" class="card" target="_blank">
                <img src="{{ asset('imagenes/Clogo.png') }}" alt="CLARKE">
            </a>
            <a href="https://franklinelectric.com.mx/" class="card" target="_blank">
                <img src="{{ asset('imagenes/FElogo.png') }}" alt="FRANKLIN ELECTRONIC">
            </a>
            <a href="https://firetrol.com/" class="card" target="_blank">
                <img src="{{ asset('imagenes/Flogo.png') }}" alt="FIRETROL">
            </a>
            <a href="https://product-selection.grundfos.com/mx/categories/pumps?tab=categories" class="card" target="_blank">
                <img src="{{ asset('imagenes/Glogo.png') }}" alt="GRUNDFOS">
            </a>
            <a href="https://www.tornatech.com/" class="card" target="_blank">
                <img src="{{ asset('imagenes/TTlogo.png') }}" alt="TORNATECH">
            </a>
            <a href="https://mortonpumps.com/goulds-pumps/" class="card" target="_blank">
                <img src="{{ asset('imagenes/WTlogo.png') }}" alt="WATER TECHNOLOGY">
            </a>
            <a href="https://www.peerlesspump.com/" class="card" target="_blank">
                <img src="{{ asset('imagenes/PPlogo.png') }}" alt="PEERLESS PUMP">
            </a>
        </div>
    </section>

    <!-- Pie de página con la información de contacto -->
    <footer>
        <div class="footer-content">
            <!-- Imagen del logo -->
            <img src="{{ asset('imagenes/logo.png') }}" alt="Imagen Footer" class="footer-logo">
            <!-- Información de contacto -->
        <div class="contact-info">
            <p><i class="fas fa-phone-alt"></i> +52 (123) 456 7890</p>
            <p><i class="fas fa-envelope"></i> <a href="mailto:correo@correo.com">correo@correo.com</a></p>
            <a href="https://www.google.com.mx/maps/place/INCOSBO/@20.6489726,-100.4667376,17z/data=!3m1!4b1!4m6!3m5!1s0x85d351b7087f97ad:0x9a95ca5e4f233b99!8m2!3d20.6489676!4d-100.4641627!16s%2Fg%2F11nmp30pbv?entry=ttu&g_ep=EgoyMDI0MTIwOC4wIKXMDSoASAFQAw%3D%3D" target="_blank">
            <p><i class="fas fa-map-marker-alt"></i> C. Tomillo 6, El Romerillal, 76118 </p>
            <p> Santiago de Querétaro, Qro.</p>
            <!-- Sección de redes sociales -->
        <div class="social-icons">
            <a href="https://www.facebook.com/tu-pagina" target="_blank" class="social-button facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/tu-pagina" target="_blank" class="social-button instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.x.com/tu-pagina" target="_blank" class="social-button x-twitter"><i class="fab fa-x-twitter"></i></a>
            <a href="https://wa.me/tu-numero" target="_blank" class="social-button whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
            <!-- Nueva imagen posicionada a la izquierda y abajo -->
            <img src="{{ asset('imagenes/nfpa.jpg') }}" alt="Imagen Izquierda" class="footer-left-image">
        </div>
    </footer>

    <!-- JavaScript para manejar el carrusel de imágenes en la sección hero -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elemento que contiene las imágenes del carrusel
            const heroElement = document.getElementById('heroCarrusel');
            // Elementos de título y subtítulo para cambiar los textos dinámicamente
            const titleElement = document.getElementById('carrusel-title');
            const subtitleElement = document.getElementById('carrusel-subtitle');
            
            // Array con las URLs de las imágenes que se mostrarán en el carrusel
            const images = [
                'url("{{ asset("imagenes/carrusel1.jpg") }}")',
                'url("{{ asset("imagenes/carrusel2.jpg") }}")',
                'url("{{ asset("imagenes/carrusel3.jpg") }}")',
                'url("{{ asset("imagenes/carrusel4.png") }}")'
            ];

            // Array con los textos asociados a cada imagen
            const titles = [
                'EQUIPO DE PRESIÓN CONSTANTE',
                'BOMBAS CENTRÍFUGAS',
                'BOMBEO CONTRA INCENDIOS',
                'SOLUCIONES INTEGRALES DE BOMBEO'
            ];

            const subtitles = [
                'Eficiencia y durabilidad garantizadas',
                'Equipos versátiles para aplicaciones industriales',
                'Seguridad y fiabilidad en situaciones críticas',
                'La tecnología más avanzada a tu servicio'
            ];

            // Índice que representa la imagen actual
            let currentImageIndex = 0;

            // Función para crear un elemento de imagen dentro del carrusel
            function createImageElement(imageUrl) {
                const div = document.createElement('div');
                div.className = 'carrusel-image'; // Se le asigna una clase CSS para estilo
                div.style.backgroundImage = imageUrl; // Se establece la imagen de fondo usando la URL
                return div;
            }

            // Función que avanza a la siguiente imagen en el carrusel
            function nextImage() {
                // Se obtiene la imagen actualmente activa
                const currentImage = heroElement.querySelector('.carrusel-image.active');
                if (currentImage) {
                    // Si hay una imagen activa, se le quita la clase 'active'
                    currentImage.classList.remove('active');
                }

                // Se incrementa el índice de la imagen actual de forma cíclica
                currentImageIndex = (currentImageIndex + 1) % images.length;
                // Se crea el nuevo elemento de la siguiente imagen
                const nextImageElement = createImageElement(images[currentImageIndex]);
                nextImageElement.classList.add('active'); // Se añade la clase 'active' para la nueva imagen
                heroElement.appendChild(nextImageElement); // Se añade la nueva imagen al DOM

                // Actualizar los textos asociados a la imagen actual
                titleElement.textContent = titles[currentImageIndex];
                subtitleElement.textContent = subtitles[currentImageIndex];

                // Si hay más de dos elementos en el carrusel, se elimina el segundo para mantener sólo una imagen visible
                if (heroElement.children.length > 2) {
                    heroElement.removeChild(heroElement.children[1]);
                }
            }

            // Se añade la primera imagen del carrusel al cargarse la página
            heroElement.appendChild(createImageElement(images[0]));
            heroElement.lastChild.classList.add('active'); // Se marca como activa
            // Se establece un intervalo para cambiar la imagen y los textos cada 5 segundos
            setInterval(nextImage, 5000);
        });
    </script>
</body>
</html>
