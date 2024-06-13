document.addEventListener("DOMContentLoaded", function () {
    const canvas = document.getElementById("particleCanvas");
    const ctx = canvas.getContext("2d");

    // Set canvas dimensions
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    // Handle resizing
    window.addEventListener('resize', function () {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    });

    // Star properties
    const stars = [];
    const numStars = 20;
    const starColors = ["#616161", "#616161", "#616161", "#616161", "#616161"];

    // Star constructor
    function Star(x, y, size, speed, color) {
        this.x = x;
        this.y = y;
        this.size = size;
        this.speed = speed;
        this.color = color;
    }

    // Create stars
    for (let i = 0; i < numStars; i++) {
        const x = Math.random() * canvas.width;
        const y = Math.random() * canvas.height;
        const size = Math.random() * 3 + 2;
        const speed = Math.random() * 0.5 + 0.2;
        const color = starColors[Math.floor(Math.random() * starColors.length)];
        stars.push(new Star(x, y, size, speed, color));
    }

    // Animate stars
    function animateStars() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        stars.forEach(star => {
            star.y += star.speed;
            if (star.y > canvas.height) {
                star.y = 0;
                star.x = Math.random() * canvas.width;
            }
            drawStar(star);
        });

        requestAnimationFrame(animateStars);
    }

    // Draw star
    function drawStar(star) {
        ctx.beginPath();
        ctx.arc(star.x, star.y, star.size, 0, Math.PI * 2);
        ctx.fillStyle = star.color;
        ctx.fill();
    }

    animateStars();
});
