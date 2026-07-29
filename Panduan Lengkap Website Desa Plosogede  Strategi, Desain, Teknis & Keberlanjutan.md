# Panduan Lengkap Website Resmi Desa Plosogede
## Brainstorming Komprehensif: Desain, Fitur, Teknis & Keberlanjutan
> **Konteks Dokumen:** Panduan ini dirancang khusus untuk proyek *Gerbang Digital* — program kerja KKN-BN Angkatan 84 di Dusun Ploso Kidul, Desa Plosogede, Kecamatan Ngluwar, Kabupaten Magelang, Jawa Tengah. Desa ini berada di perbukitan Menoreh, jalur penghubung strategis Magelang–DIY, dengan potensi pertanian, perikanan kolam, dan kegiatan sosial masyarakat yang kuat.

***
## 1. RISET & BENCHMARK REFERENSI
### 1.1 Referensi Website Desa/Kelurahan Terbaik di Indonesia
**Desa Dermaji, Banyumas (dermaji.desa.id)**

Desa Dermaji adalah salah satu contoh paling sering disebut sebagai benchmark website desa terbaik Indonesia. Yang membuatnya menonjol bukan sekadar tampilannya, melainkan *kedalaman konten dan konsistensi pembaruan*. Website ini menyajikan profil desa secara komprehensif — dari sejarah, struktur pemerintahan, produk unggulan, hingga rintisan *e-commerce* untuk produk desa yang sudah ada sejak 2016. Elemen yang bisa diadaptasi untuk Plosogede: sistem berita yang rutin diperbarui dan halaman produk/UMKM desa.[^1][^2]

**Desa Sidetapa, Buleleng, Bali (sidetapa-buleleng.desa.id)**

Desa ini meraih Juara 2 Lomba Pengelolaan Website Terbaik Kategori Desa/Kelurahan se-Kabupaten Buleleng tahun 2024. Keunggulannya terletak pada konsistensi pengelolaan dan kelengkapan navigasi — pengunjung bisa menemukan informasi dengan mudah. Relevan untuk Plosogede karena menunjukkan bahwa kualitas pengelolaan konten, bukan teknologi canggih, yang menentukan penghargaan.[^3]

**Desa Saing Prupuk (saingprupuk.desa.id)**

Meraih penghargaan Terbaik 1 Pengelola Website Desa, menunjukkan bahwa desa kecil sekalipun bisa memenangkan kompetisi dengan pengelolaan yang serius dan konsisten.[^4]

**Website Desa Plosogede yang Ada Saat Ini (desaplosogede.magelangkab.go.id)**

Dari penelusuran, website desa Plosogede saat ini masih menggunakan sistem dari Pemkab Magelang dengan tampilan standar. Informasi yang tersedia masih sangat dasar (alamat, email, telepon). Ini justru membuka peluang besar — membangun website baru yang secara visual dan fungsional jauh lebih baik akan memberikan dampak yang sangat terasa bagi desa.[^5][^6]
### 1.2 Referensi Website Tourism/Profil Daerah Internasional Berkualitas Tinggi
**Visit Iceland (visiticeland.com)**

Website resmi pariwisata Iceland yang dikelola oleh Business Iceland adalah salah satu benchmark storytelling terbaik dunia. Keunggulannya: hero section dengan foto/video full-width yang dramatis, navigasi yang sangat intuitif, dan konten yang terasa personal seolah disampaikan oleh warga lokal. Konsep "storytelling melalui landscape" sangat relevan untuk Desa Plosogede yang memiliki pemandangan Bukit Menoreh yang eksotis.[^7][^8]

**Armenia.travel (armenia.travel)**

Website resmi pariwisata Armenia yang mendapatkan *Honorable Mention* di Awwwards — pengakuan bergengsi dari komunitas desain web kelas dunia. Keunggulannya: visual yang kaya dengan foto-foto budaya autentik, transisi halaman yang halus, dan penyajian informasi "alam + budaya + kuliner" dalam satu ekosistem yang kohesif. Adaptasi untuk Plosogede: konsep "satu desa, tiga dimensi" (alam Menoreh, budaya gotong royong, produk pertanian).[^9][^10]

**Lithuania Travel (lithuania.travel)**

Mendapat *Honorable Mention* Awwwards dengan pendekatan desain editorial — setiap seksi homepage terasa seperti halaman majalah, bukan website pemerintah biasa. Penggunaan tipografi besar dan foto full-bleed menciptakan kesan *premium*. Elemen ini bisa diadaptasi dengan mengganti foto generik dengan foto asli dusun Ploso.[^11]

**Visit West Iceland (west.is)**

Website regional Iceland yang menampilkan *host guides* — panduan dari warga lokal di setiap area. Konsep ini sangat relevan untuk desa: alih-alih hanya informasi statis, ada "cerita dari warga" yang membuat website terasa hidup dan autentik.[^12]
### 1.3 Referensi Animasi "Wah tapi Efisien" dari Awwwards/CSS Design Awards
**Fitzroy Travel (Awwwards Nominee)**

Website untuk operator tur independen yang menggunakan hover effects pada kartu destinasi, parallax ringan di hero, dan scroll-triggered reveal yang tidak membebani performa. Tekniknya: animasi hanya pada properti `transform` dan `opacity` (GPU-accelerated), bukan `height` atau `width` yang memicu *layout recalculation*.[^13][^14]

**Snami Travel (Awwwards Honorable Mention)**

Website perjalanan otentik dengan micro-interaction pada setiap elemen interaktif — tombol bergerak sedikit saat di-hover, gambar zoom-in halus, transisi antar-halaman smooth. Semua dilakukan dengan CSS transitions + GSAP ScrollTrigger ringan.[^15]

**Pomegranate Travel (Awwwards Honorable Mention)**

Menggunakan kombinasi *big background images*, *clean layout*, dan *parallax ringan* — formula yang sempurna untuk website desa yang ingin terasa premium tanpa biaya teknis tinggi. Adaptasinya: foto sawah/pertanian Plosogede sebagai hero, bukan foto stok.[^16]
### 1.4 Tabel Perbandingan Referensi
| Situs | Kelebihan Spesifik | Elemen Konkret untuk Diadaptasi | Cara Adaptasinya |
|---|---|---|---|
| dermaji.desa.id | Kedalaman konten, konsistensi update, halaman produk UMKM[^2] | Halaman produk UMKM, berita rutin | Buat halaman "Potensi Desa" untuk produk pertanian & ikan Plosogede |
| sidetapa-buleleng.desa.id | Konsistensi pengelolaan, navigasi bersih[^3] | Struktur menu yang intuitif | Tiru arsitektur navigasi: Beranda > Profil > Berita > Layanan > Kontak |
| visiticeland.com | Hero video full-screen, storytelling landscape[^8] | Video profil di hero section, narasi "cerita desa" | Tempatkan video profil KKN sebagai hero dengan overlay teks singkat |
| armenia.travel | Honorable Mention Awwwards, visual budaya + alam terpadu[^9] | Scroll-triggered reveal, parallax ringan | CSS scroll-driven animation untuk section "Mengenal Plosogede" |
| lithuania.travel | Desain editorial, tipografi besar[^11] | Full-bleed section photography | Foto sawah/Bukit Menoreh sebagai section divider |
| west.is | "Host guides" — narasi dari warga lokal[^12] | Profil tokoh desa, cerita dari kepala dusun | Buat sub-halaman "Cerita Warga" dengan foto + kutipan singkat |

***
## 2. TUJUAN & AUDIENS
### 2.1 Segmen Target Pengunjung dan Kebutuhan Spesifik Masing-masing
**Warga Lokal (Dusun Ploso Kidul & sekitarnya)**
- Kebutuhan utama: Informasi pengumuman desa, jadwal kegiatan (posyandu, pengajian, senam), prosedur pengajuan surat (KTP, KK, dll).
- Kebiasaan digital: Dominan mengakses dari smartphone, koneksi kadang lambat (3G/4G), tidak terbiasa navigasi yang rumit.
- Implikasi desain: Website HARUS mobile-first, loading cepat di koneksi 3G, tombol CTA besar, bahasa Indonesia yang sederhana.

**Warga Perantau (dari Plosogede yang tinggal di kota)**
- Kebutuhan utama: Update berita desa, informasi kegiatan keluarga, dokumentasi pembangunan desa, foto/video kegiatan kampung halaman.
- Kebiasaan digital: Lebih terbiasa dengan teknologi, sering mengakses dari desktop/laptop.
- Implikasi desain: Galeri foto/video yang baik, feed berita yang mudah di-share ke WhatsApp/media sosial.

**Wisatawan & Calon Pengunjung**
- Kebutuhan utama: Informasi potensi alam (Bukit Menoreh yang terlihat dari desa), produk lokal, akses/rute ke desa, kontak untuk kunjungan.[^7]
- Kebiasaan digital: Browsing dari Google, mencari informasi visual (foto).
- Implikasi desain: SEO yang baik, foto berkualitas tinggi, informasi peta/arah yang jelas (embed Google Maps).

**Pemerintah Daerah & Instansi Vertikal**
- Kebutuhan utama: Profil pemerintahan desa, data kependudukan, laporan kegiatan.
- Implikasi desain: Halaman profil dan kependudukan yang terstruktur rapi.

**Investor & Pelaku Bisnis**
- Kebutuhan utama: Potensi ekonomi desa (pertanian, perikanan, UMKM), data demografis, kontak pemerintah desa.
- Implikasi desain: Seksi "Potensi Desa" yang menonjol, data statistik yang meyakinkan, kontak yang mudah ditemukan.
### 2.2 Empat Tujuan Utama Website
**Tujuan 1: Meningkatkan Akses Informasi Publik**
Selama ini informasi desa hanya tersebar via mulut ke mulut atau papan pengumuman fisik. Website memberikan saluran informasi digital yang bisa diakses 24/7 dari mana saja. Dampak konkret: warga perantau tahu jadwal kegiatan tanpa harus menelepon keluarga; instansi bisa mengakses profil desa kapan saja tanpa harus datang ke kantor.[^17]

**Tujuan 2: Promosi Potensi Desa (Pertanian, UMKM, Pariwisata)**
Plosogede memiliki potensi pertanian padi, palawija, empon-empon, dan perikanan budidaya. Dengan website, produk-produk ini bisa dipromosikan ke pembeli di luar desa. Dampak jangka panjang: meningkatkan pendapatan warga melalui pemasaran digital.[^18]

**Tujuan 3: Memfasilitasi Layanan Administrasi Digital (Bertahap)**
Awalnya: informasi prosedur dan persyaratan surat. Bertahap menuju: form pengajuan online yang diteruskan ke WhatsApp admin desa. Dampak konkret: mengurangi antrean di kantor desa, warga bisa mempersiapkan berkas sebelum datang.

**Tujuan 4: Membangun Identitas & Kebanggaan Desa di Era Digital**
Di era digitalisasi, desa yang tidak hadir secara online terasa "tidak ada" bagi dunia luar. Website yang baik — apalagi dengan video profil yang profesional — membangun kebanggaan warga dan citra positif desa. Ini relevan langsung dengan program KKN "Gerbang Digital".[^17]

***
## 3. STRUKTUR INFORMASI & MENU
### 3.1 Sitemap Lengkap (3 Level)
```
BERANDA (Homepage)
├── Hero Section (Video Profil Desa)
├── Tentang Plosogede (Ringkasan)
├── Potensi Desa (Unggulan)
├── Berita Terbaru (3-4 artikel)
├── Galeri Terkini
└── Akses Cepat ke Layanan

PROFIL DESA
├── Sejarah Desa
│   ├── Asal-usul Nama Plosogede
│   ├── Sejarah Pemerintahan
│   └── Tokoh-tokoh Bersejarah
├── Geografis & Wilayah
│   ├── Letak & Batas Wilayah
│   ├── Peta Desa Interaktif (Google Maps Embed)
│   └── Kondisi Iklim
├── Visi & Misi Desa
├── Struktur Organisasi
│   ├── Bagan Struktur Perangkat Desa
│   ├── Profil Kepala Desa (foto + bio singkat)
│   └── Profil Perangkat Desa (sekdes, kaur, kasi)
├── Lambang & Identitas Desa
└── Adat Istiadat & Budaya

KEPENDUDUKAN & DATA
├── Statistik Penduduk
│   ├── Jumlah Penduduk (per dusun)
│   ├── Komposisi Usia
│   ├── Komposisi Jenis Kelamin
│   └── Tingkat Pendidikan
├── Peta Wilayah & Tata Ruang
└── Data Infrastruktur

POTENSI DESA
├── Pertanian
│   ├── Komoditas Unggulan (padi, palawija, empon-empon)
│   ├── Luas Lahan Pertanian
│   └── Kalender Tanam
├── Perikanan
│   ├── Budidaya Ikan (lele, nila)
│   └── Potensi Pengembangan
├── UMKM & Produk Lokal
│   ├── Daftar UMKM
│   └── Cara Pemesanan
└── Wisata & Alam
    ├── Pemandangan Bukit Menoreh
    ├── Spot Foto
    └── Aksesibilitas

BERITA & INFORMASI
├── Berita Desa
├── Pengumuman
├── Agenda & Kegiatan
│   ├── Kalender Kegiatan
│   └── Arsip Kegiatan
└── Galeri
    ├── Foto Kegiatan
    ├── Video (termasuk Video Profil Desa)
    └── Dokumentasi Pembangunan

LAYANAN
├── Layanan Surat & Administrasi
│   ├── Daftar Jenis Layanan
│   ├── Persyaratan per Layanan
│   └── Form Pengajuan Online (via WhatsApp)
├── Pengaduan Warga
│   └── Form Pengaduan (via WhatsApp)
└── FAQ (Pertanyaan Umum)

KONTAK
├── Kantor Desa (alamat, jam operasional)
├── Nomor Telepon & WhatsApp
├── Email
├── Peta Lokasi (Google Maps embed)
└── Media Sosial
```
### 3.2 Hierarki Navigasi
**Header (Sticky Navigation)**
Sticky header sangat penting karena memastikan menu selalu tersedia saat pengguna scroll ke bawah — tanpa harus kembali ke atas halaman[^19]. Struktur header: Logo Desa + Nama Desa | Menu Utama | Tombol "Hubungi Kami" (CTA). Di mobile, berubah menjadi hamburger menu.

**Menu Utama di Header (7 Item)**
Beranda | Profil Desa | Kependudukan | Potensi | Berita | Layanan | Kontak. Sub-menu muncul sebagai dropdown saat hover (desktop) atau accordion saat tap (mobile).

**Footer**
Footer berisi navigasi sekunder lengkap, informasi kontak, link media sosial, copyright, dan tombol "Kembali ke Atas". Footer juga ideal untuk menampilkan widget feed Instagram desa.
### 3.3 Contoh Isi Menu "Profil Desa" secara Rinci
**Urutan penyajian yang logis:**
1. Sejarah desa dimulai dengan cerita naratif menarik (bukan sekadar daftar tahun), termasuk asal-usul nama "Plosogede" — perlu dikonfirmasi dengan perangkat desa atau tokoh tertua.
2. Geografis: peta embed Google Maps yang menunjukkan letak desa + foto pemandangan dari ketinggian (drone).
3. Visi & Misi: disajikan visual dengan ikon, bukan teks panjang biasa.
4. Struktur Organisasi: bagan interaktif dengan foto tiap perangkat desa — pengunjung bisa klik foto untuk melihat bio singkat dan kontak.
5. Adat Istiadat: foto + deskripsi singkat tradisi gotong royong, pengajian, kerja bakti.[^3]

***
## 4. FITUR-FITUR YANG DIBUTUHKAN
### 4.1 Fitur Wajib (Statis)
**Profil Desa**
Halaman ini adalah "kartu nama" desa. Kontennya: sejarah dengan gaya naratif (bukan daftar kronologis kering), data geografis dilengkapi peta, kondisi demografis, kondisi iklim. Yang sering dilupakan: tambahkan juga "Fun Facts" — misal "Desa ini terletak di jalur strategis Magelang–DIY" atau "Pemandangan Bukit Menoreh bisa dilihat langsung dari sini" — untuk memberi kesan pertama yang menarik.[^20][^18][^7]

**Struktur Organisasi**
Bukan sekadar bagan kotak-kotak. Buat dengan foto masing-masing perangkat desa (resolusi minimal 400×400 px), nama lengkap, jabatan, dan nomor WhatsApp yang bisa dihubungi langsung. Ini membangun kepercayaan karena warga tahu "siapa yang bisa dihubungi untuk urusan apa".

**Visi & Misi**
Tampilkan dengan desain visual yang kuat — bukan hanya teks paragraf. Gunakan ikon yang relevan (misalnya ikon padi untuk visi terkait pertanian, ikon masjid untuk keagamaan).

**Sejarah Desa**
Minimal 3-5 paragraf naratif + foto-foto lama desa (hitam-putih jika ada) + timeline visual. Konten ini jarang berubah sehingga sekali dibuat bisa bertahan lama.
### 4.2 Fitur Dinamis (Dikelola Admin)
**CMS Berita & Pengumuman**
Ini adalah fitur yang paling sering digunakan admin desa. Alur kerja ideal: admin login → klik "Tulis Berita Baru" → isi judul dan isi (editor seperti Word) → upload foto → pilih kategori (Berita/Pengumuman) → klik "Terbitkan". Setiap artikel harus ada thumbnail foto agar tampil menarik di halaman daftar berita.[^21]

**Kalender Kegiatan**
Menampilkan jadwal posyandu, pengajian, senam, musyawarah desa, dll. Warga bisa melihat kegiatan apa yang ada bulan ini tanpa harus menelepon desa. Admin cukup menambahkan event baru via dashboard.

**Galeri Foto & Video**
Album foto per kegiatan (posyandu, gotong royong, kegiatan KKN, panen raya, dll) + galeri video dengan playlist terpisah untuk video profil, dokumentasi kegiatan, dan konten edukasi. Penting: fitur *lazy loading* untuk galeri agar tidak berat.[^19]
### 4.3 Fitur Layanan
**Pengajuan Surat Online**
Cara paling realistis untuk pengelola non-IT: buat form sederhana (nama, NIK, jenis surat yang diminta, keterangan) yang ketika di-submit secara otomatis mengirimkan notifikasi ke WhatsApp admin desa via integrasi Formspree atau WPForms + plugin WhatsApp. Warga tidak perlu datang ke desa hanya untuk "menitipkan berkas" — cukup isi form online lalu tinggal datang saat surat sudah siap.

**Pengaduan Warga**
Form pengaduan sederhana (nama boleh dirahasiakan, isi aduan, kategori) yang dikirim ke email/WhatsApp admin. Tambahkan halaman "Status Pengaduan" untuk transparansi — admin bisa mengubah status pengaduan (Diterima → Diproses → Selesai) dari dashboard.

**FAQ (Pertanyaan Umum)**
Halaman statis berisi jawaban atas pertanyaan yang paling sering diajukan warga: jam buka kantor desa, persyaratan surat pindah, cara daftar BPJS melalui desa, dan lain-lain. Konten ini mengurangi beban admin karena warga bisa mencari jawaban sendiri sebelum menelepon.
### 4.4 Fitur Kependudukan & Data
**Statistik Penduduk Visual**
Tampilkan data kependudukan dalam bentuk infografis visual — chart sederhana (pie chart jumlah laki/perempuan, bar chart komposisi usia). Data ini bisa diambil langsung dari database yang dikerjakan oleh Arvin Demas Naryama (anggota KKN yang mengerjakan program "Database Terpadu"). Sinkronisasi antara database terpadu dengan tampilan website adalah nilai tambah besar program KKN ini.

**Peta Desa Interaktif**
Embed Google Maps dengan marker untuk: kantor desa, mushola/masjid, SD Negeri Ploso Gede, posyandu, warung/UMKM utama, dan titik wisata Bukit Menoreh. Untuk advanced: integrasikan dengan peta GIS yang dibuat oleh Gusti Bagus Rama (program "Pemetaan Spasial").
### 4.5 Fitur Pendukung
**Fitur Pencarian (Search)**
Plugin pencarian internal memungkinkan warga mengetikkan "cara buat KTP" dan langsung menemukan halaman layanan yang relevan.

**Integrasi Media Sosial**
Widget feed Instagram/Facebook desa di footer atau sidebar, tombol share artikel ke WhatsApp (paling relevan untuk Indonesia), dan embed Twitter/X jika desa punya akun aktif.[^22]

**Tombol WhatsApp Mengambang (Floating)**
Tombol WhatsApp yang selalu muncul di pojok kanan bawah layar di setiap halaman. Ketika diklik, langsung membuka WhatsApp dengan pesan template otomatis seperti "Halo, saya ingin bertanya tentang layanan desa...". Sangat efektif dan mudah dikelola.
### 4.6 Fitur Khusus: Video Profil Desa
Video profil desa adalah salah satu konten utama website ini, sehingga penempatannya harus dipikirkan matang.

**Opsi A: Hero Section Full-Screen Video (PALING DIREKOMENDASIKAN)**
Video diputar otomatis (*autoplay*), tanpa suara (*muted*), dan *loop* di bagian paling atas homepage sebagai background. Di atasnya ada overlay teks: nama desa, tagline, dan tombol "Tonton Video Lengkap". Ini memberikan kesan *wow* langsung saat halaman dibuka. Gunakan thumbnail/poster image yang tampil sementara video loading, gunakan versi video yang dikompresi khusus, dan sediakan tombol pause/mute yang mudah ditemukan.

**Opsi B: Halaman Khusus "Video Profil"**
Buat halaman tersendiri di menu "Berita & Informasi > Video" yang menampilkan video profil utama + playlist video lain (dokumentasi kegiatan, video pertanian, video budaya). Lebih rapi, tidak membebani homepage.

**Opsi C: Kombinasi A + B (PALING IDEAL)**
Di homepage: video 15-30 detik *highlight* (bukan video lengkap) sebagai hero *autoplay* muted. Di halaman khusus: video profil penuh (3-7 menit) + playlist. Ini keseimbangan terbaik antara *visual impact* dan performa.

**Playlist Video yang Direkomendasikan:**
1. Video Profil Utama (hasil KKN, 3-7 menit)
2. Video Kegiatan Bulanan (posyandu, senam, pengajian)
3. Video "Bumi Plosogede" — time-lapse sawah, suasana pagi desa
4. Video Edukasi (sosialisasi minyak jelantah, kegiatan KWT, dsb.)

***
## 5. DESAIN / UI-UX (Sisi Pengunjung) — "WAH TAPI EFISIEN"
### 5.1 Gaya Visual yang Cocok
**Rekomendasi: "Rural Contemporary" — Alam + Modern**

Gaya ini menggabungkan elemen visual alam pedesaan (foto sawah, perbukitan, aktivitas warga) dengan layout yang bersih dan modern. Referensinya adalah armenia.travel dan west.is — keduanya menggunakan foto-foto autentik lokal sebagai elemen desain utama, bukan foto stok generik.[^12][^9]

Mengapa cocok untuk Plosogede? Karena desa ini punya aset visual yang kuat: sawah terbentang, pemandangan Bukit Menoreh yang eksotis, aktivitas pertanian dan gotong royong, suasana kehidupan desa yang hangat. Prinsip utama: **Photo-first design** — foto adalah bintang utama desain, elemen UI hadir untuk mendukung foto, bukan sebaliknya.[^7]
### 5.2 Palet Warna
| Peran | Nama | Kode HEX | Kesan Psikologis |
|---|---|---|---|
| Warna Utama (Primary) | Hijau Menoreh | `#2D6A4F` | Alam, pertanian, kesejukan, kepercayaan |
| Warna Sekunder (Secondary) | Coklat Tanah | `#6B4226` | Bumi, keakaratan, tradisi, kestabilan |
| Warna Aksen (Accent) | Kuning Padi | `#F4A51E` | Kemakmuran, kehangatan, energi positif |
| Latar Belakang | Krem Bersih | `#F9F6F0` | Hangat, natural, tidak terlalu putih dingin |
| Teks Utama | Abu Gelap | `#1A1A2E` | Keterbacaan tinggi, modern |
| Teks Sekunder | Abu Sedang | `#6B7280` | Pendukung, tidak mendominasi |

Hijau `#2D6A4F` diasosiasikan dengan pertumbuhan dan kepercayaan — cocok untuk pemerintahan desa. Kuning `#F4A51E` sebagai aksen memberikan energi tanpa terasa "berteriak". Kombinasi ini sering digunakan oleh tourism board Asia Tenggara karena resonan dengan audiens lokal.
### 5.3 Tipografi
**Font Judul (Heading): Playfair Display**
Font serif elegan yang memberikan kesan *editorial* dan berkelas. Gratis di Google Fonts. Memberikan kesan "majalah premium" yang kontras dengan foto alam.

**Font Teks Utama (Body): Plus Jakarta Sans**
Font sans-serif modern yang sangat mudah dibaca di layar kecil smartphone. Gratis di Google Fonts. Dibuat oleh desainer Indonesia untuk keperluan digital — sangat cocok secara budaya.

**Ukuran Font:**
- Heading H1 (hero): 48-72px desktop, 28-36px mobile
- Heading H2 (seksi): 32-42px desktop, 24-28px mobile
- Body text: 16-18px untuk keterbacaan optimal
- Caption/keterangan: 14px
### 5.4 Layout Homepage Section-by-Section
**Section 1: HERO (Video/Foto Full-Screen)**
Video profil desa autoplay muted loop sebagai background, dengan overlay gradien gelap di bagian bawah. Di atasnya: nama desa besar ("Desa Plosogede"), tagline singkat ("Gerbang Magelang Selatan — Tanah Subur di Kaki Menoreh"), dan dua tombol CTA: "Tonton Video Profil" + "Kenali Desa Kami". Kesan pertama menentukan — pengunjung yang terpukau di 3 detik pertama akan terus scrolling.

**Section 2: ANGKA-ANGKA DESA (Animated Counter)**
Empat kotak dengan statistik kunci: "448 Jiwa" / "161 Kepala Keluarga" / "X Ha Lahan Pertanian" / "X UMKM Aktif". Angka-angka ini muncul dengan animasi counter saat di-scroll ke bagian ini. Statistik visual memberikan kesan desa yang hidup dan terdata dengan baik.

**Section 3: TENTANG PLOSOGEDE (Teks + Foto Landscape)**
Dua kolom: kiri teks naratif singkat (3-4 kalimat tentang desa), kanan foto pemandangan Bukit Menoreh. Scroll-triggered fade-in dari kiri dan kanan secara bersamaan.

**Section 4: TIGA POTENSI UNGGULAN (Card Grid)**
Tiga kartu berdampingan: 🌾 Pertanian | 🐟 Perikanan | 🌿 Alam & Budaya. Setiap kartu punya foto, judul, deskripsi singkat, dan tombol "Selengkapnya". Hover efek: kartu sedikit naik (`transform: translateY(-8px)`) dan foto zoom-in halus.

**Section 5: VIDEO PROFIL DESA (Full-Width)**
Section terpisah yang menampilkan thumbnail video besar dengan tombol play di tengah. Ketika diklik, muncul lightbox/modal yang memutar video YouTube.

**Section 6: BERITA TERBARU (3-4 Kartu)**
Grid kartu berita terkini, masing-masing dengan foto thumbnail, kategori, judul, tanggal, dan tombol "Baca Selengkapnya". Animasi: kartu muncul bergantian dengan stagger (0.1 detik antar kartu) saat di-scroll.

**Section 7: GALERI KILAT (Mosaic/Masonry)**
6-8 foto terbaru dari kegiatan desa dalam layout mosaic. Hover: overlay warna hijau dengan ikon "+" dan keterangan foto. Lazy loading wajib diaktifkan.[^19]

**Section 8: AKSES CEPAT LAYANAN**
Empat ikon besar berbentuk kartu: 📄 Ajukan Surat | 📢 Pengaduan | 💬 Hubungi Kami | 🗺️ Peta Desa. Untuk warga yang datang dengan tujuan spesifik tanpa harus scroll jauh.

**Section 9: FOOTER**
Empat kolom: (1) Logo + tagline + media sosial, (2) Navigasi utama, (3) Kontak kantor desa, (4) Link penting (FAQ, Kependudukan, Galeri). Background warna gelap (hijau tua `#1B4332`).
### 5.5 Rekomendasi Animasi
**Animasi WORTH IT (Lakukan):**

| Nama Animasi | Cara Kerja Teknis | Manfaat Visual | Performa |
|---|---|---|---|
| Scroll Fade-in | CSS `@keyframes` + `IntersectionObserver` atau CSS Scroll-driven Animation[^23] | Konten terasa "hidup" muncul organik | Sangat ringan — hanya ubah `opacity` (GPU) |
| Scroll Slide-in | `transform: translateX/Y` dari posisi offset ke normal[^14] | Teks dan gambar terasa melayang masuk | Ringan — hanya `transform` (GPU) |
| Animated Counter | JavaScript ringan (CountUp.js) yang menghitung dari 0 ke target saat masuk viewport | Statistik desa terasa dinamis | Sangat ringan |
| Hover Card Lift | CSS `transform: translateY(-8px)` + `box-shadow` pada `:hover` | Kartu terasa interaktif | Sangat ringan |
| Parallax Ringan di Hero | CSS `background-attachment: fixed` untuk latar bergerak lebih lambat dari scroll[^16] | Kedalaman visual di hero section | Ringan jika dibatasi satu elemen |
| Smooth Scroll | `scroll-behavior: smooth` di CSS | Navigasi halaman terasa mulus | Nol overhead |
| Image Zoom on Hover | CSS `transform: scale(1.05)` dengan `overflow: hidden` di parent | Galeri foto terasa premium | Sangat ringan |
| Page Transition | CSS fade/slide menggunakan `Barba.js`[^24] | Perpindahan halaman terasa seperti aplikasi native | Ringan jika dikonfigurasi benar |

**Animasi SEBAIKNYA DIHINDARI:**

| Animasi | Alasan Dihindari |
|---|---|
| Background video autoplay tanpa fallback di mobile | Mobile browser sering memblokir autoplay; boros data pengguna |
| Animasi parallax berat (multiple layers) | Memicu main-thread calculation, menurunkan FPS di HP low-end |
| Loading spinner lama sebelum konten tampil | Mengesankan website lambat, meningkatkan bounce rate |
| Animasi loop tanpa henti pada elemen non-hero | Melelahkan mata dan menguras baterai HP |
| Animasi yang mengubah `height`, `width`, `margin`, `top`, `left` | Memicu layout recalculation (reflow) yang mahal[^14] |
| Efek 3D berat (CSS perspective banyak element) | Hampir tidak pernah GPU-accelerated di semua browser |
| Animasi teks huruf per huruf (typewriter) pada body text | Mengganggu keterbacaan dan memperlambat penyerapan informasi |
### 5.6 Prinsip Responsive Design untuk Koneksi Lambat
**Mobile-First Approach:** Desain dimulai dari layar 375px (iPhone SE), kemudian diperluas ke tablet dan desktop.[^17]

**Progressive Enhancement untuk Animasi:** Gunakan `@media (prefers-reduced-motion: reduce)` untuk mematikan semua animasi bagi pengguna yang mengaktifkan mode accessibility di HP mereka.[^25]

**Gambar Responsif:** Gunakan atribut `srcset` agar HP hanya mengunduh gambar berukuran sesuai layarnya — menghemat hingga 80% bandwidth.

**Lazy Loading Universal:** Semua gambar di bawah *fold* menggunakan atribut `loading="lazy"` bawaan HTML5, tanpa JavaScript tambahan.

***
## 6. DESAIN DASHBOARD ADMIN — PRIORITAS UTAMA
### 6.1 Filosofi: "Dashboard untuk Manusia, Bukan Programmer"
Dashboard admin dirancang seolah penggunanya adalah seseorang yang baru pertama kali memegang komputer. Setiap tombol punya label teks yang jelas (bukan hanya ikon). Setiap form punya contoh pengisian. Tidak ada menu teknis yang tidak perlu ditampilkan.
### 6.2 Struktur Menu Dashboard (Disederhanakan)
Yang **DITAMPILKAN** di dashboard admin desa:

```
📊 RINGKASAN (Halaman Muka Dashboard)
   ├── Total Pengunjung Bulan Ini
   ├── Jumlah Berita Diterbitkan
   ├── Pengaduan Belum Direspons
   └── Tombol Pintas (aksi paling sering)

📰 BERITA & PENGUMUMAN
   ├── Daftar Berita (edit/hapus/terbitkan)
   └── Tulis Berita Baru

📸 GALERI
   ├── Daftar Album
   ├── Tambah Album Baru
   └── Upload Foto ke Album

🎬 VIDEO
   ├── Daftar Video
   └── Tambah Video Baru (via link YouTube)

📅 KEGIATAN
   ├── Kalender Kegiatan
   └── Tambah Kegiatan Baru

📋 PENGADUAN WARGA
   └── Daftar Pengaduan (ubah status: Diterima/Diproses/Selesai)

⚙️ PENGATURAN DASAR
   ├── Ubah Nomor Telepon/WhatsApp
   ├── Ubah Alamat Email
   └── Ubah Password
```

Yang **TIDAK PERLU** ditampilkan ke admin desa (disembunyikan/hanya untuk teknisi):
- Menu "Plugin" WordPress
- Menu "Tema/Appearance" (kecuali perlu ganti logo/warna)
- Menu "Tools" dan "Settings" teknis
- Editor file PHP/CSS

Alasan: satu klik salah di menu ini bisa merusak website seluruhnya. Admin desa tidak perlu dan tidak boleh mengaksesnya.[^22]
### 6.3 Alur Kerja Step-by-Step untuk Setiap Fitur Utama
**Cara Upload Berita Baru:**
1. Buka website desa, klik "Login Admin" di pojok kanan bawah footer
2. Masukkan username dan password yang sudah diberikan
3. Di dashboard, klik tombol besar berwarna hijau: **"+ Tulis Berita Baru"**
4. Isi **Judul Berita** di kotak paling atas (contoh: "Kegiatan Posyandu Bulan Juli 2026")
5. Isi **Isi Berita** di kotak teks besar — ketik seperti biasa di Microsoft Word
6. Upload **Foto Utama**: klik "Upload Foto", pilih foto dari HP/laptop
7. Pilih **Kategori**: Berita Desa / Pengumuman / Kegiatan
8. Klik **"Pratinjau"** untuk melihat tampilan sebelum dipublikasikan
9. Jika sudah benar, klik **"Terbitkan"**. Berita langsung muncul di website
10. Jika ingin disimpan dulu, klik **"Simpan Draf"**

**Cara Upload Video Baru:**
1. Upload video ke YouTube desa terlebih dahulu
2. Salin (copy) link/URL video dari browser
3. Di dashboard, klik **"Video" → "Tambah Video Baru"**
4. Tempel (paste) link YouTube ke kolom yang tersedia
5. Isi Judul Video dan Deskripsi singkat
6. Klik **"Simpan"** — sistem otomatis mengambil thumbnail dari YouTube
7. Video sudah tampil di halaman Galeri Video website

**Cara Ubah Nomor Telepon/WhatsApp:**
1. Login ke dashboard
2. Klik **"Pengaturan Dasar"** di menu bawah kiri
3. Cari kolom **"Nomor WhatsApp"**
4. Hapus nomor lama, ketik nomor baru (format: 628XXXXXXXXXX)
5. Klik **"Simpan Perubahan"**
6. Buka halaman kontak website untuk memastikan nomor sudah berubah

**Cara Merespons Pengaduan Warga:**
1. Login ke dashboard
2. Di halaman Ringkasan, ada notifikasi merah: **"X Pengaduan Belum Direspons"**
3. Klik **"Lihat Pengaduan"**
4. Baca isi pengaduan — catat di buku kerja jika perlu tindak lanjut
5. Klik **"Ubah Status"**: pilih "Sedang Diproses" atau "Selesai Ditangani"
6. Isi kolom **"Keterangan Respons"** (contoh: "Sudah dikoordinasikan dengan RT setempat")
7. Klik **"Simpan"**
### 6.4 Elemen Bantu Visual di Dashboard
- **Tombol aksi utama berukuran besar** (minimal 44×44px) dengan warna kontras dan label teks jelas
- **Tooltip** (teks bantuan saat mouse diarahkan ke tombol/kolom) — contoh: kolom "Slug URL" diberi penjelasan otomatis
- **Preview sebelum publish** — tombol "Pratinjau" membuka tab baru persis seperti yang dilihat pengunjung
- **Konfirmasi sebelum hapus** — popup: "⚠️ Anda yakin ingin menghapus artikel ini? Tindakan ini tidak dapat dibatalkan." dengan pilihan "Ya, Hapus" (merah) dan "Batal" (abu-abu)
- **Indikator status konten** — label warna: 🟢 Terbit | 🟡 Draf | 🔴 Sampah
- **Halaman bantuan bawaan** — tombol "?" di setiap halaman membuka panduan singkat bahasa Indonesia
### 6.5 Role/Hak Akses Berjenjang
| Role | Nama Peran | Wewenang | Digunakan Oleh |
|---|---|---|---|
| Super Admin | Pengelola Teknis | Akses penuh, termasuk plugin, tema, pengguna | Developer/mahasiswa KKN yang membangun website |
| Admin Desa | Pengelola Konten | Berita, galeri, video, pengaduan, pengaturan kontak | Satu perangkat desa yang ditunjuk (misal: Kaur Umum) |
| Editor | Penulis Berita | Tulis dan edit berita, tapi tidak bisa publish langsung — harus disetujui Admin Desa | Relawan/pemuda karang taruna |
| Pembaca Terbatas | Monitoring | Hanya bisa melihat statistik dan pengaduan, tidak bisa mengubah apa pun | Kepala Desa (untuk monitoring tanpa risiko tidak sengaja mengubah website) |

***
## 7. ASPEK TEKNIS: EFISIENSI & PERFORMA
### 7.1 Perbandingan Tech Stack
| Dimensi | WordPress + Elementor | Webflow | Custom Next.js + Headless CMS |
|---|---|---|---|
| **Biaya Awal** | Gratis (software) + hosting ~Rp 500rb–1,5jt/tahun[^26] | $23–39/bulan (~Rp 360rb–620rb/bulan)[^27] | Gratis (software) + hosting ~Rp 2–5jt/tahun |
| **Kemudahan Admin Non-IT** | ⭐⭐⭐⭐ — Dashboard intuitif[^28] | ⭐⭐ — Editor visual bagus tapi CMS kurang familiar | ⭐⭐ — Tergantung headless CMS yang dipilih |
| **Kemampuan Animasi** | ⭐⭐⭐ — Bisa dengan plugin, tapi kadang berat | ⭐⭐⭐⭐ — Animasi bawaan clean[^29] | ⭐⭐⭐⭐⭐ — Kontrol penuh, paling optimal |
| **Performa Awal** | ⭐⭐⭐ — Perlu optimasi (caching, CDN)[^30] | ⭐⭐⭐⭐ — CDN bawaan, kode bersih | ⭐⭐⭐⭐⭐ — Sangat cepat dengan SSG |
| **Plugin/Ekosistem** | ⭐⭐⭐⭐⭐ — 60.000+ plugin[^31] | ⭐⭐⭐ — Ekosistem terbatas | ⭐⭐⭐⭐ — npm ecosystem luas |
| **Skill untuk Maintain** | Rendah — banyak tutorial Indonesia[^32] | Sedang — perlu familiar Webflow | Tinggi — butuh developer aktif |
| **Vendor Lock-in** | Tidak ada (open source) | Tinggi — sulit migrasi keluar Webflow | Tidak ada |
| **Cocok untuk Desa Non-IT** | ✅ SANGAT COCOK | ❌ Kurang cocok jangka panjang | ❌ Tidak cocok tanpa dukungan IT |
| **Tersedia Template Desa Indonesia** | ✅ Banyak[^21] | ❌ Terbatas | ❌ Harus buat dari nol |

**OpenSID sebagai Alternatif Khusus Desa**
OpenSID adalah CMS open-source yang dirancang khusus untuk kebutuhan administrasi desa Indonesia. Kelebihannya: sudah memiliki modul kependudukan, surat, dan pengaduan yang terintegrasi. Kekurangannya: desain visualnya standar (tidak bisa "wah"), dan membutuhkan administrator server untuk instalasi. Untuk tujuan KKN ini yang membutuhkan kesan visual premium + video profil yang menonjol, WordPress lebih unggul.[^33][^34][^35]
### 7.2 Strategi "Wah tapi Cepat"
**Target Performa:** Skor Lighthouse ≥ 85 di semua kategori. Target Time to First Contentful Paint (FCP) < 2 detik di jaringan 4G.

**Image Optimization:**
- Konversi semua foto ke format **WebP** (40-60% lebih kecil dari JPEG)
- Gunakan plugin **Smush** atau **ShortPixel** di WordPress untuk kompresi otomatis saat upload
- Terapkan `srcset` untuk responsive images

**Video Optimization:**
- Upload ke YouTube — CDN global Google jauh lebih cepat daripada server hosting Indonesia manapun
- Untuk hero background, gunakan versi 720p dengan codec H.264
- Selalu sediakan fallback gambar statis jika video gagal load

**Caching:**
- Plugin **WP Rocket** atau **W3 Total Cache** untuk WordPress
- Browser caching: set ekspiry 1 tahun untuk gambar/CSS/JS statis

**CDN:**
- Gunakan **Cloudflare Free** — menyediakan CDN, proteksi DDoS, dan HTTPS secara gratis
- Asset statis disajikan dari server terdekat pengunjung

**Code Optimization:**
- Minifikasi CSS dan JavaScript otomatis
- Defer loading JavaScript yang tidak diperlukan di halaman awal
- Prioritaskan animasi yang hanya mengubah `transform` dan `opacity`[^14][^23]
### 7.3 Kebutuhan Hosting & Domain
**Domain .desa.id:**
Pendaftaran domain .desa.id dilakukan melalui domain.go.id. Domain ini **GRATIS untuk tahun pertama**, dan tahun berikutnya dikenai biaya Rp 50.000 + PPN 11% = ~Rp 55.500/tahun. Persyaratan: SK Kepala Desa, SK Perangkat Desa, Surat Permohonan dari Kades/Sekdes ke Dirjen Teknologi Pemerintah Digital, dan Surat Kuasa dari Kades ke perangkat yang ditunjuk. Proses verifikasi maksimal 4 hari kerja.[^21][^36][^37][^38]

**Nama domain yang disarankan:** `plosogede.desa.id`

**Hosting — Rekomendasi Provider:**
- **Niagahoster** — reputasi baik, support 24 jam via WhatsApp, harga mulai Rp 700rb/tahun
- **Rumahweb** — hosting murah mulai Rp 180rb/tahun[^39]
- **IDWebhost** — familiar dengan komunitas desa[^34]

**Spesifikasi minimal hosting:**
- Storage: 5-10 GB
- PHP versi 8.x
- MySQL/MariaDB
- SSL gratis (Let's Encrypt)
- Backup otomatis harian/mingguan
- Uptime jaminan ≥ 99.9%

**Estimasi Biaya Tahunan:**
- Domain .desa.id: Rp 0 (tahun pertama), Rp 55.500/tahun berikutnya
- Hosting shared: Rp 500.000 – Rp 1.500.000/tahun
- **Total tahun pertama: ~Rp 500.000 – 1.500.000**
- **Total tahun berikutnya: ~Rp 555.500 – 1.555.500/tahun**
### 7.4 Optimasi Video Profil
**Format dan Spesifikasi:**
- Resolusi: 1080p (1920×1080)[^40]
- Format file master: MP4 dengan codec H.264 atau H.265
- Bitrate: 8-15 Mbps untuk 1080p
- Durasi video profil lengkap: 3-7 menit — range ideal[^40]
- Versi short-form (60-90 detik) untuk Instagram Reels/TikTok diproduksi dari materi yang sama

**YouTube vs. Self-Hosted:**

| Aspek | YouTube | Self-Hosted |
|---|---|---|
| **Biaya** | Gratis | Memakan storage hosting |
| **Kecepatan** | ⭐⭐⭐⭐⭐ (CDN Google global) | ⭐⭐⭐ (tergantung hosting) |
| **Kualitas Adaptif** | ✅ Otomatis (240p–4K sesuai koneksi) | ❌ Butuh setup tambahan |
| **Kontrol Tampilan** | Tampil logo/rekomendasi YouTube | Tampilan bersih tanpa gangguan |
| **Biaya Bandwidth** | Tidak ada | Memakan kuota bandwidth hosting |
| **Rekomendasi** | ✅ Untuk video utama | Hanya untuk hero background < 15 detik |
### 7.5 SEO Dasar
**Struktur URL yang Benar:**
- Berita: `plosogede.desa.id/berita/[slug-judul-artikel]`
- Halaman statis: `plosogede.desa.id/profil-desa/sejarah`
- Hindari URL dengan angka random seperti `/?p=123`

**Meta Tag dan Plugin:**
Gunakan plugin **Yoast SEO** atau **Rank Math** (keduanya gratis) di WordPress. Ada indikator lampu merah/kuning/hijau yang memandu admin menulis konten SEO-friendly.

**Sitemap.xml:** Dibuat otomatis oleh Yoast SEO dan perlu didaftarkan ke **Google Search Console**.

**Local SEO:** Daftarkan desa di **Google Business Profile** (gratis) dengan nama "Kantor Desa Plosogede" — memastikan muncul di Google Maps dan pencarian lokal.
### 7.6 Keamanan
**SSL/HTTPS:** Wajib — tersedia gratis di hampir semua hosting Indonesia via Let's Encrypt.

**Proteksi Login Admin:**
- Ubah URL login dari `/wp-admin` ke URL unik seperti `/masuk-desa`
- Aktifkan Two-Factor Authentication (2FA) menggunakan plugin WP 2FA
- Batasi percobaan login maksimal 5 kali

**Plugin Keamanan:**
- **Wordfence Security** (gratis) — firewall real-time, scan malware otomatis[^41]
- **All In One WP Security** — lapisan keamanan tambahan[^42]

**Backup Otomatis:**
- Plugin **UpdraftPlus** untuk backup otomatis ke Google Drive[^41]
- Jadwal: backup penuh seminggu sekali, backup incremental setiap hari

**Proteksi Form dari Spam:**
- Google reCAPTCHA v3 (invisible) pada form pengaduan dan pengajuan surat[^43]
- Plugin Akismet untuk filter komentar spam

***
## 8. KEBERLANJUTAN (SUSTAINABILITY) JANGKA PANJANG
### 8.1 Skema "Siapa Mengelola Apa" Pasca-Launching
Program KKN berlangsung 1 Juli–31 Juli 2026. Setelah KKN selesai, website harus bisa hidup mandiri.

| Peran | Diisi Oleh | Job Desk Detail |
|---|---|---|
| **Operator Website Utama** | Perangkat desa yang ditunjuk (disarankan: Kaur Umum atau tenaga administrasi paling melek digital) | Upload berita (2× per bulan minimal), update galeri, update kalender kegiatan, respons pengaduan |
| **Pengawas Konten** | Sekdes atau Kades | Review berita sebelum terbit, pastikan informasi akurat, beri persetujuan konten sensitif |
| **Teknisi Darurat** | Kontak mahasiswa KKN (Arvin Demas Naryama — Sistem Informasi) atau mitra IT lokal | Dipanggil hanya jika ada masalah teknis (website down, lupa password, plugin bermasalah) |
| **Monitoring Berkala** | Kaur Keuangan | Pantau domain/hosting jangan sampai expired, pantau tagihan, rencanakan anggaran tahunan |
### 8.2 Dokumentasi & Panduan Penggunaan
**Manual Book (PDF, bahasa Indonesia sederhana) — Daftar Isi:**
1. Cara Login dan Logout Admin
2. Cara Menulis dan Menerbitkan Berita Baru (dengan screenshot langkah per langkah)
3. Cara Edit dan Hapus Berita
4. Cara Upload Foto ke Galeri
5. Cara Tambah Video Baru (via link YouTube)
6. Cara Tambah Kegiatan di Kalender
7. Cara Merespons Pengaduan Warga
8. Cara Mengubah Informasi Kontak
9. Cara Mengubah Password
10. Apa yang Harus Dilakukan Jika Website Error/Tidak Bisa Dibuka
11. Daftar Kontak Darurat (Teknisi, Hosting Support, Panduan Perpanjangan Domain)

**Video Tutorial (5-7 video pendek, 3-5 menit per video):**
- Simpan di YouTube channel desa (unlisted) atau Google Drive desa
- Rekam layar saat demo langsung dengan narasi suara
### 8.3 Mekanisme Monitoring Sederhana
**Google Analytics 4 (Gratis):** Pantau dua angka setiap bulan: "Jumlah Pengunjung Bulan Ini" dan "Halaman Paling Banyak Dikunjungi".

**Google Search Console (Gratis):** Pantau error halaman, kata kunci yang membawa pengunjung, dan status indeksasi sitemap.

**UptimeRobot (Gratis):** Otomatis cek website setiap 5 menit dan kirim notifikasi WhatsApp/email jika website down.

**Checklist Bulanan (Cetak dan Tempel di Meja Operator):**
```
☐ Minimal 2 berita/pengumuman diterbitkan bulan ini
☐ Galeri diupdate dengan foto kegiatan terbaru
☐ Kalender kegiatan bulan depan sudah diisi
☐ Pengaduan masuk sudah direspons
☐ Cek tanggal expire domain (lewat cPanel hosting)
☐ Backup terakhir berhasil (cek notifikasi email UpdraftPlus)
```
### 8.4 Skenario Suksesi Operator
**6 Bulan Sebelum Serah Jabatan:**
- Operator lama mendampingi calon operator baru dalam semua tugas website
- Calon operator baru membuat akun admin tersendiri

**Saat Serah Jabatan:**
- Serahkan secara fisik: buku catatan berisi username, password, nama hosting, tanggal expire domain, kontak teknisi
- Lakukan sesi praktek bersama sebelum serah terima resmi
- Ubah password admin setelah serah terima

**Prinsip Utama:** Jangan pernah simpan password hanya di kepala satu orang. Selalu ada salinan tertulis yang tersimpan aman di kantor desa.
### 8.5 Estimasi Biaya Recurring per Komponen
| Komponen | Frekuensi | Estimasi Biaya | Keterangan |
|---|---|---|---|
| Domain .desa.id | Tahunan | Rp 55.500/tahun | Via domain.go.id[^37] |
| Hosting Shared | Tahunan | Rp 500.000 – 1.500.000/tahun | Tergantung provider[^39][^44] |
| Backup plugin (UpdraftPlus) | Gratis | Rp 0 | Versi gratis sudah cukup |
| Plugin keamanan (Wordfence) | Gratis | Rp 0 | Versi gratis sudah cukup |
| Google Fonts, Maps embed | Gratis | Rp 0 | |
| YouTube hosting video | Gratis | Rp 0 | |
| Maintenance teknis ringan | Per insiden | Rp 100.000 – 500.000 | Bayar ke teknisi jika ada masalah |
| **TOTAL MINIMUM/TAHUN** | | **~Rp 555.500** | Domain + hosting termurah |
| **TOTAL REALISTIS/TAHUN** | | **~Rp 800.000 – 1.500.000** | Domain + hosting + cadangan maintenance |

Biaya Rp 1.500.000/tahun setara dengan ~0.1% dari Dana Desa rata-rata (~Rp 1.1 miliar) — sangat terjangkau dan bisa dianggarkan di APBDes pada pos "Pengembangan dan Pemeliharaan Sistem Informasi Desa".

***
## 9. KONTEN & DATA
### 9.1 Daftar Lengkap Aset yang Perlu Disiapkan Sebelum Development
**A. Teks/Informasi:**
- [ ] Sejarah desa (narasi 500-800 kata) — wawancara Kepala Desa atau tokoh desa tertua
- [ ] Visi & Misi Kepala Desa saat ini
- [ ] Profil singkat semua perangkat desa (nama, jabatan, masa jabatan)
- [ ] Daftar dusun dalam Desa Plosogede
- [ ] Batas-batas wilayah desa (Utara, Selatan, Timur, Barat)
- [ ] Data kependudukan terkini (ambil dari database yang dibuat Arvin)
- [ ] Daftar UMKM/produk lokal (nama, jenis produk, kontak pemilik)
- [ ] Daftar fasilitas desa (mushola, masjid, SD, posyandu, balai dusun)
- [ ] Nomor telepon, WhatsApp, email resmi kantor desa
- [ ] Prosedur dan persyaratan layanan surat yang tersedia

**B. Foto:**
- [ ] Foto kepala desa dan semua perangkat (formal, resolusi minimal 400×400px)
- [ ] Foto pemandangan desa: sawah, Bukit Menoreh, jalan desa (drone jika ada — Gusti Bagus punya kemampuan drone via program pemetaan)
- [ ] Foto kegiatan warga: posyandu, pengajian, senam, gotong royong, panen
- [ ] Foto produk UMKM/pertanian/perikanan
- [ ] Foto kantor desa dan fasilitasnya
- [ ] Foto logo desa/lambang desa (resolusi tinggi, latar transparan .PNG)

**C. Video:**
- [ ] Video profil desa lengkap (3-7 menit) — hasil produksi KKN
- [ ] Video kegiatan KKN (dokumentasi program kerja)
- [ ] Versi short-form video profil (60-90 detik) untuk media sosial

**D. Data Statistik:**
- [ ] Data penduduk per dusun (jumlah jiwa, KK, jenis kelamin)
- [ ] Data penduduk per usia
- [ ] Data penduduk per pendidikan
- [ ] Data lahan pertanian (luas, jenis komoditas)

**E. Peta:**
- [ ] Koordinat GPS kantor desa (untuk Google Maps pin)
- [ ] Peta batas wilayah desa dalam format digital (dari program pemetaan Gusti Bagus)
### 9.2 Spesifikasi Video Profil Desa
**Durasi:** 3-7 menit untuk versi website/YouTube. Idealnya 4-5 menit — cukup komprehensif tanpa kehilangan perhatian penonton.

**Struktur Konten yang Direkomendasikan:**
1. **Opening (0-30 detik):** Aerial/drone shot pemandangan Bukit Menoreh atau time-lapse sawah pagi. Musik latar: instrumental tradisional Jawa yang upbeat.
2. **Profil Singkat (30-90 detik):** Narasi suara Kepala Desa tentang lokasi, sejarah singkat, dan karakter desa.
3. **Kehidupan Warga (90 detik – 3 menit):** Petani di sawah, ibu-ibu KWT, anak-anak bermain, pengajian, senam pagi.
4. **Potensi Desa (3-5 menit):** Pertanian, perikanan, UMKM, dan keindahan alam.
5. **Closing (terakhir 30 detik):** Logo desa, URL website, dan akun media sosial.

**Spesifikasi Teknis:**
- Resolusi: 1920×1080 (Full HD 1080p)
- Frame rate: 25fps atau 30fps
- Format ekspor: MP4, codec H.264
- Bitrate: 10-15 Mbps
- Audio: stereo, 48kHz, narasi + musik latar
- Subtitel: tambahkan subtitel Indonesia via YouTube untuk aksesibilitas

**Versi Short-form (Instagram Reels/TikTok):**
- Durasi: 60-90 detik
- Rasio aspek: 9:16 (vertikal)
- Ambil highlight terbaik dari video utama, re-edit untuk format vertikal
- Tambahkan teks animasi yang menonjol karena banyak penonton melihat tanpa suara

***
## 10. REKOMENDASI PRIORITAS
### 10.1 MVP (Versi Awal — Target Selesai Selama KKN, ≤ 30 Jam)
Mengingat waktu KKN hanya 30 jam yang dialokasikan untuk program "Gerbang Digital", fokuskan pada fondasi yang solid dan konten yang sudah siap dikumpulkan.

**HARUS ADA di MVP:**
1. ✅ **Homepage** dengan video profil di hero section, statistik desa, tentang desa, potensi unggulan, dan berita terbaru
2. ✅ **Halaman Profil Desa** dengan sejarah, visi-misi, geografis, dan peta embed Google Maps
3. ✅ **Halaman Struktur Organisasi** dengan foto dan nama semua perangkat
4. ✅ **Halaman Berita & Pengumuman** dengan CMS yang bisa diupdate admin
5. ✅ **Halaman Galeri Foto** dengan 2-3 album kegiatan awal
6. ✅ **Halaman Video Profil** (embed dari YouTube)
7. ✅ **Halaman Layanan** — daftar jenis layanan + persyaratan (statis dulu, form WhatsApp menyusul)
8. ✅ **Halaman Kependudukan** dengan infografis data dasar dari database Arvin
9. ✅ **Halaman Kontak** dengan peta, nomor WhatsApp, email, dan tombol WhatsApp mengambang
10. ✅ **Domain .desa.id** terdaftar dan aktif[^36]
11. ✅ **SSL aktif** (HTTPS)
12. ✅ **Desain mobile-responsive**
13. ✅ **Pelatihan admin desa** (minimal 1 orang bisa upload berita mandiri)
14. ✅ **Manual book dan video tutorial** diserahkan saat closing KKN

**Estimasi Waktu Pengerjaan 30 Jam:**
- Jam 1-3: Setup hosting, domain, install WordPress
- Jam 4-8: Install & konfigurasi tema, buat struktur halaman
- Jam 9-15: Desain homepage (hero video, seksi statistik, potensi, berita, footer)
- Jam 16-20: Isi konten (profil desa, struktur org, kependudukan)
- Jam 21-24: Setup fitur dinamis (berita CMS, galeri, layanan, kontak)
- Jam 25-27: Optimasi performa (caching, gambar WebP, mobile test)
- Jam 28-29: Pelatihan admin desa + serah terima manual book
- Jam 30: Launching resmi + dokumentasi untuk laporan KKN
### 10.2 Fase 2 (Setelah KKN, 1-6 Bulan)
- Form pengajuan surat online via WhatsApp (perlu koordinasi alur kerja dengan perangkat desa terlebih dahulu)
- Form pengaduan warga aktif (perlu prosedur respons yang jelas)
- Kalender kegiatan (setelah konten rutin berjalan)
- Halaman UMKM lengkap dengan foto produk
- Optimasi SEO lanjutan
### 10.3 Fase 3 (6-12 Bulan Setelah Launching)
- Integrasi peta GIS dari program pemetaan Gusti Bagus
- Optimasi Lighthouse score ke >90
- Tambahan bahasa Inggris (untuk wisatawan dan diaspora)
- Pembaruan data statistik penduduk dari database terpadu

***
## 11. REKOMENDASI FINAL PLATFORM/CMS
### Pilihan Terbaik: WordPress.org + Tema Premium + Elementor Free
**Mengapa WordPress adalah pilihan paling seimbang?**

WordPress digunakan oleh lebih dari 50% website di dunia bukan tanpa alasan. Untuk konteks desa Plosogede dengan kebutuhan spesifik: tampilan visual premium, pengelola non-IT, dan keberlanjutan jangka panjang — WordPress adalah pilihan yang paling realistis:[^31]

**1. Ekosistem terlengkap di Indonesia:** Banyak tutorial berbahasa Indonesia, komunitas pengguna aktif, dan banyak penyedia jasa maintenance lokal. Jika ada masalah, mudah mencari bantuan.[^32]

**2. Kemudahan untuk admin non-IT:** Editor Gutenberg atau Elementor memungkinkan admin desa menulis berita seperti menulis di Microsoft Word.[^28][^45]

**3. Biaya sangat terjangkau:** Hosting + domain ~Rp 1 juta/tahun — bisa dianggarkan di APBDes.[^26]

**4. Performa bisa optimal:** Dengan konfigurasi yang benar (WP Rocket + Cloudflare + gambar WebP + lazy loading), WordPress bisa mencapai skor Lighthouse >85.[^30]

**5. Animasi "wah" tetap bisa dicapai:** Dengan tema yang tepat dan kustomisasi CSS/JS minimal, WordPress bisa menghasilkan tampilan yang setara dengan website award-winning tanpa coding yang kompleks.

**Stack yang Disarankan secara Spesifik:**
- **WordPress.org** (self-hosted, gratis software)
- **Tema:** Astra Pro atau GeneratePress (ringan, cepat, mudah dikustomisasi — ~Rp 200-400rb/tahun)
- **Page Builder:** Elementor Free untuk homepage dan halaman statis[^28]
- **SEO:** Yoast SEO Free atau Rank Math Free
- **Keamanan:** Wordfence Free + UpdraftPlus Free[^41]
- **Performa:** WP Rocket (~Rp 300rb/tahun) atau W3 Total Cache (gratis) + Cloudflare Free
- **Gambar:** ShortPixel atau Smush Free untuk kompresi otomatis ke WebP
- **Video:** YouTube embed untuk semua video
- **Hosting:** Niagahoster atau Rumahweb paket Business (~Rp 700rb-1jt/tahun)[^39][^46]

Dengan pendekatan ini, website Desa Plosogede tidak hanya akan menjadi "keluaran KKN" yang bisa dilupakan setelah mahasiswa pulang — melainkan menjadi **infrastruktur digital desa yang hidup dan berkembang** selama bertahun-tahun ke depan, benar-benar menjadi "Gerbang Digital" yang membuka desa Plosogede kepada dunia.

---

## References

1. [10 Contoh Website Desa Terbaik 2026 dan Panduan Membuatnya](https://creativism.id/contoh-website-desa/) - Website Desa Dermaji menjadi salah satu contoh website desa terbaik di Indonesia. Desainnya fokus pa...

2. [Website Desa Dermaji dan Sejarahnya](https://www.dermaji.desa.id/website-desa-dermaji-dan-sejarahnya/) - Di tahun 2016, website Desa Dermaji dilengkapi juga dengan tampilan produk desa. Fitur ini adalah ba...

3. [Juara 2 Lomba Pengelolaan Website Kategori Desa/Kelurahan](https://sidetapa-buleleng.desa.id/index.php/first/artikel/387-Juara-2-Lomba-Pengelolaan-Website-Kategori-Desa-Kelurahan) - Pemerintah Desa Sidetapa meraih penghargaan sebagai Pengelolaan Website Terbaik No. 2 Lingkup Pemkab...

4. [Desa Saing Prupuk Raih Penghargaan sebagai Pengelola Terbaik ...](https://www.saingprupuk.desa.id/artikel/2023/12/5/desa-saing-prupuk-raih-penghargaan-sebagai-pengelola-terbaik-website-desa-tingkat-kabupaten-paser) - Hadir dalam kesempatan ini Kepala Desa Saing Prupuk sekaligus menerima langsung Piagam Penghargaan s...

5. [Detail Artikel - Sejarah-desa-plosogede-ngluwar](https://desaplosogede.magelangkab.go.id/First/detail_artikel/sejarah-desa-plosogede-ngluwar) - Alamat : Dsn. Druju Tegal, Ds. Plosogede Kec. Ngluwar Kab. Magelang. Kode Pos : 56485. Telp : 082329...

6. [Website Desa PLOSOGEDE - First - Kabupaten Magelang](https://desaplosogede.magelangkab.go.id/First/) - Alamat : Dsn. Druju Tegal, Ds. Plosogede Kec. Ngluwar Kab. Magelang. Kode Pos : 56485. Telp : 082329...

7. [Plosogede, Ngluwar, Magelang - Wikipedia bahasa Indonesia ...](https://id.wikipedia.org/wiki/Plosogede,_Ngluwar,_Magelang) - Plosogede adalah desa di kecamatan Ngluwar, Magelang, Jawa Tengah, Indonesia. ... Dusun: Druju Kidul...

8. [Visit Iceland | Official travel info for Iceland](https://www.visiticeland.com) - visiticeland.com is the official travel guide of Iceland, operated by Business Iceland. Iceland welc...

9. [armenia.travel - Awwwards Honorable Mention](https://www.awwwards.com/sites/armenia-travel) - The official portal for tourism and travel in Armenia, showcasing the country's culture, nature, and...

10. [Travel to Armenia | Official Tourism Guide & Tips](https://armenia.travel) - Travel to Armenia with the official tourism website. Find guides, tips, and inspiration to start you...

11. [Lithuania Travel - Awwwards Honorable Mention](https://www.awwwards.com/sites/lithuania-travel) - Lithuania Travel is Lithuania's national tourism promotion agency working with both inbound and dome...

12. [Visit West Iceland](https://www.west.is) - Hosts from each area guiding you through the main attractions, accommodations and experiences that e...

13. [Fitzroy Travel - Awwwards Nominee](https://www.awwwards.com/sites/fitzroy-travel) - Bespoke design and development of an interactive website for an independent tour operator. Fitzroy T...

14. [How Scroll-Triggered Animations Cause CLS](https://www.corewebvitals.io/pagespeed/scroll-triggered-animations-cause-cls) - If your CrUX CLS score is worse than your Lighthouse CLS score, scroll-triggered animations are one ...

15. [Snami Travel - Awwwards Honorable Mention](https://www.awwwards.com/sites/snami-travel) - Snami Travel is a team of dedicated travel curators committed to designing exceptional and deeply au...

16. [Pomegranate Travel - Awwwards Honorable Mention](https://www.awwwards.com/sites/pomegranate-travel) - Color Palette · Business & Corporate · Culture & Education · Other · Big Background Images · Clean ·...

17. [5 Contoh Website Desa dengan Desain Terbaik dan Kreatif](https://www.qwords.com/blog/contoh-website-desa/) - 5 Contoh website desa yang responsif dan menarik berikut ini bisa kamu jadikan inspirasi untuk membu...

18. [Contoh Website Desa: Inspirasi, Fitur Wajib, dan Struktur](https://arrazyinovasi.com/artikel/contoh-website-desa-inspirasi-panduan-membuat-website-profesional) - Lihat contoh website desa untuk inspirasi pemerintah desa, lengkap dengan fitur wajib, struktur menu...

19. [Website Desa Terbaik: Contoh, Fitur, dan Manfaatnya untuk ... - DCLIQ](https://dcliq.co.id/blog/website-desa-terbaik-contoh-fitur-dan-manfaatnya-untuk-masyarakat) - Desa Jojogan, yang terletak di Kecamatan Watukumpul, Kabupaten Pemalang, merupakan salah satu contoh...

20. [Pemkab Tanah Bumbu Raih Penghargaan Website Desa Terbaik](https://setkab.go.id/pemkab-tanah-bumbu-raih-penghargaan-website-desa-terbaik/) - Pemerintah Kabupaten (Pemkab) Tanah Bumbu, Kalimantan Selatan, berhasil meraih penghargaan Desa Tekh...

21. [Website Desa: Panduan Lengkap & Gratis 2026 - TataDesa](https://tatadesa.com/blog/website-desa-panduan-lengkap-gratis-2026/) - Cara membuat website desa gratis, memilih template, dan mendaftarkan domain resmi. Tingkatkan transp...

22. [Cara Bangun Web Desa Terbaik yang Fungsional dan Gak Ribet](https://www.jagoanhosting.com/blog/web-desa-terbaik/) - Panduan memilih web desa terbaik di Indonesia lengkap dengan fitur, contoh aplikasi, dan tips prakti...

23. [Scroll-Driven Animations with CSS: Performance Focused Web ...](https://webexpo.net/blog/scroll-driven-animations-with-css-performance-focused-web-interactivity/) - This feature, which allows developers to create animations that respond directly to user scrolling, ...

24. [We Need to Talk About Website Animations: GSAP, CSS-Only ...](https://adigital.agency/blog/gsap-css-animations-barba-js) - GSAP: Best for Timing, Scroll Logic, and Real Control · Consistent defaults with flexible overrides....

25. [Mastering Motion: How to Use JavaScript Libraries Like GSAP to ...](https://dev.to/okoye_ndidiamaka_5e3b7d30/mastering-motion-how-to-use-javascript-libraries-like-gsap-to-create-smooth-engaging-web-mj2) - GSAP's ScrollTrigger plugin is where things get magical. It connects animations to user scroll, allo...

26. [Berapa Rincian Biaya Maintenance Website? Berikut Detailnya!](https://www.jagoanhosting.com/blog/rincian-biaya-maintenance-website/) - Adapun kisaran biaya pendaftaran domain yaitu sekitar Rp0 hingga Rp199 ribu per tahunnya. Sementara ...

27. [Webflow vs WordPress: A clear comparison for 2025 - Digidop](https://www.digidop.com/comparison/webflow-vs-wordpress) - Comprehensive Webflow vs WordPress comparison covering design, SEO, pricing, performance & migration...

28. [Cara Menggunakan Elementor di WordPress](https://support.exabytes.co.id/id/support/solutions/articles/14000148087-cara-menggunakan-elementor-di-wordpress) - Elementor adalah page builder dengan konsep editor drag-and-drop yang bisa Anda gunakan di CMS WordP...

29. [Webflow vs Wordpress - Which Should You Use in 2025? - YouTube](https://www.youtube.com/watch?v=HgmIwBDzN_Q) - ... non-technical teams. Webflow offers clean code, fast load times, and full visual control, making...

30. [WordPress vs Webflow: Pilih Mana untuk Bisnis 2025? - WebNesia](https://www.webnesia.co.id/knowledgebase/wordpress-vs-webflow-pilih-mana-untuk-bisnis-2025/) - WordPress dikenal sebagai “si veteran serbaguna”, sementara Webflow muncul sebagai “si modern yang v...

31. [Apa Itu Wordpress? Pengertian, Kelebihan, dan Kekurangan](https://www.dicoding.com/blog/apa-itu-cms-wordpress/) - WordPress merupakan tools CMS populer untuk seseorang yang ingin membangun website dan blog, bahkan ...

32. [Cara Membuat Website Desa dengan WordPress (2025) - YouTube](https://www.youtube.com/watch?v=-u0smu8Woco) - ... desa 52:20 Desain halaman home: section video 54 ... Cara Membuat Website Wordpress untuk Pemula...

33. [OpenSID - OpenDesa](https://opendesa.id/sistem-informasi-desa-opensid/) - OpenSID adalah Sistem Informasi Desa (SID) yang sengaja dibuat supaya terbuka dan dapat dikembangkan...

34. [Tutorial Install OpenSID di cPanel: Solusi Sistem Informasi Desa](https://idwebhost.com/blog/tutorial-install-opensid-di-cpanel-idwebhost/) - OpenSID adalah sebuah sistem informasi desa berbasis web yang dirancang untuk mempermudah pengelolaa...

35. [Mengonlinekan OpenSID - OpenDesa](https://opendesa.id/mengonlinekan-opensid/) - Layanan Mengonlinekan OpenSID ini mempermudah desa bagi yang terkendala SDM dalam mengggunakan dan m...

36. [Cara Pendaftaran Domain desa.id - Desa DigDaya](https://desadigdaya.id/panduan/cara-pendaftaran-domain-desa-id/) - Pendaftaran dilakukan di https://layanan.kominfo.go.id/. Lengkapi syarat-syarat dulu sebelum mendaft...

37. [Syarat & Biaya - Kementerian Komunikasi dan Informatika -](https://beta.domain.go.id/syarat-biaya) - Biaya per tahun sebesar Rp 50.000,- (ditambah PPN 11%). Khusus nama domain desa.id dibebaskan untuk ...

38. [domain desa.id](https://domain.go.id) - Surat Permohonan Nama Domain .desa.id dari Pejabat Instansi atas nama bupati/walikota kepada Direktu...

39. [Hosting Murah mulai Rp 15.000/bln | Gratis Domain & SSL](https://www.rumahweb.com/hosting-murah/) - Hosting Murah Terbaik di Indonesia ... Rumahweb adalah penyedia web hosting Indonesia terbaik dengan...

40. [PERANCANGAN VIDEO PROFIL DESA TUKAMASEA](https://eprints.unm.ac.id/28727/) - ... Desa ... Video Profil Desa Tukamasea dengan format file H.264 dengan rincian durasi 07.15 menit,...

41. [10 Plugin Keamanan WordPress Untuk Proteksi Maksimal - LamanWP](https://lamanwp.com/plugin-keamanan-wordpress/) - Wordfence Security adalah plugin keamanan WordPress menyediakan proteksi real-time dan memantau akti...

42. [Ini Dia Plugin untuk Meningkatkan Keamanan Wordpress Kamu](https://www.jagoanhosting.com/tutorial/wordpress/plugin-meningkatkan-keamanan-wordpress-dengan-plugin) - Untuk meningkatkan keamanan wordpress kerap kali kita menggunakan batuan plugin seperti wordfence, n...

43. [10+ Rekomendasi Plugin Anti Spam WordPress Terbaik - Qwords.com](https://www.qwords.com/blog/plugin-anti-spam-wordpress/) - WPBruiser merupakan plugin antispam dan keamanan dengan menggunakan algoritma untuk mengidentifikasi...

44. [Biaya Maintenance Website 2026: Rincian Harga & Cara Hitung ...](https://www.pytagotech.com/blog/biaya-maintenance-website-per-tahun) - Biaya wajib tahunan (Domain & Hosting/VPS): Mulai dari Rp 1.500.000 / tahun, atau sesuai spesifikasi...

45. [[PDF] Modul-Pelatihan-Wordpress.pdf](https://industri.itn.ac.id/wp-content/uploads/2025/08/Modul-Pelatihan-Wordpress.pdf) - Berikut adalah contoh halaman login WordPress (wp-admin) yang digunakan untuk masuk ke dashboard pen...

46. [7 Hosting Terbaik di Indonesia 2026 (Kecepatan Teruji!)](https://www.bitcatcha.com/id/hosting-terbaik/) - Hostinger ID – Web hosting termurah yang terbaik · Niagahoster – Web hosting terbaik dari Indonesia ...

