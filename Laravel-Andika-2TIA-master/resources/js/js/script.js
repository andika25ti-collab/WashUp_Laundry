// Menu mobile
const toggle = document.querySelector('.nav-toggle');
const nav = document.getElementById('nav');
toggle.addEventListener('click', () => {
  const open = nav.classList.toggle('open');
  toggle.setAttribute('aria-expanded', open);
  toggle.textContent = open ? 'Tutup' : 'Menu';
});
nav.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
  nav.classList.remove('open');
  toggle.setAttribute('aria-expanded', 'false');
  toggle.textContent = 'Menu';
}));

// Form pesan jemput (state: loading, sukses, error)
const form = document.getElementById('booking-form');
const status = form.querySelector('.form-status');
const button = form.querySelector('button');

form.addEventListener('submit', async (e) => {
  e.preventDefault();
  status.className = 'form-status';
  const fields = [...form.querySelectorAll('input, textarea, select')];
  fields.forEach(f => f.classList.remove('invalid'));
  const empty = fields.filter(f => !f.value.trim());
  if (empty.length) {
    empty.forEach(f => f.classList.add('invalid'));
    status.textContent = 'Lengkapi semua kolom yang ditandai merah.';
    status.classList.add('err');
    empty[0].focus();
    return;
  }
  button.disabled = true;
  button.textContent = 'Mengirim...';
  try {
    // Ganti blok ini dengan fetch() ke webhook/email kamu.
    await new Promise(r => setTimeout(r, 900));
    form.reset();
    status.textContent = 'Pesanan terkirim. Kami hubungi lewat WhatsApp untuk konfirmasi jadwal.';
    status.classList.add('ok');
  } catch {
    status.textContent = 'Pesanan gagal terkirim. Coba lagi atau hubungi kami lewat WhatsApp.';
    status.classList.add('err');
  } finally {
    button.disabled = false;
    button.textContent = 'Kirim pesanan';
  }
});
