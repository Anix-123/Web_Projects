/* app.js — TechPro Solutions */
(function () {
  'use strict';

  // Navbar : ombre au scroll
  const nav = document.querySelector('.tp-nav');
  if (nav) {
    window.addEventListener('scroll', () => {
      nav.style.boxShadow = window.scrollY > 30
        ? '0 4px 20px rgba(0,0,0,.4)'
        : 'none';
    }, { passive: true });
  }

  // Animations d'entrée (Intersection Observer)
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((e, i) => {
      if (!e.isIntersecting) return;
      setTimeout(() => e.target.classList.add('tp-visible'), i * 80);
      observer.unobserve(e.target);
    });
  }, { threshold: .1, rootMargin: '0px 0px -30px 0px' });

  document.querySelectorAll('.tp-card, .tp-page-header, section > .container')
    .forEach(el => {
      el.style.opacity = '0';
      el.style.transform = 'translateY(20px)';
      el.style.transition = 'opacity .5s ease, transform .5s ease';
      el.classList.add('tp-anim');
      observer.observe(el);
    });

  document.addEventListener('animationend', () => {}, false);

  // Rendre les éléments visibles
  document.head.insertAdjacentHTML('beforeend',
    '<style>.tp-visible{opacity:1!important;transform:none!important}</style>');

  // Validation formulaire de contact
  const form = document.getElementById('formContact');
  const alertOk = document.getElementById('alertOk');
  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      form.classList.add('was-validated');
      if (!form.checkValidity()) return;

      const btn = form.querySelector('[type=submit]');
      btn.disabled = true;
      btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Envoi…';

      setTimeout(() => {
        form.reset();
        form.classList.remove('was-validated');
        btn.disabled = false;
        btn.innerHTML = '<i class="bi bi-send-fill me-2"></i>Envoyer le message';
        if (alertOk) {
          alertOk.classList.remove('d-none');
          setTimeout(() => alertOk.classList.add('d-none'), 5000);
        }
      }, 1400);
    });
  }
})();
