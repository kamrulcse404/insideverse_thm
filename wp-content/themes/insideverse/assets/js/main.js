/* -------------------------------------- */
// Make mobile navigation work
const btnMobileEl = document.querySelector('.btn-mobile-nav');
const headerEl = document.querySelector('.header');

btnMobileEl.addEventListener('click', function () {
  headerEl.classList.toggle('nav-open');
});

// fillter pluging
var mixer = mixitup('.portfolio__box');
