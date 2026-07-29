<?php
/**
 * Plosokidul Theme — template-parts/header/hero.php
 *
 * Template part untuk Hero Section halaman beranda.
 * Dipanggil dari front-page.php atau index.php via:
 * get_template_part('template-parts/header/hero')
 *
 * Fitur:
 * - Video background (lazy-load via JS setelah LCP)
 * - Poster image fallback (langsung ditampilkan, prioritas tinggi)
 * - Overlay gradien berlapis
 * - Teks dengan animasi entrance staggered
 * - 2 tombol CTA (Primary & Secondary)
 * - Scroll indicator
 *
 * @package plosokidul-theme
 * @version 1.0.0
 */

// Cegah akses langsung
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Ambil data dari WordPress Customizer jika tersedia (untuk Fase 10 dashboard admin)
// Sementara gunakan nilai default
$hero_tagline  = get_theme_mod( 'hero_tagline', 'Dusun Ploso Kidul, Ngluwar, Magelang' );
$hero_title    = get_theme_mod( 'hero_title',   'Tanah Subur di Kaki Menoreh' );
$hero_subtitle = get_theme_mod( 'hero_subtitle', 'Temukan potensi alam, budaya, dan keberlanjutan masyarakat Dusun Ploso Kidul — gerbang hijau Magelang Selatan yang sejuk dan asri.' );
$hero_cta1_text = get_theme_mod( 'hero_cta1_text', 'Jelajahi Potensi Dusun' );
$hero_cta1_url  = get_theme_mod( 'hero_cta1_url',  '#potensi' );
$hero_cta2_text = get_theme_mod( 'hero_cta2_text', 'Tentang Plosokidul' );
$hero_cta2_url  = get_theme_mod( 'hero_cta2_url',  '#tentang' );

// URL aset hero
$poster_url = get_template_directory_uri() . '/assets/images/hero-poster.webp';
$video_url  = get_template_directory_uri() . '/assets/video/hero-desa.mp4';
$has_video  = file_exists( get_template_directory() . '/assets/video/hero-desa.mp4' );
?>

<section id="hero"
         class="hero-section"
         aria-label="<?php esc_attr_e( 'Selamat Datang di Dusun Ploso Kidul', 'plosokidul-theme' ); ?>">

    <!-- =====================================================================
         BACKGROUND: Poster Image (LCP) + Video (Lazy-Load)
         ===================================================================== -->
    <div class="hero-bg" aria-hidden="true">

        <!-- Poster image: dimuat pertama dengan prioritas tinggi → LCP element -->
        <img class="hero-poster"
             src="<?php echo esc_url( $poster_url ); ?>"
             alt=""
             fetchpriority="high"
             decoding="sync"
             loading="eager">

        <?php if ( $has_video ) : ?>
        <!-- Video: dimuat LAZY via JS setelah event 'load' halaman selesai -->
        <!-- data-src digunakan agar browser tidak auto-load src sebelum waktunya -->
        <video class="hero-video"
               id="hero-video"
               muted
               loop
               playsinline
               preload="none"
               poster="<?php echo esc_url( $poster_url ); ?>"
               data-src="<?php echo esc_url( $video_url ); ?>"
               aria-hidden="true">
            <source data-src="<?php echo esc_url( $video_url ); ?>" type="video/mp4">
        </video>
        <?php endif; ?>

    </div>

    <!-- =====================================================================
         OVERLAY GRADIEN GELAP
         ===================================================================== -->
    <div class="hero-overlay" aria-hidden="true"></div>

    <!-- =====================================================================
         KONTEN HERO: Tagline → Judul → Subtitle → CTA Buttons
         ===================================================================== -->
    <div class="container hero-content">

        <!-- Tag lokasi / konteks -->
        <span class="hero-tagline">
            <?php echo esc_html( $hero_tagline ); ?>
        </span>

        <!-- H1 — satu per halaman, wajib untuk SEO -->
        <h1 class="hero-title">
            <?php
            // Pisahkan baris kedua agar bisa diberikan gaya italic Playfair
            $title_parts = explode( ' di ', $hero_title, 2 );
            if ( count( $title_parts ) === 2 ) {
                echo esc_html( $title_parts[0] ) . ' di <em>' . esc_html( $title_parts[1] ) . '</em>';
            } else {
                echo esc_html( $hero_title );
            }
            ?>
        </h1>

        <!-- Sub-judul / deskripsi -->
        <p class="hero-subtitle">
            <?php echo esc_html( $hero_subtitle ); ?>
        </p>

        <!-- Dua Tombol CTA -->
        <div class="hero-actions">
            <a href="<?php echo esc_url( $hero_cta1_url ); ?>"
               class="btn btn-primary"
               id="hero-cta-primary">
                <?php echo esc_html( $hero_cta1_text ); ?>
            </a>
            <a href="<?php echo esc_url( $hero_cta2_url ); ?>"
               class="btn btn-secondary btn-secondary--light"
               id="hero-cta-secondary">
                <?php echo esc_html( $hero_cta2_text ); ?>
            </a>
        </div>

    </div>

    <!-- =====================================================================
         SCROLL INDICATOR — Mengundang pengguna scroll ke bawah
         ===================================================================== -->
    <div class="hero-scroll-indicator" aria-hidden="true">
        <div class="scroll-ring">
            <span class="scroll-dot"></span>
        </div>
        <span class="scroll-dot"></span>
        <span class="scroll-dot"></span>
    </div>

</section>
