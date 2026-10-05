<?php
/**
 * Template Name: Services
 */
?>

<?php get_header(); ?>

<?php
$theme_uri = get_template_directory_uri();
$service_icons = array(
    'venetian-plastering' => 'bi-stars',
    'exterior-painting' => 'bi-house-up',
    'interior-painting' => 'bi-brush',
    'renovations' => 'bi-house-gear',
    'plastering' => 'bi-grid-3x3-gap',
    'gib-fixing' => 'bi-tools',
);

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

$contact_page = get_page_by_path('contact');
$contact_url = $contact_page ? get_permalink($contact_page) : home_url('/contact/');
?>

<main class="services-page">

    <section class="services-page-hero">
        <div class="services-page-hero-bg"></div>
        <div class="services-page-hero-overlay"></div>

        <div class="container services-page-hero-inner">
            <div class="services-page-breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span>/</span>
                <span>Services</span>
            </div>

            <div class="services-page-hero-content">
                <span class="services-page-kicker">What We Do</span>

                <h1>
                    High-Quality Painting &amp;<br>
                    <strong>Plastering Services</strong>
                </h1>

                <p>
                    As leading painting contractors in Auckland, we deliver flawless results. When you want to hire a
                    painter in Auckland, our skilled professionals manage everything from prep to final coat. We are the
                    ultimate end to end painting and plastering service in Auckland, handling all your property needs
                    seamlessly.
                </p>

                <a href="#" class="services-page-hero-button" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                    <span>BOOK AN APPOINTMENT</span>
                    <span class="services-page-button-arrow">↗</span>
                </a>
            </div>
        </div>
    </section>

    <section class="services-page-intro">
        <div class="container">
            <div class="services-page-intro-head">
                <div class="services-page-section-label">Our Professional Services</div>

                <h2>
                    <strong>Comprehensive Trades</strong>
                    Tailored<br>
                    for Your Home
                </h2>
            </div>

            <div class="services-page-intro-copy">
                <p>
                    Streamline your next project with a reliable company that does interior painting, plastering and Gib
                    fixing in one job. If you are wondering who can renovate my kitchen and bathroom and repaint the
                    house, our experienced team delivers flawless transformations from start to finish across Auckland
                    and Hamilton.
                </p>

                <a href="#" class="services-page-text-link" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                    Get Your Free Quote
                    <span>↗</span>
                </a>
            </div>
        </div>
    </section>

    <section class="services-page-grid-section">
        <div class="container">

            <div class="services-page-grid">
                <?php if ($services_query->have_posts()): ?>
                    <?php $index = 0; ?>
                    <?php while ($services_query->have_posts()):
                        $services_query->the_post(); ?>

                        <?php
                        $service_id = get_the_ID();
                        $service_title = get_the_title();
                        $service_url = get_permalink($service_id);
                        $service_slug = get_post_field('post_name', $service_id);
                        $service_icon = $service_icons[$service_slug] ?? 'bi-stars';
                        $service_image = has_post_thumbnail($service_id)
                            ? get_the_post_thumbnail_url($service_id, 'large')
                            : $theme_uri . '/assets/gallery2.png';
                        $service_excerpt = get_post_field('post_excerpt', $service_id);

                        if (empty($service_excerpt)) {
                            $service_excerpt = get_post_field('post_content', $service_id);
                        }

                        $service_excerpt = wp_trim_words(
                            wp_strip_all_tags($service_excerpt),
                            24,
                            '…'
                        );
                        ?>

                        <article class="services-page-card">

                            <a href="<?php echo esc_url($service_url); ?>" class="services-page-card-image-link">
                                <div class="services-page-card-image">
                                    <img src="<?php echo esc_url($service_image); ?>"
                                        alt="<?php echo esc_attr($service_title); ?>"
                                        loading="<?php echo $index < 3 ? 'eager' : 'lazy'; ?>">

                                    <div class="services-page-card-image-overlay"></div>

                                    <span class="services-page-card-tag">
                                        Service
                                    </span>

                                    <span class="services-page-card-icon">
                                        <i class="bi <?php echo esc_attr($service_icon); ?>"></i>
                                    </span>
                                </div>
                            </a>

                            <div class="services-page-card-body">

                                <div class="services-page-card-number">
                                    <?php echo sprintf('%02d', $index + 1); ?>
                                </div>

                                <h3>
                                    <?php echo esc_html($service_title); ?>
                                </h3>

                                <p>
                                    <?php echo esc_html($service_excerpt); ?>
                                </p>

                                <a href="<?php echo esc_url($service_url); ?>"
                                    class="services-page-card-link"
                                    aria-label="<?php echo esc_attr(sprintf('Read more about %s', $service_title)); ?>">
                                    <span>READ MORE</span>
                                    <span class="services-page-card-arrow">↗</span>
                                </a>

                            </div>

                        </article>

                        <?php $index++; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

        </div>
    </section>

    <section class="services-page-trust">
        <div class="container">
            <div class="row why-main align-items-start">
                <div class="col-lg-7 col-md-7 col-12">
                    <div class="why-content">
                        <div class="why-label">Why Choose Us</div>
                        <h2 class="why-title"><strong>Trusted Excellence</strong><br>Delivering Flawless Wall Solutions
                            Every Time</h2>
                        <p class="why-description">Partnering with Ramzi Interior Limited implies working with a team
                            that is committed to excellence, honesty, and customer satisfaction. We understand your
                            exact vision and deliver long-lasting painting and plastering results.</p>
                        <div class="why-stats">

                            <div class="why-stat">
                                <div class="stat-number" data-count-to="500" data-suffix="+">
                                    <span class="counter-value">0</span><span>+</span>
                                </div>
                                <div class="stat-label">Projects Completed</div>
                            </div>

                            <div class="stat-divider"></div>

                            <div class="why-stat">
                                <div class="stat-number" data-count-to="300" data-suffix="+">
                                    <span class="counter-value">0</span><span>+</span>
                                </div>
                                <div class="stat-label">Happy Clients</div>
                            </div>

                            <div class="stat-divider"></div>

                            <div class="why-stat">
                                <div class="stat-number" data-count-to="100" data-suffix="%">
                                    <span class="counter-value">0</span><span>%</span>
                                </div>
                                <div class="stat-label">Client Satisfaction</div>
                            </div>

                        </div>
                        <div class="why-bottom">
                            <div class="why-logo-wrapper"><img
                                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/why-logo.png'); ?>"
                                    alt="Ramzi" class="why-logo">
                            </div>
                            <div class="why-divider"></div>
                            <div class="why-list">
                                <p>Experienced And Skilled Professional Team</p>
                                <p>High-Quality Materials for Long-Lasting Results</p>
                                <p>Affordable Pricing With No Hidden Charges</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="why-images">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/why-room.png'); ?>"
                            alt="Interior painting" class="why-room-image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/paint-swatches.png'); ?>"
                            alt="Paint colour selection" class="why-swatches-image">
                        <div class="cost-card">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/helmet-safety.png'); ?>"
                                alt="" class="cost-icon">
                            <div class="cost-title"><strong>Cost Effective</strong><br>Solutions</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-page-cta">
        <div class="services-page-cta-glow"></div>

        <div class="container">
            <div class="services-page-cta-inner">

                <div>
                    <div class="services-page-section-label services-page-section-label-light">
                        Our Service Areas
                    </div>

                    <h2>
                        <strong>Professional Painting &amp; Plastering</strong> Across Major Suburbs in<br>Auckland and
                        Hamilton
                    </h2>

                    <div class="services-page-areas-copy" data-read-more>
                        <p class="services-page-areas-description" data-read-more-content>
                            Ramzi Interior Limited is proud to provide the best trade solutions to residential and
                            commercial clients in all major suburbs of Hamilton and Auckland. Being the established painters
                            in Hamilton, we understand the local architectural styles and bring precision to every job. As
                            reliable house painters in Hamilton, we provide homeowners with expert interior and exterior
                            painting services that they can trust. Our professional team offers expert services relating to
                            plastering in Hamilton, seamless Gib fixing, and bespoke venetian plastering in Hamilton to add
                            a touch of luxury. We are a dynamic painting company that travels across all Auckland suburbs.
                            This implies that there is no such property that is overlooked by us. From micro cement to
                            complete renovations to fine decorative finishes, our dedicated staff come fully equipped.
                            Contact our team today to discuss your next project throughout the region.
                        </p>
                        <button class="read-more-toggle" type="button" data-read-more-toggle aria-expanded="false">
                            <span data-read-more-label>Read more</span>
                            <span data-read-less-label hidden>Read less</span>
                        </button>
                    </div>
                </div>

                <a href="#" class="services-page-hero-button" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                    <span>BOOK AN APPOINTMENT</span>
                    <span class="services-page-button-arrow">↗</span>
                </a>

            </div>
        </div>

    </section>
    <section class="services-brand-separation">
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

        </div>
    </section>
</main>

<?php get_footer(); ?>