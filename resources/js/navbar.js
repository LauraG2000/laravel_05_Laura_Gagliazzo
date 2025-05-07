document.addEventListener('DOMContentLoaded', function () {
  const logoLink = document.getElementById('navbar-logo');
  const navbar = document.querySelector('.navbar');
  const img = document.createElement('img');

  img.src = '/images/logo-dark.png';
  img.alt = 'Logo';
  img.classList.add('logo-img');
  logoLink.appendChild(img);

  window.addEventListener('scroll', function () {
    if (window.scrollY > 0) {
      navbar.classList.add('navbar-scrolled');
      img.src = '/images/logo-bright.png';
    } else {
      navbar.classList.remove('navbar-scrolled');
      img.src = '/images/logo-dark.png';
    }
  });
});
