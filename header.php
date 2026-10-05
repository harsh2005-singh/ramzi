<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="ramzi-header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">

                <div class="col-lg-3 col-md-3 col-8">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="ramzi-logo-link">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/logo.png'); ?>"
                            alt="Ramzi Interior Limited" class="ramzi-logo">
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                            'fallback_cb' => 'ramzi_primary_menu_fallback',
                            'walker' => new Ramzi_Nav_Walker(),
                            'depth' => 2,
                        )
                    );
                    ?>

                    <a href="#" class="appointment-button" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                        BOOK AN APPOINTMENT
                    </a>
                </div>
            </div>
        </nav>
    </header>