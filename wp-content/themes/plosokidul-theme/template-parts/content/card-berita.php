<?php
/**
 * Template part untuk menampilkan kartu berita (news card).
 *
 * @package plosokidul-theme
 * @version 1.1.0
 */

// Cegah akses langsung ke file
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$post_url = get_permalink();
$post_title = get_the_title();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-berita' ); ?>>
    <a href="<?php echo esc_url( $post_url ); ?>" class="card-berita-link" aria-label="<?php echo esc_attr( $post_title ); ?>">

        <div class="card-thumbnail-container">
            <!-- Kategori Badge -->
            <?php
            $categories = get_the_category();
            if ( ! empty( $categories ) ) : ?>
                <span class="card-badge">
                    <?php echo esc_html( $categories[0]->name ); ?>
                </span>
            <?php endif; ?>

            <!-- Gambar Utama -->
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'plosokidul-card', array( 'alt' => esc_attr( $post_title ) ) ); ?>
            <?php else : ?>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default-thumbnail.webp' ); ?>"
                     alt="<?php echo esc_attr( $post_title ); ?>">
            <?php endif; ?>
        </div>

        <div class="card-body">
            <!-- Meta Postingan -->
            <div class="card-meta">
                <span class="card-date">
                    📅 <?php echo esc_html( get_the_date() ); ?>
                </span>
            </div>

            <!-- Judul Berita -->
            <h3 class="card-title">
                <?php the_title(); ?>
            </h3>

            <!-- Ringkasan Teks -->
            <div class="card-excerpt">
                <?php the_excerpt(); ?>
            </div>

            <!-- Tautan Selengkapnya -->
            <div class="card-link-wrapper">
                <span class="card-link">
                    <?php esc_html_e( 'Baca Selengkapnya', 'plosokidul-theme' ); ?>
                </span>
            </div>
        </div>

    </a>
</article>
