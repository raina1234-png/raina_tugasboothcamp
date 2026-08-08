# Bio-Link Skincare & Fashion

> Website Bio-Link untuk menampilkan profil, rekomendasi skincare, makeup, fashion, serta berbagai tautan dalam satu halaman.

## 📌 Deskripsi

Bio-Link Skincare & Fashion merupakan aplikasi berbasis web yang digunakan sebagai media untuk mengelola dan menampilkan berbagai informasi serta rekomendasi produk dalam satu halaman.

Website ini dibuat untuk akun @racun.daily dengan fokus pada konten skincare, makeup, dan outfit. Pengunjung dapat melihat profil, media sosial, kontak bisnis, serta berbagai rekomendasi produk yang tersedia.

Selain halaman publik, sistem juga menyediakan halaman login admin untuk mengelola data tautan yang ditampilkan pada halaman Bio-Link.

---

## ✨ Fitur

### 👤 Halaman Publik
- Menampilkan foto profil.
- Menampilkan username dan deskripsi profil.
- Menampilkan kategori konten:
  - Skincare
  - Makeup
  - Fashion / Outfit
- Tombol menuju media sosial.
- Tombol Business Inquiries.
- Menampilkan daftar rekomendasi produk.
- Setiap rekomendasi dapat diarahkan ke halaman atau link produk terkait.

### 🔐 Admin
- Login administrator.
- Dashboard admin.
- Menambahkan data link.
- Mengubah data link.
- Menghapus data link.
- Mengatur informasi yang ditampilkan pada halaman publik.

---

## 🖥️ Tampilan Website

### Halaman Bio-Link

Halaman utama menampilkan profil akun, media sosial, kontak bisnis, dan daftar rekomendasi produk.

Contoh tampilan:

![Bio-Link Skincare & Fashion](screenshot.png)

---

## 🛠️ Teknologi yang Digunakan

- Laravel
- PHP
- MySQL
- HTML
- CSS
- JavaScript
- Blade Template
- Bootstrap / CSS Framework *(sesuaikan dengan project)*

---

## 📂 Struktur Project

```text
bio-link/
├── app/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
│   ├── css/
│   ├── js/
│   └── images/
├── resources/
│   └── views/
│       ├── admin/
│       └── public/
├── routes/
│   └── web.php
├── storage/
├── .env
├── artisan
├── composer.json
└── README.md
