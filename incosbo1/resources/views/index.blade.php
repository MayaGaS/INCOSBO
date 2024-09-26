<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCOBOSO</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Enlace al archivo CSS -->
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Equipos</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section class="main-banner">
        <h1>Equipos de Bombeo</h1>
        <p>De la más alta calidad</p>
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

</body>
</html>
