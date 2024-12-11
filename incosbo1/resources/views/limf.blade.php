<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIMF</title>
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
    <h2 class="section-title">LIMF</h2>
    <div class="pdf-cards-container">
        <!-- Card 1 -->
        <div class="pdf-card">
            <div class="pdf-card-image">
                <img src="{{ asset('imagenes/1l.png') }}" alt="Manual de Usuario">
                <div class="download-overlay">
                    <i class="fas fa-download"></i>
                </div>
            </div>
            <div class="pdf-card-content">
                <h3>Bombas Contra Incendio</h3>
                <p> Horizontales de Carcaza Bipartida, Turbina Vertical, En-Línea y Succión al Extremo</p>
                <a href="{{ asset('documentos/B-1500_Fire Product Line_4-pg Brochure.pdf') }}" download class="download-button">
                    <i class="fas fa-file-pdf"></i> Descargar PDF
                </a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="pdf-card">
            <div class="pdf-card-image">
                <img src="{{ asset('imagenes/2l.png') }}" alt="Manual de Usuario">
                <div class="download-overlay">
                    <i class="fas fa-download"></i>
                </div>
            </div>
            <div class="pdf-card-content">
                <h3>Soluciones de Bombas Contra Incendios de Grundfos</h3>
                <p></p>
                <a href="{{ asset('documentos/L001_Peerless FIre_B-1500 brochure Low res.pdf') }}" download class="download-button">
                    <i class="fas fa-file-pdf"></i> Descargar PDF
                </a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="pdf-card">
            <div class="pdf-card-image">
                <img src="{{ asset('imagenes/3l.png') }}" alt="Ficha Técnica">
                <div class="download-overlay">
                    <i class="fas fa-download"></i>
                </div>
            </div>
            <div class="pdf-card-content">
                <h3>PES</h3>
                <p>Peerleess Engineered Systems</p>
                <a href="{{ asset('documentos/PEERLESS-Brochure_9-08.pdf') }}" download class="download-button">
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
