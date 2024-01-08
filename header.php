<!doctype html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0">
    <?php wp_head(); ?>
    <meta name="author" content="akrea creative agency www.akrea.pl">
    <?php //include_once('inc/favicons.html'); 
    ?>
    <link id="theme-link1" href="<?php echo get_template_directory_uri(); ?>/dist/css/bootstrap.css" rel="stylesheet">
    <link id="theme-link2" href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/cookieconsent.css" rel="stylesheet" />
    <meta name="theme-color" content="#000000">
    <?php //include_once('inc/consent.html');
    wp_head();
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@200;400;700&display=swap" rel="stylesheet">
</head>

<div class="bg-white">
    <div class="top-menu fixed-top bg-white">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/jtt-logo.png" style="width:100px; height:auto;" alt="<?php echo bloginfo(); ?>" class="img-fluid lazy" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Menu">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Zamknij menu"></button>
                    </div>
                    <div class="offcanvas-body">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => '',
                            'container' => false,
                            'menu_class' => 'text-primary',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="main-menu navbar-nav d-flex justify-content-end text-white flex-grow-1 pe-3 me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

<XyzTransition appear duration="auto">
    <div class="page-wrap">
        <div class="page-hero" xyz="fade small stagger ease-out-back">
            <div class="hero-logo xyz-nested"></div>
            <p class="hero-text xyz-nested">Curabitur blandit tempus porttitor. Morbi leo risus.</p>
        </div>
        <div class="page-features" xyz="fade flip-down stagger duration-10 delay-2 ease-out-back">
            <div class="feature-item xyz-nested"></div>
            <div class="feature-item xyz-nested"></div>
            <div class="feature-item xyz-nested"></div>
        </div>
        <div class="page-section" xyz="fade small stagger delay-4 ease-in-out">
            <div class="section-left" xyz="fade left stagger">
                <div class="section-item xyz-nested"></div>
                <div class="section-item xyz-nested"></div>
                <div class="section-item xyz-nested"></div>
            </div>
            <div class="section-right xyz-nested" xyz="fade big delay-10"></div>
        </div>
        <div class="page-footer" xyz="fade bottom ease-in-out delay-10">
            <div class="footer-logo xyz-nested" xyz="fade left ease-in-out delay-10"></div>
            <div class="footer-right" xyz="fade up stagger ease-in-out delay-10">
                <div class="footer-item xyz-nested"></div>
                <div class="footer-item xyz-nested"></div>
                <div class="footer-item xyz-nested"></div>
            </div>
        </div>
    </div>
</XyzTransition>