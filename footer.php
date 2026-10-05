<footer class="ramzi-footer">

    <div class="footer-main">

        <div class="container">

            <div class="row footer-row">

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-brand">

                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/logo.png'); ?>"
                            alt="Ramzi Interior Limited" class="footer-logo">

                        <p class="footer-description">
                            We strive towards making your space look great with accuracy and attention to detail,
                            ensuring that every project we take on is of the highest quality.
                        </p>

                        <div class="footer-social">
                            <a href="#" aria-label="Instagram">
                                <i class="bi bi-instagram"></i>
                            </a>

                            <a href="https://www.facebook.com/ramziinteriorlimited" target="_blank"
                                rel="noopener noreferrer" aria-label="Facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="footer-column">

                        <h3>Quick Links</h3>

                        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>

                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('about-us'))); ?>">
                            About Us
                        </a>

                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>">
                            Services
                        </a>

                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('testimonials'))); ?>">
                            Testimonials
                        </a>

                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('blog'))); ?>">
                            Blog
                        </a>

                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>">
                            Contact Us
                        </a>

                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-6">
                    <div class="footer-column">

                        <h3>Services</h3>

                        <?php
                        $services_query = new WP_Query(
                            array(
                                'post_type' => 'service',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                                'orderby' => array(
                                    'menu_order' => 'ASC',
                                    'title' => 'ASC',
                                ),
                            )
                        );
                        ?>

                        <?php while ($services_query->have_posts()):
                            $services_query->the_post(); ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>


                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-column footer-contact">

                        <h3>Contact Us</h3>

                        <div class="contact-item">
                            <i class="bi bi-telephone"></i>
                            <span>+64 2041723131</span>
                        </div>

                        <div class="contact-item">
                            <i class="bi bi-envelope"></i>
                            <span>info@ramziinterior.co.nz</span>
                        </div>

                        <div class="contact-item">
                            <i class="bi bi-geo-alt"></i>
                            <span>
                                67a Othello Drive, Clover Park,<br>
                                Auckland, New Zealand, 2023
                            </span>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="footer-bottom">
        <div class="container">
            <p>
                Ramzi Interior Limited |
                <a href="https://webmaniacs.co.nz/" target="_blank" rel="noopener noreferrer">
                    Powered By Web Maniacs
                </a>
            </p>
        </div>
    </div>

</footer>

<div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg">

        <div class="modal-content appointment-modal-content">

            <div class="modal-header">

                <div>
                    <span class="appointment-modal-label">
                        Get In Touch
                    </span>

                    <h2 class="modal-title" id="appointmentModalLabel">
                        Book An Appointment
                    </h2>
                </div>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>

            </div>

            <div class="modal-body appointment-modal-body">

                <?php
                echo do_shortcode('[contact-form-7 id="88a3981" title="Contact form 1"]');
                ?>

            </div>

        </div>

    </div>

</div>

<?php wp_footer(); ?>

</body>

</html>