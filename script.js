document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.querySelector(".navbar");
    let lastScrollY = window.scrollY;

    // Gérer la couleur de la navbar au défilement
    function handleScroll() {
        const currentScrollY = window.scrollY;
        const bannerHeight = document.querySelector(".banner").offsetHeight;

        // Changer la couleur de la navbar en fonction du scroll
        if (currentScrollY > bannerHeight) {
            navbar.classList.remove("transparent");
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.add("transparent");
            navbar.classList.remove("scrolled");
        }

        // Gérer l'affichage de la navbar (afficher/cacher)
        if (currentScrollY > lastScrollY && currentScrollY > 50) {
            navbar.classList.remove("visible");
            navbar.classList.add("hidden");
        } else if (currentScrollY < lastScrollY) {
            navbar.classList.remove("hidden");
            navbar.classList.add("visible");
        }

        lastScrollY = currentScrollY;
    }

    window.addEventListener("scroll", handleScroll);

    // Gérer le carrousel
    const carousel = new bootstrap.Carousel(document.querySelector('#carouselExample'), {
        interval: 5000,
        ride: 'carousel',
    });

    const pauseBtn = document.getElementById('pause-btn');
    const playBtn = document.getElementById('play-btn');

    pauseBtn.addEventListener('click', () => {
        carousel.pause();
        pauseBtn.style.display = 'none';
        playBtn.style.display = 'inline-block';
    });

    playBtn.addEventListener('click', () => {
        carousel.cycle();
        playBtn.style.display = 'none';
        pauseBtn.style.display = 'inline-block';
    });
});
