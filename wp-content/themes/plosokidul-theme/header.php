<?php
/**
 * Plosokidul Theme — header.php
 *
 * Template bagian kepala halaman: DOCTYPE, <head>, dan pembuka <body>.
 * Dipanggil via get_header() di setiap template halaman.
 *
 * @package plosokidul-theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#2D6A4F">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/favicon.png' ); ?>">
    <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/favicon.png' ); ?>">

    <?php wp_head(); // WAJIB — WordPress memuat semua CSS, meta SEO, dll di sini ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); // Hook untuk plugin keamanan dan aksesibilitas ?>

<a class="skip-link screen-reader-text" href="#main-content">
    <?php esc_html_e( 'Langsung ke konten', 'plosokidul-theme' ); ?>
</a>

<div id="page" class="site-wrapper">

    <header id="masthead" class="site-header" role="banner">
        <div class="container header-inner">

            <!-- Logo & Nama Dusun -->
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title-link" rel="home">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-kabupaten-magelang.png' ); ?>"
                         alt="Logo Kabupaten Magelang"
                         class="header-logo-img"
                         width="38"
                         height="38">
                    <div class="site-title-text-group">
                        <span class="site-title"><?php bloginfo( 'name' ); ?></span>
                        <?php $description = get_bloginfo( 'description', 'display' );
                        if ( $description ) : ?>
                            <p class="site-description"><?php echo esc_html( $description ); ?></p>
                        <?php endif; ?>
                    </div>
                </a>
            </div><!-- .site-branding -->

            <!-- Navigasi Utama -->
            <!-- Hamburger button di LUAR nav agar tetap tampil di mobile -->
            <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false" aria-label="<?php esc_attr_e( 'Buka Menu', 'plosokidul-theme' ); ?>">
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
            </button>

            <nav id="site-navigation" class="main-navigation" role="navigation"
                 aria-label="<?php esc_attr_e( 'Menu Utama', 'plosokidul-theme' ); ?>">

                <?php wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => '__return_false',
                ) ); ?>

            </nav><!-- #site-navigation -->

        </div><!-- .header-inner -->
    </header><!-- #masthead -->
