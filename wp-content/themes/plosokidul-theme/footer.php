<?php
/**
 * Plosokidul Theme — footer.php
 *
 * Template bagian kaki halaman: area footer dan penutup </body>.
 * Dipanggil via get_footer() di setiap template halaman.
 *
 * @package plosokidul-theme
 */
?>

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container footer-inner">

            <!-- Kolom 1: Logo + Tagline + Sosial Media -->
            <div class="footer-col footer-col--brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo-link" style="display: inline-flex; align-items: center; gap: 10px; text-decoration: none;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-kabupaten-magelang.png' ); ?>"
                         alt="Logo Kabupaten Magelang"
                         style="height: 36px; width: auto; flex-shrink: 0;"
                         width="36"
                         height="36">
                    <span class="footer-site-name"><?php bloginfo( 'name' ); ?></span>
                </a>
                <p class="footer-tagline">
                    <?php esc_html_e( 'Gerbang Magelang Selatan — Tanah Subur di Kaki Menoreh', 'plosokidul-theme' ); ?>
                </p>
                <!-- Ikon sosial media — akan diisi linknya via Settings di Fase 9 -->
                <div class="footer-social" aria-label="<?php esc_attr_e( 'Media Sosial Desa', 'plosokidul-theme' ); ?>">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'social',
                        'container'      => false,
                        'fallback_cb'    => '__return_false',
                        'link_before'    => '<span class="screen-reader-text">',
                        'link_after'     => '</span>',
                        'depth'          => 1,
                    ) ); ?>
                </div>
            </div><!-- .footer-col--brand -->

            <!-- Kolom 2: Navigasi Utama -->
            <div class="footer-col footer-col--nav">
                <h3 class="footer-heading"><?php esc_html_e( 'Navigasi', 'plosokidul-theme' ); ?></h3>
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'container'      => false,
                    'fallback_cb'    => '__return_false',
                ) ); ?>
            </div><!-- .footer-col--nav -->

            <!-- Kolom 3: Kontak Dusun -->
            <div class="footer-col footer-col--contact">
                <h3 class="footer-heading"><?php esc_html_e( 'Posko Dusun', 'plosokidul-theme' ); ?></h3>
                <address class="footer-address">
                    <p>Dusun Ploso Kidul, Desa Plosogede,<br>Kecamatan Ngluwar, Kabupaten Magelang</p>
                    <!-- Email resmi dusun -->
                    <p>✉️ <a href="mailto:<?php echo antispambot( 'dusunplosokidul173@gmail.com' ); ?>" style="word-break: break-all; overflow-wrap: anywhere;">
                        <?php echo antispambot( 'dusunplosokidul173@gmail.com' ); ?>
                    </a></p>
                </address>
            </div><!-- .footer-col--contact -->

            <!-- Kolom 4: Link Penting -->
            <div class="footer-col footer-col--links">
                <h3 class="footer-heading"><?php esc_html_e( 'Link Penting', 'plosokidul-theme' ); ?></h3>
                <ul class="footer-links-list">
                    <li><a href="<?php echo esc_url( home_url( '/kependudukan/' ) ); ?>"><?php esc_html_e( 'Data Kependudukan', 'plosokidul-theme' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/galeri/' ) ); ?>"><?php esc_html_e( 'Galeri Foto', 'plosokidul-theme' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/layanan/' ) ); ?>"><?php esc_html_e( 'Layanan Desa', 'plosokidul-theme' ); ?></a></li>
                    <li><a href="https://www.instagram.com/pemudapemudiplosokidul" target="_blank" rel="noopener noreferrer">
                        📸 Instagram Pemuda Ploso
                    </a></li>
                </ul>
            </div><!-- .footer-col--links -->

        </div><!-- .footer-inner -->

        <!-- Bottom Bar: Copyright -->
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright">
                    &copy; <?php echo esc_html( date( 'Y' ) ); ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>.
                    <?php esc_html_e( 'Semua hak dilindungi.', 'plosokidul-theme' ); ?>
                </p>
                <p class="footer-credit">
                    <?php esc_html_e( 'Dibangun oleh KKN-AA Angkatan 84.173 &mdash; Program Gerbang Digital.', 'plosokidul-theme' ); ?>
                </p>
            </div>
        </div><!-- .footer-bottom -->

    </footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); // WAJIB — WordPress memuat semua JS di sini ?>
</body>
</html>
