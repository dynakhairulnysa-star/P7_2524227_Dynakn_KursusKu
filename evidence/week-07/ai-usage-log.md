# AI Usage Log - Pertemuan 7 (Laravel KursusKu)

| Masalah/Tujuan | Prompt Singkat | Saran AI | Keputusan Saya | Hasil Uji |
| :--- | :--- | :--- | :--- | :--- |
| Error `Repository not found` saat `git push` | "Cara mengatasi error Repository not found di Git?" | Gunakan Personal Access Token (PAT) sebagai password, dan hapus kredensial Git lama di Windows. | Diterima | Berhasil push ke GitHub menggunakan Token `ghp_...` |
| Terminal VS Code error `'php' is not recognized` | "Kenapa php artisan serve error di VS Code?" | Tambahkan folder PHP Laragon ke PATH Windows, atau panggil path lengkap `C:\laragon\bin\...` | Diterima | Tabel `route:list` berhasil muncul di terminal VS Code |
| Bingung menggabungkan desain dark mode lama dengan struktur PDF | "Cara menambahkan kotak Alur MVC tanpa menghilangkan background partikel?" | Tambahkan HTML `.mvc-grid` di Blade, dan tambahkan CSS baru di bagian bawah tanpa menghapus CSS lama. | Diterima | Web tampil dengan background biru gelap, partikel, dan ada kotak Alur MVC |
| Tombol "Lihat Program" berwarna ungu dan ada garis bawah | "Cara memaksa tombol CSS jadi putih bersih?" | Gunakan properti `background-color: #ffffff !important;` dan `text-decoration: none !important;` | Diterima | Tombol berubah menjadi kotak putih dengan teks biru |
| Setup Git Identity (`Author identity unknown`) | "Git error author identity unknown" | Jalankan `git config --global user.name` dan `user.email` sesuai akun GitHub. | Diterima | Commit berhasil dilakukan dan dikenali oleh Git |

**Catatan Tambahan:** Saya menggunakan AI sebagai tutor dan *debugger* saat menemui jalan buntu atau error. Saya tetap mengerjakan kodingan utamanya secara manual di VS Code, menyesuaikan CSS agar desainnya berbeda dari teman (tema gelap + partikel), dan memastikan saya paham alur MVC-nya (Route -> Controller -> Blade).