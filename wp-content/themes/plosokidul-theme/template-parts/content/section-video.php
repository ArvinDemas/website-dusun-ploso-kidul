<?php
/**
 * Plosokidul Theme — template-parts/content/section-video.php
 *
 * Template part untuk menampilkan Video Profil Desa di Beranda.
 *
 * @package plosokidul-theme
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$video_profil = get_option( 'plosokidul_video_profil', 'https://www.youtube.com/embed/gP7tN3v3KkQ' );

if ( ! empty( $video_profil ) ) :
?>
<section id="section-homepage-video" class="homepage-video-section fade-in-section is-visible" style="padding: var(--spacing-xl) 0; background-color: var(--color-bg-card); border-bottom: 1px solid var(--color-border);">
    <div class="container" style="max-width: 900px;">
        
        <div class="section-header" style="text-align: center; margin-bottom: var(--spacing-md);">
            <span class="section-label" style="display: block; font-family: var(--font-body); font-size: var(--font-size-xs); color: var(--color-primary); font-weight: var(--font-weight-bold); letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: var(--spacing-2xs);">Visualisasi Dusun</span>
            <h2 class="section-title" style="font-family: var(--font-headline); font-size: var(--font-size-3xl); color: var(--color-text-main); margin-bottom: var(--spacing-xs); font-weight: var(--font-weight-bold);">Video Profil Dusun Ploso Kidul</h2>
            <p class="section-subtitle" style="font-family: var(--font-body); font-size: var(--font-size-sm); color: var(--color-text-muted); max-width: 600px; margin: 0 auto; line-height: 1.5;">
                Tonton video dokumenter resmi untuk mengenal lebih dekat adat istiadat, keindahan perbukitan Menoreh, dan denyut nadi perekonomian warga Dusun Ploso Kidul.
            </p>
        </div>

        <div class="video-container-wrapper" style="background: var(--color-bg); padding: var(--spacing-sm); border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); transition: transform 0.3s, box-shadow 0.3s; border: 1px solid var(--color-border);">
            <div class="video-iframe-container" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: var(--radius-md);">
                <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;"
                        src="<?php echo esc_url( $video_profil ); ?>"
                        title="Video Profil Dusun Ploso Kidul"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                </iframe>
            </div>
        </div>

    </div>
</section>
<?php
endif;
