document.addEventListener('DOMContentLoaded', function() {
    const heroElement = document.getElementById('heroCarrusel');
    const images = [
        '{{ asset("imagenes/carrusel1.png") }}',
        '{{ asset("imagenes/carrusel2.png") }}',
        '{{ asset("imagenes/carrusel3.png") }}',
        '{{ asset("imagenes/carrusel4.png") }}'
    ];
    let currentImageIndex = 0;

    function createImageElement(imageUrl) {
        const div = document.createElement('div');
        div.className = 'carrusel-image';
        div.style.backgroundImage = `url("${imageUrl}")`;
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

        if (heroElement.children.length > 3) { // Cambiado de 2 a 3 para incluir .hero-content
            heroElement.removeChild(heroElement.children[1]);
        }
    }

    // Iniciar el carrusel
    heroElement.appendChild(createImageElement(images[0]));
    heroElement.lastChild.classList.add('active');
    setInterval(nextImage, 5000); // Cambiar imagen cada 5 segundos
});