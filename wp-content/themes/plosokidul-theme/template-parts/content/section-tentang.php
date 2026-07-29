<?php
/**
 * Plosokidul Theme — template-parts/content/section-tentang.php
 *
 * Template part untuk Section "Tentang Plosokidul" — layout 2 kolom.
 * Dipanggil via: get_template_part('template-parts/content/section-tentang')
 *
 * @package plosokidul-theme
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$tentang_image_url = get_template_directory_uri() . '/assets/images/tentang-desa.webp';

// Poin keunggulan desa — bisa dikustomisasi via Customizer (Fase 10)
$points = array(
    'Pertanian & Perikanan Produktif',
    'Pemandangan Alam Bukit Menoreh',
    'Budaya Jawa yang Lestari',
    'Masyarakat Gotong Royong',
    'UMKM Lokal Berkembang',
    'Pemerintahan Desa Transparan',
);
?>

<section id="tentang" class="tentang-section">
    <div class="container">
        <div class="tentang-inner">

            <!-- Kolom Teks -->
            <div class="tentang-text fade-in-section">

                <div class="section-header">
                    <span class="section-label">Mengenal Kami</span>
                    <h2 class="section-title">Tentang Dusun<br>Ploso Kidul</h2>
                </div>

                <p class="tentang-description">
                    Dusun Ploso Kidul terletak di Desa Plosogede, Kecamatan Ngluwar, Kabupaten Magelang, Jawa Tengah —
                    berada di tepi barat kaki Perbukitan Menoreh yang hijau dan sejuk.
                    Dusun ini dihuni oleh masyarakat yang kuat dalam tradisi gotong royong dan kaya dalam potensi alam serta budaya lokal.
                </p>

                <p class="tentang-description">
                    Sektor pertanian, terutama padi dan hortikultura, menjadi tulang punggung
                    ekonomi warga. Dipadukan dengan budidaya ikan air tawar yang berkembang pesat,
                    Dusun Ploso Kidul terus bertumbuh sambil menjaga kearifan lokal yang telah
                    diwariskan turun-temurun.
                </p>

                <!-- Poin Keunggulan -->
                <ul class="tentang-points" aria-label="Keunggulan Dusun Ploso Kidul">
                    <?php foreach ( $points as $point ) : ?>
                    <li class="tentang-point-item">
                        <span class="point-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <?php echo esc_html( $point ); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <!-- Tombol CTA -->
                <div style="margin-top: var(--spacing-xs);">
                    <a href="<?php echo esc_url( home_url( '/profil-desa/' ) ); ?>"
                       class="btn btn-primary"
                       id="tentang-cta-btn">
                        Profil Lengkap Dusun
                    </a>
                </div>

            </div><!-- .tentang-text -->

            <!-- Kolom Gambar -->
            <div class="tentang-image-col fade-in-section" style="--stagger-index: 1;">

                <div class="tentang-image-wrapper">
                    <img src="<?php echo esc_url( $tentang_image_url ); ?>"
                         alt="Warga Dusun Ploso Kidul berkumpul bersama dalam kegiatan gotong royong"
                         loading="lazy"
                         width="600"
                         height="450">

                    <!-- Badge overlay -->
                    <div class="tentang-badge" aria-label="Dusun Ploso Kidul">
                        <span class="tentang-badge-icon" aria-hidden="true">🏡</span>
                        <div>
                            <div class="tentang-badge-text">Berdiri Sejak 1946</div>
                            <div class="tentang-badge-sub">79 Tahun Mengabdi</div>
                        </div>
                    </div>
                </div>

            </div><!-- .tentang-image-col -->

        </div><!-- .tentang-inner -->
    </div><!-- .container -->
</section>
