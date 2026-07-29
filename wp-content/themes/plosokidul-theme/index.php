<?php
/**
 * Plosokidul Theme — index.php
 *
 * Template fallback utama WordPress. File ini dipanggil ketika
 * tidak ada template yang lebih spesifik ditemukan (misal: single.php,
 * page.php, archive.php, dll). Wajib ada di setiap tema WordPress.
 *
 * @package plosokidul-theme
 */

get_header(); ?>

<main id="main-content" class="site-main">
    <div class="container">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <p><?php esc_html_e( 'Konten tidak ditemukan.', 'plosokidul-theme' ); ?></p>

        <?php endif; ?>

    </div>
</main>

<?php get_footer();
