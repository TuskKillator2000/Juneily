let slideIndex = 0;

function showSlides(n) {
    const slides = document.getElementsByClassName("slide");
    
    if (n >= slides.length) { slideIndex = 0; }
    if (n < 0) { slideIndex = slides.length - 1; }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.transform = `translateX(${-slideIndex * 100}%)`;
        slides[i].classList.remove('active');
        if (i === slideIndex) {
            slides[i].classList.add('active');
        }
    }
}

function changeSlide(n) {
    slideIndex += n;
    showSlides(slideIndex);
}

// Mostrar la primera imagen al cargar
showSlides(slideIndex);