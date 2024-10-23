document.addEventListener('DOMContentLoaded', function() {
    const heroElement = document.getElementById('heroCarrusel');
    const heroContent = document.getElementById('heroContent');

    let currentIndex = 0;

    function createCarouselElement(content) {
        const div = document.createElement('div');
        div.className = 'carrusel-image';
        div.style.backgroundImage = content.image;

        const textContent = document.createElement('div');
        textContent.className = 'hero-text';
        textContent.innerHTML = `
            <h1>${content.title}</h1>
            <h2>${content.subtitle}</h2>
        `;

        div.appendChild(textContent);
        return div;
    }

    function nextSlide() {
        const currentSlide = heroElement.querySelector('.carrusel-image.active');
        if (currentSlide) {
            currentSlide.classList.remove('active');
        }

        currentIndex = (currentIndex + 1) % carouselContent.length;
        const nextSlide = createCarouselElement(carouselContent[currentIndex]);
        nextSlide.classList.add('active');
        heroElement.appendChild(nextSlide);

        if (heroElement.children.length > 2) {
            heroElement.removeChild(heroElement.children[1]);
        }
    }

    heroElement.appendChild(createCarouselElement(carouselContent[0]));
    heroElement.lastChild.classList.add('active');
    setInterval(nextSlide, 5000);
});