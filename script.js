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
});

