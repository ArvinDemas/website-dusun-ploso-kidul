<?php
/**
 * Plosokidul Theme — template-parts/content/section-stats.php
 *
 * Template part untuk Section Statistik Desa (4 KPI animated counter).
 * Dipanggil via: get_template_part('template-parts/content/section-stats')
 *
 * Mekanisme counter:
 * - Setiap .stat-card memiliki data-counter, data-target, dan data-suffix
 * - IntersectionObserver di main.js memicu animasi counter saat elemen masuk viewport
 * - Counter hanya berjalan SEKALI (unobserve setelah trigger)
 *
 * @package plosokidul-theme
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Data statistik — Dusun Ploso Raya (300 KK)
$stats = array(
    array(
        'number'  => 1050,
        'suffix'  => '',
        'label'   => 'Jiwa Penduduk',
        'sublabel'=> 'Data Kependudukan 2026',
        'icon'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>',
    ),
    array(
        'number'  => 300,
        'suffix'  => ' KK',
        'label'   => 'Kepala Keluarga',
        'sublabel'=> 'Wilayah Ploso Raya',
        'icon'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>',
    ),
    array(
        'number'  => 5,
        'suffix'  => '',
        'label'   => 'Sarana Ibadah',
        'sublabel'=> 'Masjid & Mushola',
        'icon'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/>',
    ),
    array(
        'number'  => 2,
        'suffix'  => '',
        'label'   => 'Posyandu',
        'sublabel'=> 'Layanan Kesehatan',
        'icon'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>',
    ),
);
?>

<section id="statistik" class="stats-section fade-in-section" aria-label="Statistik Dusun Ploso Kidul">
    <div class="container">

        <div class="section-header">
            <span class="section-label">Data &amp; Angka</span>
            <h2 class="section-title">Dusun Ploso Kidul dalam Angka</h2>
            <p class="section-subtitle">Fakta dan data resmi yang mencerminkan kehidupan dan potensi Dusun Ploso Kidul.</p>
        </div>

        <div class="stats-grid">
            <?php foreach ( $stats as $index => $stat ) : ?>
            <div class="stat-card"
                 data-counter
                 data-target="<?php echo esc_attr( $stat['number'] ); ?>"
                 data-suffix="<?php echo esc_attr( $stat['suffix'] ); ?>"
                 style="--stagger-index: <?php echo esc_attr( $index ); ?>">

                <!-- Ikon SVG -->
                <div class="stat-icon-wrapper" aria-hidden="true">
                    <svg class="stat-icon"
                         xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor"
                         aria-hidden="true">
                        <?php echo $stat['icon']; // SVG path sudah disanitasi di array ?>
                    </svg>
                </div>

                <!-- Angka (JS akan memperbarui ini) -->
                <div class="stat-number-wrapper">
                    <span class="stat-number"
                          role="text"
                          aria-label="<?php echo esc_attr( number_format( $stat['number'], 0, ',', '.' ) . $stat['suffix'] ); ?>">
                        0
                    </span>
                    <?php if ( ! empty( $stat['suffix'] ) ) : ?>
                        <span class="stat-suffix" aria-hidden="true"><?php echo esc_html( $stat['suffix'] ); ?></span>
                    <?php endif; ?>
                </div>

                <!-- Label -->
                <div class="stat-label">
                    <strong><?php echo esc_html( $stat['label'] ); ?></strong>
                    <?php if ( ! empty( $stat['sublabel'] ) ) : ?>
                        <br><small><?php echo esc_html( $stat['sublabel'] ); ?></small>
                    <?php endif; ?>
                </div>

            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
