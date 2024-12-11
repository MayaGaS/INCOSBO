<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos Contra Incendios</title>
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
            <li><a href="/">INICIO</a></li>
            <li><a href="nosotros">NOSOTROS</a></li>
            <li class="dropdown">
                <a class="dropbtn">EQUIPOS <i class="fas fa-caret-down"></i></a>
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

<!-- HTML para la sección de cards de PDF -->
<section class="pdf-cards-section">
    <h2 class="section-title">Equipos Contra Incendio</h2>
    <div class="pdf-cards-container">
        <!-- Card 1 -->
        <div class="pdf-card">
            <div class="pdf-card-image">
                <img src="{{ asset('imagenes/1c.png') }}" alt="Manual de Usuario">
                <div class="download-overlay">
                    <i class="fas fa-download"></i>
                </div>
            </div>
            <div class="pdf-card-content">
                <h3>EQUIPO DE PAQUETE CONTRA-INCENDIO</h3>
                <p>El paquete Contra-incendio INCOSBO incluye 2 o 3 bombas (diésel, eléctrica y jockey) conectadas a un cabezal de descarga común para suministrar caudal a una red de hidrantes y/o rociadores.</p>
                <a href="{{ asset('documentos/Ficha Técnica Equipo de Paquete Contraincendio.pdf') }}" download class="download-button">
                    <i class="fas fa-file-pdf"></i> Descargar PDF
                </a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="pdf-card">
            <div class="pdf-card-image">
                <img src="{{ asset('imagenes/2c.png') }}" alt="Catálogo de Productos">
                <div class="download-overlay">
                    <i class="fas fa-download"></i>
                </div>
            </div>
            <div class="pdf-card-content">
                <h3>TABLERO DE CONTROL PARA BOMBA CI ELÉCTRICA</h3>
                <p>El tablero de control INCOSBO cumple con los requisitos de la NFPA No. 20 y está diseñado para operar una bomba acoplada a un motor eléctrico en sistemas contra incendios.</p>
                <a href="{{ asset('documentos/Ficha Técnica Tablero Bomba CI Eléctrica.pdf') }}" download class="download-button">
                    <i class="fas fa-file-pdf"></i> Descargar PDF
                </a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="pdf-card">
            <div class="pdf-card-image">
                <img src="{{ asset('imagenes/3c.jpg') }}" alt="Ficha Técnica">
                <div class="download-overlay">
                    <i class="fas fa-download"></i>
                </div>
            </div>
            <div class="pdf-card-content">
                <h3>TABLERO DE CONTROL PARA BOMBA CI JOCKEY</h3>
                <p>El tablero de control INCOSBO se utiliza para arrancar y detener una bomba Jockey, manteniendo presurizada una red contra-incendio según la NFPA 20. Está diseñado para un motor de baja potencia y control a tensión plena.</p>
                <a href="{{ asset('documentos/Ficha Técnica Tablero Jockey.pdf') }}" download class="download-button">
                    <i class="fas fa-file-pdf"></i> Descargar PDF
                </a>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="pdf-card">
            <div class="pdf-card-image">
                <img src="{{ asset('imagenes/4c.png') }}" alt="Ficha Técnica">
                <div class="download-overlay">
                    <i class="fas fa-download"></i>
                </div>
            </div>
            <div class="pdf-card-content">
                <h3>CONTRA-INCENDIO DIESEL TC-INCSB-CI-D2M-TCP</h3>
                <p>Los tableros eléctricos TCI-INCSB-D2M-TCP de INCOSBO incluyen un puerto Ethernet con servidor MODBUS TCP/IP, permitiendo integración fácil a sistemas de supervisión y control. Con esta conexión, se pueden generar reportes, gráficos de tendencias, históricos y notificar alarmas.</p>
                <a href="{{ asset('documentos/Ficha Técnica TC-INCSB-CI-D2M-TCP.pdf') }}" download class="download-button">
                    <i class="fas fa-file-pdf"></i> Descargar PDF
                </a>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="pdf-card">
            <div class="pdf-card-image">
                <img src="{{ asset('imagenes/5c.png') }}" alt="Ficha Técnica">
                <div class="download-overlay">
                    <i class="fas fa-download"></i>
                </div>
            </div>
            <div class="pdf-card-content">
                <h3>TURBINA VERTICAL CON MOTOR ELÉCTRICO</h3>
                <p>Las bombas tipo turbina vertical con motor eléctrico INCOSBO están diseñadas para instalarse a un cabezal de descarga común, proporcionando caudal a una red de hidrantes y/o rociadores.</p>
                <a href="{{ asset('documentos/Ficha Técnica Turbina Vertical Eléctrica.pdf') }}" download class="download-button">
                    <i class="fas fa-file-pdf"></i> Descargar PDF
                </a>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="pdf-card">
            <div class="pdf-card-image">
                <img src="{{ asset('imagenes/6c.png') }}" alt="Ficha Técnica">
                <div class="download-overlay">
                    <i class="fas fa-download"></i>
                </div>
            </div>
            <div class="pdf-card-content">
                <h3>MOTOR VERTICAL DIESEL</h3>
                <p>Las bombas contra-incendio verticales diésel INCOSBO están diseñadas para instalarse a un cabezal de descarga común, proporcionando caudal a una red de hidrantes y/o rociadores.</p>
                <a href="{{ asset('documentos/Ficha Técnica Motor Vertical Diésel.pdf') }}" download class="download-button">
                    <i class="fas fa-file-pdf"></i> Descargar PDF
                </a>
            </div>
        </div>

        <!-- Card 7 -->
        <div class="pdf-card">
            <div class="pdf-card-image">
                <img src="{{ asset('imagenes/7c.png') }}" alt="Ficha Técnica">
                <div class="download-overlay">
                    <i class="fas fa-download"></i>
                </div>
            </div>
            <div class="pdf-card-content">
                <h3>TABLERO DE CONTROL PARA BOMBA CI DIESEL</h3>
                <p>Los tableros de control eléctrico INCOSBO están diseñados para controlar motores de combustión interna que impulsan bombas en redes hidráulicas de sistemas contra-incendio, cumpliendo con lo establecido en el panfleto 20 de la NFPA.</p>
                <a href="{{ asset('documentos/Ficha Técnica Tablero CI Diesel.pdf') }}" download class="download-button">
                    <i class="fas fa-file-pdf"></i> Descargar PDF
                </a>
            </div>
        </div>

        <!-- Card 8 -->
        <div class="pdf-card">
            <div class="pdf-card-image">
                <img src="{{ asset('imagenes/8c.jpg') }}" alt="Ficha Técnica">
                <div class="download-overlay">
                    <i class="fas fa-download"></i>
                </div>
            </div>
            <div class="pdf-card-content">
                <h3>CONTRA-INCENDIO ELÉCTRICO TC-INCSB-CI-E-TCP</h3>
                <p>Los tableros eléctricos TC-INCSB-CI-E-TCP de INCOSBO incluyen un puerto Ethernet con servidor MODBUS TCP/IP, permitiendo integración fácil a sistemas de supervisión y control. Con los datos compartidos, es posible crear reportes, generar gráficos de tendencias, históricos y notificar alarmas.</p>
                <a href="{{ asset('documentos/Ficha Técnica TC-INCSB-CI-E-TCP.pdf') }}" download class="download-button">
                    <i class="fas fa-file-pdf"></i> Descargar PDF
                </a>
            </div>
        </div>

        <!-- Card 9 -->
        <div class="pdf-card">
            <div class="pdf-card-image">
                <img src="{{ asset('imagenes/9c.jpg') }}" alt="Ficha Técnica">
                <div class="download-overlay">
                    <i class="fas fa-download"></i>
                </div>
            </div>
            <div class="pdf-card-content">
                <h3>BOMBA CONTRA INCENDIO HORIZONTAL DIESEL</h3>
                <p>Las bombas contra-incendio horizontales diésel INCOSBO están diseñadas para instalarse a un cabezal de descarga común, proporcionando caudal a una red de hidrantes y/o rociadores.</p>
                <a href="{{ asset('documentos/Ficha Técnica Bomba Horizontal Diesel.pdf') }}" download class="download-button">
                    <i class="fas fa-file-pdf"></i> Descargar PDF
                </a>
            </div>
        </div>

        <!-- Card 10 -->
        <div class="pdf-card">
            <div class="pdf-card-image">
                <img src="{{ asset('imagenes/10c.jpg') }}" alt="Ficha Técnica">
                <div class="download-overlay">
                    <i class="fas fa-download"></i>
                </div>
            </div>
            <div class="pdf-card-content">
                <h3>BOMBA CONTRA INCENDIO HORIZONTAL ELÉCTRICA</h3>
                <p>Las bombas contra-incendio horizontales eléctricas INCOSBO están diseñadas para instalarse a un cabezal de descarga común, proporcionando caudal a una red de hidrantes y/o rociadores.</p>
                <a href="{{ asset('documentos/Ficha Técnica Bomba Horizontal Eléctrica.pdf') }}" download class="download-button">
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
        </div>
        <!-- Nueva imagen posicionada a la izquierda y abajo -->
        <img src="{{ asset('imagenes/nfpa.jpg') }}" alt="Imagen Izquierda" class="footer-left-image">
    </div>
</footer>

    
</body>
</html>
