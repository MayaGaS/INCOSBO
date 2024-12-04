<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos de Bombeo</title>
    <link rel="stylesheet" href="{{ asset('estilos/style.css') }}">
    <!-- Añadir Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Cabecera de la página -->
    <header>
    <nav>
        <!-- Logo de la empresa -->
        <img src="{{ asset('imagenes/logo.png') }}" alt="Logo" class="logo">
        <!-- Menú de navegación -->
        <ul>
            <li><a href="#">INICIO</a></li>
            <li><a href="nosotros">NOSOTROS</a></li>
            <li class="dropdown">
                <a href="equipos" class="dropbtn">EQUIPOS <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a href="#">Hidroneumáticos</a>
                    <a href="#">Contra-Incendios</a>
                </div>
            </li>
            <li><a href="servicios">SERVICIOS</a></li>
            <li><a href="contacto">CONTACTO</a></li>
        </ul>
    </nav>
</header>

<!-- HTML para la sección de cards de PDF -->
<section class="pdf-cards-section">
    <h2 class="section-title">Equipos Hidroneumáticos</h2>
    <div class="pdf-cards-container">
        <!-- Card 1 -->
        <div class="pdf-card">
            <div class="pdf-card-image">
                <img src="{{ asset('imagenes/1h.png') }}" alt="Manual de Usuario">
                <div class="download-overlay">
                    <i class="fas fa-download"></i>
                </div>
            </div>
            <div class="pdf-card-content">
                <h3>Equipo de Paquete Contra-Incendio</h3>
                <p> El paquete Contra-incendio INCOSBO incluye 2 o 3 bombas (diésel, eléctrica y jockey) conectadas a un cabezal común para suministrar caudal a redes de hidrantes y/o rociadores.</p>
                <a href="{{ asset('documentos/Ficha Técnica Equipo de Paquete Contraincendio.pdf') }}" download class="download-button">
                    <i class="fas fa-file-pdf"></i> Descargar PDF
                </a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="pdf-card">
            <div class="pdf-card-image">
                <img src="{{ asset('imagenes/2h.png') }}" alt="Catálogo de Productos">
                <div class="download-overlay">
                    <i class="fas fa-download"></i>
                </div>
            </div>
            <div class="pdf-card-content">
                <h3>Contra-Incendio Diesel TC-INCSB-CI-D2M-TCP</h3>
                <p>Incluye un puerto Ethernet con servidor MODBUS TCP/IP, permitiendo fácil integración a sistemas de supervisión para reportes, gráficos de tendencias, históricos y notificación de alarmas.</p>
                <a href="{{ asset('documentos/Ficha Técnica TC-INCSB-CI-D2M-TCP.pdf') }}" download class="download-button">
                    <i class="fas fa-file-pdf"></i> Descargar PDF
                </a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="pdf-card">
            <div class="pdf-card-image">
                <img src="{{ asset('imagenes/3h.png') }}" alt="Ficha Técnica">
                <div class="download-overlay">
                    <i class="fas fa-download"></i>
                </div>
            </div>
            <div class="pdf-card-content">
                <h3>Tablero de Control para Bomba CI Jockey</h3>
                <p>Permite gestionar el arranque y paro de una bomba Jockey para mantener la presión en redes contra incendios, cumpliendo con los estándares de la NFPA 20. Está diseñado para motores de baja potencia con control a tensión plena.</p>
                <a href="{{ asset('documentos/Ficha Técnica Tablero Jockey.pdf') }}" download class="download-button">
                    <i class="fas fa-file-pdf"></i> Descargar PDF
                </a>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="pdf-card">
            <div class="pdf-card-image">
                <img src="{{ asset('imagenes/4h.png') }}" alt="Ficha Técnica">
                <div class="download-overlay">
                    <i class="fas fa-download"></i>
                </div>
            </div>
            <div class="pdf-card-content">
                <h3>Tablero de Control para Bomba CI Eléctrica</h3>
                <p>Cumple con los requisitos de la NFPA 20 y está diseñado para operar una bomba con motor eléctrico en sistemas contra incendios.</p>
                <a href="{{ asset('documentos/Ficha Técnica Tablero Bomba CI Eléctrica.pdf') }}" download class="download-button">
                    <i class="fas fa-file-pdf"></i> Descargar PDF
                </a>
            </div>
        </div>
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
            <a href="https://www.google.com/maps/dir//INCOSBO+C.+Tomillo+6+El+Romerillal+76118+Santiago+de+Quer%C3%A9taro,+Qro./@20.6448044,-100.461658,13.75z/data=!4m8!4m7!1m0!1m5!1m1!1s0x85d351b7087f97ad:0x9a95ca5e4f233b99!2m2!1d-100.4641589!2d20.6489759?entry=ttu&g_ep=EgoyMDI0MTAwMi4xIKXMDSoASAFQAw%3D%3D" target="_blank">
            <p><i class="fas fa-map-marker-alt"></i> C. Tomillo 6, El Romerillal, 76118 </p>
            <p> Santiago de Querétaro, Qro.</p>
            
                    <!-- Sección de redes sociales -->
        <div class="social-icons">
            <a href="https://www.facebook.com/tu-pagina" target="_blank" class="social-button facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/tu-pagina" target="_blank" class="social-button instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.x.com/tu-pagina" target="_blank" class="social-button x-twitter"><i class="fab fa-x-twitter"></i></a>
            <a href="https://wa.me/tu-numero" target="_blank" class="social-button whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
        </div>
        <!-- Nueva imagen posicionada a la izquierda y abajo -->
        <img src="{{ asset('imagenes/nfpa.jpg') }}" alt="Imagen Izquierda" class="footer-left-image">
    </div>
</footer>

    
</body>
</html>
