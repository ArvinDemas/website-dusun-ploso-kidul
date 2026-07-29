<?php
/**
 * Template Name: Layanan & Pengaduan
 *
 * Halaman statis publik yang menyajikan formulir pengaduan warga secara aman
 * (CSRF, Honeypot, & Math CAPTCHA) dan akordeon FAQ Tanya Jawab.
 *
 * @package plosokidul-theme
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$success_message = '';
$error_message = '';
$salt = 'plosokidul_secret_salt_123';

// Penanganan submit form pengaduan (Security-Review & Input Validation)
if ( isset( $_POST['submit_pengaduan'] ) ) {
    
    // 1. Validasi Token CSRF (Security Review 6)
    if ( ! isset( $_POST['pengaduan_nonce'] ) || ! wp_verify_nonce( $_POST['pengaduan_nonce'], 'plosokidul_pengaduan_submit' ) ) {
        wp_die( __( 'Akses ditolak karena token keamanan tidak valid.', 'plosokidul-theme' ), '', array( 'response' => 403 ) );
    }

    // 2. Proteksi Honeypot Spam Bot (Security Review 2)
    if ( ! empty( $_POST['honeypot_field'] ) ) {
        // Abaikan secara senyap, berpura-pura berhasil agar bot tidak mencoba lagi
        $success_message = __( 'Laporan Anda berhasil dikirim. Terima kasih atas partisipasi Anda.', 'plosokidul-theme' );
    } else {
        
        // 3. Validasi Math CAPTCHA (Security Review 2)
        $user_captcha = isset( $_POST['captcha_input'] ) ? intval( $_POST['captcha_input'] ) : 0;
        $expected_hash = isset( $_POST['captcha_hash'] ) ? sanitize_text_field( $_POST['captcha_hash'] ) : '';

        if ( md5( $user_captcha . $salt ) !== $expected_hash ) {
            $error_message = __( 'Hasil perhitungan Matematika salah. Silakan hitung ulang.', 'plosokidul-theme' );
        } else {
            
            // 4. Validasi & Sanitasi Data Input (Security Review 2)
            $nama    = isset( $_POST['pengaduan_nama'] ) ? sanitize_text_field( $_POST['pengaduan_nama'] ) : '';
            $kontak  = isset( $_POST['pengaduan_kontak'] ) ? sanitize_text_field( $_POST['pengaduan_kontak'] ) : '';
            $dusun   = isset( $_POST['pengaduan_dusun'] ) ? sanitize_text_field( $_POST['pengaduan_dusun'] ) : '';
            $laporan = isset( $_POST['pengaduan_laporan'] ) ? sanitize_textarea_field( $_POST['pengaduan_laporan'] ) : '';

            if ( empty( $nama ) || empty( $kontak ) || empty( $laporan ) ) {
                $error_message = __( 'Kolom Nama, Kontak, dan Isi Laporan wajib diisi.', 'plosokidul-theme' );
            } else {
                
                // 5. Simpan ke database sebagai post tipe 'pengaduan' (privat)
                $laporan_id = wp_insert_post( array(
                    'post_title'   => 'Laporan dari ' . esc_html( $nama ) . ' (' . date_i18n( 'd M Y, H:i' ) . ')',
                    'post_content' => $laporan,
                    'post_status'  => 'private',  // Laporan tidak dapat dilihat oleh umum di frontend
                    'post_type'    => 'pengaduan',
                ) );

                if ( $laporan_id && ! is_wp_error( $laporan_id ) ) {
                    update_post_meta( $laporan_id, 'pengaduan_kontak', $kontak );
                    update_post_meta( $laporan_id, 'pengaduan_dusun', $dusun );
                    $success_message = __( 'Laporan Anda berhasil kami terima secara aman. Terima kasih pamong desa akan segera menindaklanjuti.', 'plosokidul-theme' );
                } else {
                    $error_message = __( 'Gagal menyimpan laporan. Terjadi gangguan sistem internal.', 'plosokidul-theme' );
                }
            }
        }
    }
}

// Generate soal Math CAPTCHA baru untuk form
$num1 = rand( 1, 9 );
$num2 = rand( 1, 9 );
$captcha_question = "$num1 + $num2";
$captcha_hash = md5( ($num1 + $num2) . $salt );

get_header();
?>

<main id="main" class="site-main" role="main">

    <!-- ============================================================
         PAGE BANNER HEADER
         ============================================================ -->
    <header class="page-header-banner" aria-label="Header Halaman Layanan &amp; Pengaduan">
        <div class="container">
            <h1 class="page-title">Pelayanan Dusun &amp; Pengaduan</h1>
            
            <!-- Breadcrumbs (WCAG AA Compliant) -->
            <nav class="page-breadcrumbs" aria-label="Breadcrumb">
                <ol class="breadcrumbs-list">
                    <li class="breadcrumb-item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-item--current" aria-current="page">
                        Layanan &amp; Pengaduan
                    </li>
                </ol>
            </nav>
        </div>
    </header>

    <div class="container page-content-container">
        
        <div class="page-layout-grid">

            <!-- Kiri: Kirim Pengaduan via Email -->
            <section class="layanan-form-section" aria-labelledby="form-section-title">
                <h2 id="form-section-title" class="section-title-page">Kirim Pengaduan Warga</h2>
                <p class="paragraph-lead" style="margin-bottom: var(--spacing-md);">
                    Sampaikan keluhan, saran pembangunan, atau gangguan ketertiban di wilayah Dusun Ploso Kidul langsung ke email resmi pengurus dusun.
                </p>

                <!-- Info Card -->
                <div style="background: linear-gradient(135deg, var(--color-primary-trans-10, #EBF8F2), var(--color-secondary-trans-10, #E8F4FD)); border: 1px solid var(--color-primary); border-radius: var(--radius-lg); padding: var(--spacing-md); margin-bottom: var(--spacing-md); text-align: center; box-sizing: border-border-box; max-width: 100%; overflow: hidden;">
                    <div style="font-size: 48px; margin-bottom: var(--spacing-xs);">✉️</div>
                    <h3 style="font-size: 18px; font-weight: bold; color: var(--color-primary); margin-bottom: var(--spacing-xs);">Email Resmi Dusun</h3>
                    <p style="font-size: 13px; font-weight: bold; color: var(--color-text-main); margin-bottom: var(--spacing-sm); word-break: break-all; overflow-wrap: anywhere; letter-spacing: -0.3px;">
                        dusunplosokidul173@gmail.com
                    </p>
                    <p style="font-size: 13px; color: var(--color-text-muted); margin-bottom: var(--spacing-md);">
                        Klik tombol di bawah untuk membuka aplikasi email Anda secara otomatis dengan alamat sudah terisi.
                    </p>
                    <a href="mailto:dusunplosokidul173@gmail.com?subject=Pengaduan%20Warga%20Dusun%20Ploso%20Kidul&body=Nama%20Lengkap%3A%20%0ANo.%20Telepon%20Aktif%3A%20%0AAlamat%20(RT%2FRW)%3A%20%0A%0AIsi%20Pengaduan%20%2F%20Saran%3A%20%0A"
                       class="btn btn-primary"
                       id="btn-kirim-pengaduan"
                       style="display: inline-block; padding: 12px 20px; font-size: 15px; font-weight: bold; text-decoration: none; border-radius: var(--radius-lg); max-width: 100%; box-sizing: border-box; white-space: normal;">
                        📧 Kirim Pengaduan via Email
                    </a>
                </div>

                <!-- Tips -->
                <div style="background-color: var(--color-white); border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: var(--spacing-md);">
                    <h4 style="font-size: 14px; font-weight: bold; color: var(--color-primary); margin-bottom: var(--spacing-xs);">💡 Tips menulis pengaduan yang efektif:</h4>
                    <ul style="list-style: none; padding: 0; margin: 0; color: var(--color-text-muted); font-size: 14px; line-height: 1.8;">
                        <li>✅ Sertakan nama lengkap dan nomor telepon aktif</li>
                        <li>✅ Sebutkan lokasi kejadian (RT/RW/Dusun)</li>
                        <li>✅ Deskripsikan masalah secara singkat dan jelas</li>
                        <li>✅ Lampirkan foto jika perlu (via attachment email)</li>
                    </ul>
                </div>
            </section>

            <!-- Kanan: FAQ Accordion Section (Aksesibilitas Tinggi / WCAG AA) -->
            <section class="layanan-faq-section" aria-labelledby="faq-section-title">
                <h2 id="faq-section-title" class="section-title-page">Tanya Jawab (FAQ)</h2>
                <p class="paragraph-lead" style="margin-bottom: var(--spacing-md);">
                    Daftar pertanyaan yang paling sering diajukan warga terkait administrasi dan pelayanan desa.
                </p>

                <div class="faq-accordion-wrapper" role="presentation">
                    
                    <div class="faq-item">
                        <button class="faq-trigger" aria-expanded="false" aria-controls="faq-ans-1">
                            <span class="faq-question">📜 Bagaimana alur pengaduan ditindaklanjuti?</span>
                            <span class="faq-icon-arrow" aria-hidden="true">▼</span>
                        </button>
                        <div id="faq-ans-1" class="faq-answer" role="region" aria-hidden="true">
                            <p>Setiap pengaduan yang dikirim lewat email resmi <strong>dusunplosokidul173@gmail.com</strong> akan langsung dibaca oleh pengurus dusun. Kepala Dusun atau pengurus terkait akan menghubungi pelapor lewat No. Telepon/Email yang dicantumkan dalam kurun waktu maksimal 2x24 jam.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-trigger" aria-expanded="false" aria-controls="faq-ans-2">
                            <span class="faq-question">🌾 Bagaimana cara mengajukan bantuan kelompok tani?</span>
                            <span class="faq-icon-arrow" aria-hidden="true">▼</span>
                        </button>
                        <div id="faq-ans-2" class="faq-answer" role="region" aria-hidden="true">
                            <p>Pengajuan bantuan kelompok tani dapat dikoordinasikan melalui Ketua RT/RW masing-masing untuk diteruskan ke Kepala Dusun pada musim tanam berikutnya.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-trigger" aria-expanded="false" aria-controls="faq-ans-3">
                            <span class="faq-question">🌾 Bagaimana cara mengajukan bantuan pupuk tani?</span>
                            <span class="faq-icon-arrow" aria-hidden="true">▼</span>
                        </button>
                        <div id="faq-ans-3" class="faq-answer" role="region" aria-hidden="true">
                            <p>Pengajuan bantuan kelompok tani dapat dikoordinasikan melalui Ketua Kelompok Tani masing-masing dusun untuk diteruskan ke Kaur Perencanaan Balai Desa pada musim tanam berikutnya.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-trigger" aria-expanded="false" aria-controls="faq-ans-3">
                            <span class="faq-question">💻 Apa itu program Gerbang Digital KKN-AA 84.173?</span>
                            <span class="faq-icon-arrow" aria-hidden="true">▼</span>
                        </button>
                        <div id="faq-ans-3" class="faq-answer" role="region" aria-hidden="true">
                            <p>Program Gerbang Digital diinisiasi oleh <strong>KKN-AA Angkatan 84.173 UPN "Veteran" Yogyakarta</strong> untuk mempermudah warga mengakses potensi, profil, kependudukan, dan menyampaikan pengaduan secara mandiri melalui website resmi Dusun Ploso Kidul.</p>
                        </div>
                    </div>

                </div><!-- .faq-accordion-wrapper -->
            </section>

        </div><!-- .page-layout-grid -->

    </div><!-- .container -->

</main><!-- #main -->

<?php
get_footer();
