<?php
/**
 * Template Name: About Us
 */

get_header();

$contact_page = get_page_by_path('contact');

$contact_url = $contact_page
    ? get_permalink($contact_page)
    : home_url('/contact/');
?>

<main class="about-page">
    <section class="about-page-hero">

        <div class="about-page-hero-bg"></div>
        <div class="about-page-hero-overlay"></div>

        <div class="container about-page-hero-inner">

            <div class="about-page-breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span>/</span>
                <span>About Us</span>
            </div>

            <div class="about-page-hero-content">

                <span class="about-page-kicker">
                    About Us
                </span>

                <h1>
                    Redefining Excellence in <strong>Wall Finishes and Craftsmanship</strong>
                </h1>

                <div class="about-page-read-more" data-read-more>
                    <p data-read-more-content>
                        Ramzi Interior Limited was established in Clover Park, Auckland, with a clear vision: to provide
                        property owners with a simple, one-stop solution for property maintenance. We are a trusted name
                        when it comes to reliable painters in Auckland. We have continued to expand as a trusted painting
                        company in Auckland. We combine the stress of managing several contractors with a single roof, plus
                        expert plastering skills, careful Gib fixing, micro cement, Venetian finishes, and full painting.
                        Our team of licensed painters in Auckland has years of experience and a passion for immaculate
                        detail in every job. Moreover, with the help of our insured painters in Auckland, you can enjoy
                        complete peace of mind for your property. As a leading Auckland painting company with experience in
                        Venetian plaster and renovations, we have a proven record of transforming a wide range of
                        residential and commercial spaces from start to finish, to the highest standard.
                    </p>
                    <button class="read-more-toggle" type="button" data-read-more-toggle aria-expanded="false">
                        <span data-read-more-label>Read more</span>
                        <span data-read-less-label hidden>Read less</span>
                    </button>
                </div>

            </div>

        </div>

    </section>
    <section class="about-section">

        <div class="container-fluid about-container">

            <div class="about-top">

                <p class="about-top-text">
                    Bring Your Walls to Life with Top-Tier House Painters
                    <br>in Auckland and Plastering Experts
                </p>

                <div class="brand-marquee-viewport">

                    <div class="brand-logos">

                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/master-painters.png'); ?>"
                            alt="Master Painters">

                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/resene.png'); ?>"
                            alt="Resene">

                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/dulux.png'); ?>"
                            alt="Dulux">

                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/site-safe.png'); ?>"
                            alt="Site Safe">

                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/master-painters.png'); ?>"
                            alt="" aria-hidden="true">

                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/resene.png'); ?>" alt=""
                            aria-hidden="true">

                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/dulux.png'); ?>" alt=""
                            aria-hidden="true">

                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/site-safe.png'); ?>" alt=""
                            aria-hidden="true">

                    </div>

                </div>

            </div>


            <div class="row about-row align-items-center">

                <div class="col-lg-6 col-md-6 col-12">

                    <div class="about-image-wrapper">

                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/about-image.png'); ?>"
                            alt="Ramzi Interior" class="about-image">

                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/about-logo.png'); ?>"
                            alt="Ramzi" class="about-logo">

                    </div>

                </div>


                <div class="col-lg-6 col-md-6 col-12">

                    <div class="about-content">

                        <div class="about-label">
                            About Us
                        </div>

                        <h1 class="about-title">
                            <strong>The Ramzi</strong>Interior<br>Story
                        </h1>

                        <h3>
                            Our Vision
                        </h3>

                        <p>
                            To emerge as one of the trusted wall finishing companies across the region, known for
                            elevating the standards and expectations of the industry by delivering innovative wall
                            finishing solutions, flawless surface preparation, quality materials, and a passion for
                            making every project a stunning reality for our clients, whether they are creating a new
                            interior or exterior space.
                        </p>

                        <h3>
                            Our Mission
                        </h3>

                        <p>
                            To provide the highest quality painting, plastering and renovation services that property
                            owners can rely on, completed efficiently on schedule and at fair pricing. Our aim is to be
                            clear and precise in our communication and attention to detail, so that all our clients feel
                            their project matters deeply to us.
                        </p>

                        <a href="<?php echo esc_url($contact_url); ?>" class="more-about-button">
                            GET IN TOUCH
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>