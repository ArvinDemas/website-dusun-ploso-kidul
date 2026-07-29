<?php
/**
 * Plosokidul Theme — template-parts/content/section-potensi.php
 *
 * Template part untuk Section Potensi Desa di Homepage.
 * Fase 6: Menggantikan data dummy dengan WP_Query sesungguhnya.
 *
 * Data bersumber dari Custom Post Type 'potensi'.
 * Jika CPT belum diisi, tampilkan pesan fallback yang rapi.
 *
 * @package plosokidul-theme
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Query 3 potensi berdasarkan urutan menu (bisa diatur drag di admin)
$potensi_query = new WP_Query( array(
    'post_type'      => 'potensi',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
    'orderby'        => 'menu_order',  // Urutan diatur manual via admin drag
    'order'          => 'ASC',
) );
?>

<section id="potensi" class="potensi-section fade-in-section">
    <div class="container">

        <div class="section-header">
            <span class="section-label">Kekayaan Dusun</span>
            <h2 class="section-title">Potensi &amp; Sumber Daya</h2>
            <p class="section-subtitle">
                Keberlimpahan alam dan kreativitas masyarakat yang menjadi pilar kemandirian ekonomi Dusun Ploso Kidul.
            </p>
        </div>

        <?php if ( $potensi_query->have_posts() ) : ?>

            <div class="potensi-grid">
                <?php while ( $potensi_query->have_posts() ) : $potensi_query->the_post(); ?>
                    <?php
                    // Ambil meta potensi
                    $potensi_icon     = get_post_meta( get_the_ID(), 'potensi_icon', true );
                    $potensi_category = get_post_meta( get_the_ID(), 'potensi_category', true );
                    $potensi_highlight = get_post_meta( get_the_ID(), 'potensi_highlight', true );

                    // Fallback jika meta kosong
                    if ( empty( $potensi_icon ) ) {
                        // Coba ambil dari taxonomy sektor-potensi sebagai fallback
                        $sector_terms = get_the_terms( get_the_ID(), 'sektor-potensi' );
                        $potensi_icon = '🌿'; // Default
                    }
                    if ( empty( $potensi_category ) ) {
                        // Gunakan nama taxonomy jika ada
                        $sector_terms = get_the_terms( get_the_ID(), 'sektor-potensi' );
                        if ( $sector_terms && ! is_wp_error( $sector_terms ) ) {
                            $potensi_category = $sector_terms[0]->name;
                        } else {
                            $potensi_category = __( 'Potensi Desa', 'plosokidul-theme' );
                        }
                    }
                    ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'card-potensi stagger-item' ); ?>
                             onclick="window.location.href='<?php the_permalink(); ?>';">

                        <!-- Badge Ikon Potensi -->
                        <div class="potensi-icon-wrapper">
                            <span class="potensi-icon" aria-hidden="true">
                                <?php echo esc_html( $potensi_icon ); ?>
                            </span>
                        </div>

                        <!-- Gambar Potensi -->
                        <div class="potensi-image-container">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'plosokidul-card', array(
                                    'alt'     => esc_attr( get_the_title() ),
                                    'loading' => 'lazy',
                                ) ); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default-potensi.webp' ); ?>"
                                     alt="<?php the_title_attribute(); ?>"
                                     loading="lazy"
                                     width="400"
                                     height="250">
                            <?php endif; ?>
                        </div><!-- .potensi-image-container -->

                        <!-- Detail Potensi -->
                        <div class="potensi-body">

                            <span class="potensi-category">
                                <?php echo esc_html( $potensi_category ); ?>
                            </span>

                            <h3 class="potensi-title">
                                <a href="<?php the_permalink(); ?>" rel="bookmark">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <div class="potensi-desc">
                                <?php the_excerpt(); ?>
                            </div>

                            <?php if ( $potensi_highlight ) : ?>
                                <div class="potensi-highlight" style="
                                    font-family: var(--font-headline);
                                    font-size: var(--font-size-lg);
                                    color: var(--color-primary);
                                    font-weight: var(--font-weight-bold);
                                    margin-bottom: var(--spacing-xs);
                                ">
                                    <?php echo esc_html( $potensi_highlight ); ?>
                                </div>
                            <?php endif; ?>

                            <div class="potensi-link-wrapper">
                                <span class="potensi-link">
                                    <?php esc_html_e( 'Lihat Detail Potensi', 'plosokidul-theme' ); ?>
                                </span>
                            </div>

                        </div><!-- .potensi-body -->
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div><!-- .potensi-grid -->

        <?php else : ?>

            <!-- Fallback: Tampil jika CPT Potensi belum diisi di wp-admin -->
            <div class="section-empty-state">
                <div class="empty-state-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="empty-state-title">Potensi Desa Segera Diterbitkan</h3>
                <p class="empty-state-desc">
                    Data potensi dan sumber daya Dusun Ploso Kidul sedang disiapkan.
                </p>
                <?php if ( current_user_can( 'publish_posts' ) ) : ?>
                    <a href="<?php echo esc_url( admin_url( 'post-new.php?post_type=potensi' ) ); ?>"
                       class="btn btn-primary"
                       style="margin-top: var(--spacing-md);">
                        + Tambahkan Potensi Pertama
                    </a>
                <?php endif; ?>
            </div>

        <?php endif; ?>

    </div>
</section>
