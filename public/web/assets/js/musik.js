document.addEventListener('DOMContentLoaded', function () {
    const musicToggle = document.getElementById('music-toggle');
    const musicOnIcon = document.getElementById('music-on-icon');
    const musicOffIcon = document.getElementById('music-off-icon');
    const backgroundMusic = document.getElementById('background-music');

    // Play music and show the "music on" icon by default
    backgroundMusic.play().catch(error => {
        console.log('Music playback failed: ', error);
    });
    musicOnIcon.style.display = 'block';
    musicOffIcon.style.display = 'none';

    musicToggle.addEventListener('click', function () {
        if (backgroundMusic.paused) {
            backgroundMusic.play();
            musicOnIcon.style.display = 'block';
            musicOffIcon.style.display = 'none';
        } else {
            backgroundMusic.pause();
            musicOnIcon.style.display = 'none';
            musicOffIcon.style.display = 'block';
        }
    });
});