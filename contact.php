<?php
/**
 * Template Name: Contact
 */
?>

<?php get_header(); ?>

<?php
$phone = get_theme_mod(
    'ramzi_contact_phone',
    '+64 2041723131'
);

$email = get_theme_mod(
    'ramzi_contact_email',
    'info@ramziinterior.co.nz'
);

$address = get_theme_mod(
    'ramzi_contact_address',
    '67A Othello Drive, Clover Park, Auckland, New Zealand, 2023'
);

$map_url = get_theme_mod(
    'ramzi_contact_map_url',
    'https://www.google.com/maps?q=67A+Othello+Drive,+Clover+Park,+Auckland,+New+Zealand+2023&output=embed'
);

$map_link = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($address);

$phone_link = preg_replace('/[^0-9+]/', '', $phone);
?>

<main class="contact-page">

    <!-- =========================================
         BREADCRUMB ONLY
    ========================================== -->

    <section class="contact-page-top">

        <div class="container">

            <div class="contact-page-breadcrumb">

                <a href="<?php echo esc_url(home_url('/')); ?>">
                    Home
                </a>

                <span>/</span>

                <span>
                    Contact Us
                </span>

            </div>

        </div>

    </section>


    <!-- =========================================
         CONTACT CONTENT
    ========================================== -->

    <section class="contact-page-content">

        <div class="container">

            <div class="row contact-page-layout">

                <!-- =================================
                     FORM
                ================================== -->

                <div class="col-lg-7 col-12">

                    <div class="contact-page-form-card">

                        <div class="contact-form-top">

                            <div>

                                <span class="contact-form-eyebrow">
                                    Quick Enquiry
                                </span>

                                <h3>
                                    Request A Free Quote
                                </h3>

                            </div>

                            <div class="contact-form-icon">
                                <i class="bi bi-chat-dots-fill"></i>
                            </div>

                        </div>


                        <?php
                        echo do_shortcode(
                            '[contact-form-7 id="4202ba5" title="Untitled"]'
                        );
                        ?>

                    </div>

                </div>


                <!-- =================================
                     CONTACT DETAILS
                ================================== -->

                <div class="col-lg-5 col-12">

                    <div class="contact-page-info">

                        <div class="contact-info-heading">

                            <span>
                                Contact Details
                            </span>

                            <h3>
                                Get in Touch with<br>
                                <strong>Our Team</strong>
                            </h3>

                            <div class="contact-page-read-more" data-read-more>
                                <p class="contact-info-description" data-read-more-content>
                                Ready to Improve Your Space? Connect with Us Today
                                Whether you are looking to transform your entire home or just refresh a single room,
                                obtaining clear painting quotes in Auckland is the very first step towards a stunning
                                outcome. Prospective customers are encouraged to contact us for any questions they may
                                have with respect to our full range of interior and exterior services. If you have
                                question regarding how do I get a painting quote in Auckland, our friendly staff makes
                                the process easy with a free painting quote in Auckland that fits your specific needs.
                                As a team of affordable painters in Auckland, we take pride in delivering high quality
                                craftsmanship that is of the highest standard without compromise. To find affordable
                                interior and exterior painters near Hamilton and the wider region, you can rely on the
                                expertise of Ramzi Interior Limited for reliable information, expert advice, and
                                outstanding results. Call our experts now today to discuss your vision.
                                </p>
                                <button class="read-more-toggle" type="button" data-read-more-toggle
                                    aria-expanded="false">
                                    <span data-read-more-label>Read more</span>
                                    <span data-read-less-label hidden>Read less</span>
                                </button>
                            </div>

                        </div>


                        <div class="contact-info-list">

                            <!-- PHONE -->

                            <a href="tel:<?php echo esc_attr($phone_link); ?>" class="contact-info-item">

                                <span class="contact-info-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </span>

                                <span>
                                    <small>CALL US</small>

                                    <strong>
                                        <?php echo esc_html($phone); ?>
                                    </strong>
                                </span>

                            </a>


                            <!-- EMAIL -->

                            <a href="mailto:<?php echo esc_attr($email); ?>" class="contact-info-item">

                                <span class="contact-info-icon">
                                    <i class="bi bi-envelope-fill"></i>
                                </span>

                                <span>
                                    <small>EMAIL US</small>

                                    <strong>
                                        <?php echo esc_html($email); ?>
                                    </strong>
                                </span>

                            </a>


                            <!-- LOCATION -->

                            <a href="<?php echo esc_url($map_link); ?>" class="contact-info-item" target="_blank"
                                rel="noopener noreferrer">

                                <span class="contact-info-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </span>

                                <span>
                                    <small>OUR LOCATION</small>

                                    <strong>
                                        <?php echo esc_html($address); ?>
                                    </strong>
                                </span>

                            </a>

                        </div>


                        <!-- =================================
                             SOCIAL LINKS
                        ================================== -->

                        <div class="contact-social-row">

                            <a href="https://www.facebook.com/ramziinteriorlimited" target="_blank"
                                rel="noopener noreferrer" aria-label="Facebook">
                                <i class="bi bi-facebook"></i>
                            </a>


                            <a href="#" aria-label="Instagram">
                                <i class="bi bi-instagram"></i>
                            </a>


                            <a href="https://wa.me/642041723131" target="_blank" rel="noopener noreferrer"
                                aria-label="WhatsApp">
                                <i class="bi bi-whatsapp"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================
                 MAP
            ================================== -->

            <div class="contact-map-section">

                <div class="contact-map-heading">

                    <span>
                        Find Us
                    </span>

                    <h3>
                        Visit <strong>Our Location</strong>
                    </h3>

                </div>


                <div class="contact-map-frame">

                    <iframe src="<?php echo esc_url($map_url); ?>" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" allowfullscreen>
                    </iframe>

                </div>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>