<?php
/**
 * Template Name: Data Kependudukan & Wilayah
 *
 * Halaman statis yang menyajikan grafik statistik kependudukan (Chart.js),
 * peta wilayah interaktif (Leaflet.js), dan bento grid infrastruktur desa.
 *
 * @package plosokidul-theme
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="main" class="site-main" role="main">

    <!-- ============================================================
         PAGE BANNER HEADER
         ============================================================ -->
    <header class="page-header-banner" aria-label="Header Halaman Kependudukan">
        <div class="container">
            <h1 class="page-title">Kependudukan &amp; Wilayah</h1>
            
            <!-- Breadcrumbs (WCAG AA Compliant) -->
            <nav class="page-breadcrumbs" aria-label="Breadcrumb">
                <ol class="breadcrumbs-list">
                    <li class="breadcrumb-item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-item--current" aria-current="page">
                        Kependudukan &amp; Wilayah
                    </li>
                </ol>
            </nav>
        </div>
    </header>

    <div class="container page-content-container">

        <!-- Notifikasi Data Sementara (WCAG AA Compliant Alert Box) -->
        <div class="data-warning-alert" role="alert">
            <span class="alert-icon" aria-hidden="true">⚠️</span>
            <div class="alert-text">
                <strong>Informasi Penting:</strong> Seluruh data demografi, statistik, dan fasilitas di bawah ini merupakan <strong>Data Sementara Semester I Tahun 2026</strong>. Integrasi dengan sistem database kependudukan nasional sedang berjalan.
            </div>
        </div>

        <!-- ============================================================
             1. IKHTISAR KEPENDUDUKAN (OVERVIEW CARDS)
             ============================================================ -->
        <section id="ikhtisar" class="kependudukan-section" aria-label="Ringkasan Data Demografi">
            <div class="section-header">
                <span class="section-label">Ikhtisar Demografi</span>
                <h2 class="section-title">Demografi Dusun Ploso Kidul</h2>
                <p class="section-subtitle">Informasi umum sebaran populasi penduduk dan struktur keluarga Dusun Ploso Kidul.</p>
            </div>

            <div class="kependudukan-stats-grid">
                <div class="kependudukan-stat-card">
                    <span class="kp-stat-icon" aria-hidden="true">👥</span>
                    <span class="kp-stat-num">1.050</span>
                    <span class="kp-stat-lbl">Total Jiwa</span>
                </div>
                <div class="kependudukan-stat-card">
                    <span class="kp-stat-icon" aria-hidden="true">🏠</span>
                    <span class="kp-stat-num">300</span>
                    <span class="kp-stat-lbl">Kepala Keluarga (KK)</span>
                </div>
                <div class="kependudukan-stat-card">
                    <span class="kp-stat-icon" aria-hidden="true">👨</span>
                    <span class="kp-stat-num">515</span>
                    <span class="kp-stat-lbl">Laki-laki</span>
                </div>
                <div class="kependudukan-stat-card">
                    <span class="kp-stat-icon" aria-hidden="true">👩</span>
                    <span class="kp-stat-num">535</span>
                    <span class="kp-stat-lbl">Perempuan</span>
                </div>
            </div>
        </section>

        <hr class="section-divider">

        <!-- ============================================================
             2. DIAGRAM STATISTIK KEPENDUDUKAN (CHART.JS)
             ============================================================ -->
        <section id="grafik" class="kependudukan-section" aria-label="Grafik Statistik Penduduk">
            <div class="section-header">
                <span class="section-label">Grafik Statistik</span>
                <h2 class="section-title">Visualisasi Data Kependudukan</h2>
                <p class="section-subtitle">Visualisasi sebaran jenis kelamin, kelompok usia, mata pencaharian, dan tingkat pendidikan terakhir warga dusun.</p>
            </div>

            <div class="chart-section-grid">
                
                <!-- Chart 1: Jenis Kelamin (Doughnut) -->
                <div class="chart-card">
                    <h3 class="chart-card-title">Sebaran Jenis Kelamin</h3>
                    <div class="chart-canvas-wrapper" style="position: relative; height:280px; width:100%">
                        <canvas id="chart-gender" aria-label="Grafik lingkaran persentase jenis kelamin penduduk Dusun Ploso Kidul" role="img"></canvas>
                    </div>
                </div>

                <!-- Chart 2: Kelompok Usia (Bar Vertikal) -->
                <div class="chart-card">
                    <h3 class="chart-card-title">Struktur Kelompok Usia</h3>
                    <div class="chart-canvas-wrapper" style="position: relative; height:280px; width:100%">
                        <canvas id="chart-age" aria-label="Grafik batang struktur kelompok usia warga Dusun Ploso Kidul" role="img"></canvas>
                    </div>
                </div>

                <!-- Chart 3: Mata Pencaharian (Bar Horizontal) -->
                <div class="chart-card chart-card--wide">
                    <h3 class="chart-card-title">Mata Pencaharian Utama (Keluarga)</h3>
                    <div class="chart-canvas-wrapper" style="position: relative; height:320px; width:100%">
                        <canvas id="chart-work" aria-label="Grafik batang horizontal pembagian mata pencaharian utama warga Dusun Ploso Kidul" role="img"></canvas>
                    </div>
                </div>

                <!-- Chart 4: Tingkat Pendidikan (Polar Area / Radar) -->
                <div class="chart-card">
                    <h3 class="chart-card-title">Tingkat Pendidikan Terakhir</h3>
                    <div class="chart-canvas-wrapper" style="position: relative; height:280px; width:100%">
                        <canvas id="chart-education" aria-label="Grafik polar area sebaran tingkat pendidikan terakhir warga Dusun Ploso Kidul" role="img"></canvas>
                    </div>
                </div>

            </div><!-- .chart-section-grid -->
        </section>

        <hr class="section-divider">

        <!-- ============================================================
             3. PETA WILAYAH INTERAKTIF (LEAFLET.JS)
             ============================================================ -->
        <section id="peta" class="kependudukan-section" aria-label="Peta Interaktif Wilayah Dusun">
            <div class="section-header">
                <span class="section-label">Peta Geografis</span>
                <h2 class="section-title">Peta Wilayah &amp; Administrasi</h2>
                <p class="section-subtitle">Jelajahi batas wilayah administrasi dan lokasi fasilitas umum penting di Dusun Ploso Raya.</p>
            </div>

            <!-- Image Map Container (Peta ArcGIS Ploso Raya) -->
            <div class="map-outer-container" style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--color-border);">
                <picture>
                    <source srcset="<?php echo esc_url( get_template_directory_uri() . '/assets/images/peta-dusun-plosoraya.webp' ); ?>" type="image/webp">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/peta-dusun-plosoraya.png' ); ?>"
                         alt="Peta Administrasi Dusun Ploso Raya, Desa Plosogede, Kecamatan Ngluwar, Kabupaten Magelang"
                         style="width: 100%; height: auto; display: block;"
                         loading="lazy"
                         width="2400"
                         height="1697">
                </picture>
            </div>
            <p style="font-size: 12px; color: var(--color-text-muted); margin-top: var(--spacing-xs); text-align: center;">
                📍 Peta Administrasi Dusun Ploso Raya — Skala 1:2.000 | Dibuat oleh: Kelompok KKN UPNVY 173 | Sumber: INA Geoportal, PERKA BIG No.3/2016, Google Earth Pro
            </p>
        </section>

        <hr class="section-divider">

        <!-- ============================================================
             4. DATA INFRASTRUKTUR & FASILITAS (BENTO GRID)
             ============================================================ -->
        <section id="infrastruktur" class="kependudukan-section" style="margin-bottom: 0;" aria-label="Data Sarana &amp; Fasilitas Umum">
            <div class="section-header">
                <span class="section-label">Fasilitas Dusun</span>
                <h2 class="section-title">Sarana &amp; Infrastruktur Umum</h2>
                <p class="section-subtitle">Inventarisasi sarana prasarana penunjang kehidupan warga di wilayah Dusun Ploso Raya.</p>
            </div>

            <!-- Bento Grid Layout — 4 fasilitas dalam 2×2 grid -->
            <div class="infrastruktur-bento">

                <div class="bento-item bento-item--primary">
                    <div class="bento-content">
                        <span class="bento-icon" aria-hidden="true">🕌</span>
                        <div class="bento-info">
                            <span class="bento-num">5</span>
                            <h3 class="bento-title">Sarana Ibadah</h3>
                            <p class="bento-desc">Masjid dan mushola yang tersebar di wilayah dusun sebagai pusat pembinaan kerohanian dan kegiatan sosial warga.</p>
                        </div>
                    </div>
                </div>

                <div class="bento-item">
                    <div class="bento-content">
                        <span class="bento-icon" aria-hidden="true">🏥</span>
                        <div class="bento-info">
                            <span class="bento-num">2</span>
                            <h3 class="bento-title">Posyandu</h3>
                            <p class="bento-desc">Pos pelayanan kesehatan terpadu untuk pemantauan gizi balita, kesehatan ibu, dan lansia.</p>
                        </div>
                    </div>
                </div>

                <div class="bento-item">
                    <div class="bento-content">
                        <span class="bento-icon" aria-hidden="true">🏫</span>
                        <div class="bento-info">
                            <span class="bento-num">2</span>
                            <h3 class="bento-title">Sekolah (SD/PAUD)</h3>
                            <p class="bento-desc">Fasilitas pendidikan dasar formal anak-anak untuk mendukung program belajar wajib 9 tahun.</p>
                        </div>
                    </div>
                </div>

                <div class="bento-item">
                    <div class="bento-content">
                        <span class="bento-icon" aria-hidden="true">⚰️</span>
                        <div class="bento-info">
                            <span class="bento-num">2</span>
                            <h3 class="bento-title">Makam</h3>
                            <p class="bento-desc">Tempat pemakaman umum warga dusun yang dirawat secara gotong royong oleh masyarakat setempat.</p>
                        </div>
                    </div>
                </div>

            </div><!-- .infrastruktur-bento -->
        </section>

    </div><!-- .container -->

</main><!-- #main -->

<?php
get_footer();
