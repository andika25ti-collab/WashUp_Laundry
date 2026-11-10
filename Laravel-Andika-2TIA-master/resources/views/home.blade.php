<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laundry kiloan, dry cleaning, dan setrika dengan layanan jemput dan antar.">
    <title>WashUp | Laundry Antar Jemput</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@500;700;800&family=Figtree:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/css/style.css', 'resources/js/app.js'])
</head>
<body>
    <header class="site-header">
        <a class="logo" href="#top"><span class="logo-mark">W</span> WashUp</a>
        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation" aria-label="Buka menu">
            Menu
        </button>
        <nav class="nav" id="primary-navigation" aria-label="Navigasi utama">
            <a href="#top">Beranda</a>
            <a href="#layanan">Layanan</a>
            <a href="#harga">Harga</a>
            <a href="#tentang">Tentang</a>
            <a href="#jurnal">Tips</a>
            <a href="#pesan">Kontak</a>
            <a class="btn btn-small" href="#pesan">Pesan jemput</a>
        </nav>
    </header>

    <main id="top">
        <section class="hero">
            <div class="hero-gallery" aria-label="Suasana layanan WashUp">
                <span class="hero-doodle hero-doodle--loop" aria-hidden="true">〰</span>
                <span class="hero-doodle hero-doodle--spark" aria-hidden="true">✳</span>
                <figure class="hero-photo hero-photo--left" data-parallax="-20">
                    <img src="{{ asset('images/washup/folded-laundry.jpg') }}" alt="Pakaian bersih dalam keranjang laundry">
                </figure>
                <figure class="hero-photo hero-photo--main" data-parallax="12">
                    <img src="{{ asset('images/washup/hero-woman.jpg') }}" alt="Pelanggan di ruang laundry WashUp">
                </figure>
                <figure class="hero-photo hero-photo--right" data-parallax="-14">
                    <img src="{{ asset('images/washup/laundry-room.jpg') }}" alt="Mesin dan area kerja laundry">
                </figure>
            </div>
            <div class="hero-text hero-copy">
                <p class="eyebrow">Laundry antar jemput, tanpa repot</p>
                <h1>Laundry lebih mudah,<br><span>hidup lebih ringan.</span></h1>
                <p>Nikmati lebih banyak waktu. Kami merawat cucianmu dengan teliti dan mengantarkannya kembali dengan rapi.</p>
                <div class="hero-actions">
                    <a class="btn btn-coral" href="#pesan">Pesan jemput</a>
                    <a class="btn btn-outline-light" href="#layanan">Jelajahi layanan</a>
                </div>
            </div>
            <div class="hero-bubbles" aria-hidden="true"><i></i><i></i><i></i></div>
        </section>

        <section class="section benefits" aria-label="Keunggulan WashUp">
            <div class="benefit-row">
                <article class="benefit-item">
                    <span class="color-icon color-icon--mint">01</span>
                    <div><h2>Dicuci dengan teliti</h2><p>Setiap bahan mendapat perawatan yang sesuai.</p></div>
                </article>
                <article class="benefit-item">
                    <span class="color-icon color-icon--yellow">02</span>
                    <div><h2>Jemput dan antar</h2><p>Atur waktu yang cocok dengan harimu.</p></div>
                </article>
                <article class="benefit-item">
                    <span class="color-icon color-icon--coral">03</span>
                    <div><h2>Harga transparan</h2><p>Pilihan layanan dan harga mudah dipahami.</p></div>
                </article>
            </div>
        </section>

        <section class="section promise" id="tentang">
            <div class="promise-copy">
                <p class="eyebrow">Janji WashUp</p>
                <h2>Laundry seharusnya mengikuti hidupmu, bukan mengambil alih waktumu.</h2>
                <p>WashUp menyatukan perawatan pakaian yang praktis dan penuh perhatian, supaya kamu bisa fokus pada hal yang lebih penting.</p>
                <div class="promise-actions">
                    <a class="btn btn-coral" href="#pesan">Pesan jemput</a>
                    <a class="btn btn-outline-dark" href="#layanan">Tentang layanan</a>
                </div>
                <ul class="promise-list">
                    <li><span class="color-icon color-icon--yellow">↗</span><div><strong>Jemput sesuai jadwalmu</strong><p>Kirim permintaan waktu jemput dan kami konfirmasi ketersediaannya.</p></div></li>
                    <li><span class="color-icon color-icon--mint">✓</span><div><strong>Dipisah dan dirawat dengan benar</strong><p>Pakaian dikelompokkan sesuai warna dan jenis bahan.</p></div></li>
                    <li><span class="color-icon color-icon--coral">✦</span><div><strong>Hasil bersih, rapi, siap dipakai</strong><p>Pakaian diperiksa dan dikemas setelah selesai.</p></div></li>
                </ul>
            </div>
            <div class="promise-visual">
                <div class="promise-machine" role="img" aria-label="Ilustrasi animasi mesin cuci dengan tabung berputar">
                    <div class="washer-backplate"></div>
                    <div class="laundry-bottle laundry-bottle--yellow"><span></span></div>
                    <div class="laundry-bottle laundry-bottle--blue"><span></span></div>
                    <div class="washer-body">
                        <div class="washer-panel">
                            <span class="washer-screen"></span>
                            <span class="washer-knob"></span>
                            <span class="washer-light"></span>
                        </div>
                        <div class="washer-door">
                            <div class="washer-drum">
                                <span class="washer-cloth washer-cloth--mint"></span>
                                <span class="washer-cloth washer-cloth--coral"></span>
                                <span class="washer-cloth washer-cloth--yellow"></span>
                                <span class="washer-bubble washer-bubble--one"></span>
                                <span class="washer-bubble washer-bubble--two"></span>
                            </div>
                        </div>
                    </div>
                    <div class="laundry-basket"><span></span><span></span><span></span></div>
                    <span class="machine-spark machine-spark--one" aria-hidden="true">✳</span>
                    <span class="machine-spark machine-spark--two" aria-hidden="true">✦</span>
                </div>
            </div>
        </section>

        <section class="section services-section" id="layanan">
            <header class="section-head section-head--center">
                <p class="eyebrow">Layanan kami</p>
                <h2>Pilih perawatan yang dibutuhkan pakaianmu</h2>
                <p>Dari pakaian sehari-hari sampai item khusus, ada pilihan untuk tiap kebutuhan.</p>
            </header>
            <div class="service-grid">
                <article class="service-card"><span class="color-icon color-icon--mint">01</span><h3>Cuci dan lipat</h3><p>Pakaian harian dicuci, dikeringkan, dan dilipat rapi.</p><a href="#pesan">Lihat layanan <span aria-hidden="true">↗</span></a></article>
                <article class="service-card"><span class="color-icon color-icon--yellow">02</span><h3>Dry cleaning</h3><p>Perawatan khusus untuk bahan halus dan pakaian pilihan.</p><a href="#pesan">Lihat layanan <span aria-hidden="true">↗</span></a></article>
                <article class="service-card"><span class="color-icon color-icon--coral">03</span><h3>Jemput dan antar</h3><p>Cucian diambil dan dikembalikan sesuai area layanan.</p><a href="#pesan">Lihat layanan <span aria-hidden="true">↗</span></a></article>
                <article class="service-card"><span class="color-icon color-icon--coral">04</span><h3>Setrika saja</h3><p>Finishing licin dan rapi untuk pakaian pilihanmu.</p><a href="#pesan">Lihat layanan <span aria-hidden="true">↗</span></a></article>
                <article class="service-card"><span class="color-icon color-icon--yellow">05</span><h3>Perawatan noda</h3><p>Penanganan noda sesuai jenis bahan dan kondisinya.</p><a href="#pesan">Lihat layanan <span aria-hidden="true">↗</span></a></article>
                <article class="service-card"><span class="color-icon color-icon--mint">06</span><h3>Laundry bisnis</h3><p>Dukungan laundry rutin untuk kebutuhan usaha lokal.</p><a href="#pesan">Lihat layanan <span aria-hidden="true">↗</span></a></article>
            </div>
            <div class="section-action"><a class="btn btn-green" href="#harga">Lihat pilihan harga</a></div>
        </section>

        <section class="section process-section" id="cara-kerja">
            <header class="section-head section-head--center">
                <p class="eyebrow">Cara kerja</p>
                <h2>Hari laundry, jadi sederhana</h2>
                <p>Tiga langkah praktis tanpa menambah beban harianmu.</p>
            </header>
            <ol class="process-grid">
                <li><span class="process-number">01</span><h3>Pilih layanan</h3><p>Ceritakan jenis cucian dan layanan yang kamu butuhkan.</p></li>
                <li><span class="process-number process-number--mint">02</span><h3>Atur penjemputan</h3><p>Kirim alamat dan waktu yang kamu inginkan untuk dikonfirmasi.</p></li>
                <li><span class="process-number process-number--coral">03</span><h3>Nikmati hasilnya</h3><p>Cucian selesai dirawat dan siap diantar kembali kepadamu.</p></li>
            </ol>
        </section>

        <section class="section values-section">
            <div class="values-panel">
                <span class="hero-doodle values-bubbles" aria-hidden="true">◌</span>
                <p class="eyebrow">WashUp untuk keseharianmu</p>
                <h2>Perawatan yang bisa diandalkan, bukan jalan pintas.</h2>
                <p class="values-intro">Kami ingin membuat urusan laundry terasa lebih ringan dengan perhatian pada detail di setiap pesanan.</p>
                <div class="values-grid">
                    <article><span class="color-icon color-icon--mint">✓</span><h3>Proses yang teliti</h3><p>Setiap cucian diperiksa dan diproses sesuai kebutuhan.</p></article>
                    <article><span class="color-icon color-icon--yellow">↗</span><h3>Pilihan fleksibel</h3><p>Beragam layanan untuk pakaian harian dan item khusus.</p></article>
                    <article><span class="color-icon color-icon--coral">✦</span><h3>Info yang jelas</h3><p>Detail layanan dan harga dibicarakan sebelum pesanan diproses.</p></article>
                </div>
            </div>
        </section>

        <section class="section" id="harga">
            <header class="section-head">
                <p class="eyebrow">Harga pilihan</p>
                <h2>Harga awal yang jelas</h2>
                <p>Harga akhir dikonfirmasi berdasarkan jenis bahan, ukuran, dan layanan.</p>
            </header>
            <div class="plans">
                <article class="plan">
                    <h3>Reguler</h3>
                    <p class="plan-price">Rp7.000<small>/kg</small></p>
                    <ul>
                        <li>Selesai 2 sampai 3 hari</li>
                        <li>Cuci, kering, lipat</li>
                        <li>Jemput dan antar gratis</li>
                    </ul>
                    <a class="btn btn-ghost" href="#pesan">Tanya layanan ini</a>
                </article>
                <article class="plan plan-featured">
                    <h3>Express</h3>
                    <p class="plan-price">Rp12.000<small>/kg</small></p>
                    <ul>
                        <li>Selesai dalam 24 jam</li>
                        <li>Cuci, kering, setrika</li>
                        <li>Jemput dan antar gratis</li>
                    </ul>
                    <a class="btn btn-coral" href="#pesan">Tanya layanan ini</a>
                </article>
                <article class="plan">
                    <h3>Langganan bulanan</h3>
                    <p class="plan-price">Rp150.000<small>/bulan</small></p>
                    <ul>
                        <li>Hingga 25 kg per bulan</li>
                        <li>Jadwal jemput tetap</li>
                        <li>Prioritas pengerjaan</li>
                    </ul>
                    <a class="btn btn-ghost" href="#pesan">Tanya layanan ini</a>
                </article>
            </div>
        </section>

        <section class="section journal-section" id="jurnal">
            <header class="section-head section-head--center">
                <p class="eyebrow">Catatan perawatan</p>
                <h2>Tips kecil untuk pakaian yang lebih awet</h2>
                <p>Panduan singkat agar rutinitas merawat pakaian terasa lebih mudah.</p>
            </header>
            <div class="journal-grid">
                <article class="journal-card"><img src="{{ asset('images/washup/folded-laundry.jpg') }}" alt="Pakaian bersih di dalam keranjang"><div><span class="journal-tag">Perawatan kain</span><h3>Cara membaca label perawatan pakaian</h3><p>Kenali simbol pada label sebelum memilih cara mencuci dan mengeringkan.</p></div></article>
                <article class="journal-card"><img src="{{ asset('images/washup/laundry-room.jpg') }}" alt="Peralatan laundry profesional"><div><span class="journal-tag">Kebiasaan laundry</span><h3>Pisahkan cucian berdasarkan warna</h3><p>Kebiasaan sederhana ini membantu menjaga warna pakaian tetap terawat.</p></div></article>
                <article class="journal-card"><img src="{{ asset('images/washup/hero-woman.jpg') }}" alt="Pelanggan membawa pakaian ke laundry"><div><span class="journal-tag">Tips harian</span><h3>Siapkan pakaian sebelum dicuci</h3><p>Kosongkan saku dan tutup ritsleting sebelum menyerahkan cucian.</p></div></article>
            </div>
        </section>

        <section class="section section-tint" id="testimoni">
            <div class="section-inner">
                <header class="section-head">
                    <p class="eyebrow">Cerita pelanggan</p>
                    <h2>Kata pelanggan kami</h2>
                </header>
                <div class="quotes">
                    <blockquote>
                        <p>Bajuku wangi dan rapi, kurirnya juga tepat waktu. Sudah langganan setengah tahun.</p>
                        <footer>Rina, karyawan swasta</footer>
                    </blockquote>
                    <blockquote>
                        <p>Jas untuk acara wisuda dicuci bersih tanpa rusak. Hasilnya seperti baru.</p>
                        <footer>Bima, mahasiswa</footer>
                    </blockquote>
                    <blockquote>
                        <p>Paket bulanan sangat membantu karena aku nggak sempat nyuci tiap minggu.</p>
                        <footer>Sari, ibu rumah tangga</footer>
                    </blockquote>
                </div>
            </div>
        </section>

        <section class="section booking-section" id="pesan">
            <div class="booking-panel">
                <div class="booking-copy">
                    <p class="eyebrow">Mulai dari sini</p>
                    <h2>Siap membuat hari laundry terasa lebih ringan?</h2>
                    <p>Kirim kebutuhanmu. Tim WashUp akan menghubungimu untuk membahas layanan dan jadwal.</p>
                    <img src="{{ asset('images/washup/folded-laundry.jpg') }}" alt="Pakaian bersih yang siap dikembalikan kepada pelanggan">
                </div>
                <div class="booking-form-wrap">
                    <header class="section-head">
                        <h3>Tanyakan layanan</h3>
                        <p>Isi form ini dan kami akan menindaklanjuti permintaanmu.</p>
                    </header>

                    @if (session('success'))
                        <p class="form-status ok" role="status">{{ session('success') }}</p>
                    @endif

                    <form action="{{ route('question.store') }}" method="POST">
                        @csrf
                        <div class="form-field">
                            <label for="name">Nama</label>
                            <input id="name" name="name" type="text" value="{{ old('name', old('nama')) }}" autocomplete="name" required @class(['invalid' => $errors->has('name')])>
                            @error('name')
                                <span class="field-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-field">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required @class(['invalid' => $errors->has('email')])>
                            @error('email')
                                <span class="field-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-field">
                            <label for="question">Layanan yang dibutuhkan</label>
                            <textarea id="question" name="question" rows="4" maxlength="1000" placeholder="Contoh: cuci express 5 kg, dengan penjemputan di ..." required @class(['invalid' => $errors->has('question')])>{{ old('question', old('pertanyaan')) }}</textarea>
                            @error('question')
                                <span class="field-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-coral" type="submit">Kirim permintaan</button>
                    </form>
                </div>
            </div>
        </section>

        @if ($questions->isNotEmpty())
            <section class="section" aria-labelledby="questions-title">
                <header class="section-head">
                    <p class="eyebrow">Dari pengunjung</p>
                    <h2 id="questions-title">Pertanyaan terbaru</h2>
                </header>
                <div class="question-list">
                    @foreach ($questions as $question)
                        <article class="question-item">
                            <h3>{{ $question->name }}</h3>
                            <p class="question-email">{{ $question->email }}</p>
                            <p>{{ $question->question }}</p>
                        </article>
                    @endforeach
                </div>
            </section>
        @endif
    </main>

    <footer class="site-footer">
        <div class="footer-top">
            <div><strong>WashUp</strong><p>Perawatan laundry yang membuat harimu lebih ringan.</p></div>
            <div class="footer-links"><a href="#layanan">Layanan</a><a href="#harga">Harga</a><a href="#jurnal">Tips</a><a href="#pesan">Kontak</a></div>
        </div>
        <p class="footer-credit">Foto: Brian Wangenheim, Annie Spratt, dan Anton Savinov / Unsplash</p>
        <p class="copy">&copy; {{ date('Y') }} WashUp. Hak cipta dilindungi.</p>
    </footer>

    @if (session('question'))
        <script>
            window.setTimeout(() => {
                window.location.href = @json(route('question.respon'));
            }, 2000);
        </script>
    @endif
</body>
</html>
