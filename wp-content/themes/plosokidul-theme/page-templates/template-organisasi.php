<?php
/**
 * Template Name: Struktur Organisasi
 *
 * Halaman statis yang menyajikan bagan organisasi visual
 * dan kartu profil lengkap seluruh pengurus Dusun Ploso Kidul.
 *
 * @package plosokidul-theme
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

// URL default avatar perangkat desa yang aman & profesional (Fase 7 generated)
$default_avatar = get_template_directory_uri() . '/assets/images/default-officer.webp';

// Data Pengurus Dusun Ploso Raya (Tanpa Foto)
$pengurus_dusun = array(
    'kadus' => array(
        'name'  => 'Moh Miftachul Huda',
        'role'  => 'Kepala Dusun Ploso Raya',
        'desc'  => 'Memimpin penyelenggaraan wilayah Dusun Ploso Kidul, Ploso Wetan, dan Ploso Kulon (RW 06 & RW 07).',
    ),
    'ketua_rw06' => array(
        'name'  => 'Ibu Heti Andayani',
        'role'  => 'Ketua RW 06',
        'desc'  => 'Mengkoordinasikan kegiatan warga di wilayah RW 06 (Dusun Ploso Kidul).',
    ),
    'bpd_rw06' => array(
        'name'  => '(Kosong)',
        'role'  => 'BPD RW 06',
        'desc'  => 'Posisi BPD RW 06 belum terisi.',
    ),
    'ketua_rw07' => array(
        'name'  => 'Bapak Miswadi',
        'role'  => 'Ketua RW 07',
        'desc'  => 'Mengkoordinasikan kegiatan warga di wilayah RW 07 (Dusun Ploso Wetan).',
    ),
    'bpd_rw07' => array(
        'name'  => 'Bapak Purwoko',
        'role'  => 'BPD RW 07',
        'desc'  => 'Badan Permusyawaratan Desa perwakilan wilayah RW 07.',
    ),
);

// Ketua RT RW 06
$rt_rw06 = array(
    array( 'nama' => 'Bapak Marsidi',      'rt' => 'RT 01 / RW 06' ),
    array( 'nama' => 'Bapak Paijuni',      'rt' => 'RT 02 / RW 06' ),
    array( 'nama' => 'Bapak Sriun',        'rt' => 'RT 03 / RW 06' ),
    array( 'nama' => 'Bapak Saiful Anam',  'rt' => 'RT 04 / RW 06' ),
    array( 'nama' => 'Bapak Slamet Raharjo', 'rt' => 'RT 05 / RW 06' ),
);

// Ketua RT RW 07
$rt_rw07 = array(
    array( 'nama' => 'Bapak Muh Badar',    'rt' => 'RT 01 / RW 07' ),
    array( 'nama' => 'Bapak Daliyudi',     'rt' => 'RT 02 / RW 07' ),
    array( 'nama' => 'Bapak Suswaryanto', 'rt' => 'RT 03 / RW 07' ),
    array( 'nama' => 'Bapak Sunaryo',     'rt' => 'RT 04 / RW 07' ),
    array( 'nama' => 'Bapak Muharto',     'rt' => 'RT 05 / RW 07' ),
);

// Kader Posyandu
$kader_rw06 = array( 'Ibu Ristiandini', 'Ibu Heti Andayani', 'Ibu Sari Muryaningsih', 'Ibu Mutmainah', 'Ibu Darliah' );
$kader_rw07 = array( 'Ibu Jumini', 'Ibu Istina Dewi', 'Ibu Siti Sotikah', 'Ibu Riswanthi', 'Ibu Sri Nurdianti' );

// Data Anggota KKN-AA 84.173 Pengembang IT Website
$kkn_members = array(
    'arvin' => array(
        'name'   => 'Arvin Demas Naryama',
        'role'   => 'Sistem Informasi (NIM 124230148)',
        'desc'   => 'Koordinator Kelompok Gerbang Digital & Penanggung Jawab Database Terpadu.',
        'email'  => '124230148@student.upnyk.ac.id',
        'avatar' => get_template_directory_uri() . '/assets/images/Arvin_PDD.webp',
    ),
    'aulia' => array(
        'name'   => 'Aulia Fitri Maharani',
        'role'   => 'Teknik Perminyakan (NIM 113230028)',
        'desc'   => 'Penanggung Jawab Sosialisasi Komunikasi Pertanian & Edukasi Keuangan Anak SD.',
        'email'  => '113230028@student.upnyk.ac.id',
        'avatar' => get_template_directory_uri() . '/assets/images/aulia_humas.webp',
    ),
    'rizik' => array(
        'name'   => 'Mhd Rizik Albani Suristiawan',
        'role'   => 'Teknik Geofisika (NIM 115230051)',
        'desc'   => 'Penanggung Jawab Sosialisasi Komunikasi Pertanian & Mitigasi Bencana.',
        'email'  => '115230051@student.upnyk.ac.id',
        'avatar' => get_template_directory_uri() . '/assets/images/rizik_perkap.webp',
    ),
    'gusti' => array(
        'name'   => 'Gusti Bagus Rama',
        'role'   => 'Teknik Geomatika (NIM 117230009)',
        'desc'   => 'Penanggung Jawab Program Papan Nyaman (Plang RT/RW) & Pemetaan Wilayah Dusun.',
        'email'  => '117230009@student.upnyk.ac.id',
        'avatar' => get_template_directory_uri() . '/assets/images/rama_ketua KKN.webp',
    ),
    'nabila' => array(
        'name'   => 'Nabila Desy Nurfaiza',
        'role'   => 'Teknik Industri (NIM 122230115)',
        'desc'   => 'Penanggung Jawab Program Papan Nyaman & Edukasi Keselamatan K3 SD.',
        'email'  => '122230115@student.upnyk.ac.id',
        'avatar' => get_template_directory_uri() . '/assets/images/nabila_sekre.webp',
    ),
    'atiyah' => array(
        'name'   => 'Atiyah Fahriyani Siregar',
        'role'   => 'Manajemen (NIM 141230002)',
        'desc'   => 'Penanggung Jawab Program Papan Nyaman & Nilai Ekonomi Minyak Jelantah.',
        'email'  => '141230002@student.upnyk.ac.id',
        'avatar' => get_template_directory_uri() . '/assets/images/athiya_humas.webp',
    ),
    'farrel' => array(
        'name'   => 'Farrel Harfaz Rasendriya',
        'role'   => 'Manajemen (NIM 141230017)',
        'desc'   => 'Penanggung Jawab Kelompok Gerbang Digital & Edukasi Pengelolaan Minyak Jelantah.',
        'email'  => '141230017@student.upnyk.ac.id',
        'avatar' => get_template_directory_uri() . '/assets/images/farel_perkap.webp',
    ),
    'jelita' => array(
        'name'   => 'Jelita Mayka Maharani',
        'role'   => 'Akuntansi (NIM 142230035)',
        'desc'   => 'Penanggung Jawab Program Papan Nyaman & Digitalisasi Pencatatan Keuangan.',
        'email'  => '142230035@student.upnyk.ac.id',
        'avatar' => get_template_directory_uri() . '/assets/images/mayka_sekre.webp',
    ),
    'alya' => array(
        'name'   => 'Alya Noor Alifia',
        'role'   => 'Ekonomi Pembangunan (NIM 143230265)',
        'desc'   => 'Penanggung Jawab Kelompok Gerbang Digital & Pelatihan Microsoft Excel Karang Taruna.',
        'email'  => '143230265@student.upnyk.ac.id',
        'avatar' => get_template_directory_uri() . '/assets/images/alya_PDD.webp',
    ),
    'annisa' => array(
        'name'   => 'Annisa Nurhaliza',
        'role'   => 'Hubungan Masyarakat (NIM 154230068)',
        'desc'   => 'Penanggung Jawab Sosialisasi Komunikasi Pertanian & Pembuatan Celengan Kreatif.',
        'email'  => '154230068@student.upnyk.ac.id',
        'avatar' => get_template_directory_uri() . '/assets/images/annisa_bendahara.webp',
    ),
);
?>

<main id="main" class="site-main" role="main">

    <!-- ============================================================
         PAGE BANNER HEADER
         ============================================================ -->
    <header class="page-header-banner" aria-label="Header Halaman Struktur Organisasi">
        <div class="container">
            <h1 class="page-title">Struktur Organisasi</h1>
            
            <!-- Breadcrumbs (WCAG AA Compliant) -->
            <nav class="page-breadcrumbs" aria-label="Breadcrumb">
                <ol class="breadcrumbs-list">
                    <li class="breadcrumb-item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
                    </li>
                    <li class="breadcrumb-item breadcrumb-item--current" aria-current="page">
                        Struktur Organisasi
                    </li>
                </ol>
            </nav>
        </div>
    </header>

    <div class="container page-content-container">

        <!-- ============================================================
             1. BAGAN ORGANISASI DUSUN PLOSO RAYA
             ============================================================ -->
        <section id="bagan" class="organisasi-bagan-section fade-in-section is-visible" aria-label="Bagan Struktur Dusun Ploso Raya">
            <div class="section-header">
                <span class="section-label">Bagan Hierarki</span>
                <h2 class="section-title">Struktur Kepengurusan Dusun</h2>
                <p class="section-subtitle">
                    Susunan kepengurusan Dusun Ploso Raya (Ploso Kidul, Ploso Wetan, Ploso Kulon) di bawah koordinasi Kepala Dusun.
                </p>
            </div>

            <!-- Organogram Dusun Interactive Tree -->
            <div class="organogram-wrapper">
                <div class="org-tree-root">
                    
                    <!-- LEVEL 1: KEPALA DUSUN -->
                    <div class="org-level org-level-1">
                        <div class="org-box org-box-top">
                            <span class="org-box-role">Kepala Dusun Ploso Raya</span>
                            <span class="org-box-sub">(Ploso Kidul, Ploso Wetan, Ploso Kulon)</span>
                            <h3 class="org-box-name">Moh Miftachul Huda</h3>
                        </div>
                    </div>

                    <div class="org-connector-v"></div>

                    <!-- LEVEL 2: 4 MAIN BRANCHES -->
                    <div class="org-level org-level-2">
                        <div class="org-top-connector-line"></div>

                        <!-- Column 1: BPD RW 06 -->
                        <div class="org-col-item">
                            <div class="org-connector-v-short"></div>
                            <div class="org-box org-box-bpd">
                                <h3 class="org-box-role-only">BPD RW 06</h3>
                            </div>
                        </div>

                        <!-- Column 2: KETUA RW 06 -->
                        <div class="org-col-item org-col-has-children">
                            <div class="org-connector-v-short"></div>
                            <div class="org-box org-box-rw">
                                <span class="org-box-role">Ketua RW 06</span>
                                <h3 class="org-box-name">Ibu Heti Andayani</h3>
                            </div>

                            <div class="org-connector-v"></div>

                            <!-- LEVEL 3: RW 06 SUB-BRANCHES -->
                            <div class="org-sub-level">
                                <div class="org-sub-connector-line"></div>

                                <div class="org-sub-col">
                                    <div class="org-connector-v-short"></div>
                                    <div class="org-box org-box-card-list">
                                        <div class="org-card-list-title">Kader Posyandu RW 06</div>
                                        <ol class="org-member-list">
                                            <li>Ristiandini</li>
                                            <li>Heti Andayani</li>
                                            <li>Sari Muryaningsih</li>
                                            <li>Mutmainah</li>
                                            <li>Nartiah</li>
                                        </ol>
                                    </div>
                                </div>

                                <div class="org-sub-col">
                                    <div class="org-connector-v-short"></div>
                                    <div class="org-box org-box-card-list">
                                        <div class="org-card-list-title">Ketua RT</div>
                                        <ol class="org-member-list">
                                            <li>Marsidi <span class="rt-tag">(RT 01)</span></li>
                                            <li>Parjuni <span class="rt-tag">(RT 02)</span></li>
                                            <li>Sirin <span class="rt-tag">(RT 03)</span></li>
                                            <li>Saiful Anam <span class="rt-tag">(RT 04)</span></li>
                                            <li>Slamet Raharjo <span class="rt-tag">(RT 05)</span></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Column 3: KETUA RW 07 -->
                        <div class="org-col-item org-col-has-children">
                            <div class="org-connector-v-short"></div>
                            <div class="org-box org-box-rw">
                                <span class="org-box-role">Ketua RW 07</span>
                                <h3 class="org-box-name">Bp Miswadi</h3>
                            </div>

                            <div class="org-connector-v"></div>

                            <!-- LEVEL 3: RW 07 SUB-BRANCHES -->
                            <div class="org-sub-level">
                                <div class="org-sub-connector-line"></div>

                                <div class="org-sub-col">
                                    <div class="org-connector-v-short"></div>
                                    <div class="org-box org-box-card-list">
                                        <div class="org-card-list-title">Kader Posyandu RW 07</div>
                                        <ol class="org-member-list">
                                            <li>Jumini</li>
                                            <li>Istina Dewi</li>
                                            <li>Siti Solikah</li>
                                            <li>Riswantini</li>
                                            <li>Sri Murdani</li>
                                        </ol>
                                    </div>
                                </div>

                                <div class="org-sub-col">
                                    <div class="org-connector-v-short"></div>
                                    <div class="org-box org-box-card-list">
                                        <div class="org-card-list-title">Ketua RT</div>
                                        <ol class="org-member-list">
                                            <li>Muh Badar <span class="rt-tag">(RT 01)</span></li>
                                            <li>Dalyudi <span class="rt-tag">(RT 02)</span></li>
                                            <li>Suwaryanto <span class="rt-tag">(RT 03)</span></li>
                                            <li>Sunaryo <span class="rt-tag">(RT 04)</span></li>
                                            <li>Muharto <span class="rt-tag">(RT 05)</span></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Column 4: BPD RW 07 -->
                        <div class="org-col-item">
                            <div class="org-connector-v-short"></div>
                            <div class="org-box org-box-bpd">
                                <span class="org-box-role">BPD RW 07</span>
                                <h3 class="org-box-name">Bp Purwoko</h3>
                            </div>
                        </div>

                    </div><!-- .org-level-2 -->

                </div><!-- .org-tree-root -->
            </div><!-- .organogram-wrapper -->
        </section>

        <hr class="section-divider">

        <!-- ============================================================
             2. KARTU PROFIL PENGURUS DUSUN (TANPA FOTO)
             ============================================================ -->
        <section id="daftar-perangkat" class="organisasi-daftar-section fade-in-section is-visible" aria-label="Daftar Pengurus Dusun Ploso Raya">
            <div class="section-header">
                <span class="section-label">Pengurus Dusun</span>
                <h2 class="section-title">Kepengurusan Dusun Ploso Raya</h2>
                <p class="section-subtitle">
                    Susunan lengkap pengurus Dusun Ploso Kidul, Ploso Wetan, dan Ploso Kulon.
                </p>
            </div>

            <!-- Kartu Pengurus Utama (Kadus + RW + BPD) -->
            <div class="officers-grid">
                <?php foreach ( $pengurus_dusun as $key => $p ) : ?>
                    <article class="officer-card officer-card--no-photo" aria-labelledby="dusun-officer-<?php echo esc_attr( $key ); ?>">
                        <div class="officer-info" style="padding: var(--spacing-md);">
                            <span class="officer-role"><?php echo esc_html( $p['role'] ); ?></span>
                            <h3 id="dusun-officer-<?php echo esc_attr( $key ); ?>" class="officer-name">
                                <?php echo esc_html( $p['name'] ); ?>
                            </h3>
                            <?php if ( ! empty( $p['desc'] ) ) : ?>
                                <p class="officer-desc"><?php echo esc_html( $p['desc'] ); ?></p>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <!-- Tabel RT RW 06 -->
            <h3 class="subsection-title" style="margin-top: var(--spacing-xl); margin-bottom: var(--spacing-sm);">Ketua RT &amp; Kader Posyandu — RW 06</h3>
            <div class="rw-subgrid">
                <div class="rw-card-box">
                    <h4 style="font-size: 15px; font-weight: bold; color: var(--color-primary); margin-bottom: 12px; padding-bottom: 6px; border-bottom: 2px solid var(--color-primary-trans-10);">Ketua RT RW 06</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <?php foreach ( $rt_rw06 as $rt ) : ?>
                            <li style="padding: 8px 0; border-bottom: 1px solid var(--color-border); font-size: 14px; display: flex; justify-content: space-between;">
                                <strong><?php echo esc_html( $rt['rt'] ); ?>:</strong>
                                <span><?php echo esc_html( $rt['nama'] ); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="rw-card-box">
                    <h4 style="font-size: 15px; font-weight: bold; color: var(--color-primary); margin-bottom: 12px; padding-bottom: 6px; border-bottom: 2px solid var(--color-primary-trans-10);">Kader Posyandu RW 06</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <?php foreach ( $kader_rw06 as $kader ) : ?>
                            <li style="padding: 8px 0; border-bottom: 1px solid var(--color-border); font-size: 14px;"><?php echo esc_html( $kader ); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- Tabel RT RW 07 -->
            <h3 class="subsection-title" style="margin-bottom: var(--spacing-sm);">Ketua RT &amp; Kader Posyandu — RW 07</h3>
            <div class="rw-subgrid">
                <div class="rw-card-box">
                    <h4 style="font-size: 15px; font-weight: bold; color: var(--color-primary); margin-bottom: 12px; padding-bottom: 6px; border-bottom: 2px solid var(--color-primary-trans-10);">Ketua RT RW 07</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <?php foreach ( $rt_rw07 as $rt ) : ?>
                            <li style="padding: 8px 0; border-bottom: 1px solid var(--color-border); font-size: 14px; display: flex; justify-content: space-between;">
                                <strong><?php echo esc_html( $rt['rt'] ); ?>:</strong>
                                <span><?php echo esc_html( $rt['nama'] ); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="rw-card-box">
                    <h4 style="font-size: 15px; font-weight: bold; color: var(--color-primary); margin-bottom: 12px; padding-bottom: 6px; border-bottom: 2px solid var(--color-primary-trans-10);">Kader Posyandu RW 07</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <?php foreach ( $kader_rw07 as $kader ) : ?>
                            <li style="padding: 8px 0; border-bottom: 1px solid var(--color-border); font-size: 14px;"><?php echo esc_html( $kader ); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>

        <hr class="section-divider">

        <!-- ============================================================
             3. TIM KKN-AA ANGKATAN 84.173 (PENGEMBANG IT)
             ============================================================ -->
        <section id="tim-kkn" class="organisasi-daftar-section fade-in-section is-visible" aria-label="Daftar Pengembang KKN-AA 84.173">
            <div class="section-header">
                <span class="section-label">Prakarsa Digital</span>
                <h2 class="section-title">Tim Pengembang KKN-AA 84.173</h2>
                <p class="section-subtitle">
                    Mahasiswa Universitas Pembangunan Nasional "Veteran" Yogyakarta yang menginisiasi program kerja Gerbang Digital di Dusun Ploso Kidul.
                </p>
            </div>

            <div class="officers-grid">
                <?php foreach ( $kkn_members as $key => $member ) : ?>
                    <article class="officer-card" aria-labelledby="kkn-member-<?php echo esc_attr( $key ); ?>">
                        <div class="officer-photo-container">
                            <img class="officer-photo"
                                 src="<?php echo esc_url( $member['avatar'] ); ?>"
                                 alt="<?php echo esc_attr( 'Foto formal ' . $member['name'] ); ?>"
                                 loading="lazy"
                                 width="400"
                                 height="400">
                        </div>
                        <div class="officer-info">
                            <span class="officer-role"><?php echo $member['role']; // HTML-safe ?></span>
                            <h3 id="kkn-member-<?php echo esc_attr( $key ); ?>" class="officer-name">
                                <?php echo esc_html( $member['name'] ); ?>
                            </h3>
                            <p class="officer-desc"><?php echo esc_html( $member['desc'] ); ?></p>
                            
                            <div class="officer-contact">
                                <?php if ( ! empty( $member['email'] ) ) : ?>
                                    <div class="officer-contact-item">
                                        <span class="contact-icon" aria-hidden="true">✉️</span>
                                        <a href="mailto:<?php echo antispambot( $member['email'] ); ?>" 
                                           aria-label="<?php echo esc_attr( 'Kirim email ke ' . $member['name'] ); ?>">
                                            <?php echo antispambot( $member['email'] ); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div><!-- .officers-grid -->
        </section>

    </div><!-- .container -->

</main><!-- #main -->

<?php
get_footer();
