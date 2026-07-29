<?php
/**
 * Plosokidul Theme — single.php
 *
 * Template untuk menampilkan detail artikel (single post) berita desa secara utuh.
 * Mendukung rendering Gambar Unggulan (Featured Image) dan konten gambar/galeri
 * di dalam editor secara rapi dan responsif.
 *
 * @package plosokidul-theme
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="main-content" class="site-main" role="main">
    
    <?php while ( have_posts() ) : the_post(); ?>

        <!-- ============================================================
             PAGE BANNER & HEADER INFO
             ============================================================ -->
        <header class="page-header-banner" aria-label="Header Artikel Berita" style="padding: var(--spacing-lg) 0; background-color: var(--color-primary-dark); color: var(--color-white);">
            <div class="container" style="max-width: 850px;">
                
                <!-- Breadcrumbs (WCAG AA Compliant) -->
                <nav class="page-breadcrumbs" aria-label="Breadcrumb" style="margin-bottom: var(--spacing-xs);">
                    <ol class="breadcrumbs-list" style="list-style: none; padding: 0; margin: 0; display: inline-flex; gap: 8px; font-size: 12px;">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: rgba(255,255,255,0.7);">Beranda</a></li>
                        <li class="breadcrumb-item" style="color: rgba(255,255,255,0.4);">/</li>
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/berita/' ) ); ?>" style="color: rgba(255,255,255,0.7);">Berita</a></li>
                        <li class="breadcrumb-item" style="color: rgba(255,255,255,0.4);">/</li>
                        <li class="breadcrumb-item breadcrumb-item--current" aria-current="page" style="color: var(--color-white);"><?php the_title(); ?></li>
                    </ol>
                </nav>

                <!-- Kategori Badge -->
                <?php
                $terms = get_the_terms( get_the_ID(), 'kategori-berita' );
                $badge_text = '';
                if ( $terms && ! is_wp_error( $terms ) ) {
                    $badge_text = $terms[0]->name;
                } else {
                    $cats = get_the_category();
                    if ( $cats ) {
                        $badge_text = $cats[0]->name;
                    }
                }
                if ( $badge_text ) :
                ?>
                <span class="article-badge" style="background-color: var(--color-accent); color: var(--color-text-main); font-size: 11px; font-weight: bold; padding: 3px 10px; border-radius: var(--radius-sm); text-transform: uppercase; letter-spacing: 0.5px; display: inline-block; margin-bottom: var(--spacing-xs);">
                    <?php echo esc_html( $badge_text ); ?>
                </span>
                <?php endif; ?>

                <!-- Judul Utama (H1) -->
                <h1 class="entry-title" style="font-family: var(--font-headline); font-size: var(--font-size-3xl); line-height: 1.2; color: var(--color-white); margin-bottom: var(--spacing-xs);">
                    <?php the_title(); ?>
                </h1>

                <!-- Meta Info (Tanggal & Penulis) -->
                <div class="entry-meta" style="font-family: var(--font-body); font-size: var(--font-size-xs); color: rgba(255,255,255,0.8); display: flex; gap: var(--spacing-sm); align-items: center;">
                    <span class="meta-date">
                        📅 <?php echo esc_html( get_the_date( 'j F Y' ) ); ?>
                    </span>
                    <span class="meta-author">
                        ✍️ Pengurus Dusun
                    </span>
                </div>

            </div>
        </header>

        <!-- ============================================================
             ARTICLE CONTENT CONTAINER
             ============================================================ -->
        <article id="post-<?php the_ID(); ?>" <?php post_class('single-article-post'); ?> style="padding: var(--spacing-xl) 0; background-color: var(--color-bg);">
            <div class="container" style="max-width: 850px; background-color: var(--color-bg-card); padding: var(--spacing-lg); border-radius: var(--radius-lg); box-shadow: var(--shadow-md); border: 1px solid var(--color-border);">

                <!-- Gambar Unggulan (Featured Image) -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="featured-image-wrapper" style="margin-bottom: var(--spacing-lg); border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-sm);">
                        <?php the_post_thumbnail( 'large', array(
                            'style' => 'width: 100%; height: auto; display: block; object-fit: cover;',
                            'alt'   => get_the_title(),
                        ) ); ?>
                    </div>
                <?php endif; ?>

                <!-- Konten Editor Utama (the_content) -->
                <div class="entry-content" style="font-family: var(--font-body); font-size: var(--font-size-base); line-height: var(--line-height-relaxed); color: var(--color-text-main);">
                    <?php
                    the_content();
                    
                    // Navigasi Halaman jika post bertipe multi-page
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'plosokidul-theme' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </div><!-- .entry-content -->

                <!-- Footer Artikel (Tags & Navigasi Pos) -->
                <footer class="entry-footer" style="margin-top: var(--spacing-xl); padding-top: var(--spacing-md); border-top: 1px solid var(--color-border);">
                    
                    <!-- Navigasi Berita Sebelumnya / Selanjutnya -->
                    <nav class="post-navigation-links" style="display: flex; justify-content: space-between; gap: var(--spacing-sm); margin-top: var(--spacing-md); flex-wrap: wrap;">
                        <div class="nav-prev" style="flex: 1; min-width: 250px;">
                            <?php previous_post_link( '<div class="nav-direction" style="font-size:11px; color:var(--color-text-muted);">« SEBELUMNYA</div><div class="nav-post-title" style="font-weight:bold; font-size:14px;">%link</div>' ); ?>
                        </div>
                        <div class="nav-next" style="text-align: right; flex: 1; min-width: 250px;">
                            <?php next_post_link( '<div class="nav-direction" style="font-size:11px; color:var(--color-text-muted);">BERIKUTNYA »</div><div class="nav-post-title" style="font-weight:bold; font-size:14px;">%link</div>' ); ?>
                        </div>
                    </nav>

                </footer>

            </div>
        </article>

    <?php endwhile; ?>

</main><!-- #main-content -->

<!-- Styling Khusus Konten Editor Gambar agar Responsif & Rapi -->
<style>
    /* Styling Dasar Konten Editor WP */
    .entry-content p {
        margin-bottom: var(--spacing-sm);
    }
    .entry-content h2, .entry-content h3 {
        margin-top: var(--spacing-lg);
        margin-bottom: var(--spacing-xs);
        font-family: var(--font-headline);
        color: var(--color-primary-dark);
    }
    /* Mengatur perataan gambar (alignleft, alignright, aligncenter) */
    .entry-content img.aligncenter, 
    .entry-content .aligncenter img {
        display: block;
        margin: var(--spacing-md) auto;
        border-radius: var(--radius-lg);
        max-width: 100%;
        height: auto;
    }
    .entry-content img.alignleft {
        float: left;
        margin: 0 var(--spacing-md) var(--spacing-md) 0;
        border-radius: var(--radius-md);
        max-width: 45%;
        height: auto;
    }
    .entry-content img.alignright {
        float: right;
        margin: 0 0 var(--spacing-md) var(--spacing-md);
        border-radius: var(--radius-md);
        max-width: 45%;
        height: auto;
    }
    .entry-content blockquote {
        border-left: 4px solid var(--color-primary);
        padding-left: var(--spacing-sm);
        margin: var(--spacing-md) 0;
        font-style: italic;
        color: var(--color-text-muted);
        background-color: var(--color-bg);
        border-radius: 0 var(--radius-md) var(--radius-md) 0;
        padding-top: var(--spacing-xs);
        padding-bottom: var(--spacing-xs);
    }
    /* Bersihkan float setelah gambar bertumpuk */
    .entry-content::after {
        content: "";
        clear: both;
        display: table;
    }

    /* =============================================
       MOBILE RESPONSIVE — Berita di HP
       ============================================= */
    @media (max-width: 768px) {
        /* Container artikel lebih rapat di HP */
        .container[style*="max-width: 850px"] {
            padding: var(--spacing-sm) !important;
            border-radius: var(--radius-md) !important;
        }
        /* Judul artikel lebih kecil di HP */
        .entry-title {
            font-size: clamp(1.25rem, 5vw, 2rem) !important;
            line-height: 1.3 !important;
        }
        /* Meta date & author wrap di HP */
        .entry-meta {
            flex-direction: column !important;
            gap: 4px !important;
            align-items: flex-start !important;
        }
        /* Gambar float di HP harus full width */
        .entry-content img.alignleft,
        .entry-content img.alignright {
            float: none !important;
            display: block !important;
            max-width: 100% !important;
            margin: var(--spacing-sm) auto !important;
        }
        /* Navigasi berita stack di HP */
        .post-navigation-links {
            flex-direction: column !important;
        }
        .nav-prev, .nav-next {
            min-width: unset !important;
            text-align: left !important;
        }
        /* Breadcrumbs wrap */
        .breadcrumbs-list {
            flex-wrap: wrap !important;
        }
        /* Font size konten lebih nyaman dibaca di HP */
        .entry-content {
            font-size: 15px !important;
            line-height: 1.8 !important;
        }
    }
</style>

<?php
get_footer();
