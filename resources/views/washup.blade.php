<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WashUp merawat pakaian harian dengan layanan laundry yang praktis, teliti, dan mudah dijadwalkan.">
    <meta name="theme-color" content="#f5f5ee">
    <title>WashUp — Laundry, beres.</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('washup/css/style.css') }}">
</head>
<body>
    <header class="site-header">
        <a class="brand" href="#home" aria-label="WashUp, ke halaman awal">
            <span class="brand-mark" aria-hidden="true">W</span>
            <span>Wash<span class="brand-up">Up</span></span>
        </a>

        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-nav">
            <span class="sr-only">Buka navigasi</span>
            <span></span><span></span>
        </button>

        <nav class="primary-nav" id="primary-nav" aria-label="Navigasi utama">
            <a class="nav-link" href="#layanan">Layanan</a>
            <a class="nav-link" href="#cara-kerja">Cara kerja</a>
            <a class="nav-link" href="#harga">Harga</a>
            <a class="login-cta" href="{{ route('admin.dashboard') }}">Login</a>
            <a class="nav-cta" href="#pesan">Atur penjemputan <span aria-hidden="true">↗</span></a>
        </nav>
    </header>

    <main id="home">
        <section class="hero">
            <div class="hero-inner page-wrap">
                <div class="hero-collage" aria-label="Suasana layanan laundry WashUp">
                    <span class="hero-doodle doodle-left" aria-hidden="true">〰</span>
                    <span class="hero-doodle doodle-right" aria-hidden="true">✳</span>
                    <figure class="collage-card collage-left">
                        <img src="{{ asset('washup/images/laundry-basket.jpg') }}" alt="Keranjang berisi pakaian yang siap dicuci" fetchpriority="high">
                    </figure>
                    <figure class="collage-card collage-main">
                        <img src="{{ asset('washup/images/folded-laundry.jpg') }}" alt="Handuk bersih yang ditata rapi" fetchpriority="high">
                    </figure>
                    <figure class="collage-card collage-right">
                        <img src="{{ asset('washup/images/laundry-machines.jpg') }}" alt="Mesin-mesin laundry siap digunakan">
                    </figure>
                    <span class="collage-bubble bubble-one" aria-hidden="true"></span>
                    <span class="collage-bubble bubble-two" aria-hidden="true"></span>
                </div>
                <div class="hero-copy">
                    <p class="eyebrow"><span class="eyebrow-dot"></span> RAWAT PAKAIAN, RINGANKAN HARI</p>
                    <h1>Cucian selesai.<br><span>Harimu lanjut.</span></h1>
                    <p class="hero-description">Laundry praktis yang menjemput pakaianmu, merawatnya dengan teliti, lalu mengantarkannya kembali dalam keadaan segar.</p>
                    <div class="hero-actions">
                        <a class="button button-dark" href="#pesan">Pesan penjemputan <span aria-hidden="true">↗</span></a>
                        <a class="text-link" href="#layanan">Lihat layanan <span aria-hidden="true">↓</span></a>
                    </div>
                </div>
            </div>
        </section>

        <div class="ticker" aria-label="Layanan WashUp">
            <div class="ticker-track">
                <span>CUCI &amp; LIPAT</span><i>✳</i><span>CUCI &amp; SETRIKA</span><i>✳</i><span>JEMPUT &amp; ANTAR</span><i>✳</i><span>CUCI SATUAN</span><i>✳</i>
                <span aria-hidden="true">CUCI &amp; LIPAT</span><i aria-hidden="true">✳</i><span aria-hidden="true">CUCI &amp; SETRIKA</span><i aria-hidden="true">✳</i><span aria-hidden="true">JEMPUT &amp; ANTAR</span><i aria-hidden="true">✳</i><span aria-hidden="true">CUCI SATUAN</span><i aria-hidden="true">✳</i>
            </div>
        </div>

        <section class="section page-wrap services" id="layanan">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">PILIH YANG KAMU BUTUHKAN</p>
                    <h2>Rawat pakaianmu,<br><span>dengan caramu.</span></h2>
                </div>
                <p class="section-intro">Mulai dari pakaian sehari-hari sampai item favorit yang butuh perhatian ekstra.</p>
            </div>

            <div class="service-grid">
                <article class="service-card service-card-lime">
                    <span class="service-number">01 / EVERYDAY</span>
                    <span class="service-icon icon-basket" aria-hidden="true">
                        <svg viewBox="0 0 64 64" fill="none"><path d="m12 24 6 29h28l6-29H12Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/><path d="M23 24c0-6 4-10 9-10s9 4 9 10M22 34l2 10m9-10v10m9-10-2 10" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg>
                    </span>
                    <h3>Cuci &amp; lipat</h3>
                    <p>Andalan untuk pakaian sehari-hari. Bersih, kering, dan dilipat rapi.</p>
                    <a href="#pesan" aria-label="Pesan layanan cuci dan lipat">Pilih layanan <span aria-hidden="true">↗</span></a>
                </article>
                <article class="service-card service-card-peach">
                    <span class="service-number">02 / READY TO WEAR</span>
                    <span class="service-icon icon-shirt" aria-hidden="true">
                        <svg viewBox="0 0 64 64" fill="none"><path d="m23 13-13 8 7 11 7-4v23h16V28l7 4 7-11-13-8c-2 4-5 6-9 6s-7-2-9-6Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/><path d="M26 14c1 3 3 5 6 5s5-2 6-5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg>
                    </span>
                    <h3>Cuci &amp; setrika</h3>
                    <p>Pakaian kembali licin dan siap menemani aktivitasmu.</p>
                    <a href="#pesan" aria-label="Pesan layanan cuci dan setrika">Pilih layanan <span aria-hidden="true">↗</span></a>
                </article>
                <article class="service-card service-card-blue">
                    <span class="service-number">03 / EXTRA CARE</span>
                    <span class="service-icon icon-star" aria-hidden="true">
                        <svg viewBox="0 0 64 64" fill="none"><path d="m32 9 5.8 15.2L53 30l-15.2 5.8L32 51l-5.8-15.2L11 30l15.2-5.8L32 9Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/><path d="m49 39 2.8 7.2L59 49l-7.2 2.8L49 59l-2.8-7.2L39 49l7.2-2.8L49 39Z" fill="currentColor"/></svg>
                    </span>
                    <h3>Cuci satuan</h3>
                    <p>Untuk selimut, sepatu, dan item pilihan yang perlu penanganan khusus.</p>
                    <a href="#pesan" aria-label="Pesan layanan cuci satuan">Pilih layanan <span aria-hidden="true">↗</span></a>
                </article>
            </div>
        </section>

        <section class="care-section" id="cara-kerja">
            <div class="page-wrap care-layout">
                <div class="care-visual">
                    <div class="care-card">
                        <div class="care-card-top"><span>WASHUP CARE NOTE</span><span>✳ 01</span></div>
                        <div class="care-fabric"><span class="fabric-fold fold-one"></span><span class="fabric-fold fold-two"></span><span class="fabric-fold fold-three"></span></div>
                        <p>Dirawat baik,<br><strong>dipakai lebih lama.</strong></p>
                        <div class="care-card-bottom"><span>GENTLE CYCLE</span><span>♡</span></div>
                    </div>
                    <span class="care-stamp">CARE<br>WITH<br>INTENTION</span>
                </div>
                <div class="care-copy">
                    <p class="eyebrow">SEDERHANA DARI AWAL SAMPAI AKHIR</p>
                    <h2>Waktu santaimu<br>ada di <span>tangan kami.</span></h2>
                    <p class="care-intro">Nggak perlu menunggu akhir pekan untuk beres-beres. Atur waktu penjemputan, dan biarkan urusan cucian berjalan.</p>
                    <ol class="steps-list">
                        <li><span>01</span><div><h3>Pilih layanan</h3><p>Tentukan jenis perawatan yang cocok dengan pakaianmu.</p></div></li>
                        <li><span>02</span><div><h3>Atur penjemputan</h3><p>Tulis alamat dan waktu yang nyaman untukmu.</p></div></li>
                        <li><span>03</span><div><h3>Terima kembali</h3><p>Pakaian bersih diantar ke alamat yang kamu berikan.</p></div></li>
                    </ol>
                </div>
            </div>
        </section>

        <section class="section page-wrap pricing" id="harga">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">HARGA YANG MUDAH DIPAHAMI</p>
                    <h2>Mulai dari yang<br><span>paling sederhana.</span></h2>
                </div>
                <p class="section-intro">Harga berikut contoh dan dapat disesuaikan dengan daftar layanan WashUp di wilayahmu.</p>
            </div>
            <div class="price-grid">
                <article class="price-card">
                    <p class="price-label">01 / DAILY CARE</p>
                    <h3>Reguler</h3>
                    <p class="price-value">Rp7.000<span> / kg</span></p>
                    <p class="price-detail">Pilihan praktis untuk cucian harian.</p>
                    <ul><li>Cuci dan kering</li><li>Lipat rapi</li><li>Estimasi 2–3 hari</li></ul>
                    <a class="button button-outline" href="#pesan" data-service="Cuci & lipat reguler">Pilih reguler <span aria-hidden="true">↗</span></a>
                </article>
                <article class="price-card price-card-featured">
                    <span class="popular-label">FAVORIT UNTUK HARI SIBUK</span>
                    <p class="price-label">02 / EXTRA TIME</p>
                    <h3>Express</h3>
                    <p class="price-value">Rp12.000<span> / kg</span></p>
                    <p class="price-detail">Saat kamu butuh pakaian siap lebih cepat.</p>
                    <ul><li>Prioritas pengerjaan</li><li>Cuci, kering, setrika</li><li>Estimasi hingga 24 jam</li></ul>
                    <a class="button button-lime" href="#pesan" data-service="Cuci & setrika express">Pilih express <span aria-hidden="true">↗</span></a>
                </article>
                <article class="price-card">
                    <p class="price-label">03 / SPECIAL PIECES</p>
                    <h3>Satuan</h3>
                    <p class="price-value">Rp20.000<span> / item</span></p>
                    <p class="price-detail">Untuk barang tertentu yang perlu perhatian ekstra.</p>
                    <ul><li>Selimut dan bed cover</li><li>Sepatu dan tas</li><li>Perawatan sesuai material</li></ul>
                    <a class="button button-outline" href="#pesan" data-service="Cuci satuan">Pilih satuan <span aria-hidden="true">↗</span></a>
                </article>
            </div>
            <p class="price-footnote">* Harga dan estimasi pada halaman ini adalah contoh. Konfirmasi detail sebelum memesan.</p>
        </section>

        <section class="booking-section" id="pesan">
            <div class="page-wrap booking-layout">
                <div class="booking-copy">
                    <p class="eyebrow">SATU LANGKAH KECIL MENUJU HARI YANG LEBIH RINGAN</p>
                    <h2>Siap bilang<br><span>“cucian, beres”?</span></h2>
                    <p>Isi detail penjemputan. Pesanan akan disiapkan lewat WhatsApp setelah nomor bisnis WashUp dikonfigurasi.</p>
                    <div class="booking-detail"><span class="detail-icon">↗</span><span>Jadwal fleksibel<br><strong>Kamu pilih waktu yang nyaman.</strong></span></div>
                </div>
                <form class="booking-form" id="booking-form" data-whatsapp="{{ config('washup.whatsapp_number') }}">
                    <div class="form-heading"><span>WASHUP / PICKUP</span><span>01 — 04</span></div>
                    <label for="customer-name">Namamu</label>
                    <input id="customer-name" name="nama" type="text" autocomplete="name" placeholder="Nama lengkap" required>
                    <label for="customer-phone">Nomor WhatsApp</label>
                    <input id="customer-phone" name="telepon" type="tel" autocomplete="tel" placeholder="08xx xxxx xxxx" required>
                    <label for="customer-address">Alamat penjemputan</label>
                    <textarea id="customer-address" name="alamat" rows="2" autocomplete="street-address" placeholder="Jalan, nomor rumah, patokan" required></textarea>
                    <label for="service-type">Layanan pilihan</label>
                    <select id="service-type" name="layanan" required>
                        <option value="">Pilih layanan</option>
                        <option value="Cuci & lipat reguler">Cuci &amp; lipat reguler</option>
                        <option value="Cuci & setrika express">Cuci &amp; setrika express</option>
                        <option value="Cuci satuan">Cuci satuan</option>
                    </select>
                    <button class="button button-dark form-submit" type="submit">Lanjutkan ke WhatsApp <span aria-hidden="true">↗</span></button>
                    <p class="form-status" role="status" aria-live="polite"></p>
                    <p class="form-privacy">Data akan diteruskan ke WhatsApp bisnis WashUp untuk konfirmasi.</p>
                </form>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="page-wrap footer-main">
            <a class="brand footer-brand" href="#home">
                <span class="brand-mark" aria-hidden="true">W</span>
                <span>Wash<span class="brand-up">Up</span></span>
            </a>
            <p class="footer-tagline">Laundry beres.<br>Waktu kembali.</p>
            <nav class="footer-links" aria-label="Navigasi footer">
                <a href="#layanan">Layanan</a><a href="#cara-kerja">Cara kerja</a><a href="#harga">Harga</a><a href="#pesan">Pesan jemput</a>
            </nav>
            <div class="footer-bottom"><span>© {{ date('Y') }} WashUp Laundry</span><span>Dibuat untuk hari-hari yang lebih ringan.</span><a href="#home">Kembali ke atas ↑</a></div>
        </div>
    </footer>

    <script src="{{ asset('washup/js/script.js') }}" defer></script>
</body>
</html>
