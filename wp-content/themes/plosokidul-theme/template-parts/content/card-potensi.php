<?php
/**
 * Template part untuk menampilkan kartu potensi dusun.
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

// Ambil data potensi (jika menggunakan CPT potensi, akan di-load secara dinamis)
$potensi_icon = get_post_meta( get_the_ID(), 'potensi_icon', true );
$potensi_category = get_post_meta( get_the_ID(), 'potensi_category', true );

// Set default jika kosong (sebagai fallback data)
if ( empty( $potensi_icon ) ) {
    $potensi_icon = '🌾'; // Pertanian sebagai default
}
if ( empty( $potensi_category ) ) {
    $potensi_category = __( 'Potensi Dusun', 'plosokidul-theme' );
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-potensi' ); ?>>
    <a href="<?php echo esc_url( $post_url ); ?>" class="card-berita-link" aria-label="<?php echo esc_attr( $post_title ); ?>">
        
        <!-- Ikon Kategori -->
        <div class="potensi-icon-wrapper">
            <span class="potensi-icon" aria-hidden="true"><?php echo esc_html( $potensi_icon ); ?></span>
        </div>

        <!-- Gambar Potensi -->
        <div class="potensi-image-container">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'plosokidul-card', array( 'alt' => esc_attr( $post_title ) ) ); ?>
            <?php else : ?>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/default-potensi.webp' ); ?>" 
                     alt="<?php echo esc_attr( $post_title ); ?>">
            <?php endif; ?>
        </div>

        <div class="potensi-body">
            <!-- Kategori Potensi -->
            <span class="potensi-category">
                <?php echo esc_html( $potensi_category ); ?>
            </span>

            <!-- Judul Potensi -->
            <h3 class="potensi-title">
                <?php the_title(); ?>
            </h3>

            <!-- Deskripsi Singkat -->
            <div class="potensi-desc">
                <?php the_excerpt(); ?>
            </div>

            <!-- Tautan Detail -->
            <div class="potensi-link-wrapper">
                <span class="potensi-link">
                    <?php esc_html_e( 'Lihat Detail Potensi', 'plosokidul-theme' ); ?>
                </span>
            </div>
        </div>

    </a>
</article>
