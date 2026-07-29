<?php
/**
 * Template Name: Galeri Kegiatan
 *
 * Halaman statis publik yang menampilkan seluruh album dan dokumentasi visual
 * kegiatan warga, pembangunan, dan acara adat di Dusun Ploso Kidul.
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
    <header class="page-header-banner" aria-label="Header Halaman Galeri Foto">
        <div class="container">
            <h1 class="page-title">Galeri Dokumentasi Dusun</h1>
            
            <!-- Breadcrumbs (WCAG AA Compliant) -->
            <nav class="page-breadcrumbs" aria-label="Breadcrumb">
                <ol class="breadcrumbs-list">
                    <li class="breadcrumb-item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-item--current" aria-current="page">
                        Galeri Kegiatan
                    </li>
                </ol>
            </nav>
        </div>
    </header>

    <div class="container page-content-container">
        
        <!-- Album Galeri Filter Navigasi -->
        <nav class="galeri-albums-nav" aria-label="Album Dokumentasi" style="margin-bottom: var(--spacing-lg); text-align: center;">
            <ul style="list-style: none; display: inline-flex; gap: var(--spacing-sm); padding: 0; margin: 0; flex-wrap: wrap; justify-content: center;">
                <li>
                    <a href="<?php echo esc_url( home_url( '/galeri/' ) ); ?>" 
                       class="btn btn-secondary <?php echo ! is_tax( 'album-galeri' ) ? 'btn-primary' : ''; ?>"
                       style="font-size: 13px; padding: 6px 16px;">
                        Semua Album
                    </a>
                </li>
                <?php
                $albums = get_terms( array(
                    'taxonomy'   => 'album-galeri',
                    'hide_empty' => false,
                ) );
                if ( ! is_wp_error( $albums ) && ! empty( $albums ) ) {
                    foreach ( $albums as $album ) {
                        $active_class = is_tax( 'album-galeri', $album->slug ) ? 'btn-primary' : 'btn-secondary';
                        echo '<li>';
                        echo '<a href="' . esc_url( get_term_link( $album ) ) . '" class="btn ' . $active_class . '" style="font-size: 13px; padding: 6px 16px;">' . esc_html( $album->name ) . '</a>';
                        echo '</li>';
                    }
                }
                ?>
            </ul>
        </nav>

        <?php
        // Query to fetch all galeri CPT
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $galeri_query = new WP_Query( array(
            'post_type'      => 'galeri',
            'posts_per_page' => 12,
            'paged'          => $paged,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
        ) );

        if ( $galeri_query->have_posts() ) : ?>
            
            <div class="galeri-grid">
                <?php while ( $galeri_query->have_posts() ) : $galeri_query->the_post(); 
                    $lokasi = get_post_meta( get_the_ID(), 'galeri_lokasi', true ) ?: 'Dusun Ploso Kidul';
                    $tanggal = get_post_meta( get_the_ID(), 'galeri_tanggal_kegiatan', true ) ?: get_the_date();
                    ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'galeri-item-card' ); ?> style="background-color: var(--color-white); border: 1px solid var(--color-border); border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm); display: flex; flex-direction: column; transition: transform 0.3s, box-shadow 0.3s; cursor: pointer;" onclick="window.location.href='<?php the_permalink(); ?>';">
                        
                        <!-- Thumbnail Image wrapper -->
                        <div class="galeri-thumbnail-wrapper" style="position: relative; overflow: hidden; aspect-ratio: 4/3; background-color: var(--color-primary-trans-10);">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'plosokidul-gallery', array( 'style' => 'width:100%; height:100%; object-fit:cover; transition:transform 0.3s;', 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default-thumbnail.webp' ); ?>" 
                                     alt="<?php the_title_attribute(); ?>"
                                     style="width:100%; height:100%; object-fit:cover; transition:transform 0.3s;">
                            <?php endif; ?>
                            
                            <!-- Location Badge -->
                            <span class="galeri-location-badge" style="position: absolute; bottom: 10px; left: 10px; background-color: rgba(26, 26, 46, 0.85); color: white; padding: 2px 8px; border-radius: var(--radius-sm); font-size: 10px; font-weight: bold; letter-spacing: 0.5px; text-transform: uppercase;">
                                📍 <?php echo esc_html( $lokasi ); ?>
                            </span>
                        </div>

                        <!-- Card Body info -->
                        <div class="galeri-card-body" style="padding: var(--spacing-sm); display: flex; flex-direction: column; flex-grow: 1;">
                            <span class="galeri-card-date" style="font-size: 11px; color: var(--color-text-muted); margin-bottom: 4px; display: block;">
                                📅 <?php echo esc_html( $tanggal ); ?>
                            </span>
                            <h3 class="galeri-card-title" style="font-family: var(--font-headline); font-size: 15px; color: var(--color-text-main); margin-bottom: 6px; line-height: 1.3;">
                                <a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <div class="galeri-card-excerpt" style="font-size: 12px; color: var(--color-text-muted); line-height: 1.4; margin-bottom: 0;">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>

                    </article>

                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="pagination-wrapper" style="text-align: center; margin-top: var(--spacing-lg);">
                <?php
                echo paginate_links( array(
                    'base'      => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'format'    => '?paged=%#%',
                    'current'   => max( 1, $paged ),
                    'total'     => $galeri_query->max_num_pages,
                    'prev_text' => __( '« Sebelumnya', 'plosokidul-theme' ),
                    'next_text' => __( 'Berikutnya »', 'plosokidul-theme' ),
                ) );
                ?>
            </div>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            
            <!-- Fallback Empty State -->
            <div class="section-empty-state">
                <div class="empty-state-icon" aria-hidden="true">📸</div>
                <h3 class="empty-state-title"><?php esc_html_e( 'Galeri Foto Belum Tersedia', 'plosokidul-theme' ); ?></h3>
                <p class="empty-state-desc">
                    <?php esc_html_e( 'Belum ada dokumentasi foto kegiatan warga yang diterbitkan.', 'plosokidul-theme' ); ?>
                </p>
            </div>

        <?php endif; ?>

    </div><!-- .container -->

</main><!-- #main -->

<?php
get_footer();
