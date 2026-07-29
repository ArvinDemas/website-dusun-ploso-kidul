# Plosokidul Theme — README

> Tema resmi Website Desa Plosokidul  
> Program Kerja: **Gerbang Digital** | KKN-BN Angkatan 84, Dusun Ploso Kidul

---

## Keputusan Teknis Dasar

| Aspek | Keputusan |
|---|---|
| **Platform** | WordPress (self-hosted) |
| **Tipe Tema** | Classic/Hybrid Theme (bukan Block/FSE Theme) |
| **Versi WP Minimum** | 6.4 |
| **PHP Minimum** | 7.4 |
| **Text Domain** | `plosokidul-theme` |
| **Gaya Visual** | Rural Contemporary (Alam + Modern) |
| **Stack Warna** | Hijau Menoreh `#2D6A4F`, Coklat Tanah `#6B4226`, Terakota `#8D4D4E`, Navy `#1A1A2E` |
| **Font Heading** | Playfair Display (Google Fonts) |
| **Font Body** | Plus Jakarta Sans (Google Fonts) |

---

## Akses Lokal (Development)

| Item | Nilai |
|---|---|
| **URL Lokal** | `http://localhost/plosokidul/` |
| **phpMyAdmin** | `http://localhost/phpmyadmin/` |
| **Nama Database** | `db_plosokidul` |
| **Table Prefix** | `pls_` |
| **XAMPP Path** | `C:\xampp3\` |
| **File WordPress** | `e:\KKN\web\` |

---

## Struktur Folder Tema

```
plosokidul-theme/
├── style.css               ← Header metadata tema (JANGAN tulis CSS di sini)
├── functions.php           ← Enqueue assets, theme support, registrasi menu
├── index.php               ← Template fallback (wajib ada)
├── header.php              ← Kerangka <head> dan navbar
├── footer.php              ← Kerangka footer, floating WA button
├── template-parts/
│   ├── header/             ← Komponen navbar (diisi Fase 2)
│   ├── footer/             ← Komponen footer (diisi Fase 2)
│   └── content/            ← Komponen kartu berita/potensi (diisi Fase 2)
├── assets/
│   ├── css/
│   │   ├── main.css        ← CSS utama (diisi Fase 1 & 2)
│   │   └── editor-style.css← CSS khusus editor Gutenberg (diisi Fase 1)
│   ├── js/
│   │   └── main.js         ← JS utama (diisi Fase 2+)
│   └── images/             ← Aset gambar statis tema (logo default, dll)
└── languages/              ← File terjemahan .po/.mo (diisi Fase 12)
```

---

## Roadmap Fase Pengembangan

| Fase | Fokus | Status |
|---|---|---|
| **0** | Persiapan fondasi (file ini) | ✅ Selesai |
| **1** | Design System (CSS variables, tokens) | ⏳ Selanjutnya |
| **2** | Komponen UI (Navbar, Card, Button, Footer) | 🔲 Pending |
| **3** | Homepage: Hero Section | 🔲 Pending |
| **4** | Homepage: Statistik & Tentang Desa | 🔲 Pending |
| **5** | Homepage: Potensi Desa & Berita Terbaru | 🔲 Pending |
| **6** | CMS: Custom Post Types (Berita, Galeri, Video) | 🔲 Pending |
| **7** | Halaman Statis: Profil Desa & Struktur Organisasi | 🔲 Pending |
| **8** | Halaman Kependudukan & Infografis | 🔲 Pending |
| **9** | Layanan, Kontak & Integrasi WhatsApp | 🔲 Pending |
| **10** | Dashboard Admin: Penyederhanaan untuk Non-IT | 🔲 Pending |
| **11** | Optimasi Performa & SEO | 🔲 Pending |
| **12** | QA Akhir, Aksesibilitas & Pelatihan Admin | 🔲 Pending |

---

## Kontak Teknisi

| Peran | Nama | Kontak |
|---|---|---|
| Developer Utama | *(isi nama)* | *(isi nomor WA)* |
| Anggota KKN IT | Arvin Demas Naryama | *(isi kontak)* |
| Hosting Support | Niagahoster/Rumahweb | Support 24 jam |

---

## Catatan Penting untuk Admin Desa

> ⚠️ **Jangan mengubah file PHP di folder ini.** Perubahan konten (berita, galeri, pengumuman) cukup dilakukan melalui menu **Dashboard Admin** WordPress.  
> Jika ada masalah teknis, hubungi kontak teknisi di atas.
