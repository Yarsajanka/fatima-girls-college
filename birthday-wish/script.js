document.addEventListener('DOMContentLoaded', function() {
    // Cake click event for celebration
    const cake = document.querySelector('.cake');
    cake.addEventListener('click', createExplosion);

    // Create floating balloons
    createBalloons();

    // Create falling confetti
    createConfetti();

    // Start sparkle animation
    animateSparkles();
});

function createExplosion(event) {
    const explosionContainer = document.createElement('div');
    explosionContainer.className = 'explosion';
    explosionContainer.style.position = 'absolute';
    explosionContainer.style.left = event.clientX + 'px';
    explosionContainer.style.top = event.clientY + 'px';
    explosionContainer.style.pointerEvents = 'none';
    document.body.appendChild(explosionContainer);

    // Create explosion particles
    for (let i = 0; i < 20; i++) {
        const particle = document.createElement('div');
        particle.className = 'explosion-particle';
        particle.style.background = getRandomColor();
        particle.style.left = '0px';
        particle.style.top = '0px';

        const angle = (Math.PI * 2 * i) / 20;
        const velocity = Math.random() * 200 + 100;
        const tx = Math.cos(angle) * velocity;
        const ty = Math.sin(angle) * velocity;

        particle.style.setProperty('--tx', tx + 'px');
        particle.style.setProperty('--ty', ty + 'px');

        explosionContainer.appendChild(particle);
    }

    // Show celebration message
    showCelebrationMessage();

    // Remove explosion after animation
    setTimeout(() => {
        explosionContainer.remove();
    }, 2000);
}

function getRandomColor() {
    const colors = ['#FF6B6B', '#4ECDC4', '#45B7D1', '#F7DC6F', '#BB8FCE', '#82E0AA', '#F8C471', '#85C1E9'];
    return colors[Math.floor(Math.random() * colors.length)];
}

function showCelebrationMessage() {
    const message = document.createElement('div');
    message.className = 'celebration-message';
    message.innerHTML = '🎉 HAPPY BIRTHDAY IQRA! 🎉<br>Hope your day is as amazing as you are!';
    message.style.cssText = `
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(255, 255, 255, 0.95);
        color: #333;
        padding: 20px 40px;
        border-radius: 20px;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        z-index: 1000;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        animation: bounceIn 0.5s ease-out;
    `;
    document.body.appendChild(message);

    setTimeout(() => {
        message.style.animation = 'fadeOut 0.5s ease-out';
        setTimeout(() => message.remove(), 500);
    }, 3000);
}

function createBalloons() {
    const balloonsContainer = document.querySelector('.balloons');
    for (let i = 0; i < 10; i++) {
        setTimeout(() => {
            const balloon = document.createElement('div');
            balloon.className = 'balloon';
            balloon.style.background = `linear-gradient(to bottom, ${getRandomColor()}, ${getRandomColor()})`;
            balloon.style.left = Math.random() * 100 + '%';
            balloon.style.animationDelay = Math.random() * 5 + 's';
            balloonsContainer.appendChild(balloon);

            setTimeout(() => balloon.remove(), 10000);
        }, i * 1000);
    }
}

function createConfetti() {
    const confettiContainer = document.querySelector('.confetti');
    for (let i = 0; i < 50; i++) {
        setTimeout(() => {
            const piece = document.createElement('div');
            piece.className = 'confetti-piece';
            piece.style.background = getRandomColor();
            piece.style.left = Math.random() * 100 + '%';
            piece.style.animationDelay = Math.random() * 5 + 's';
            confettiContainer.appendChild(piece);

            setTimeout(() => piece.remove(), 10000);
        }, i * 100);
    }
}

function animateSparkles() {
    const sparkles = document.querySelectorAll('.sparkle');
    sparkles.forEach((sparkle, index) => {
        sparkle.style.animationDelay = index * 0.5 + 's';
    });
}

// Add CSS for explosion particles
const style = document.createElement('style');
style.textContent = `
    .explosion-particle {
        position: absolute;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        animation: explode 2s ease-out forwards;
    }

    @keyframes explode {
        0% {
            transform: translate(0, 0) scale(1);
            opacity: 1;
        }
        100% {
            transform: translate(var(--tx), var(--ty)) scale(0);
            opacity: 0;
        }
    }

    @keyframes bounceIn {
        0% {
            transform: translate(-50%, -50%) scale(0.3);
            opacity: 0;
        }
        50% {
            transform: translate(-50%, -50%) scale(1.05);
            opacity: 1;
        }
        70% {
            transform: translate(-50%, -50%) scale(0.9);
        }
        100% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);
