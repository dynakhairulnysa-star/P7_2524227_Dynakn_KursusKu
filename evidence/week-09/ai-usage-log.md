# AI Usage Log - Pertemuan 9 (Laravel)

| Masalah/Tujuan | Prompt Singkat | Saran AI | Keputusan Saya | Hasil Uji |
| :--- | :--- | :--- | :--- | :--- |
| Setup Bootstrap & jQuery via Vite | "Cara install bootstrap dan jquery lewat npm di Laravel" | Jalankan `npm install` lalu `npm install bootstrap @popperjs/core jquery` | Diterima | Aset frontend aktif dan ter-load di browser |
| Membuat Master Layout & Navbar | "Cara membuat layout blade yang reusable" | Gunakan `@extends('layouts.app')`, `@yield('content')`, dan `@include('partials.navbar')` | Diterima | Home dan Form menggunakan layout yang sama |
| Fitur Ajax Cek Sisa Kursi | "Implementasi jQuery Ajax di Laravel untuk cek kuota" | Buat route JSON dummy, lalu gunakan `$.ajax` dengan event `change` pada dropdown | Diterima | Kotak biru neon menampilkan sisa kursi tanpa reload |
| Error `php is not recognized` di VS Code | "Kenapa php artisan error di terminal VS Code?" | Tambahkan PATH Laragon atau panggil path lengkap `C:\laragon\bin\php\...` | Diterima | Perintah route:list dan artisan berjalan normal |
| Kustomisasi Tema Gelap & Neon | "Cara membuat kotak alert ajax berwarna biru neon" | Tambahkan class custom CSS `alert-success-custom` dengan `background: rgba(59, 130, 246, 0.2)` dan `box-shadow` | Diterima | Tampilan alert menyatu dengan tema dark mode |

**Catatan Tambahan:** 
Dalam pengerjaan tugas ini, AI saya gunakan sebagai partner *debugging* saat menghadapi error Node.js/PHP di terminal, perbaikan PATH *environment*, serta untuk memastikan struktur kode MVC dan Ajax sudah sesuai standar PDF. Meskipun demikian, saya secara mandiri melakukan penyesuaian desain antarmuka (CSS) agar tetap konsisten dengan identitas visual proyek. Saya tetap menjaga alur fungsionalitas dasar Ajax dan MVC agar 100% sesuai panduan praktikum, serta memverifikasi setiap *request* Ajax melalui tab Network untuk memastikan pemahaman alur data (Request -> JSON -> Response) berjalan dengan baik.