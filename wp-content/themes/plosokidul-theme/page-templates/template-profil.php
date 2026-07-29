<?php
/**
 * Template Name: Profil Dusun
 *
 * Halaman statis yang menyajikan sejarah, geografis, visi-misi,
 * serta adat istiadat Dusun Ploso Kidul.
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
    <header class="page-header-banner" aria-label="Header Halaman Profil Dusun">
        <div class="container">
            <h1 class="page-title">Profil Dusun Ploso Kidul</h1>
            
            <!-- Breadcrumbs (WCAG AA Compliant) -->
            <nav class="page-breadcrumbs" aria-label="Breadcrumb">
                <ol class="breadcrumbs-list">
                    <li class="breadcrumb-item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-item--current" aria-current="page">
                        Profil Dusun
                    </li>
                </ol>
            </nav>
        </div>
    </header>

    <div class="container page-content-container">
        <div class="page-layout-grid">
            
            <!-- Sidebar Navigasi Halaman (Site Architecture / Anchor Links) -->
            <aside class="page-sidebar" aria-label="Navigasi Halaman">
                <div class="sidebar-sticky-box">
                    <h3 class="sidebar-title">Daftar Isi Halaman</h3>
                    <nav class="sidebar-toc">
                        <ul>
                            <li><a href="#sejarah" class="toc-link">📜 Sejarah Desa</a></li>
                            <li><a href="#video-profil" class="toc-link">🎥 Video Profil</a></li>
                            <li><a href="#geografis" class="toc-link">🗺️ Letak Geografis</a></li>
                            <li><a href="#peta-administrasi" class="toc-link">📍 Peta Administrasi</a></li>
                            <li><a href="#visi-misi" class="toc-link">🎯 Visi &amp; Misi</a></li>
                            <li><a href="#budaya" class="toc-link">🎭 Adat &amp; Budaya</a></li>
                        </ul>
                    </nav>
                </div>
            </aside>

            <!-- Konten Utama (WCAG AA Compliant Heading Structure) -->
            <div class="page-main-content">

                <!-- 1. SEJARAH -->
                <section id="sejarah" class="page-section fade-in-section is-visible" aria-labelledby="heading-sejarah">
                    <h2 id="heading-sejarah" class="section-title-page">Sejarah Desa Plosogede</h2>
                    <p class="paragraph-lead">
                        Desa Plosogede menyimpan akar sejarah yang kuat sejak zaman kolonial Belanda, dengan jejak budaya dan tradisi Jawa yang masih lestari hingga kini.
                    </p>
                    <p>
                        Nama <strong>"Plosogede"</strong> berasal dari dua kata dalam bahasa Jawa: <em>"Kemploso"</em> yang berarti keras (atos), dan <em>"Gede"</em> yang berarti besar. Nama ini merujuk pada sebuah <strong>batu besar yang sangat keras</strong> di Sungai Ingas yang menjadi ciri khas wilayah ini sejak berabad-abad lalu.
                    </p>
                    <p>
                        Pada masa kolonial, wilayah ini pernah dipimpin oleh tokoh bergelar <em>"Ndoro Denmas"</em> yang bertempat tinggal di Dusun Druju Tegal. Catatan kepala desa tertua berasal dari <strong>Bapak R. Parto Didjojo</strong> (1900–1923), dilanjutkan oleh Bapak R. Hardjo Sumarto (1923–1936). Hingga kini, jejak kereta api lori pengangkut hasil perkebunan era Belanda masih dapat ditemukan berupa sisa-sisa tiang jembatan di wilayah desa.
                    </p>
                    <p>
                        <strong>Dusun Ploso Kidul</strong> adalah salah satu dusun yang berada di dalam wilayah administratif Desa Plosogede, bersama dengan Dusun Ploso Wetan dan Ploso Kulon yang tergabung dalam wilayah Ploso Raya.
                    </p>
                </section>

                <hr class="section-divider">

                <!-- VIDEO PROFIL DUSUN -->
                <?php $video_profil = get_option( 'plosokidul_video_profil', 'https://www.youtube.com/embed/gP7tN3v3KkQ' ); ?>
                <?php if ( ! empty( $video_profil ) ) : ?>
                <section id="video-profil" class="page-section fade-in-section is-visible" aria-labelledby="heading-video-profil">
                    <h2 id="heading-video-profil" class="section-title-page">Video Profil Dusun</h2>
                    <p>Saksikan dokumentasi visual keindahan alam, aktivitas gotong royong, dan profil pembangunan di Dusun Ploso Kidul melalui tayangan berikut:</p>
                    <div class="video-wrapper" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); margin-top: var(--spacing-sm);">
                        <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;"
                                src="<?php echo esc_url( $video_profil ); ?>"
                                title="Video Profil Dusun Ploso Kidul"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                        </iframe>
                    </div>
                </section>

                <hr class="section-divider">
                <?php endif; ?>

                <!-- 2. GEOGRAFIS -->
                <section id="geografis" class="page-section fade-in-section is-visible" aria-labelledby="heading-geografis">
                    <h2 id="heading-geografis" class="section-title-page">Letak Geografis &amp; Wilayah</h2>
                    <p>
                        Desa Plosogede terletak di dataran rendah Kecamatan Ngluwar, Kabupaten Magelang, Provinsi Jawa Tengah. Dengan topografi yang diapit Kali Progo di selatan dan Kali Putih di barat, desa ini memiliki tanah yang subur dan kaya air.
                    </p>

                    <div class="geografis-stats-grid">
                        <div class="geo-stat-card">
                            <span class="geo-stat-num">2,65 km²</span>
                            <span class="geo-stat-lbl">Luas Wilayah</span>
                        </div>
                        <div class="geo-stat-card">
                            <span class="geo-stat-num">3</span>
                            <span class="geo-stat-lbl">Dusun Ploso Raya</span>
                        </div>
                        <div class="geo-stat-card">
                            <span class="geo-stat-num">±202 m</span>
                            <span class="geo-stat-lbl">Ketinggian dpl</span>
                        </div>
                    </div>

                    <h3 class="subsection-title">Batas-Batas Wilayah</h3>
                    <div class="table-responsive">
                        <table class="geo-table" aria-label="Tabel Batas Wilayah Desa Plosogede">
                            <thead>
                                <tr>
                                    <th scope="col">Arah Mata Angin</th>
                                    <th scope="col">Batas Wilayah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Utara</strong></td>
                                    <td>Desa Sirahan, Kecamatan Salam</td>
                                </tr>
                                <tr>
                                    <td><strong>Timur</strong></td>
                                    <td>Desa Jamus Kauman &amp; Desa Karangtalun, Kecamatan Ngluwar</td>
                                </tr>
                                <tr>
                                    <td><strong>Selatan</strong></td>
                                    <td>Kali Progo / Desa Banjaroyo, Kec. Kalibawang (D.I. Yogyakarta)</td>
                                </tr>
                                <tr>
                                    <td><strong>Barat</strong></td>
                                    <td>Kali Putih / Desa Blongkeng, Kecamatan Ngluwar</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h3 class="subsection-title">Dusun Ploso Raya</h3>
                    <p>Dusun Ploso Kidul merupakan bagian dari Desa Plosogede, bersama dua dusun lainnya yang tergabung dalam wilayah Ploso Raya di bawah Kepala Dusun yang sama:</p>
                    <ul class="dusun-list">
                        <li><strong>Dusun Ploso Kidul</strong> — Wilayah RW 06 (5 RT)</li>
                        <li><strong>Dusun Ploso Wetan</strong> — Wilayah RW 07 (5 RT)</li>
                        <li><strong>Dusun Ploso Kulon</strong></li>
                    </ul>
                </section>

                <hr class="section-divider">

                <!-- PETA ADMINISTRASI DUSUN -->
                <section id="peta-administrasi" class="page-section fade-in-section is-visible" aria-labelledby="heading-peta">
                    <h2 id="heading-peta" class="section-title-page">Peta Administrasi Dusun Ploso Raya</h2>
                    <p>Peta berikut menunjukkan batas wilayah administrasi Dusun Ploso Kidul, Ploso Wetan, dan Ploso Kulon beserta penggunaan lahan, fasilitas umum, dan jaringan jalan dusun.</p>

                    <div style="margin-top: var(--spacing-md); border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--color-border);">
                        <picture>
                            <source srcset="<?php echo esc_url( get_template_directory_uri() . '/assets/images/peta-dusun-plosoraya.webp' ); ?>" type="image/webp">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/peta-dusun-plosoraya.png' ); ?>"
                                 alt="Peta Administrasi Dusun Ploso Raya, Desa Plosogede, Kecamatan Ngluwar, Kabupaten Magelang — menampilkan batas wilayah Ploso Kidul, Ploso Wetan, dan Ploso Kulon"
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

                <!-- 3. VISI & MISI -->
                <section id="visi-misi" class="page-section fade-in-section is-visible" aria-labelledby="heading-visimisi">
                    <h2 id="heading-visimisi" class="section-title-page">Visi &amp; Misi Dusun</h2>
                    
                    <div class="visi-box">
                        <h3 class="visi-box-title">Visi Dusun</h3>
                        <blockquote class="visi-quote">
                            &ldquo;Terwujudnya Dusun Ploso Kidul yang Mandiri, Sejahtera, dan Berbudaya berbasis Pertanian dan Perikanan Produktif dengan Semangat Gotong Royong.&rdquo;
                        </blockquote>
                    </div>

                    <h3 class="subsection-title" style="margin-top: var(--spacing-lg);">Misi Dusun</h3>
                    <ol class="misi-list" aria-label="Daftar Misi Dusun Ploso Kidul">
                        <li>
                            <strong>Peningkatan Ekonomi Warga:</strong> Mengoptimalkan hasil pertanian, holtikultura, dan budidaya ikan air tawar melalui pendampingan teknologi modern.
                        </li>
                        <li>
                            <strong>Keterbukaan Informasi:</strong> Menyelenggarakan komunikasi dan pelayanan publik yang ramah, terbuka, dan berbasis digital untuk kemudahan warga.
                        </li>
                        <li>
                            <strong>Pelestarian Tradisi:</strong> Menjaga dan melestarikan kearifan lokal Jawa, kebudayaan daerah, serta menguatkan semangat gotong royong antar warga.
                        </li>
                        <li>
                            <strong>Pembangunan Berkelanjutan:</strong> Membangun infrastruktur dusun yang merata, ramah lingkungan, dan mempermudah akses ekonomi warga di wilayah Ploso Raya.
                        </li>
                    </ol>
                </section>

                <hr class="section-divider">

                <!-- 4. ADAT & BUDAYA -->
                <section id="budaya" class="page-section fade-in-section is-visible" aria-labelledby="heading-budaya" style="margin-bottom: 0;">
                    <h2 id="heading-budaya" class="section-title-page">Adat Istiadat &amp; Seni Budaya</h2>
                    <p>
                        Kehidupan sosial kemasyarakatan di Dusun Ploso Kidul masih kental dengan adat ketimuran Jawa yang diwariskan turun-temurun. Keharmonisan dan kerukunan warga senantiasa dijaga lewat berbagai adat budaya tahunan:
                    </p>

                    <div class="budaya-grid">
                        <div class="budaya-card">
                            <h3 class="budaya-card-title">🥁 Hadrohan</h3>
                            <p>Kesenian shalawatan dan rebana khas Jawa yang rutin digelar dalam acara-acara keagamaan dan kemasyarakatan di Dusun Ploso Kidul. Irama hadrohan menjadi pengiring doa bersama yang mempererat tali silaturahmi antarwarga.</p>
                        </div>
                        <div class="budaya-card">
                            <h3 class="budaya-card-title">🥁 Kesenian Jathilan</h3>
                            <p>Tarian tradisional menunggang kuda kepang diiringi gamelan dinamis yang sangat digemari warga. Kesenian ini dilestarikan oleh sanggar seni lokal sebagai wujud kebanggaan budaya Menoreh.</p>
                        </div>
                        <div class="budaya-card">
                            <h3 class="budaya-card-title">🤝 Sambatan &amp; Gotong Royong</h3>
                            <p>Adat saling membantu tanpa upah ketika ada warga yang mendirikan rumah, memperbaiki saluran air sawah, atau mempersiapkan acara besar keluarga. Tradisi ini menjaga persaudaraan tetap erat.</p>
                        </div>
                    </div>
                </section>

            </div><!-- .page-main-content -->
        </div><!-- .page-layout-grid -->
    </div><!-- .container -->

</main><!-- #main -->

<?php
get_footer();
