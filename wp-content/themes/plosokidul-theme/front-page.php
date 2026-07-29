<?php
/**
 * Plosokidul Theme — front-page.php
 *
 * Template halaman beranda (Homepage).
 * WordPress menggunakan file ini sebagai prioritas tertinggi untuk homepage,
 * menggantikan index.php.
 *
 * Urutan section beranda:
 *   1. Hero Section        (Fase 3)
 *   2. Statistik Desa      (Fase 4)
 *   3. Tentang Desa        (Fase 4)
 *   4. Potensi Desa        (Fase 5–6: WP_Query CPT potensi)
 *   5. Berita Terbaru      (Fase 5–6: WP_Query post standar)
 *
 * @package plosokidul-theme
 * @version 1.0.0
 */

get_header();
?>

<main id="main" class="site-main" role="main">

    <?php
    // Section 1: Hero — video background + CTA
    get_template_part( 'template-parts/header/hero' );

    // Section 2: Statistik 4 KPI (animated counter)
    get_template_part( 'template-parts/content/section-stats' );

    // Section 3: Tentang Desa (2 kolom + foto)
    get_template_part( 'template-parts/content/section-tentang' );

    // Section 3.5: Video Profil Desa (Responsive YouTube Player)
    get_template_part( 'template-parts/content/section-video' );

    // Section 4: Potensi Desa (WP_Query CPT potensi, 3 kartu)
    get_template_part( 'template-parts/content/section-potensi' );

    // Section 5: Berita Terbaru (WP_Query post standar, 3 kartu)
    get_template_part( 'template-parts/content/section-berita' );
    ?>

</main><!-- #main -->

<?php get_footer(); ?>
