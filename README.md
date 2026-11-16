# WashUp Laundry

Landing page laundry berbasis Laravel. Halaman utama memuat layanan, proses, harga contoh, dan formulir yang menyiapkan permintaan penjemputan melalui WhatsApp.

## Menjalankan aplikasi

```powershell
composer install
Copy-Item .env.example .env
php artisan key:generate
php artisan serve
```

Jalankan perintah dari folder yang berisi file `artisan`.

## WhatsApp pemesanan

Atur `WASHUP_WHATSAPP_NUMBER` di `.env` ke nomor WhatsApp bisnis dalam format internasional tanpa tanda `+` atau spasi, misalnya `6281234567890`. Jika nomor belum diisi, formulir akan memberi tahu bahwa pemesanan belum dikonfigurasi.

Harga dan estimasi pada landing page adalah contoh. Sesuaikan isinya sebelum digunakan untuk pelanggan.

## Catatan data lama

Fitur CV, pelanggan, akun admin, dan pertanyaan sudah dilepas dari kode aplikasi. Riwayat migrasi lama dipertahankan agar database lokal dan data yang sudah ada tidak dihapus.
