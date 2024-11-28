document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.querySelector(".navbar");
    let lastScrollY = window.scrollY;

    // Fonction pour gérer l'affichage et la couleur de la navbar au défilement
    function handleScroll() {
        const currentScrollY = window.scrollY;
        const bannerHeight = document.querySelector(".banner").offsetHeight;

        // Changer la couleur de la navbar en fonction du défilement
        if (currentScrollY > bannerHeight) {
            navbar.classList.remove("transparent");
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.add("transparent");
            navbar.classList.remove("scrolled");
        }

        // Gérer l'affichage/masquage de la navbar (afficher/cacher)
        if (currentScrollY > lastScrollY && currentScrollY > 50) {
            navbar.classList.remove("visible");
            navbar.classList.add("hidden");
        } else if (currentScrollY < lastScrollY) {
            navbar.classList.remove("hidden");
            navbar.classList.add("visible");
        }

        lastScrollY = currentScrollY;
    }

    // Écouter l'événement de défilement
    window.addEventListener("scroll", handleScroll);

    // Initialisation du carrousel Bootstrap
    const carousel = new bootstrap.Carousel(document.querySelector('#carouselExample'), {
        interval: 5000, // Intervalle de 5 secondes pour chaque image
        ride: 'carousel', // Démarre automatiquement le carrousel
    });

    // Récupération des boutons de contrôle du carrousel
    const pauseBtn = document.getElementById('pause-btn');
    const playBtn = document.getElementById('play-btn');

    // Fonction de pause du carrousel
    pauseBtn.addEventListener('click', () => {
        carousel.pause(); // Met en pause le carrousel
        pauseBtn.style.display = 'none'; // Cache le bouton de pause
        playBtn.style.display = 'inline-block'; // Affiche le bouton de lecture
    });

    // Fonction de lecture du carrousel
    playBtn.addEventListener('click', () => {
        carousel.cycle(); // Relance le carrousel
        playBtn.style.display = 'none'; // Cache le bouton de lecture
        pauseBtn.style.display = 'inline-block'; // Affiche le bouton de pause
    });
});
