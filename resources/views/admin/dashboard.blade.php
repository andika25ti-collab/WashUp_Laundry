<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pratinjau dashboard admin WashUp Laundry.">
    <meta name="theme-color" content="#174e39">
    <title>Dashboard Admin | WashUp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('washup/css/admin-dashboard.css') }}">
</head>
<body>
    <script>
        if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            document.documentElement.classList.add('motion-ready');
            requestAnimationFrame(() => document.documentElement.classList.add('page-loaded'));
        }
    </script>
    <div class="admin-shell">
        <aside class="admin-sidebar">
            <a class="admin-brand" href="{{ route('landing') }}">
                <span class="brand-mark">W</span>
                <span>Wash<span>Up</span></span>
            </a>

            <div class="admin-profile">
                <span class="profile-avatar">A</span>
                <span><strong>Admin WashUp</strong><small>Panel pengelola</small></span>
            </div>

            <p class="sidebar-label">MENU UTAMA</p>
            <nav class="admin-nav" aria-label="Navigasi dashboard">
                <a class="is-active" href="{{ route('admin.dashboard') }}"><span aria-hidden="true">▦</span> Dashboard</a>
                <a href="#pesanan"><span aria-hidden="true">▤</span> Pesanan <span class="nav-soon">Segera</span></a>
                <a href="#layanan"><span aria-hidden="true">✳</span> Layanan &amp; harga <span class="nav-soon">Segera</span></a>
                <a href="#pelanggan"><span aria-hidden="true">◎</span> Pelanggan <span class="nav-soon">Segera</span></a>
            </nav>

            <div class="sidebar-bottom">
                <span class="status-dot"></span>
                Dashboard prototipe
            </div>
        </aside>

        <main class="admin-main">
            <header class="admin-topbar">
                <a class="back-link" href="{{ route('landing') }}">← <span>Kembali ke website</span></a>
                <div class="topbar-actions">
                    <span class="topbar-date">{{ now()->translatedFormat('l, d F Y') }}</span>
                    <span class="topbar-role"><span class="profile-avatar profile-avatar-small">A</span><span><strong>Admin WashUp</strong><small>Panel pengelola</small></span></span>
                </div>
            </header>

            <div class="dashboard-content">
                <div class="prototype-notice" role="status">
                    <span aria-hidden="true">ⓘ</span>
                    <p><strong>Mode pratinjau.</strong> Dashboard ini masih berupa desain contoh; angka, status, dan pesanan belum terhubung ke data sebenarnya.</p>
                </div>

                <section class="page-heading">
                    <div>
                        <p class="eyebrow">WASHUP / PUSAT OPERASIONAL</p>
                        <h1>Selamat datang, Admin <span>✦</span></h1>
                        <p>Semua aktivitas laundry dalam satu tampilan.</p>
                    </div>
                    <a class="pickup-action" href="{{ route('landing') }}#layanan"><span aria-hidden="true">＋</span> Lihat layanan</a>
                </section>

                <section class="operations-hero" aria-label="Ringkasan operasional WashUp">
                    <img class="hero-photo" src="{{ asset('washup/images/laundry-machines.jpg') }}" alt="Deretan mesin cuci di area laundry">
                    <div class="hero-shade"></div>
                    <div class="hero-copy">
                        <span class="hero-kicker"><span class="status-dot"></span> LAUNDRY CARE, MADE SIMPLE</span>
                        <h2>Pakaian bersih,<br>hari lebih ringan.</h2>
                        <p>Pantau proses cuci, perawatan, dan pengantaran dengan lebih mudah.</p>
                        <a href="{{ route('landing') }}#cara-kerja">Pelajari cara kerja <span aria-hidden="true">↗</span></a>
                    </div>
                    <div class="hero-floating-card pickup-summary">
                        <div class="floating-card-heading"><span class="floating-icon">⌖</span><span><small>JADWAL PICKUP</small><strong>Area layanan WashUp</strong></span></div>
                        <div class="route-preview"><span class="route-dot"></span><span class="route-line"></span><span class="route-dot route-dot-end"></span></div>
                        <div class="route-labels"><span>Jemput pakaian</span><span>Kembali bersih</span></div>
                        <div class="route-status"><span>Rute laundry</span><strong><span class="status-dot"></span> Siap melayani</strong></div>
                    </div>
                    <div class="hero-floating-card care-summary">
                        <span class="floating-card-label">PERAWATAN PAKAIAN</span>
                        <div class="care-graphic" aria-hidden="true"><span>✦</span><span>◌</span><span>✳</span></div>
                        <strong>Rawat dengan lembut</strong>
                        <small>Cuci · Keringkan · Lipat</small>
                    </div>
                </section>

                <section class="stat-grid" aria-label="Ringkasan layanan">
                    <article class="stat-card">
                        <span class="stat-icon stat-icon-lime">▤</span>
                        <span class="stat-label">Pesanan hari ini</span>
                        <strong>—</strong>
                        <small>Menunggu data terhubung</small>
                        <span class="stat-trend">ORDER</span>
                    </article>
                    <article class="stat-card">
                        <span class="stat-icon stat-icon-peach">◷</span>
                        <span class="stat-label">Dalam proses</span>
                        <strong>—</strong>
                        <small>Status pengerjaan laundry</small>
                        <span class="stat-trend">PROSES</span>
                    </article>
                    <article class="stat-card">
                        <span class="stat-icon stat-icon-blue">♧</span>
                        <span class="stat-label">Pickup &amp; antar</span>
                        <strong>—</strong>
                        <small>Jadwal kurir belum tersedia</small>
                        <span class="stat-trend">KURIR</span>
                    </article>
                    <article class="stat-card" id="pelanggan">
                        <span class="stat-icon stat-icon-green">◎</span>
                        <span class="stat-label">Pelanggan aktif</span>
                        <strong>—</strong>
                        <small>Menunggu data pelanggan</small>
                        <span class="stat-trend">PELANGGAN</span>
                    </article>
                </section>

                <section class="dashboard-grid">
                    <article class="panel orders-panel" id="pesanan">
                        <div class="panel-heading">
                            <div>
                                <p class="eyebrow">ALUR PESANAN</p>
                                <h2>Perjalanan laundry</h2>
                            </div>
                            <span class="coming-soon"><span class="status-dot"></span> Alur layanan</span>
                        </div>
                        <div class="journey-flow" aria-label="Tahapan layanan laundry">
                            <div class="journey-step is-current"><span class="journey-icon">⌖</span><span><strong>Pickup</strong><small>Jemput dari rumah</small></span></div>
                            <span class="journey-connector"></span>
                            <div class="journey-step"><span class="journey-icon">◌</span><span><strong>Proses cuci</strong><small>Rawat pakaianmu</small></span></div>
                            <span class="journey-connector"></span>
                            <div class="journey-step"><span class="journey-icon">✦</span><span><strong>Diantar</strong><small>Kembali lebih segar</small></span></div>
                        </div>
                        <div class="empty-state">
                            <span class="empty-icon" aria-hidden="true">▤</span>
                            <span class="empty-state-label">PESANAN TERBARU</span>
                            <h3>Belum ada pesanan untuk ditampilkan</h3>
                            <p>Daftar pesanan akan muncul di sini setelah modul pemesanan terhubung.</p>
                        </div>
                    </article>

                    <article class="panel quick-panel">
                        <div class="panel-heading">
                            <div>
                                <p class="eyebrow">LAYANAN WASHUP</p>
                                <h2>Perawatan untukmu</h2>
                            </div>
                            <a class="panel-more" href="{{ route('landing') }}#layanan" aria-label="Lihat semua layanan">↗</a>
                        </div>
                        <a class="service-tile" id="layanan" href="{{ route('landing') }}#layanan">
                            <span class="service-art service-art-wash"><span>◌</span></span>
                            <span class="service-details"><small>CUCI HARIAN</small><strong>Cuci &amp; lipat</strong><span>Praktis untuk pakaian sehari-hari</span></span>
                            <b>↗</b>
                        </a>
                        <a class="service-tile" href="{{ route('landing') }}#layanan">
                            <span class="service-art service-art-care"><span>✦</span></span>
                            <span class="service-details"><small>PERAWATAN KHUSUS</small><strong>Setrika rapi</strong><span>Tampil segar di setiap aktivitas</span></span>
                            <b>↗</b>
                        </a>
                        <a class="service-tile" href="{{ route('landing') }}#cara-kerja">
                            <span class="service-art service-art-pickup"><span>⌖</span></span>
                            <span class="service-details"><small>ANTAR JEMPUT</small><strong>Pickup di rumah</strong><span>Laundry tanpa repot keluar</span></span>
                            <b>↗</b>
                        </a>
                    </article>
                </section>

                <footer class="dashboard-footer">
                    <span>© {{ date('Y') }} WashUp Laundry</span>
                    <span>Dirancang untuk hari yang lebih ringan <span aria-hidden="true">✦</span></span>
                </footer>
            </div>
        </main>
    </div>
    <script>
        if (document.documentElement.classList.contains('motion-ready')) {
            const revealItems = document.querySelectorAll('.operations-hero, .stat-card, .panel, .dashboard-footer');

            if ('IntersectionObserver' in window) {
                const revealObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.12 });

                revealItems.forEach((item) => revealObserver.observe(item));
            } else {
                revealItems.forEach((item) => item.classList.add('is-visible'));
            }
        }
    </script>
</body>
</html>
