<?php
/**
 * Template Name: Potensi Desa
 *
 * Halaman statis publik yang menampilkan daftar lengkap potensi desa
 * (Pertanian, Perikanan, UMKM, Wisata) dari database CPT potensi.
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
    <header class="page-header-banner" aria-label="Header Halaman Potensi Dusun">
        <div class="container">
            <h1 class="page-title">Potensi Dusun Ploso Kidul</h1>
            
            <!-- Breadcrumbs (WCAG AA Compliant) -->
            <nav class="page-breadcrumbs" aria-label="Breadcrumb">
                <ol class="breadcrumbs-list">
                    <li class="breadcrumb-item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-item--current" aria-current="page">
                        Potensi Dusun
                    </li>
                </ol>
            </nav>
        </div>
    </header>

    <div class="container page-content-container">
        
        <!-- Filter Taxonomies Sektor Potensi -->
        <nav class="potensi-filters" aria-label="Filter Sektor Potensi" style="margin-bottom: var(--spacing-lg); text-align: center;">
            <ul style="list-style: none; display: inline-flex; gap: var(--spacing-sm); padding: 0; margin: 0; flex-wrap: wrap; justify-content: center;">
                <li>
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'potensi' ) ?: home_url( '/potensi-desa/' ) ); ?>" 
                       class="btn btn-secondary <?php echo ! is_tax( 'sektor-potensi' ) ? 'btn-primary' : ''; ?>"
                       style="font-size: 13px; padding: 6px 16px;">
                        Semua Sektor
                    </a>
                </li>
                <?php
                $sectors = get_terms( array(
                    'taxonomy'   => 'sektor-potensi',
                    'hide_empty' => false,
                ) );
                if ( ! is_wp_error( $sectors ) && ! empty( $sectors ) ) {
                    foreach ( $sectors as $sector ) {
                        $active_class = is_tax( 'sektor-potensi', $sector->slug ) ? 'btn-primary' : 'btn-secondary';
                        echo '<li>';
                        echo '<a href="' . esc_url( get_term_link( $sector ) ) . '" class="btn ' . $active_class . '" style="font-size: 13px; padding: 6px 16px;">' . esc_html( $sector->name ) . '</a>';
                        echo '</li>';
                    }
                }
                ?>
            </ul>
        </nav>

        <?php
        // Query to fetch all potensi CPT
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $potensi_query = new WP_Query( array(
            'post_type'      => 'potensi',
            'posts_per_page' => 9,
            'paged'          => $paged,
            'post_status'    => 'publish',
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ) );

        if ( $potensi_query->have_posts() ) : ?>
            
            <div class="potensi-grid">
                <?php while ( $potensi_query->have_posts() ) : $potensi_query->the_post(); ?>
                    <?php get_template_part( 'template-parts/content/card-potensi' ); ?>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="pagination-wrapper" style="text-align: center; margin-top: var(--spacing-lg);">
                <?php
                echo paginate_links( array(
                    'base'      => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'format'    => '?paged=%#%',
                    'current'   => max( 1, $paged ),
                    'total'     => $potensi_query->max_num_pages,
                    'prev_text' => __( '« Sebelumnya', 'plosokidul-theme' ),
                    'next_text' => __( 'Berikutnya »', 'plosokidul-theme' ),
                ) );
                ?>
            </div>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            
            <!-- Fallback Empty State -->
            <div class="section-empty-state">
                <div class="empty-state-icon" aria-hidden="true">🌱</div>
                <h3 class="empty-state-title"><?php esc_html_e( 'Potensi Desa Belum Diterbitkan', 'plosokidul-theme' ); ?></h3>
                <p class="empty-state-desc">
                    <?php esc_html_e( 'Saat ini pengurus Dusun Ploso Kidul sedang melakukan pendataan komprehensif seluruh potensi wilayah.', 'plosokidul-theme' ); ?>
                </p>
            </div>

        <?php endif; ?>

    </div><!-- .container -->

</main><!-- #main -->

<?php
get_footer();
