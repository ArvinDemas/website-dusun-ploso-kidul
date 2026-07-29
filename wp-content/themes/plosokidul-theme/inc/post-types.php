<?php
/**
 * Plosokidul Theme — inc/post-types.php
 *
 * Mendaftarkan Custom Post Types dan Custom Taxonomies:
 * - CPT: potensi   — Potensi & Sumber Daya Desa
 * - CPT: galeri    — Galeri Foto Desa
 * - Taxonomy: kategori-berita — Kategori untuk Post standar WordPress
 * - Taxonomy: sektor-potensi  — Sektor untuk CPT Potensi
 * - Taxonomy: album-galeri    — Album untuk CPT Galeri
 *
 * Keputusan domain (domain-modeling skill):
 * - "Berita" = Post standar WordPress + Custom Taxonomy (admin lebih familiar)
 * - "Potensi Desa" = CPT baru (konten statis, tidak kronologis)
 * - "Galeri" = CPT baru (konten media, tidak kronologis)
 *
 * @package plosokidul-theme
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


// =============================================================================
// A. CUSTOM TAXONOMY: KATEGORI BERITA
// (Untuk Post standar WP — konsisten dengan sitemap: Berita Desa, Pengumuman, dll.)
// =============================================================================
function plosokidul_register_taxonomy_berita() {
    $labels = array(
        'name'              => _x( 'Kategori Berita', 'taxonomy general name', 'plosokidul-theme' ),
        'singular_name'     => _x( 'Kategori Berita', 'taxonomy singular name', 'plosokidul-theme' ),
        'search_items'      => __( 'Cari Kategori Berita', 'plosokidul-theme' ),
        'all_items'         => __( 'Semua Kategori Berita', 'plosokidul-theme' ),
        'parent_item'       => __( 'Kategori Induk', 'plosokidul-theme' ),
        'parent_item_colon' => __( 'Kategori Induk:', 'plosokidul-theme' ),
        'edit_item'         => __( 'Ubah Kategori', 'plosokidul-theme' ),
        'update_item'       => __( 'Perbarui Kategori', 'plosokidul-theme' ),
        'add_new_item'      => __( 'Tambah Kategori Baru', 'plosokidul-theme' ),
        'new_item_name'     => __( 'Nama Kategori Baru', 'plosokidul-theme' ),
        'menu_name'         => __( 'Kategori Berita', 'plosokidul-theme' ),
    );

    register_taxonomy( 'kategori-berita', 'post', array(
        'labels'            => $labels,
        'hierarchical'      => true,     // Mirip kategori WP standar (parent/child)
        'show_ui'           => true,
        'show_admin_column' => true,     // Tampil di kolom list postingan
        'show_in_rest'      => true,     // Diperlukan untuk Gutenberg editor
        'query_var'         => true,
        'rewrite'           => array(
            'slug'          => 'kategori-berita',
            'with_front'    => false,
        ),
    ) );
}
add_action( 'init', 'plosokidul_register_taxonomy_berita' );


// =============================================================================
// B. CUSTOM POST TYPE: POTENSI DESA
// =============================================================================
function plosokidul_register_cpt_potensi() {
    $labels = array(
        'name'               => _x( 'Potensi Desa', 'Post type general name', 'plosokidul-theme' ),
        'singular_name'      => _x( 'Potensi Desa', 'Post type singular name', 'plosokidul-theme' ),
        'menu_name'          => _x( 'Potensi Desa', 'Admin Menu text', 'plosokidul-theme' ),
        'name_admin_bar'     => _x( 'Potensi Desa', 'Add New on Toolbar', 'plosokidul-theme' ),
        'add_new'            => __( 'Tambah Baru', 'plosokidul-theme' ),
        'add_new_item'       => __( 'Tambah Potensi Baru', 'plosokidul-theme' ),
        'new_item'           => __( 'Potensi Baru', 'plosokidul-theme' ),
        'edit_item'          => __( 'Ubah Potensi', 'plosokidul-theme' ),
        'view_item'          => __( 'Lihat Potensi', 'plosokidul-theme' ),
        'all_items'          => __( 'Semua Potensi', 'plosokidul-theme' ),
        'search_items'       => __( 'Cari Potensi', 'plosokidul-theme' ),
        'not_found'          => __( 'Data potensi belum tersedia.', 'plosokidul-theme' ),
        'not_found_in_trash' => __( 'Tidak ada potensi di tempat sampah.', 'plosokidul-theme' ),
    );

    register_post_type( 'potensi', array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'potensi', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,                                     // Tepat di bawah Postingan
        'menu_icon'          => 'dashicons-building',                  // Ikon gedung/sumber daya
        'show_in_rest'       => true,                                  // Aktifkan Gutenberg editor
        'rest_base'          => 'potensi',
        'supports'           => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'page-attributes',  // Mengaktifkan 'order' untuk urutan manual drag
        ),
    ) );

    // Custom Meta: Ikon/Emoji potensi (ditampilkan di badge kartu)
    register_post_meta( 'potensi', 'potensi_icon', array(
        'type'              => 'string',
        'single'            => true,
        'show_in_rest'      => true,
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '🌿',
    ) );

    // Custom Meta: Statistik unggulan (misal: "125 ton/tahun", "42 UMKM aktif")
    register_post_meta( 'potensi', 'potensi_highlight', array(
        'type'              => 'string',
        'single'            => true,
        'show_in_rest'      => true,
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '',
    ) );

    // Custom Meta: Kategori sektor (teks bebas, sebagai backup taxonomy)
    register_post_meta( 'potensi', 'potensi_category', array(
        'type'              => 'string',
        'single'            => true,
        'show_in_rest'      => true,
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Potensi Desa',
    ) );
}
add_action( 'init', 'plosokidul_register_cpt_potensi' );


// =============================================================================
// C. CUSTOM TAXONOMY: SEKTOR POTENSI (untuk CPT Potensi)
// =============================================================================
function plosokidul_register_taxonomy_potensi() {
    $labels = array(
        'name'          => _x( 'Sektor Potensi', 'taxonomy general name', 'plosokidul-theme' ),
        'singular_name' => _x( 'Sektor', 'taxonomy singular name', 'plosokidul-theme' ),
        'add_new_item'  => __( 'Tambah Sektor Baru', 'plosokidul-theme' ),
        'edit_item'     => __( 'Ubah Sektor', 'plosokidul-theme' ),
        'menu_name'     => __( 'Sektor', 'plosokidul-theme' ),
    );

    register_taxonomy( 'sektor-potensi', 'potensi', array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'sektor', 'with_front' => false ),
    ) );
}
add_action( 'init', 'plosokidul_register_taxonomy_potensi' );


// =============================================================================
// D. CUSTOM POST TYPE: GALERI FOTO
// =============================================================================
function plosokidul_register_cpt_galeri() {
    $labels = array(
        'name'               => _x( 'Galeri Foto', 'Post type general name', 'plosokidul-theme' ),
        'singular_name'      => _x( 'Foto', 'Post type singular name', 'plosokidul-theme' ),
        'menu_name'          => _x( 'Galeri Foto', 'Admin Menu text', 'plosokidul-theme' ),
        'add_new'            => __( 'Tambah Foto', 'plosokidul-theme' ),
        'add_new_item'       => __( 'Tambah Foto Baru', 'plosokidul-theme' ),
        'edit_item'          => __( 'Ubah Foto', 'plosokidul-theme' ),
        'view_item'          => __( 'Lihat Foto', 'plosokidul-theme' ),
        'all_items'          => __( 'Semua Foto', 'plosokidul-theme' ),
        'search_items'       => __( 'Cari Foto', 'plosokidul-theme' ),
        'not_found'          => __( 'Belum ada foto dalam galeri.', 'plosokidul-theme' ),
        'not_found_in_trash' => __( 'Tidak ada foto di tempat sampah.', 'plosokidul-theme' ),
    );

    register_post_type( 'galeri', array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'galeri', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-format-gallery',
        'show_in_rest'       => true,
        'rest_base'          => 'galeri',
        'supports'           => array(
            'title',
            'thumbnail',
            'excerpt',
            'page-attributes',
        ),
    ) );

    // Custom Meta: Tanggal kegiatan foto (berbeda dari post date)
    register_post_meta( 'galeri', 'galeri_tanggal_kegiatan', array(
        'type'              => 'string',
        'single'            => true,
        'show_in_rest'      => true,
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '',
    ) );

    // Custom Meta: Lokasi pengambilan foto
    register_post_meta( 'galeri', 'galeri_lokasi', array(
        'type'              => 'string',
        'single'            => true,
        'show_in_rest'      => true,
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Dusun Ploso Kidul',
    ) );
}
add_action( 'init', 'plosokidul_register_cpt_galeri' );


// =============================================================================
// E. CUSTOM TAXONOMY: ALBUM GALERI (untuk CPT Galeri)
// =============================================================================
function plosokidul_register_taxonomy_galeri() {
    $labels = array(
        'name'          => _x( 'Album Galeri', 'taxonomy general name', 'plosokidul-theme' ),
        'singular_name' => _x( 'Album', 'taxonomy singular name', 'plosokidul-theme' ),
        'add_new_item'  => __( 'Tambah Album Baru', 'plosokidul-theme' ),
        'edit_item'     => __( 'Ubah Album', 'plosokidul-theme' ),
        'menu_name'     => __( 'Album', 'plosokidul-theme' ),
    );

    register_taxonomy( 'album-galeri', 'galeri', array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'album', 'with_front' => false ),
    ) );
}
add_action( 'init', 'plosokidul_register_taxonomy_galeri' );


// =============================================================================
// E-2. CUSTOM POST TYPE: PENGADUAN WARGA (Fase 9)
// =============================================================================
function plosokidul_register_cpt_pengaduan() {
    $labels = array(
        'name'               => _x( 'Laporan Pengaduan', 'Post type general name', 'plosokidul-theme' ),
        'singular_name'      => _x( 'Pengaduan', 'Post type singular name', 'plosokidul-theme' ),
        'menu_name'          => _x( 'Pengaduan Warga', 'Admin Menu text', 'plosokidul-theme' ),
        'all_items'          => __( 'Semua Pengaduan', 'plosokidul-theme' ),
        'view_item'          => __( 'Lihat Pengaduan', 'plosokidul-theme' ),
        'search_items'       => __( 'Cari Pengaduan', 'plosokidul-theme' ),
        'not_found'          => __( 'Belum ada pengaduan.', 'plosokidul-theme' ),
        'not_found_in_trash' => __( 'Tidak ada pengaduan di tempat sampah.', 'plosokidul-theme' ),
    );

    register_post_type( 'pengaduan', array(
        'labels'             => $labels,
        'public'             => false, // Non-publik (hanya bisa diakses di admin)
        'show_ui'            => true,  // Tampilkan di wp-admin
        'show_in_menu'       => true,
        'query_var'          => false,
        'capability_type'    => 'post',
        'capabilities'       => array(
            'create_posts' => 'do_not_allow', // Admin dilarang membuat pengaduan dari admin panel
        ),
        'map_meta_cap'       => true,
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-feedback',
        'supports'           => array( 'title', 'editor' ),
    ) );

    // Meta: Kontak pelapor (telepon/email)
    register_post_meta( 'pengaduan', 'pengaduan_kontak', array(
        'type'              => 'string',
        'single'            => true,
        'show_in_rest'      => false,
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    // Meta: Dusun lokasi kejadian
    register_post_meta( 'pengaduan', 'pengaduan_dusun', array(
        'type'              => 'string',
        'single'            => true,
        'show_in_rest'      => false,
        'sanitize_callback' => 'sanitize_text_field',
    ) );
}
add_action( 'init', 'plosokidul_register_cpt_pengaduan' );


// =============================================================================
// E-3. CUSTOM POST TYPE: VIDEO DOKUMENTASI (Fase 10)
// =============================================================================
function plosokidul_register_cpt_video() {
    $labels = array(
        'name'               => _x( 'Video Dokumentasi', 'Post type general name', 'plosokidul-theme' ),
        'singular_name'      => _x( 'Video', 'Post type singular name', 'plosokidul-theme' ),
        'menu_name'          => _x( 'Video', 'Admin Menu text', 'plosokidul-theme' ),
        'all_items'          => __( 'Semua Video', 'plosokidul-theme' ),
        'add_new'            => __( 'Tambah Video', 'plosokidul-theme' ),
        'add_new_item'       => __( 'Tambah Video Baru', 'plosokidul-theme' ),
        'edit_item'          => __( 'Ubah Video', 'plosokidul-theme' ),
        'view_item'          => __( 'Lihat Video', 'plosokidul-theme' ),
        'search_items'       => __( 'Cari Video', 'plosokidul-theme' ),
        'not_found'          => __( 'Belum ada video.', 'plosokidul-theme' ),
        'not_found_in_trash' => __( 'Tidak ada video di tempat sampah.', 'plosokidul-theme' ),
    );

    register_post_type( 'video', array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'video', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 8,
        'menu_icon'          => 'dashicons-video-alt3',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    ) );
}
add_action( 'init', 'plosokidul_register_cpt_video' );


// =============================================================================
// E-4. CUSTOM POST TYPE: KEGIATAN DESA (Fase 10)
// =============================================================================
function plosokidul_register_cpt_kegiatan() {
    $labels = array(
        'name'               => _x( 'Kegiatan Desa', 'Post type general name', 'plosokidul-theme' ),
        'singular_name'      => _x( 'Kegiatan', 'Post type singular name', 'plosokidul-theme' ),
        'menu_name'          => _x( 'Kegiatan', 'Admin Menu text', 'plosokidul-theme' ),
        'all_items'          => __( 'Semua Kegiatan', 'plosokidul-theme' ),
        'add_new'            => __( 'Tambah Kegiatan', 'plosokidul-theme' ),
        'add_new_item'       => __( 'Tambah Kegiatan Baru', 'plosokidul-theme' ),
        'edit_item'          => __( 'Ubah Kegiatan', 'plosokidul-theme' ),
        'view_item'          => __( 'Lihat Kegiatan', 'plosokidul-theme' ),
        'search_items'       => __( 'Cari Kegiatan', 'plosokidul-theme' ),
        'not_found'          => __( 'Belum ada kegiatan.', 'plosokidul-theme' ),
        'not_found_in_trash' => __( 'Tidak ada kegiatan di tempat sampah.', 'plosokidul-theme' ),
    );

    register_post_type( 'kegiatan', array(
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'kegiatan', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 9,
        'menu_icon'          => 'dashicons-calendar-alt',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    ) );
}
add_action( 'init', 'plosokidul_register_cpt_kegiatan' );



// =============================================================================
// F. FLUSH REWRITE RULES — Dipanggil sekali saat tema diaktifkan
// Memastikan URL permalink CPT (misal: /potensi/pertanian/) berfungsi
// =============================================================================
add_action( 'after_switch_theme', function () {
    // Jalankan registrasi CPT lebih dulu, lalu baru flush
    plosokidul_register_cpt_potensi();
    plosokidul_register_cpt_galeri();
    plosokidul_register_cpt_pengaduan();
    plosokidul_register_cpt_video();
    plosokidul_register_cpt_kegiatan();
    plosokidul_register_taxonomy_berita();
    plosokidul_register_taxonomy_potensi();
    plosokidul_register_taxonomy_galeri();
    flush_rewrite_rules();
} );


// =============================================================================
// G. TAMBAHKAN KOLOM KUSTOM DI DAFTAR POSTINGAN POTENSI (wp-admin)
// Memudahkan admin melihat Ikon dan Kategori Sektor langsung di tabel
// =============================================================================
function plosokidul_potensi_custom_columns( $columns ) {
    // Sisipkan kolom Ikon setelah kolom checkbox
    $new_columns = array();
    foreach ( $columns as $key => $value ) {
        $new_columns[ $key ] = $value;
        if ( 'title' === $key ) {
            $new_columns['potensi_icon']      = __( 'Ikon', 'plosokidul-theme' );
            $new_columns['potensi_highlight'] = __( 'Statistik Unggulan', 'plosokidul-theme' );
        }
    }
    return $new_columns;
}
add_filter( 'manage_potensi_posts_columns', 'plosokidul_potensi_custom_columns' );

function plosokidul_potensi_custom_column_content( $column, $post_id ) {
    switch ( $column ) {
        case 'potensi_icon':
            $icon = get_post_meta( $post_id, 'potensi_icon', true );
            echo $icon ? esc_html( $icon ) : '—';
            break;
        case 'potensi_highlight':
            $highlight = get_post_meta( $post_id, 'potensi_highlight', true );
            echo $highlight ? esc_html( $highlight ) : '<span style="color:#999">Belum diisi</span>';
            break;
    }
}
add_action( 'manage_potensi_posts_custom_column', 'plosokidul_potensi_custom_column_content', 10, 2 );
