<?php
/**
 * Template Name: Kontak & Lokasi
 *
 * Halaman statis publik yang menampilkan kontak Kepala Dusun
 * dan peta lokasi Dusun Ploso Kidul.
 *
 * @package plosokidul-theme
 * @version 1.1.0
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
    <header class="page-header-banner" aria-label="Header Halaman Kontak">
        <div class="container">
            <h1 class="page-title">Hubungi Kami</h1>
            
            <!-- Breadcrumbs (WCAG AA Compliant) -->
            <nav class="page-breadcrumbs" aria-label="Breadcrumb">
                <ol class="breadcrumbs-list">
                    <li class="breadcrumb-item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-item--current" aria-current="page">
                        Hubungi Kami
                    </li>
                </ol>
            </nav>
        </div>
    </header>

    <div class="container page-content-container">

        <div class="page-layout-grid">
            
            <!-- Kiri: Detail Informasi Kontak -->
            <section class="kontak-info-section" aria-labelledby="heading-kontak-info">
                <h2 id="heading-kontak-info" class="section-title-page">Kepala Dusun Ploso Kidul</h2>
                <p class="paragraph-lead" style="margin-bottom: var(--spacing-md);">
                    Silakan hubungi Kepala Dusun Ploso Kidul untuk berkonsultasi langsung mengenai kebutuhan warga.
                </p>

                <!-- Box Detail Alamat -->
                <div class="kontak-box" style="background-color: var(--color-white); border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: var(--spacing-md); margin-bottom: var(--spacing-md); box-shadow: var(--shadow-sm);">
                    <h3 style="font-size: 16px; font-weight: bold; color: var(--color-primary); margin-bottom: var(--spacing-xs);">📍 Alamat</h3>
                    <address style="font-style: normal; line-height: 1.6; color: var(--color-text-muted);">
                        Dusun Ploso Kidul, Desa Plosogede,<br>
                        Kecamatan Ngluwar, Kabupaten Magelang,<br>
                        Provinsi Jawa Tengah
                    </address>
                </div>

                <!-- Box Kontak Resmi -->
                <div class="kontak-box" style="background-color: var(--color-white); border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: var(--spacing-md); margin-bottom: var(--spacing-md); box-shadow: var(--shadow-sm);">
                    <h3 style="font-size: 16px; font-weight: bold; color: var(--color-primary); margin-bottom: var(--spacing-xs);">✉️ Surel Resmi</h3>
                    <ul style="list-style: none; padding: 0; margin: 0; color: var(--color-text-muted); line-height: 1.6;">
                        <li><strong>Email:</strong> <a href="mailto:<?php echo antispambot( 'dusunplosokidul173@gmail.com' ); ?>" style="word-break: break-all; overflow-wrap: anywhere;"><?php echo antispambot( 'dusunplosokidul173@gmail.com' ); ?></a></li>
                    </ul>
                </div>

                <!-- Box Kirim Pesan -->
                <div class="kontak-box" style="background-color: var(--color-primary-trans-10, #EBF8F2); border: 1px solid var(--color-primary); border-radius: var(--radius-lg); padding: var(--spacing-md); box-shadow: var(--shadow-sm); text-align: center;">
                    <h3 style="font-size: 16px; font-weight: bold; color: var(--color-primary); margin-bottom: var(--spacing-xs);">✉️ Kirim Pesan / Pengaduan</h3>
                    <p style="font-size: 14px; color: var(--color-text-muted); margin-bottom: var(--spacing-sm);">Klik tombol di bawah untuk mengirim pesan atau pengaduan langsung ke email resmi kami.</p>
                    <a href="mailto:dusunplosokidul173@gmail.com?subject=Pengaduan%20Warga%20Dusun%20Ploso%20Kidul"
                       class="btn btn-primary"
                       style="display: inline-block; padding: 10px 24px; text-decoration: none;">
                        📧 Kirim Email Sekarang
                    </a>
                </div>
            </section>

            <!-- Kanan: Peta Lokasi Dusun Ploso Kidul -->
            <section class="kontak-map-section" aria-labelledby="heading-kontak-peta">
                <h2 id="heading-kontak-peta" class="section-title-page">Peta Lokasi Dusun</h2>
                
                <!-- Peta ArcGIS Ploso Raya -->
                <div class="map-outer-container" style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-md); border: 1px solid var(--color-border);">
                    <picture>
                        <source srcset="<?php echo esc_url( get_template_directory_uri() . '/assets/images/peta-dusun-plosoraya.webp' ); ?>" type="image/webp">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/peta-dusun-plosoraya.png' ); ?>"
                             alt="Peta Administrasi Dusun Ploso Raya, Desa Plosogede, Kecamatan Ngluwar"
                             style="width: 100%; height: auto; display: block;"
                             loading="lazy"
                             width="2400"
                             height="1697">
                    </picture>
                </div>

                <p style="font-size: 13px; color: var(--color-text-muted); margin-top: var(--spacing-xs); text-align: center;">
                    📍 Peta Administrasi Dusun Ploso Raya, Desa Plosogede, Kec. Ngluwar, Kab. Magelang
                </p>
            </section>

        </div><!-- .page-layout-grid -->

    </div><!-- .container -->

</main><!-- #main -->

<?php
get_footer();
