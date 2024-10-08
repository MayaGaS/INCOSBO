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
                <li><a href="equipos">EQUIPOS</a></li>
                <li><a href="servicios">SERVICIOS</a></li>
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

