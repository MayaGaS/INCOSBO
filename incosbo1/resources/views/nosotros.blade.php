<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
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
                <a href="aprobados">Equipos Aprobados</a>
                </div>
            </li>
            <li class="dropdown">
                <a class="dropbtn">SERVICIOS <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                <a href="mantenimientos">Mantenimientos</a>
                <a href="puestas">Puestas en Marcha</a>
                <a href="obras">Obras más Relevantes</a>
            <li><a href="contacto">CONTACTO</a></li>
        </ul>
    </nav>
</header>

    <div class="hero">
    <div class="hero-content">
        <h1>INCOSBO</h1>
        <p>En su afán de ofrecer y expandir su oferta comercial, ha hecho especial énfasis en establecer vínculos comerciales con las marcas más representativas del segmento. Esto nos permite ampliar el rango de soluciones con el mejor costo-beneficio.</p>
    </div>
</div>
        </div>

        <div class="about-section">
    <div class="about-content">
        <h2>Sobre Nosotros</h2>
        <p>INCOSBO es una empresa líder en el sector de equipos de bombeo, comprometida con la excelencia y la innovación. Con años de experiencia en el mercado, nos hemos consolidado como un referente en la industria gracias a nuestra dedicación a la calidad y el servicio al cliente.</p>
        <p>Nuestro equipo de profesionales altamente capacitados trabaja constantemente para ofrecer las mejores soluciones en equipos de bombeo, adaptándonos a las necesidades específicas de cada cliente y garantizando resultados óptimos en cada proyecto.</p>
    </div>
    <div class="about-image">
        <img src="{{ asset('imagenes/sn.png') }}" alt="Equipo INCOSBO">
    </div>
</div>

        <div class="mission-vision">
            <div class="mission">
                <div class="icon"><i class="fas fa-bullseye"></i></div>
                <h2>Nuestra Misión</h2>
                <p>Ser una empresa rentable buscando un crecimiento estable en la comercialización de nuestros productos y servicios, siendo la mejor calificada y reconocida en México por calidad y servicio de nuestro equipo.</p>
            </div>
            <div class="vision">
                <div class="icon"><i class="fas fa-eye"></i></div>
                <h2>Nuestra Visión</h2>
                <p>Consolidarse como una empresa competitiva a nivel nacional, siendo la primera alternativa para nuestros clientes, con el desarrollo de nuestros equipos, manteniendo una filosofía de mejora continua que nos permita destacar en el sector industrial y del agua</p>
            </div>
        </div>

        <div class="certifications">
    <h2>Nos llena de orgullo contar con diferentes certificaciones y premios, entre los cuales resaltan:</h2>
    <div class="awards-container">
        <div class="award">
            <div class="award-icon">
                <i class="fas fa-medal"></i>
            </div>
            <div class="award-details">
                <span class="award-years">2015 - 2020</span>
                <span class="award-years">2021 - 2022</span>
                <span class="award-title">Distribuidor Internacional</span>
            </div>
        </div>
        
        <div class="award">
            <div class="award-icon">
                <i class="fas fa-trophy"></i>
            </div>
            <div class="award-details">
                <span class="award-years">2018</span>
                <span class="award-title">Distribuidor Internacional</span>
                <span class="award-subtitle">con mayor ventas</span>
            </div>
        </div>

        <div class="award">
            <div class="award-icon">
                <i class="fas fa-award"></i>
            </div>
            <div class="award-details">
                <span class="award-years">Ranking 2017</span>
                <span class="award-title">1er Lugar</span>
                <span class="award-subtitle">Zona Noroeste</span>
            </div>
        </div>

        <div class="award">
            <div class="award-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="award-details">
                <span class="award-years">Ranking 2017</span>
                <span class="award-title">2do Lugar</span>
                <span class="award-subtitle">Nacional</span>
            </div>
        </div>

        <div class="award">
            <div class="award-icon">
                <i class="fas fa-crown"></i>
            </div>
            <div class="award-details">
                <span class="award-years">Ranking 2017</span>
                <span class="award-title">3er Lugar</span>
                <span class="award-subtitle">América Latina</span>
            </div>
        </div>

        <div class="award">
            <div class="award-icon">
                <i class="fas fa-certificate"></i>
            </div>
            <div class="award-details">
                <span class="award-years">2014</span>
                <span class="award-title">Premio</span>
                <span class="award-subtitle">Baja California a la Calidad</span>
                <span class="award-subtitle">y Competitividad</span>
            </div>
        </div>
    </div>
</div>
    
    <!-- Pie de página con la información de contacto -->
    <footer>
    <div class="footer-content">
        <!-- Imagen del logo -->
        <img src="{{ asset('imagenes/logo.png') }}" alt="Imagen Footer" class="footer-logo">
        
        <!-- Información de contacto -->
        <div class="contact-info">
            <p><i class="fas fa-phone-alt"></i> Tel: +52 (442) 713 00 33</p>
            <p><i class="fas fa-envelope"></i> <a href="mailto:correo@correo.com">ventas@incosbo.com.mx</a></p>
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

