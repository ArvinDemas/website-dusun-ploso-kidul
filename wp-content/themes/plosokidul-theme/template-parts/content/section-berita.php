<?php
/**
 * Plosokidul Theme — template-parts/content/section-berita.php
 *
 * Template part untuk Section Berita Terbaru di Homepage.
 * Fase 6: Menggantikan data dummy dengan WP_Query sesungguhnya.
 *
 * Data bersumber dari Post standar WordPress dengan Custom Taxonomy
 * 'kategori-berita'. Jika belum ada postingan yang dipublikasi,
 * tampilkan pesan fallback yang rapi.
 *
 * @package plosokidul-theme
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Query 3 berita terbaru yang sudah dipublikasi
$berita_query = new WP_Query( array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
    'ignore_sticky_posts' => true,
) );
?>

<section id="berita" class="berita-section fade-in-section">
    <div class="container">

        <div class="section-header">
            <span class="section-label">Warta Dusun</span>
            <h2 class="section-title">Berita &amp; Kegiatan Terbaru</h2>
            <p class="section-subtitle">
                Ikuti perkembangan terkini, pengumuman penting, dan catatan aktivitas masyarakat Dusun Ploso Kidul.
            </p>
        </div>

        <?php if ( $berita_query->have_posts() ) : ?>

            <div class="berita-grid">
                <?php while ( $berita_query->have_posts() ) : $berita_query->the_post(); ?>
                    <?php get_template_part( 'template-parts/content/card-berita' ); ?>
                <?php endwhile; wp_reset_postdata(); ?>
            </div><!-- .berita-grid -->

            <?php
            $berita_page = get_page_by_path( 'berita' );
            $berita_url  = $berita_page ? get_permalink( $berita_page ) : home_url( '/berita/' );
            ?>
            <div class="berita-footer">
                <a href="<?php echo esc_url( $berita_url ); ?>"
                   class="btn btn-secondary"
                   id="semua-berita-btn">
                    <?php esc_html_e( 'Lihat Semua Berita', 'plosokidul-theme' ); ?>
                </a>
            </div>

        <?php else : ?>

            <!-- Fallback: Tampil jika belum ada berita di database -->
            <div class="section-empty-state">
                <div class="empty-state-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                </div>
                <h3 class="empty-state-title">Berita Segera Hadir</h3>
                <p class="empty-state-desc">
                    Berita dan kegiatan Dusun Ploso Kidul akan segera diterbitkan di sini.
                    Kunjungi lagi sebentar!
                </p>
                <?php if ( current_user_can( 'publish_posts' ) ) : ?>
                    <a href="<?php echo esc_url( admin_url( 'post-new.php' ) ); ?>"
                       class="btn btn-primary"
                       style="margin-top: var(--spacing-md);">
                        + Tambahkan Berita Pertama
                    </a>
                <?php endif; ?>
            </div>

        <?php endif; ?>

    </div>
</section>
