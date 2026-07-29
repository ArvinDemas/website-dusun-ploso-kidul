<?php
/**
 * Plosokidul Theme — inc/admin-dashboard.php
 *
 * Implementasi Fase 10: Penyederhanaan Dashboard Admin Desa.
 * - Menyederhanakan menu wp-admin agar fokus hanya pada 7 menu utama.
 * - Membuat dashboard widget statistik desa (Ringkasan).
 * - Menambahkan kotak panduan & petunjuk pengisian di form utama (Berita, Galeri, Video, Kegiatan, Pengaduan).
 * - Menambahkan konfirmasi pop-up modal saat menghapus data.
 * - Membuat menu "Pengaturan Dasar" untuk mengelola WhatsApp & Media Sosial desa.
 *
 * @package plosokidul-theme
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// =============================================================================
// 1. MEMBUAT HALAMAN: PENGATURAN DASAR DESA
// =============================================================================
add_action( 'admin_menu', 'plosokidul_register_pengaturan_dasar' );
function plosokidul_register_pengaturan_dasar() {
    add_menu_page(
        __( 'Pengaturan Dasar', 'plosokidul-theme' ),
        __( 'Pengaturan Dasar', 'plosokidul-theme' ),
        'manage_options',
        'pengaturan_dasar',
        'plosokidul_pengaturan_dasar_render',
        'dashicons-admin-generic',
        99
    );
}

// Register setting fields
add_action( 'admin_init', 'plosokidul_register_settings_options' );
function plosokidul_register_settings_options() {
    register_setting( 'plosokidul_options_group', 'plosokidul_whatsapp' );
    register_setting( 'plosokidul_options_group', 'plosokidul_phone' );
    register_setting( 'plosokidul_options_group', 'plosokidul_facebook' );
    register_setting( 'plosokidul_options_group', 'plosokidul_instagram' );
    register_setting( 'plosokidul_options_group', 'plosokidul_youtube' );
    register_setting( 'plosokidul_options_group', 'plosokidul_video_profil' );
}

function plosokidul_pengaturan_dasar_render() {
    ?>
    <div class="wrap" style="background: #fff; padding: 24px; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); max-width: 800px; margin-top: 20px;">
        <h1 style="color: #2D6A4F; font-family: sans-serif; font-weight: bold; margin-bottom: 20px;">⚙️ Pengaturan Dasar Dusun Ploso Kidul</h1>
        <p style="font-size: 14px; color: #555; margin-bottom: 24px;">Kelola informasi dasar dan tautan sosial media resmi dusun yang ditampilkan pada bagian footer website publik.</p>
        
        <form method="post" action="options.php">
            <?php settings_fields( 'plosokidul_options_group' ); ?>
            <?php do_settings_sections( 'plosokidul_options_group' ); ?>
            
            <table class="form-table" role="presentation" style="width: 100%;">
                
                <!-- Kontak WhatsApp -->
                <tr style="border-bottom: 1px solid #eee;">
                    <th scope="row" style="width: 250px; font-weight: bold; padding: 16px 0; font-size: 14px;">Nomor WhatsApp Desa</th>
                    <td style="padding: 16px 0;">
                        <input type="text" name="plosokidul_whatsapp" value="<?php echo esc_attr( get_option('plosokidul_whatsapp', '6281234567890') ); ?>" class="regular-text" style="padding: 8px; width: 100%; max-width: 400px; border-radius: 4px; border: 1px solid #ccc;" />
                        <p class="description" style="margin-top: 6px; font-size: 12px; color: #666;">Gunakan format angka internasional tanpa spasi/simbol. Contoh: <code>6281234567890</code></p>
                    </td>
                </tr>

                <!-- Telepon Kantor -->
                <tr style="border-bottom: 1px solid #eee;">
                    <th scope="row" style="width: 250px; font-weight: bold; padding: 16px 0; font-size: 14px;">Telepon Kantor Balai Desa</th>
                    <td style="padding: 16px 0;">
                        <input type="text" name="plosokidul_phone" value="<?php echo esc_attr( get_option('plosokidul_phone', '(0293) 555-123') ); ?>" class="regular-text" style="padding: 8px; width: 100%; max-width: 400px; border-radius: 4px; border: 1px solid #ccc;" />
                        <p class="description" style="margin-top: 6px; font-size: 12px; color: #666;">Nomor telepon yang dapat dihubungi warga lewat footer.</p>
                    </td>
                </tr>

                <!-- Link Video Profil YouTube -->
                <tr style="border-bottom: 1px solid #eee;">
                    <th scope="row" style="width: 250px; font-weight: bold; padding: 16px 0; font-size: 14px;">Link Video Profil YouTube</th>
                    <td style="padding: 16px 0;">
                        <input type="url" name="plosokidul_video_profil" value="<?php echo esc_url( get_option('plosokidul_video_profil', 'https://www.youtube.com/embed/gP7tN3v3KkQ') ); ?>" class="regular-text" style="padding: 8px; width: 100%; max-width: 400px; border-radius: 4px; border: 1px solid #ccc;" />
                        <p class="description" style="margin-top: 6px; font-size: 12px; color: #666;">Masukkan tautan sematan (embed) YouTube untuk video profil desa. Contoh: <code>https://www.youtube.com/embed/KODE_VIDEO</code></p>
                    </td>
                </tr>

                <!-- Link Facebook -->
                <tr style="border-bottom: 1px solid #eee;">
                    <th scope="row" style="width: 250px; font-weight: bold; padding: 16px 0; font-size: 14px;">Link Facebook Resmi</th>
                    <td style="padding: 16px 0;">
                        <input type="url" name="plosokidul_facebook" value="<?php echo esc_url( get_option('plosokidul_facebook', 'https://facebook.com/plosokidul') ); ?>" class="regular-text" style="padding: 8px; width: 100%; max-width: 400px; border-radius: 4px; border: 1px solid #ccc;" />
                    </td>
                </tr>

                <!-- Link Instagram -->
                <tr style="border-bottom: 1px solid #eee;">
                    <th scope="row" style="width: 250px; font-weight: bold; padding: 16px 0; font-size: 14px;">Link Instagram Resmi</th>
                    <td style="padding: 16px 0;">
                        <input type="url" name="plosokidul_instagram" value="<?php echo esc_url( get_option('plosokidul_instagram', 'https://instagram.com/plosokidul') ); ?>" class="regular-text" style="padding: 8px; width: 100%; max-width: 400px; border-radius: 4px; border: 1px solid #ccc;" />
                    </td>
                </tr>

                <!-- Link YouTube -->
                <tr style="border-bottom: 1px solid #eee;">
                    <th scope="row" style="width: 250px; font-weight: bold; padding: 16px 0; font-size: 14px;">Link YouTube Resmi</th>
                    <td style="padding: 16px 0;">
                        <input type="url" name="plosokidul_youtube" value="<?php echo esc_url( get_option('plosokidul_youtube', 'https://youtube.com/plosokidul') ); ?>" class="regular-text" style="padding: 8px; width: 100%; max-width: 400px; border-radius: 4px; border: 1px solid #ccc;" />
                    </td>
                </tr>

            </table>
            
            <div style="margin-top: 24px;">
                <?php submit_button( __( 'Simpan Pengaturan', 'plosokidul-theme' ), 'primary', 'submit', false, array( 'style' => 'background: #2D6A4F; border-color: #2D6A4F; padding: 6px 20px; height: auto; min-height: 40px; font-size: 14px; font-weight: bold;' ) ); ?>
            </div>
        </form>
    </div>
    <?php
}

// =============================================================================
// 2. PENYEDERHANAAN MENU WP-ADMIN (Hanya Tampil 7 Menu Utama)
// =============================================================================
add_action( 'admin_menu', 'plosokidul_simplify_admin_menu_sidebar', 999 );
function plosokidul_simplify_admin_menu_sidebar() {
    
    // Sembunyikan menu teknis yang membingungkan admin desa awam
    remove_menu_page( 'upload.php' );                  // Media
    remove_menu_page( 'edit.php?post_type=page' );     // Pages
    remove_menu_page( 'edit-comments.php' );           // Comments
    remove_menu_page( 'themes.php' );                  // Appearance
    remove_menu_page( 'plugins.php' );                 // Plugins
    remove_menu_page( 'users.php' );                   // Users
    remove_menu_page( 'tools.php' );                   // Tools
    remove_menu_page( 'options-general.php' );         // Settings
    remove_menu_page( 'edit.php?post_type=potensi' );  // Potensi Desa
}

// Ubah nama menu sidebar agar berbahasa Indonesia awam & mudah dibaca
add_action( 'admin_menu', 'plosokidul_rename_sidebar_menus', 999 );
function plosokidul_rename_sidebar_menus() {
    global $menu;
    foreach ( $menu as $key => $item ) {
        // Dashboard -> Ringkasan
        if ( 'index.php' === $item[2] ) {
            $menu[$key][0] = __( 'Ringkasan', 'plosokidul-theme' );
        }
        // Posts -> Berita
        if ( 'edit.php' === $item[2] ) {
            $menu[$key][0] = __( 'Berita', 'plosokidul-theme' );
        }
        // CPT Galeri -> Galeri
        if ( 'edit.php?post_type=galeri' === $item[2] ) {
            $menu[$key][0] = __( 'Galeri', 'plosokidul-theme' );
        }
        // CPT Video -> Video
        if ( 'edit.php?post_type=video' === $item[2] ) {
            $menu[$key][0] = __( 'Video', 'plosokidul-theme' );
        }
        // CPT Kegiatan -> Kegiatan
        if ( 'edit.php?post_type=kegiatan' === $item[2] ) {
            $menu[$key][0] = __( 'Kegiatan', 'plosokidul-theme' );
        }
        // CPT Pengaduan -> Pengaduan
        if ( 'edit.php?post_type=pengaduan' === $item[2] ) {
            $menu[$key][0] = __( 'Pengaduan', 'plosokidul-theme' );
        }
    }
}


// =============================================================================
// 3. WIDGET DASHBOARD CUSTOM: RINGKASAN STATISTIK WEBSITE
// =============================================================================
add_action( 'wp_dashboard_setup', 'plosokidul_register_summary_dashboard_widget' );
function plosokidul_register_summary_dashboard_widget() {
    
    // Hapus widget default WordPress bawaan
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    
    // Daftarkan widget kustom Ringkasan
    add_meta_box(
        'plosokidul_summary_widget',
        __( '📊 Ringkasan Data Website Dusun Ploso Kidul', 'plosokidul-theme' ),
        'plosokidul_summary_widget_render',
        'dashboard',
        'normal',
        'high'
    );
}

function plosokidul_summary_widget_render() {
    // Ambil data jumlah postingan
    $count_berita = wp_count_posts('post')->publish;
    $count_galeri = wp_count_posts('galeri')->publish;
    $count_video  = wp_count_posts('video')->publish;
    $count_kegiatan = wp_count_posts('kegiatan')->publish;
    
    // Pengaduan masuk (private/publish)
    $pengaduan_private = wp_count_posts('pengaduan')->private;
    $pengaduan_publish = wp_count_posts('pengaduan')->publish;
    $count_pengaduan = $pengaduan_private + $pengaduan_publish;
    
    ?>
    <div class="summary-widget-container" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 16px; padding: 8px 0;">
        
        <!-- Box Berita -->
        <div class="stat-card" style="background: #F9F6F0; border-left: 4px solid #2D6A4F; border-radius: 4px; padding: 16px; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
            <h4 style="margin: 0 0 6px; font-size: 13px; color: #555;">Total Berita</h4>
            <span style="font-size: 28px; font-weight: bold; color: #2D6A4F; display: block; line-height: 1;"><?php echo esc_html( $count_berita ); ?></span>
            <a href="<?php echo esc_url( admin_url('edit.php') ); ?>" style="font-size: 12px; color: #2D6A4F; text-decoration: none; font-weight: bold; display: inline-block; margin-top: 10px;">Kelola Berita &rarr;</a>
        </div>

        <!-- Box Galeri -->
        <div class="stat-card" style="background: #F9F6F0; border-left: 4px solid #6B4226; border-radius: 4px; padding: 16px; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
            <h4 style="margin: 0 0 6px; font-size: 13px; color: #555;">Album Galeri</h4>
            <span style="font-size: 28px; font-weight: bold; color: #6B4226; display: block; line-height: 1;"><?php echo esc_html( $count_galeri ); ?></span>
            <a href="<?php echo esc_url( admin_url('edit.php?post_type=galeri') ); ?>" style="font-size: 12px; color: #6B4226; text-decoration: none; font-weight: bold; display: inline-block; margin-top: 10px;">Kelola Galeri &rarr;</a>
        </div>

        <!-- Box Video -->
        <div class="stat-card" style="background: #F9F6F0; border-left: 4px solid #8D4D4E; border-radius: 4px; padding: 16px; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
            <h4 style="margin: 0 0 6px; font-size: 13px; color: #555;">Dokumentasi Video</h4>
            <span style="font-size: 28px; font-weight: bold; color: #8D4D4E; display: block; line-height: 1;"><?php echo esc_html( $count_video ); ?></span>
            <a href="<?php echo esc_url( admin_url('edit.php?post_type=video') ); ?>" style="font-size: 12px; color: #8D4D4E; text-decoration: none; font-weight: bold; display: inline-block; margin-top: 10px;">Kelola Video &rarr;</a>
        </div>

        <!-- Box Kegiatan -->
        <div class="stat-card" style="background: #F9F6F0; border-left: 4px solid #E09212; border-radius: 4px; padding: 16px; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
            <h4 style="margin: 0 0 6px; font-size: 13px; color: #555;">Kegiatan Desa</h4>
            <span style="font-size: 28px; font-weight: bold; color: #E09212; display: block; line-height: 1;"><?php echo esc_html( $count_kegiatan ); ?></span>
            <a href="<?php echo esc_url( admin_url('edit.php?post_type=kegiatan') ); ?>" style="font-size: 12px; color: #E09212; text-decoration: none; font-weight: bold; display: inline-block; margin-top: 10px;">Kelola Kegiatan &rarr;</a>
        </div>

        <!-- Box Pengaduan -->
        <div class="stat-card" style="background: #FFF0F0; border-left: 4px solid #D9383A; border-radius: 4px; padding: 16px; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
            <h4 style="margin: 0 0 6px; font-size: 13px; color: #555;">Pengaduan Warga</h4>
            <span style="font-size: 28px; font-weight: bold; color: #D9383A; display: block; line-height: 1;"><?php echo esc_html( $count_pengaduan ); ?></span>
            <a href="<?php echo esc_url( admin_url('edit.php?post_type=pengaduan') ); ?>" style="font-size: 12px; color: #D9383A; text-decoration: none; font-weight: bold; display: inline-block; margin-top: 10px;">Lihat Laporan &rarr;</a>
        <!-- Box Panduan Admin -->
        <div style="grid-column: 1 / -1; background: #EBF8F2; border: 1px solid #2D6A4F; border-radius: 6px; padding: 14px 18px; margin-top: 12px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;">
            <div>
                <h4 style="margin: 0 0 4px 0; color: #2D6A4F; font-weight: bold; font-size: 15px;">📖 Buku Panduan Pengelolaan Website Dusun</h4>
                <p style="margin: 0; color: #444; font-size: 13px;">Petunjuk lengkap langkah demi langkah untuk pamong &amp; pengurus dusun pemula dalam upload Berita, Potensi, Galeri Foto, dan Pengaduan.</p>
            </div>
            <a href="<?php echo esc_url( home_url( '/Panduan-Admin-Dusun-Ploso-Kidul.html' ) ); ?>" target="_blank" class="button button-primary" style="background: #2D6A4F; border-color: #2D6A4F; color: #fff; font-weight: bold; padding: 6px 16px; height: auto; font-size: 13px;">
                📘 Buka Buku Panduan Admin (HTML) &rarr;
            </a>
        </div>

    </div>
    <?php
}


// =============================================================================
// 4. METABOX PANDUAN PENGISIAN (TOOLTIPS/HELP TEXT) DI FORM UTAMA
// =============================================================================
add_action( 'add_meta_boxes', 'plosokidul_add_help_metaboxes' );
function plosokidul_add_help_metaboxes() {
    $screens = array( 'post', 'galeri', 'video', 'kegiatan', 'pengaduan' );
    
    foreach ( $screens as $screen ) {
        add_meta_box(
            'plosokidul_form_guide',
            __( '💡 Panduan Pengisian Form Balai Desa', 'plosokidul-theme' ),
            'plosokidul_render_form_guide_metabox',
            $screen,
            'side',
            'high'
        );
    }
}

function plosokidul_render_form_guide_metabox( $post ) {
    $post_type = $post->post_type;
    echo '<div style="font-size: 13px; line-height: 1.5; color: #555;">';
    
    switch ( $post_type ) {
        case 'post':
            echo '<strong>Warta Berita:</strong><br>';
            echo '1. Tulis judul berita yang jelas dan komunikatif.<br>';
            echo '2. Pilih kategori Berita Desa agar tampil di beranda.<br>';
            echo '3. Pastikan memasang <em>Gambar Unggulan (Thumbnail)</em> agar tampilan kartu di homepage menarik.';
            break;
            
        case 'galeri':
            echo '<strong>Galeri Foto:</strong><br>';
            echo '1. Upload gambar utama di kolom Gambar Unggulan.<br>';
            echo '2. Tuliskan deskripsi singkat mengenai kegiatan atau infrastruktur.<br>';
            echo '3. Tentukan nama <em>Album Galeri</em> di kolom kanan agar foto terkelompok rapi.';
            break;
            
        case 'video':
            echo '<strong>Video Dokumentasi:</strong><br>';
            echo '1. Masukkan video kegiatan desa.<br>';
            echo '2. Anda dapat menyisipkan URL sematan dari YouTube agar warga bisa memutar langsung dari website.';
            break;
            
        case 'kegiatan':
            echo '<strong>Kegiatan Desa:</strong><br>';
            echo '1. Buat jadwal kegiatan baru balai desa.<br>';
            echo '2. Informasikan waktu, lokasi, dan target warga agar informasi tersampaikan dengan merata.';
            break;
            
        case 'pengaduan':
            echo '<strong>Laporan Pengaduan:</strong><br>';
            echo '1. Kolom ini berisi pengaduan langsung warga.<br>';
            echo '2. Seluruh data laporan ini bersifat <strong>rahasia (private)</strong> dan hanya dapat dibaca oleh pamong desa.<br>';
            echo '3. Hubungi pelapor melalui nomor kontak yang tertera untuk konfirmasi.';
            break;
    }
    
    echo '</div>';
}


// =============================================================================
// 5. INJECT CONFIRMATION MODAL & STYLES IN WP-ADMIN
// =============================================================================
add_action( 'admin_enqueue_scripts', 'plosokidul_enqueue_admin_assets' );
function plosokidul_enqueue_admin_assets() {
    
    // Inject JS konfirmasi hapus data
    wp_enqueue_script(
        'plosokidul-admin-confirm',
        PLOSOKIDUL_URI . '/assets/js/admin-confirm.js',
        array( 'jquery' ),
        PLOSOKIDUL_VERSION,
        true
    );

    // Inject custom styling untuk dashboard agar sesuai token visual (bersih & fungsional)
    wp_add_inline_style( 'wp-admin', "
        /* Styling Dashboard Customizer */
        #wpcontent {
            background-color: #f6f7f9 !important;
        }
        #plosokidul_summary_widget .postbox-header {
            background-color: #2D6A4F !important;
            color: #fff !important;
        }
        #plosokidul_summary_widget .postbox-header h2 {
            color: #fff !important;
        }
        /* Button styles in wp-admin options */
        .wp-core-ui .button-primary {
            background: #2D6A4F !important;
            border-color: #2D6A4F !important;
            box-shadow: none !important;
            text-shadow: none !important;
        }
        .wp-core-ui .button-primary:hover {
            background: #204C38 !important;
            border-color: #204C38 !important;
        }
    " );
}
