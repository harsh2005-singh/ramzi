<?php
/**
 * Template Name: Testimonials
 */
?>

<?php get_header(); ?>

<?php
$testimonials_intro = "Ramzi Interior Limited has a long-standing history of providing outstanding wall transformations in the region, and they are always reliable and care about the details. Our commitment to quality work, timely delivery, and perfection has made us a top choice for property owners seeking the best painters in Auckland. As homeowners explore painters in Auckland reviews, they find genuine stories of transformed spaces, transparent communication, and committed service. When looking for high quality house painters near you with good reviews, our proven track record is enough to tell you we are the right team. When considering a complete property overhaul, many clients will often wonder, who are the best painters in Auckland? Being the best venetian plastering company in Auckland, we can create beautiful and customised walls beyond painting, with stunning textures. We value our clients' trust and are dedicated to exceeding their expectations in every residential and commercial project we undertake.";
$testimonials_intro_words = preg_split('/\s+/', trim($testimonials_intro));
$testimonials_intro_preview = implode(' ', array_slice($testimonials_intro_words, 0, 47));
$testimonials_intro_remaining = implode(' ', array_slice($testimonials_intro_words, 47));
?>

<main class="testimonials-page">

    <section class="testimonials-page-hero">
        <div class="testimonials-page-hero-bg"></div>
        <div class="testimonials-page-hero-overlay"></div>

        <div class="container testimonials-page-hero-inner">

            <div class="testimonials-page-breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span>/</span>
                <span>Testimonials</span>
            </div>

            <div class="testimonials-page-hero-content">
                <span class="testimonials-page-kicker">Client Testimonials &amp; Success Stories</span>

                <h1>
                    <strong>Trusted Excellence:</strong> What Our Valued Clients Say About Our Craftsmanship
                </h1>

                <div class="testimonials-page-read-more" data-read-more>
                    <p class="testimonials-page-preview">
                        <?php echo esc_html($testimonials_intro_preview); ?>
                    </p>
                <?php if (!empty($testimonials_intro_remaining)): ?>
                    <p class="testimonials-page-continuation" data-read-more-content>
                        <?php echo esc_html($testimonials_intro_remaining); ?>
                    </p>
                    <button class="read-more-toggle" type="button" data-read-more-toggle aria-expanded="false">
                        <span data-read-more-label>Read more</span>
                        <span data-read-less-label hidden>Read less</span>
                    </button>
                <?php endif; ?>
                </div>
            </div>

        </div>
    </section>


    <section class="testimonials-page-content">

        <div class="container">

            <div class="testimonials-page-heading">

                <div class="testimonials-label">
                    Testimonials
                </div>

                <h2>
                    <strong>Trusted By Our Clients</strong><br>
                    Quality That Speaks For Itself
                </h2>

                <p>
                    We believe every completed project should leave our clients
                    confident, satisfied and proud of their space.
                </p>

            </div>


            <?php echo do_shortcode('[trustindex no-registration=google]'); ?>



            <div class="row testimonials-page-row d-none">

                <div class="col-lg-4 col-md-6 col-12">
                    <article class="testimonial-card testimonials-page-card">

                        <div class="testimonial-symbols">

                            <div class="testimonial-stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>

                            <div class="testimonial-quotes">
                                <span></span>
                                <span></span>
                            </div>

                        </div>

                        <p class="testimonial-text">
                            "Ray Was Very Polite And Professional. He Did An
                            Excellent Job In Plastering And Painting . I Was
                            Very Happy With His Work."
                        </p>

                        <div class="testimonial-line"></div>

                        <div class="testimonial-bottom">

                            <div>
                                <div class="testimonial-name">
                                    S A Sani
                                </div>

                                <div class="testimonial-date">
                                    2024-09-29
                                </div>
                            </div>

                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/Ellipse 22.png'); ?>"
                                alt="S A Sani" class="testimonial-avatar">

                        </div>

                    </article>
                </div>


                <div class="col-lg-4 col-md-6 col-12">
                    <article class="testimonial-card testimonials-page-card">

                        <div class="testimonial-symbols">

                            <div class="testimonial-stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>

                            <div class="testimonial-quotes">
                                <span></span>
                                <span></span>
                            </div>

                        </div>

                        <p class="testimonial-text">
                            "Ray Was Very Polite And Professional. He Did An
                            Excellent Job In Plastering And Painting . I Was
                            Very Happy With His Work."
                        </p>

                        <div class="testimonial-line"></div>

                        <div class="testimonial-bottom">

                            <div>
                                <div class="testimonial-name">
                                    Daniel Ah
                                </div>

                                <div class="testimonial-date">
                                    2024-09-27
                                </div>
                            </div>

                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/Ellipse 25.png'); ?>"
                                alt="Daniel Ah" class="testimonial-avatar">

                        </div>

                    </article>
                </div>


                <div class="col-lg-4 col-md-6 col-12">
                    <article class="testimonial-card testimonials-page-card">

                        <div class="testimonial-symbols">

                            <div class="testimonial-stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>

                            <div class="testimonial-quotes">
                                <span></span>
                                <span></span>
                            </div>

                        </div>

                        <p class="testimonial-text">
                            "Ray Was Very Polite And Professional. He Did An
                            Excellent Job In Plastering And Painting . I Was
                            Very Happy With His Work."
                        </p>

                        <div class="testimonial-line"></div>

                        <div class="testimonial-bottom">

                            <div>
                                <div class="testimonial-name">
                                    S A Sani
                                </div>

                                <div class="testimonial-date">
                                    2024-09-29
                                </div>
                            </div>

                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/Ellipse 22.png'); ?>"
                                alt="S A Sani" class="testimonial-avatar">

                        </div>

                    </article>
                </div>

            </div>


            <div class="reviews-callout testimonials-page-callout">

                <div class="reviews-images">

                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/Ellipse 23.png'); ?>" alt=""
                        class="reviews-photo">

                    <div class="reviews-phone-circle">
                        <i class="bi bi-telephone-fill"></i>
                    </div>

                </div>

                <p>
                    Building Better Spaces with Quality, Trust, and Innovation.
                    <a href="#">
                        View All Reviews
                    </a>
                </p>

            </div>

        </div>

    </section>
    <section class="services-page-cta testimonials-page-cta">

        <div class="services-page-cta-glow"></div>

        <div class="container">

            <div class="services-page-cta-inner">

                <div>

                    <div class="services-page-section-label services-page-section-label-light">
                        Start Your Project
                    </div>

                    <h2>
                        Ready To Transform<br>
                        <strong>Your Space?</strong>
                    </h2>

                    <p>
                        Tell us what you have in mind and our team can help you
                        plan the right painting or plastering solution.
                    </p>

                </div>

                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="services-page-cta-button">
                    <span>BOOK AN APPOINTMENT</span>
                    <span>↗</span>
                </a>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>