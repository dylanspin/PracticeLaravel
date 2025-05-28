const transition = document.getElementById('page-transition');

window.addEventListener('DOMContentLoaded', () => {
// trigger smooth reveal
requestAnimationFrame(() => {
    transition.style.opacity = '0';
    transition.style.backdropFilter = 'blur(20px)';
});

// optional: hide interaction layer
setTimeout(() => {
    transition.style.display = 'none';
}, 800); // match CSS duration
});