<?php
/**
 * Plosokidul Theme — functions.php
 *
 * Fungsi utama tema: mendaftarkan dukungan fitur WordPress,
 * memuat aset CSS/JS, dan mendaftarkan area navigasi menu.
 *
 * @package plosokidul-theme
 * @version 1.0.0
 * @author  KKN-BN Angkatan 84 Dusun Ploso Kidul
 */

// Cegah akses langsung ke file ini.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// =============================================================================
// 1. KONSTANTA TEMA
// =============================================================================
define( 'PLOSOKIDUL_VERSION', '1.9.0' );
define( 'PLOSOKIDUL_DIR', get_template_directory() );
define( 'PLOSOKIDUL_URI', get_template_directory_uri() );

// =============================================================================
// 2. DUKUNGAN FITUR TEMA (THEME SUPPORT)
// =============================================================================
function plosokidul_theme_setup() {

    // Izinkan WordPress mengelola tag <title> secara otomatis (SEO-friendly).
    add_theme_support( 'title-tag' );

    // Aktifkan dukungan gambar unggulan (thumbnail) untuk semua post.
    add_theme_support( 'post-thumbnails' );

    // Ukuran thumbnail kustom untuk kartu berita dan galeri.
    add_image_size( 'plosokidul-card',      600, 400, true );  // Kartu berita/potensi
    add_image_size( 'plosokidul-hero',     1920, 1080, true ); // Hero section
    add_image_size( 'plosokidul-gallery',   800, 600, true );  // Galeri foto

    // Dukung feed RSS otomatis.
    add_theme_support( 'automatic-feed-links' );

    // Aktifkan dukungan HTML5 untuk elemen formulir dan galeri.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Dukung logo kustom via WordPress Customizer.
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Dukung warna editor Gutenberg agar sesuai palet warna desa.
    add_theme_support( 'editor-color-palette', array(
        array(
            'name'  => __( 'Hijau Menoreh', 'plosokidul-theme' ),
            'slug'  => 'primary',
            'color' => '#2D6A4F',
        ),
        array(
            'name'  => __( 'Coklat Tanah', 'plosokidul-theme' ),
            'slug'  => 'secondary',
            'color' => '#6B4226',
        ),
        array(
            'name'  => __( 'Terakota', 'plosokidul-theme' ),
            'slug'  => 'tertiary',
            'color' => '#8D4D4E',
        ),
        array(
            'name'  => __( 'Navy Gelap', 'plosokidul-theme' ),
            'slug'  => 'neutral',
            'color' => '#1A1A2E',
        ),
        array(
            'name'  => __( 'Krem Bersih', 'plosokidul-theme' ),
            'slug'  => 'background',
            'color' => '#F9F6F0',
        ),
    ) );

    // Dukung pemuatan font teks dari Google Fonts di editor Gutenberg.
    add_editor_style( 'assets/css/editor-style.css' );

    // Aktifkan dukungan internasionalisasi (terjemahan).
    load_theme_textdomain( 'plosokidul-theme', PLOSOKIDUL_DIR . '/languages' );
}
add_action( 'after_setup_theme', 'plosokidul_theme_setup' );


// =============================================================================
// 3. DAFTARKAN AREA NAVIGASI MENU
// =============================================================================
function plosokidul_register_menus() {
    register_nav_menus( array(
        'primary'   => __( 'Menu Utama (Header)', 'plosokidul-theme' ),
        'footer'    => __( 'Menu Footer', 'plosokidul-theme' ),
        'social'    => __( 'Menu Media Sosial', 'plosokidul-theme' ),
    ) );
}
add_action( 'init', 'plosokidul_register_menus' );

// Fallback otomatis jika menu di wp-admin belum/tidak sengaja terhapus
function plosokidul_default_nav_menu() {
    $items = array(
        '/'             => 'Beranda',
        '/profil/'      => 'Profil',
        '/organisasi/'  => 'Struktur',
        '/berita/'      => 'Berita',
        '/galeri/'      => 'Galeri',
        '/kependudukan/'=> 'Kependudukan',
        '/layanan/'     => 'Layanan',
        '/kontak/'      => 'Kontak',
    );
    echo '<ul id="primary-menu" class="menu">';
    foreach ( $items as $url => $label ) {
        echo '<li><a href="' . esc_url( home_url( $url ) ) . '">' . esc_html( $label ) . '</a></li>';
    }
    echo '</ul>';
}


// =============================================================================
// 4. MUAT ASET CSS DAN JAVASCRIPT (ENQUEUE)
// =============================================================================
function plosokidul_enqueue_assets() {

    // Google Fonts: Playfair Display (heading) + Plus Jakarta Sans (body)
    wp_enqueue_style(
        'plosokidul-google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Stylesheet utama tema
    wp_enqueue_style(
        'plosokidul-style',
        PLOSOKIDUL_URI . '/assets/css/main.css',
        array( 'plosokidul-google-fonts' ),
        PLOSOKIDUL_VERSION
    );

    // CSS Hero Section (Fase 3)
    wp_enqueue_style(
        'plosokidul-hero',
        PLOSOKIDUL_URI . '/assets/css/hero.css',
        array( 'plosokidul-style' ),
        PLOSOKIDUL_VERSION
    );

    // CSS Section Homepage (Fase 4–5)
    wp_enqueue_style(
        'plosokidul-sections',
        PLOSOKIDUL_URI . '/assets/css/sections.css',
        array( 'plosokidul-style' ),
        PLOSOKIDUL_VERSION
    );

    // JavaScript utama tema
    wp_enqueue_script(
        'plosokidul-main',
        PLOSOKIDUL_URI . '/assets/js/main.js',
        array(),             // Hapus jQuery dependency — main.js sudah vanilla JS
        PLOSOKIDUL_VERSION,
        true                 // Muat di footer, bukan header — agar tidak memblokir rendering
    );

    // Kirim variabel PHP ke JavaScript (untuk AJAX dan konfigurasi lain nanti)
    wp_localize_script( 'plosokidul-main', 'plsData', array(
        'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'plosokidul_nonce' ),
        'siteUrl'  => get_site_url(),
        'themeUrl' => PLOSOKIDUL_URI,
    ) );

    // Fase 8: Lazy load Chart.js & Leaflet.js hanya di halaman kependudukan
    if ( is_page_template( 'page-templates/template-kependudukan.php' ) ) {
        // Enqueue Chart.js
        wp_enqueue_script(
            'chartjs',
            'https://cdn.jsdelivr.net/npm/chart.js',
            array(),
            '4.4.1',
            true
        );

        // Enqueue Leaflet.js (CSS + JS)
        wp_enqueue_style(
            'leaflet-css',
            'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css',
            array(),
            '1.9.4'
        );
        wp_enqueue_script(
            'leaflet-js',
            'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js',
            array(),
            '1.9.4',
            true
        );

        // Enqueue kependudukan.js
        wp_enqueue_script(
            'plosokidul-kependudukan',
            PLOSOKIDUL_URI . '/assets/js/kependudukan.js',
            array( 'chartjs', 'leaflet-js', 'plosokidul-main' ),
            PLOSOKIDUL_VERSION,
            true
        );
    }

    // Fase 9: Lazy load layanan.js hanya di halaman layanan & pengaduan
    if ( is_page_template( 'page-templates/template-layanan.php' ) ) {
        wp_enqueue_script(
            'plosokidul-layanan',
            PLOSOKIDUL_URI . '/assets/js/layanan.js',
            array( 'plosokidul-main' ),
            PLOSOKIDUL_VERSION,
            true
        );
    }

    // Muat komentar threaded jika halaman komentar aktif
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'plosokidul_enqueue_assets' );


// =============================================================================
// 5. PENGATURAN KONTEN
// =============================================================================

// Atur panjang excerpt (ringkasan artikel) menjadi 25 kata
function plosokidul_excerpt_length() {
    return 25;
}
add_filter( 'excerpt_length', 'plosokidul_excerpt_length' );

// =============================================================================
// 6. AUTOMATIC TEMPLATE ROUTING FALLBACK (BULLETPROOF PAGE LOADING)
// =============================================================================
add_filter( 'template_include', 'plosokidul_auto_route_page_templates', 99 );
function plosokidul_auto_route_page_templates( $template ) {
    if ( is_admin() ) {
        return $template;
    }

    $request_uri = trim( parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ), '/' );

    $routes = array(
        'profil'       => 'page-templates/template-profil.php',
        'organisasi'   => 'page-templates/template-organisasi.php',
        'berita'       => 'page-templates/template-berita.php',
        'galeri'       => 'page-templates/template-galeri.php',
        'kependudukan' => 'page-templates/template-kependudukan.php',
        'layanan'      => 'page-templates/template-layanan.php',
        'kontak'       => 'page-templates/template-kontak.php',
    );

    if ( isset( $routes[$request_uri] ) ) {
        $custom_template = PLOSOKIDUL_DIR . '/' . $routes[$request_uri];
        if ( file_exists( $custom_template ) ) {
            return $custom_template;
        }
    }

    return $template;
}
function plosokidul_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'plosokidul_excerpt_more' );


// =============================================================================
// 6. CUSTOM POST TYPES & TAXONOMIES (FASE 6)
// =============================================================================
require_once PLOSOKIDUL_DIR . '/inc/post-types.php';
require_once PLOSOKIDUL_DIR . '/inc/admin-dashboard.php';


// =============================================================================
// 7. PLACEHOLDER — AKAN DIISI DI FASE BERIKUTNYA
// =============================================================================
// Fase 9: Integrasi form pengaduan WhatsApp
// Fase 10: Penyederhanaan dashboard admin desa
