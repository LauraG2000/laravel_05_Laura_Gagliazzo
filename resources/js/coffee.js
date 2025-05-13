
document.addEventListener("DOMContentLoaded", function () {
    const img = document.getElementById('coffee');
    const text = document.querySelector('.scroll-text');

    window.addEventListener('scroll', function () {
        const scrollY = window.scrollY;

        if (scrollY > 0) { 
            img.classList.add('dissolve');
            text.style.opacity = '1';
        } else {
            img.classList.remove('dissolve');
            text.style.opacity = '0';
        }
    });
});
