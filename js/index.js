// Title
document.addEventListener('DOMContentLoaded', function () {
    particleground(document.getElementById('particlesBG'), {
        minSpeedX: 0.1,
        maxSpeedX: 0.5,
        minSpeedY: 0.1,
        maxSpeedY: 0.5,
        directionX: 'center', // 'center', 'left' or 'right'. 'center' = dots bounce off edges
        directionY: 'center', // 'center', 'up' or 'down'. 'center' = dots bounce off edges
        density:  13000, // How many particles will be generated: one particle every n pixels
        dotColor: 'rgba(255, 255, 255, .3)',
        lineColor: 'rgba(255, 255, 255, .3)',
        particleRadius: 3, // Dot size
        lineWidth: 0.5,
        curvedLines: false,
        proximity: 100, // How close two dots need to be before they join
        parallax: true,
        parallaxMultiplier: 10, // The lower the number, the more extreme the parallax effect
    });
}, false);