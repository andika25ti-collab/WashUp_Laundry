const menuToggle = document.querySelector('.menu-toggle');
const primaryNav = document.querySelector('#primary-nav');

menuToggle.addEventListener('click', () => {
  const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
  menuToggle.setAttribute('aria-expanded', String(!isExpanded));
  primaryNav.classList.toggle('is-open', !isExpanded);
});

primaryNav.querySelectorAll('a').forEach((link) => {
  link.addEventListener('click', () => {
    menuToggle.setAttribute('aria-expanded', 'false');
    primaryNav.classList.remove('is-open');
  });
});

document.querySelectorAll('[data-service]').forEach((link) => {
  link.addEventListener('click', () => {
    document.querySelector('#service-type').value = link.dataset.service;
  });
});

const bookingForm = document.querySelector('#booking-form');
const formStatus = bookingForm.querySelector('.form-status');

bookingForm.addEventListener('submit', (event) => {
  event.preventDefault();

  const whatsappNumber = bookingForm.dataset.whatsapp.replace(/\D/g, '');

  if (!whatsappNumber) {
    formStatus.textContent = 'Nomor WhatsApp WashUp belum diatur. Silakan hubungi pemilik laundry untuk memesan.';
    return;
  }

  const formData = new FormData(bookingForm);
  const message = [
    'Halo WashUp, saya ingin menjadwalkan penjemputan laundry.',
    `Nama: ${formData.get('nama')}`,
    `WhatsApp: ${formData.get('telepon')}`,
    `Alamat: ${formData.get('alamat')}`,
    `Layanan: ${formData.get('layanan')}`,
  ].join('\n');

  window.location.assign(`https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`);
});

const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

if (!reducedMotion.matches) {
  document.documentElement.classList.add('motion-ready');
  document.querySelectorAll('.hero-collage, .hero-copy > *').forEach((element, index) => {
    element.style.setProperty('--intro-order', index);
    element.classList.add('intro-reveal');
  });

  requestAnimationFrame(() => {
    document.documentElement.classList.add('page-loaded');
  });

  const revealElements = document.querySelectorAll(
    '.section-heading, .service-card, .care-visual, .care-copy, .price-card, .booking-copy, .booking-form, .footer-main'
  );

  revealElements.forEach((element, index) => {
    element.style.setProperty('--reveal-order', index % 3);
    element.classList.add('scroll-reveal');
  });

  if ('IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.12,
      rootMargin: '0px 0px -35px 0px',
    });

    revealElements.forEach((element) => revealObserver.observe(element));
  } else {
    revealElements.forEach((element) => element.classList.add('is-visible'));
  }
}
