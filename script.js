// Détection du défilement pour changer la couleur de la navbar
document.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    const bannerHeight = document.querySelector(".banner").offsetHeight;

    if (window.scrollY > bannerHeight) {
        navbar.classList.remove("transparent");
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.add("transparent");
        navbar.classList.remove("scrolled");
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const audioPlayer = document.getElementById('audio-player');
    const playPauseButton = document.getElementById('play-pause');
    const progressBar = document.getElementById('progress-bar');
    const currentTimeDisplay = document.getElementById('current-time');
    const durationDisplay = document.getElementById('duration');

    // Play/Pause Button
    playPauseButton.addEventListener('click', () => {
        if (audioPlayer.paused) {
            audioPlayer.play();
            playPauseButton.textContent = '⏸'; // Change to pause symbol
        } else {
            audioPlayer.pause();
            playPauseButton.textContent = '▶'; // Change to play symbol
        }
    });

    // Update progress bar and time displays
    audioPlayer.addEventListener('timeupdate', () => {
        const progress = (audioPlayer.currentTime / audioPlayer.duration) * 100;
        progressBar.value = progress || 0; // Prevent NaN if duration is not loaded
        currentTimeDisplay.textContent = formatTime(audioPlayer.currentTime);
    });

    // Update audio current time when progress bar is changed
    progressBar.addEventListener('input', () => {
        const seekTime = (progressBar.value / 100) * audioPlayer.duration;
        audioPlayer.currentTime = seekTime;
    });

    // Set duration once metadata is loaded
    audioPlayer.addEventListener('loadedmetadata', () => {
        durationDisplay.textContent = formatTime(audioPlayer.duration);
    });

    // Format time in minutes:seconds
    function formatTime(seconds) {
        const minutes = Math.floor(seconds / 60);
        const secs = Math.floor(seconds % 60);
        return `${minutes}:${secs < 10 ? '0' : ''}${secs}`;
    }
});// Gestion du menu qui disparaît en défilant et réapparaît à l'arrêt
let lastScrollY = 0;
const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
    const currentScrollY = window.scrollY;

    if (currentScrollY > lastScrollY) {
        // Disparaît lors du défilement vers le bas
        navbar.style.transform = "translateY(-100%)";
    } else {
        // Réapparaît lors de l'arrêt ou défilement vers le haut
        navbar.style.transform = "translateY(0)";
    }

    lastScrollY = currentScrollY;
});
document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.querySelector(".navbar");
    let lastScrollY = 0;

    window.addEventListener("scroll", () => {
        const currentScrollY = window.scrollY;

        if (currentScrollY > lastScrollY && currentScrollY > 50) {
            // Si on descend, cacher la navbar
            navbar.classList.remove("visible");
            navbar.classList.add("hidden");
        } else if (currentScrollY < lastScrollY) {
            // Si on monte, afficher la navbar
            navbar.classList.remove("hidden");
            navbar.classList.add("visible");
        }

        lastScrollY = currentScrollY;
    });

    // Cacher le menu initialement
    navbar.classList.add("hidden");
});

document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.querySelector(".navbar");

    // Ajouter un événement sur le défilement
    window.addEventListener("scroll", () => {
        // Faire apparaître le menu seulement si on a défilé
        if (window.scrollY > 0) {
            navbar.classList.add("scrolled"); // Affiche le menu
        } else {
            navbar.classList.remove("scrolled"); // Cache le menu si on revient en haut
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.querySelector(".navbar");
    let lastScrollY = 0;

    // Vérification si la page peut scroller ou non
    const contentHeight = document.documentElement.scrollHeight;
    const windowHeight = window.innerHeight;
    const canScroll = contentHeight > windowHeight;

    // Si le contenu est trop court pour scroller, on rend la navbar visible immédiatement
    if (!canScroll) {
        navbar.classList.add("visible");
    } else {
        // Sinon, on la cache initialement
        navbar.classList.add("hidden");
    }

    // Comportement du menu : cacher au scroll vers le bas, afficher vers le haut
    window.addEventListener("scroll", () => {
        const currentScrollY = window.scrollY;

        if (currentScrollY > lastScrollY && currentScrollY > 50) {
            // Si on descend, cacher la navbar
            navbar.classList.remove("visible");
            navbar.classList.add("hidden");
        } else if (currentScrollY < lastScrollY) {
            // Si on monte, afficher la navbar
            navbar.classList.remove("hidden");
            navbar.classList.add("visible");
        }

        lastScrollY = currentScrollY;
    });

    // Ajouter la classe pour afficher la navbar si l'utilisateur a défilé
    window.addEventListener("scroll", () => {
        if (window.scrollY > 0) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const carouselItems = document.querySelectorAll(".carousel-item");

    // Fonction pour identifier l'image centrale et appliquer l'effet de survol
    function highlightCenterImage() {
        carouselItems.forEach((item) => {
            item.addEventListener("mouseover", () => {
                const img = item.querySelector("img");
                img.style.transform = "scale(1.2)"; // Agrandir l'image
                img.style.zIndex = "10"; // Mettre l'image en avant
                img.style.borderColor = "#fff"; // Mettre une bordure
            });

            item.addEventListener("mouseout", () => {
                const img = item.querySelector("img");
                img.style.transform = "scale(1)"; // Rétablir l'image à sa taille normale
                img.style.zIndex = "1"; // Réduire l'image en arrière-plan
                img.style.borderColor = "transparent"; // Retirer la bordure
            });
        });
    }

    // Appliquer l'effet à l'image centrale au chargement initial
    highlightCenterImage();
});

document.addEventListener("DOMContentLoaded", () => {
    const carousel = new bootstrap.Carousel(document.querySelector('#carouselExample'), {
        interval: 5000,  // Vitesse de défilement par défaut (en ms)
        ride: 'carousel', // Permet de démarrer le carrousel automatiquement
    });

    // Boutons Pause et Play
    const pauseBtn = document.getElementById('pause-btn');
    const playBtn = document.getElementById('play-btn');

    pauseBtn.addEventListener('click', () => {
        carousel.pause();  // Met le carrousel en pause
        pauseBtn.style.display = 'none';  // Masquer le bouton Pause
        playBtn.style.display = 'inline-block';  // Afficher le bouton Play
    });

    playBtn.addEventListener('click', () => {
        carousel.cycle();  // Redémarre le carrousel
        playBtn.style.display = 'none';  // Masquer le bouton Play
        pauseBtn.style.display = 'inline-block';  // Afficher le bouton Pause
    });
});

document.addEventListener('scroll', () => {
    const fullPhoto = document.getElementById('full-photo');
    const nameAnimation = document.getElementById('name-animation');
    const contactForm = document.getElementById('contact-form');
    const threshold = fullPhoto.offsetHeight / 2;

    if (window.scrollY > threshold) {
        nameAnimation.style.display = 'none';
        contactForm.style.opacity = 1;
        contactForm.style.transform = 'translateY(0)';
    } else {
        nameAnimation.style.display = 'block';
        contactForm.style.opacity = 0;
        contactForm.style.transform = 'translateY(50px)';
    }
});








