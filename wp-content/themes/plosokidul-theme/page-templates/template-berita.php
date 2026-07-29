<?php
/**
 * Template Name: Arsip Berita
 *
 * Halaman statis publik yang menampilkan seluruh daftar postingan warta,
 * berita, pengumuman, dan agenda pembangunan Dusun Ploso Kidul.
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
    <header class="page-header-banner" aria-label="Header Halaman Berita &amp; Warta">
        <div class="container">
            <h1 class="page-title">Berita &amp; Kegiatan Terbaru</h1>
            
            <!-- Breadcrumbs (WCAG AA Compliant) -->
            <nav class="page-breadcrumbs" aria-label="Breadcrumb">
                <ol class="breadcrumbs-list">
                    <li class="breadcrumb-item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-item--current" aria-current="page">
                        Berita Desa
                    </li>
                </ol>
            </nav>
        </div>
    </header>

    <div class="container page-content-container">
        
        <!-- Kategori Berita Filter Navigasi -->
        <nav class="berita-categories-nav" aria-label="Kategori Berita" style="margin-bottom: var(--spacing-lg); text-align: center;">
            <ul style="list-style: none; display: inline-flex; gap: var(--spacing-sm); padding: 0; margin: 0; flex-wrap: wrap; justify-content: center;">
                <li>
                    <a href="<?php echo esc_url( home_url( '/berita/' ) ); ?>" 
                       class="btn btn-secondary <?php echo ! is_tax( 'kategori-berita' ) && ! is_category() ? 'btn-primary' : ''; ?>"
                       style="font-size: 13px; padding: 6px 16px;">
                        Semua Berita
                    </a>
                </li>
                <?php
                $terms = get_terms( array(
                    'taxonomy'   => 'kategori-berita',
                    'hide_empty' => false,
                ) );
                if ( ! is_wp_error( $terms ) && ! empty( $terms ) ) {
                    foreach ( $terms as $term ) {
                        $active_class = is_tax( 'kategori-berita', $term->slug ) ? 'btn-primary' : 'btn-secondary';
                        echo '<li>';
                        echo '<a href="' . esc_url( get_term_link( $term ) ) . '" class="btn ' . $active_class . '" style="font-size: 13px; padding: 6px 16px;">' . esc_html( $term->name ) . '</a>';
                        echo '</li>';
                    }
                }
                ?>
            </ul>
        </nav>

        <?php
        // Query to fetch all standard posts
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $berita_query = new WP_Query( array(
            'post_type'      => 'post',
            'posts_per_page' => 6,
            'paged'          => $paged,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
        ) );

        if ( $berita_query->have_posts() ) : ?>
            
            <div class="berita-grid">
                <?php while ( $berita_query->have_posts() ) : $berita_query->the_post(); ?>
                    <?php get_template_part( 'template-parts/content/card-berita' ); ?>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="pagination-wrapper" style="text-align: center; margin-top: var(--spacing-lg);">
                <?php
                echo paginate_links( array(
                    'base'      => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'format'    => '?paged=%#%',
                    'current'   => max( 1, $paged ),
                    'total'     => $berita_query->max_num_pages,
                    'prev_text' => __( '« Sebelumnya', 'plosokidul-theme' ),
                    'next_text' => __( 'Berikutnya »', 'plosokidul-theme' ),
                ) );
                ?>
            </div>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            
            <!-- Fallback Empty State -->
            <div class="section-empty-state">
                <div class="empty-state-icon" aria-hidden="true">📰</div>
                <h3 class="empty-state-title"><?php esc_html_e( 'Belum Ada Berita Diterbitkan', 'plosokidul-theme' ); ?></h3>
                <p class="empty-state-desc">
                    <?php esc_html_e( 'Saat ini belum ada warta atau pengumuman resmi yang diterbitkan.', 'plosokidul-theme' ); ?>
                </p>
            </div>

        <?php endif; ?>

    </div><!-- .container -->

</main><!-- #main -->

<?php
get_footer();
