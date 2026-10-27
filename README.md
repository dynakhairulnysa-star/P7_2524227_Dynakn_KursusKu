# KursusKu - Platform Pembelajaran Web

Proyek praktikum Pemrograman Web III (PHP & MySQL). Aplikasi ini dibangun menggunakan framework Laravel untuk mengelola pendaftaran kursus teknologi secara terstruktur.

## 🛠️ Requirement (Kebutuhan Sistem)
- PHP 8.3 atau versi lebih baru
- Composer (Dependency Manager PHP)
- Node.js & NPM (Untuk build aset frontend via Vite)
- Laragon / XAMPP sebagai Web Server lokal

## 🚀 Cara Menjalankan Project
1. Clone repository ini atau buka folder project di terminal.
2. Jalankan `composer install` untuk mengunduh dependensi PHP.
3. Salin file `.env.example` menjadi `.env` (jika belum ada).
4. Jalankan `php artisan key:generate` untuk generate APP_KEY.
5. Jalankan `npm install` lalu `npm run dev` untuk mengaktifkan aset CSS/JS (Vite).
6. Buka terminal baru, jalankan `php artisan serve`.
7. Akses aplikasi di browser melalui `http://127.0.0.1:8000`.

## ✨ Fitur yang Sudah Diimplementasikan

### Milestone 7 (Dasar Laravel & MVC)
- Penerapan konsep MVC (Model-View-Controller).
- Routing terstruktur dengan *Named Route* (`home`).
- Pengiriman data dari `HomeController` ke tampilan Blade.
- Integrasi aset gambar dan CSS kustom.
- **[Personal Touch]** Tampilan antarmuka (UI) menggunakan tema gelap (Dark Mode) dengan animasi partikel interaktif.

### Milestone 9 (Layout, Bootstrap & Ajax)
- Pembuatan *Master Layout* Blade (`app.blade.php`) untuk efisiensi kode.
- Pemisahan komponen *Navbar* ke dalam file partial.
- Integrasi framework Bootstrap 5 dan jQuery melalui Vite.
- Pembuatan form pendaftaran dengan proteksi `@csrf` dan validasi dasar.
- **Fitur Unggulan:** Implementasi jQuery Ajax untuk mengecek sisa kuota kursus secara *real-time* tanpa perlu me-reload halaman.

## ⏳ Cakupan yang Belum Dikerjakan
Sesuai batasan materi praktikum, beberapa fitur berikut belum diimplementasikan:
- Koneksi ke Database (masih menggunakan *dummy array*).
- Operasi CRUD (Create, Read, Update, Delete) menggunakan Eloquent ORM.
- Sistem Autentikasi (Login/Register).
- Relasi antar tabel database.