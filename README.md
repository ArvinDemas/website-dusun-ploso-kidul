# 🌾 Website Resmi Dusun Ploso Kidul — Desa Plosogede
### 🚀 Program Kerja Gerbang Digital | KKN-BN Angkatan 84.173 UPN "Veteran" Yogyakarta

Repositori ini berisi seluruh kode sumber (*source code*), tema WordPress kustom (**`plosokidul-theme`**), dan dokumentasi resmi Website Dusun Ploso Kidul, Desa Plosogede, Kecamatan Ngluwar, Kabupaten Magelang, Jawa Tengah.

---

## 📂 Struktur Repositori

```text
web/
├── wp-content/themes/plosokidul-theme/   # 🎨 Tema Kustom Resmi WordPress (Rural Contemporary)
│   ├── assets/                           # CSS, JS, Ikon, & Logo Kabupaten Magelang
│   ├── page-templates/                   # Template Halaman Profil, Organisasi, Berita, Kependudukan, dll.
│   ├── template-parts/                   # Komponen Reusable (Hero, Video, Card Berita/Potensi)
│   ├── inc/                              # Custom Post Types & Panel Admin Kustom
│   ├── functions.php                     # Enqueue Asset & Konfigurasi Fitur Tema
│   ├── header.php / footer.php           # Navigasi Kepala & Kaki Halaman
│   └── manual-book-admin.md              # Buku Panduan Admin versi Markdown
├── Panduan-Admin-Dusun-Ploso-Kidul.html  # 📘 Buku Panduan Pengelolaan Admin (Versi HTML Interaktif)
├── Panduan-Admin-Dusun-Ploso-Kidul.docx  # 📄 Buku Panduan Pengelolaan Admin (Versi Word Document)
├── DESIGN.md                             # 🎨 Dokumentasi Bahasa Visual & Token Desain Tema
├── index.php                             # Entry Point WordPress
├── .gitignore                            # Konfigurasi Pengabaian File Sampah/Besar
└── README.md                             # Dokumentasi Repositori ini
```

---

## 🎨 Konsep Visual & Teknologi

Website ini dirancang khusus mengusung gaya **Rural Contemporary** (Kontemporer Pedesaan) dengan palet warna alam:
* **Hijau Menoreh (`#2D6A4F`)**: Warna utama (alam, pertanian, ketenangan).
* **Coklat Tanah (`#6B4226`)**: Warna sekunder (bumi, tradisi, kehangatan).
* **Kuning Padi (`#F4A51E`)**: Warna aksen (kemakmuran, energi).
* **Krem Bersih (`#F9F6F0`)**: Latar belakang bersih yang nyaman di mata.

### Teknologi Yang Digunakan:
* **Core**: PHP (WordPress Theme API), Vanilla HTML5 & CSS3.
* **Libraries**: Chart.js (Diagram Statistik Penduduk), Leaflet.js (Peta Geografis Interaktif), Font Google (Playfair Display & Plus Jakarta Sans).
* **Aksesibilitas & Kinerja**: Memenuhi standar WCAG AA (Kontras tinggi, ARIA attributes, Touch Target $44\text{px}$ untuk HP, fully responsive).

---

## 🛠️ Fitur Utama Website

1. **🏠 Beranda Interaktif**: Hero Banner, Tagline, Video Profil Dusun, & Warta Berita Terkini.
2. **📜 Profil Dusun**: Sejarah Desa Plosogede, Visi-Misi Dusun, Peta Geografis, & Adat Kebudayaan (Jathilan, Hadrohan, Sambatan).
3. **🏛️ Bagan Organisasi**: Struktur Kepengurusan 3-Level (Kadus, BPD, RW 06 & RW 07, Ketua RT, & Kader Posyandu).
4. **📊 Demografi & Kependudukan**: Ikhtisar 300 KK (1.050 Jiwa), Diagram Statistik Kelompok Usia/Mata Pencaharian, & Bento Grid Infrastruktur.
5. **🌾 Potensi Dusun**: Katalog produk unggulan Tani, Perikanan Air Tawar (Nila & Gurame), UMKM, dan Kerajinan.
6. **🖼️ Galeri Dokumentasi**: Album dokumentasi visual kegiatan adat dan pembangunan dusun.
7. **📩 Pengaduan Online**: Form kirim pesan/keluhan warga yang tersimpan secara **PRIVAT & RAHASIA**.
8. **⚙️ Dasbor Admin Kustom**: Dasbor WordPress yang disederhanakan dilengkapi tombol akses **Buku Panduan Admin**.

---

## 🚀 Petunjuk Deployment Untuk Tim KKN / Pengembang Selanjutnya

Jika adik-adik angkatan KKN selanjutnya ingin melanjutkan atau memperbarui website ini:

### 1. Pengembangan Lokal (Development):
1. Clone repositori ini ke folder `htdocs` (XAMPP) atau `www` (Laragon):
   ```bash
   git clone https://github.com/USERNAME/REPO_NAME.git web
   ```
2. Copy folder `wp-content/themes/plosokidul-theme` ke dalam direktori instalasi WordPress Anda.
3. Aktifkan tema **Plosokidul Theme** dari Dasbor WordPress (`Tampilan` $\rightarrow$ `Tema`).

### 2. Upload Ke Server Hosting (Live Hosting cPanel / Rumahweb):
1. Jalankan script pembangun paket ZIP (atau buat ZIP dari folder `plosokidul-theme` & file `Panduan-Admin-Dusun-Ploso-Kidul.html`).
2. Masuk ke **cPanel File Manager** $\rightarrow$ buka folder `public_html/`.
3. Upload file ZIP lalu klik **Extract** ke `/public_html`.

---

## 📜 Lisensi & Kredensial

* **Diprakarsai Oleh**: Tim KKN-BN Angkatan 84 Kelompok 173 UPN "Veteran" Yogyakarta.
* **Lokasi Pengabdian**: Dusun Ploso Kidul, Desa Plosogede, Kecamatan Ngluwar, Kabupaten Magelang, Jawa Tengah.
* **Tahun Rilis**: 2026.

---
*Semoga website ini memberikan manfaat yang berkelanjutan bagi seluruh warga dan Pamong Dusun Ploso Kidul.* 🌾✨
