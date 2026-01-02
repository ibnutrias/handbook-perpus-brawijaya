# 📚 Handbook Digital Perpustakaan Museum Brawijaya

![Project Status](https://img.shields.io/badge/Status-Active-success)
![PHP](https://img.shields.io/badge/Backend-PHP-blue)
![Bootstrap](https://img.shields.io/badge/Frontend-Bootstrap%205-purple)
![License](https://img.shields.io/badge/License-MIT-green)

**Handbook Digital** adalah aplikasi web interaktif yang dirancang untuk memodernisasi layanan informasi di **Perpustakaan Museum Brawijaya Malang**. Aplikasi ini berfungsi sebagai panduan digital komprehensif yang menggabungkan informasi statis dengan pengalaman interaktif seperti buku digital (flipbook), tur virtual, dan fitur aksesibilitas suara.

Proyek ini bertujuan untuk memudahkan pengunjung, peneliti, dan masyarakat umum dalam mengakses informasi mengenai koleksi sejarah militer, layanan, dan fasilitas perpustakaan.

---

## 🌟 Fitur Utama

Aplikasi ini dilengkapi dengan berbagai fitur modern:

### 1. 📖 Digital Flipbook Viewer (`flipbook.php`)
Membaca buku panduan perpustakaan layaknya buku fisik dengan efek membalik halaman yang realistis.
* **Teknologi**: Menggunakan `turn.js` dan `pdf.js`.
* **Fitur**: Zoom in/out, navigasi halaman, mode satu/dua halaman (responsif), dan efek suara kertas (`page-flip-01a.mp3`).
* **Gestur**: Mendukung *swipe* pada perangkat layar sentuh menggunakan `hammer.js`.

### 2. 🗣️ Aksesibilitas Text-to-Speech (TTS)
Fitur inklusif yang memungkinkan konten teks pada website dibacakan secara otomatis oleh browser.
* **Teknologi**: Native Web Speech API (`speech_manager.js`).
* **Dukungan Bahasa**: Deteksi otomatis suara Google Bahasa Indonesia dan Inggris.
* **Interaksi**: Tombol "Baca Teks" tersedia di setiap bagian penting.

### 3. 🔄 Tur Virtual 360°
Memberikan pengalaman visual imersif bagi pengguna untuk melihat suasana dalam perpustakaan secara panorama.
* **Teknologi**: `Pannellum Viewer`.
* **Interaksi**: Hotspot informasi interaktif di dalam gambar panorama.

### 4. 🌐 Dukungan Multi-bahasa (i18n)
Website dapat diakses dalam dua bahasa: **Bahasa Indonesia (ID)** dan **Inggris (EN)**.
* Pergantian bahasa dilakukan secara instan tanpa *reload* halaman (menggunakan `translations.js`).

### 5. 📱 Desain Responsif
Tampilan antarmuka yang optimal di berbagai perangkat (Desktop, Tablet, dan Smartphone) menggunakan framework **Bootstrap 5**.

---

## 🛠️ Teknologi yang Digunakan

* **Backend**: PHP (Native)
* **Frontend Framework**: Bootstrap 5.3
* **Scripting**: JavaScript (ES6+), jQuery
* **Styling**: CSS3 (Custom `style.css` & `responsive.css`)
* **Libraries Pihak Ketiga**:
    * [Turn.js](http://www.turnjs.com/) (Flipbook effect)
    * [PDF.js](https://mozilla.github.io/pdf.js/) (PDF Rendering)
    * [Pannellum](https://pannellum.org/) (360 Panorama)
    * [Hammer.js](https://hammerjs.github.io/) (Touch gestures)

---

## 📂 Struktur Direktori

Berikut adalah struktur folder utama proyek ini:

```text
handbook-perpus-brawijaya/
├── assets/
│   ├── css/
│   │   ├── responsive.css      # Penyesuaian tampilan mobile/desktop
│   │   ├── speech.css          # Styling tombol Text-to-Speech
│   │   └── style.css           # Styling utama & tema warna
│   ├── img/                    # Aset gambar (logo, foto, 360, dll)
│   ├── js/
│   │   ├── speech_manager.js   # Logika Text-to-Speech
│   │   └── translations.js     # Kamus bahasa (ID/EN)
│   ├── other/
│   │   └── page-flip-01a.mp3   # Efek suara flipbook
│   └── pdf/
│   │   └── Handbook.pdf        # File PDF utama untuk Flipbook
├── includes/
│   ├── header.php              # Navigasi & Head HTML
│   └── footer.php              # Footer & Modal Global
├── index.php                   # Halaman Utama (Landing Page)
├── flipbook.php                # Halaman Viewer Buku Digital
└── README.md                   # Dokumentasi Proyek
