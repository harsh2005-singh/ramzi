<?php get_header(); ?>

<?php
$contact_page = get_page_by_path('contact');
$contact_url = $contact_page
    ? get_permalink($contact_page)
    : home_url('/contact/');

$projects_page = get_page_by_path('projects');
$projects_url = $projects_page
    ? get_permalink($projects_page)
    : home_url('/projects/');
?>

<main>
    <section class="hero-section" id="appointment-form">
        <div class="hero-overlay"></div>
        <div class="container-fluid hero-container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7 col-12">
                    <div class="hero-content">
                        <div class="hero-label">Painters &amp; Venetian Plastering Auckland</div>
                        <div class="hero-title">
                            <div class="hero-bold">Expert Painters<br>in Auckland</div>
                            <div class="hero-light">Delivering Quality<br>That Lasts</div>
                        </div>
                        <a href="#" class="hero-appointment-button" data-bs-toggle="modal"
                            data-bs-target="#appointmentModal">
                            BOOK AN APPOINTMENT
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="hero-form">
                        <?php
                        echo do_shortcode('[contact-form-7 id="4202ba5" title="Untitled"]');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container-fluid about-container">
            <div class="about-top">
                <p class="about-top-text">Bring Your Walls to Life with Top-Tier House Painters
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
                        <div class="about-label">About Us</div>
                        <h2 class="about-title"><strong>The Ramzi</strong>Interior<br>Story</h2>
                        <h3>Our Story</h3>
                        <p>The frustration of multiple contractors was the main concern for Ramzi Interior. This ensures
                            property owners do not have to juggle multiple contractors to get their walls plastered,
                            painted, and polished to perfection. Backed by our team of dedicated plastering specialists,
                            we emerged as one of the premier painting company in Auckland because our clients needed a
                            single, trusted company to provide them with solutions for their walls.</p>
                        <h3>Our Mission</h3>
                        <p>Our mission is to provide homeowners and businesses with high-quality painting and plastering
                            at a reasonable price. Our expert services relating to painting and decorating in Auckland
                            are tailored in such a manner to make the clients feel like their project mattered to us
                            just as much as it mattered to them.</p>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('about-us'))); ?>"
                            class="more-about-button">
                            More About Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $homepage_services = new WP_Query(
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

    <section class="services-section">
        <div class="container">
            <div class="row services-heading align-items-start">
                <div class="col-lg-5 col-md-5">
                    <div class="services-left">
                        <div class="services-label">Our Services</div>
                        <h2 class="services-title"><strong>Professional Solutions</strong><br>Crafted to Improve<br>Your
                            Space</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="services-intro">
                        <p>If you are looking for reliable painters near you, Ramzi Interior offers professional
                            painting and plastering solutions, from accent walls to full home renovation. Check out our
                            services below or call us for a free quote.</p>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>"
                            class="view-services-button">
                            View All Services
                        </a>
                    </div>
                </div>
            </div>
            <div class="services-slider">
                <div class="services-track">
                    <?php while ($homepage_services->have_posts()):
                        $homepage_services->the_post(); ?>
                        <div class="service-slide">
                            <div class="service-card">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/trowel 2.png'); ?>"
                                    alt="" class="service-icon">
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo esc_html(get_the_excerpt()); ?></p>
                                <a href="<?php the_permalink(); ?>" class="service-footer service-link">
                                    <span>View Details</span><span class="service-arrow">↗</span>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <button class="services-nav services-prev" type="button" aria-label="Previous service"><i
                        class="bi bi-chevron-left"></i></button>
                <button class="services-nav services-next" type="button" aria-label="Next service"><i
                        class="bi bi-chevron-right"></i></button>
            </div>
            <div class="service-pagination d-flex justify-content-center align-items-center"></div>
        </div>
    </section>

    <div class="project-title pt-5">
        <h2><strong>Venetian Plastering Experts</strong> in Auckland</h2>
    </div>

    <section class="project-section">
        <div class="project-overlay"></div>
        <div class="container">
            <div class="project-image-wrapper">
                <div class="award-card">
                    <h3>MASTER PAINTERS<br>AWARD</h3>
                    <p>Enhance your home or business with the best venetian plaster in Auckland, provided by our expert
                        artisans who strive to deliver exceptional craftsmanship. Our venetian plasterers in Auckland
                        have a vast range of experience in creating luxurious, polished wall textures that bring
                        incredible depth, elegance and sophistication to any interior. From high-gloss marble to a
                        subtle, tactile finish, we customise each application to suit your design vision. Transform your
                        walls into a decorative plastering masterpiece today, with the help of our premier decorative
                        plastering professionals.</p>
                    <a href="<?php echo esc_url($projects_url); ?>" class="view-project-button">View Project</a>
                </div>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/award-coin.png'); ?>"
                    alt="Master Painters Award" class="award-coin">
            </div>
        </div>
    </section>

    <section class="why-section">
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

    <section class="gallery-section">
        <div class="gallery-overlay"></div>
        <div class="container gallery-container">
            <div class="gallery-heading text-center">
                <div class="gallery-label">Our Gallery</div>
                <h2 class="gallery-title"><strong>Our Visual</strong>Portfolio</h2>
                <p class="gallery-description">Our portfolio showcases our dedication to incredible craftsmanship. This
                    includes exquisite plastering, impeccable paint finishes and custom textures <br>that transform
                    interior and exterior spaces.</p>
            </div>
            <div class="row gallery-grid">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="before-after-card" data-before-after>
                        <div class="ba-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/gallery2.png'); ?>"
                                alt="After" class="ba-image ba-image-after">
                            <div class="ba-before-wrapper">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/gallery1.png'); ?>"
                                    alt="Before" class="ba-image ba-image-before">
                            </div>
                            <span class="before-label">Before</span>
                            <span class="after-label">After</span>
                            <div class="ba-slider-line"></div>
                            <div class="ba-handle">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/arrow.png'); ?>"
                                    alt="" class="ba-handle-icon">
                            </div>
                        </div>
                        <input type="range" min="0" max="100" value="50" class="ba-range"
                            aria-label="Before/after slider">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="before-after-card" data-before-after>
                        <div class="ba-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/gallery4.png'); ?>"
                                alt="After" class="ba-image ba-image-after">
                            <div class="ba-before-wrapper"><img
                                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/gallery3.png'); ?>"
                                    alt="Before" class="ba-image ba-image-before"></div>
                            <span class="before-label">Before</span>
                            <span class="after-label">After</span>
                            <div class="ba-slider-line"></div>
                            <div class="ba-handle"><img
                                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/arrow.png'); ?>"
                                    alt="" class="ba-handle-icon">
                            </div>
                        </div>
                        <input type="range" min="0" max="100" value="50" class="ba-range"
                            aria-label="Before/after slider">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="before-after-card" data-before-after>
                        <div class="ba-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/gallery4.png'); ?>"
                                alt="After" class="ba-image ba-image-after">
                            <div class="ba-before-wrapper">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/gallery3.png'); ?>"
                                    alt="Before" class="ba-image ba-image-before">
                            </div>
                            <span class="before-label">Before</span>
                            <span class="after-label">After</span>
                            <div class="ba-slider-line"></div>
                            <div class="ba-handle"><img
                                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/arrow.png'); ?>"
                                    alt="" class="ba-handle-icon"></div>
                        </div>
                        <input type="range" min="0" max="100" value="50" class="ba-range"
                            aria-label="Before/after slider">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="before-after-card" data-before-after>
                        <div class="ba-image-container">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/gallery6.png'); ?>"
                                alt="After" class="ba-image ba-image-after">
                            <div class="ba-before-wrapper"><img
                                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/gallery1.png'); ?>"
                                    alt="Before" class="ba-image ba-image-before"></div>
                            <span class="before-label">Before</span>
                            <span class="after-label">After</span>
                            <div class="ba-slider-line"></div>
                            <div class="ba-handle"><img
                                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/arrow.png'); ?>"
                                    alt="" class="ba-handle-icon">
                            </div>
                            <input type="range" min="0" max="100" value="50" class="ba-range"
                                aria-label="Before/after slider">
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-features">
                <div class="container-fluid">
                    <div class="row gallery-feature-row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="gallery-feature"><img
                                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/Ellipse 3.png'); ?>"
                                    alt=""><span>Protection From
                                    Weather And Damage</span></div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="gallery-feature"><img
                                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/Ellipse 4.png'); ?>"
                                    alt=""><span>Enhance The Beauty
                                    Of Your Space</span></div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="gallery-feature"><img
                                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/Ellipse 4 (1).png'); ?>"
                                    alt=""><span>Protection
                                    From Weather And Damage</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section">
        <div class="container">
            <div class="faq-heading text-center">
                <div class="faq-label">Frequently Asked Questions</div>
                <h2 class="faq-title"><strong>Common Question</strong> about our<br>Painting &amp; Plastering</h2>
            </div>
            <div class="row faq-row" id="faqAll">
                <div class="col-lg-6 col-12">
                    <div class="accordion faq-acc" id="faqL">
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#l1">Why should I hire professional
                                    painters in Auckland for my home renovation?</button></h3>
                            <div id="l1" class="accordion-collapse collapse show" data-bs-parent="#faqAll">
                                <div class="accordion-body">Professional painters in Auckland guarantee that your walls
                                    receive proper surface preparation, premium material application, and a flawless,
                                    long-lasting finish. Hiring skilled tradespeople will save you time, reduce mess and
                                    improve the overall look and value of your property in no time.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#l2">What makes Ramzi Interior Limited the
                                    preferred painting company in Auckland?</button></h3>
                            <div id="l2" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">Ramzi Interior Limited has emerged as the leading painting
                                    company in Auckland that offers expert interior plastering, Gib fixing and custom
                                    finishes all under one roof. We hold pride in our transparency, careful attention to
                                    detail and hassle-free customer experience.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#l3">Do you offer comprehensive painting
                                    and decorating in Auckland services?</button></h3>
                            <div id="l3" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">Yes. We possess expertise in full-scale painting and
                                    decorating in Auckland, from accurate colour matching and feature wall designs to
                                    wallpaper hanging, skim coating and perfect paintwork.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#l4">How can I find reliable house
                                    painters in Auckland near my neighbourhood?</button>
                            </h3>
                            <div id="l4" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">If you are searching for reliable house painters in
                                    Auckland, you may reach out to Ramzi Interior Limited. Our local professionals
                                    arrive on time, treat your home with utmost respect, and leave your worksite
                                    spotless.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#l5">Who should I call when looking for
                                    skilled painters near me in Auckland?</button></h3>
                            <div id="l5" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">Property owners searching for reliable painters near them
                                    rely on Ramzi Interior Limited. Our team arrive on time, provide a high-quality
                                    work, and reliable services that are suitable for the local architectural styles in
                                    Auckland. </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="accordion faq-acc" id="faqR">
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#r1">Do your services include surface
                                    preparation and plastering before painting?</button></h3>
                            <div id="r1" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">Absolutely. A smooth base is essential to great paintwork.
                                    As expert painters in Auckland, we are able to handle Gib fixing, crack repairs, and
                                    stopping to ensure your walls are perfectly flat before applying a single drop of
                                    paint.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#r2">Can a professional painting company
                                    in Auckland handle commercial properties?</button></h3>
                            <div id="r2" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">Yes, as a versatile painting company in Auckland, we work
                                    with both homes and businesses. We work efficiently to minimise down time, while
                                    providing you with a professional, polished brand image.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#r3">What is included in your residential
                                    painting and decorating in Auckland packages?</button></h3>
                            <div id="r3" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">Our residential painting and decorating in Auckland include
                                    a full wall assessment, professional surface preparation, high quality paintwork,
                                    floor and furniture protection and a full clean-up at the end of the job.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#r4">How do experienced house painters in
                                    Auckland handle weatherboard exteriors?</button>
                            </h3>
                            <div id="r4" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">Experienced house painters in Auckland are familiar with the
                                    local climate challenges. We remove paint, sand and prime the weathered timber and
                                    trims with a durable, weather resistant exterior coating that allows your home to
                                    withstand the harsh elements.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#r5">How do I book an estimate with your
                                    team of painters near me?</button></h3>
                            <div id="r5" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">You can easily schedule an appointment with the trusted
                                    painters near you. Also, you can contact Ramzi Interior Limited or send a message to
                                    our online team to request a quote with no obligation and get your project underway.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="areas-section">
        <div class="container">
            <div class="areas-label">Area We Serve</div>
            <div class="row areas-grid">
                <div class="col-lg col-md-4 col-6"><a href="javascript:void(0);" class="area-button">Glendowie</a></div>
                <div class="col-lg col-md-4 col-6"><a href="javascript:void(0);" class="area-button">Mellons Bay</a>
                </div>
                <div class="col-lg col-md-4 col-6"><a href="javascript:void(0);" class="area-button">Remuera</a></div>
                <div class="col-lg col-md-4 col-6"><a href="javascript:void(0);" class="area-button">Half Moon Bay</a>
                </div>
                <div class="col-lg col-md-4 col-6"><a href="javascript:void(0);" class="area-button">Cockle Bay</a>
                </div>
            </div>
            <div class="row areas-grid">
                <div class="col-lg col-md-4 col-6"><a href="javascript:void(0);" class="area-button">Howick</a></div>
                <div class="col-lg col-md-4 col-6"><a href="javascript:void(0);" class="area-button">Mairangi Bay</a>
                </div>
                <div class="col-lg col-md-4 col-6"><a href="javascript:void(0);" class="area-button">Waiake</a></div>
                <div class="col-lg col-md-4 col-6"><a href="javascript:void(0);" class="area-button">Rothesay Bay</a>
                </div>
                <div class="col-lg col-md-4 col-6"><a href="javascript:void(0);" class="area-button">Murrays Bay</a>
                </div>
            </div>
            <div class="row areas-grid">
                <div class="col-lg col-md-4 col-6"><a href="javascript:void(0);" class="area-button">Takapuna</a></div>
                <div class="col-lg col-md-4 col-6"><a href="javascript:void(0);" class="area-button">Hauraki</a></div>
                <div class="col-lg col-md-4 col-6"><a href="javascript:void(0);" class="area-button">Bayswater</a></div>
                <div class="col-lg col-md-4 col-6"><a href="javascript:void(0);" class="area-button">Milford</a></div>
                <div class="col-lg col-md-4 col-6"><a href="javascript:void(0);" class="area-button">Browns Bay</a>
                </div>
            </div>
            <div class="areas-last-row d-flex justify-content-center">
                <div class="area-last-item"><a href="javascript:void(0);" class="area-button">Belmont</a></div>
                <div class="area-last-item"><a href="javascript:void(0);" class="area-button">Campbells Bay</a></div>
                <div class="area-last-item"><a href="javascript:void(0);" class="area-button">Torbay</a></div>
            </div>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="container">
            <div class="testimonials-heading text-center">
                <div class="testimonials-label">Testimonials</div>
                <h2 class="testimonials-title"><strong>Client Testimonials &amp;</strong> Success Stories</h2>
            </div>
            <?php echo do_shortcode('[trustindex no-registration=google]'); ?>

            <div class="row testimonials-row d-none">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="testimonial-card">
                        <div class="testimonial-symbols">
                            <div class="testimonial-stars"><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            <div class="testimonial-quotes"><span></span><span></span></div>
                        </div>
                        <p class="testimonial-text">"Ray Was Very Polite And Professional. He Did An Excellent Job
                            In Plastering And Painting . I Was Very Happy With His Work."</p>
                        <div class="testimonial-line"></div>
                        <div class="testimonial-bottom">
                            <div>
                                <div class="testimonial-name">S A Sani</div>
                                <div class="testimonial-date">2024-09-29</div>
                            </div>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/Ellipse 22.png'); ?>"
                                alt="S A Sani" class="testimonial-avatar">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="testimonial-card">
                        <div class="testimonial-symbols">
                            <div class="testimonial-stars"><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            <div class="testimonial-quotes"><span></span><span></span></div>
                        </div>
                        <p class="testimonial-text">"Ray Was Very Polite And Professional. He Did An Excellent Job
                            In Plastering And Painting . I Was Very Happy With His Work."</p>
                        <div class="testimonial-line"></div>
                        <div class="testimonial-bottom">
                            <div>
                                <div class="testimonial-name">Daniel Ah</div>
                                <div class="testimonial-date">2024-09-27</div>
                            </div>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/Ellipse 25.png'); ?>"
                                alt="Daniel Ah" class="testimonial-avatar">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="testimonial-card">
                        <div class="testimonial-symbols">
                            <div class="testimonial-stars"><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            <div class="testimonial-quotes"><span></span><span></span></div>
                        </div>
                        <p class="testimonial-text">"Ray Was Very Polite And Professional. He Did An Excellent Job
                            In Plastering And Painting . I Was Very Happy With His Work."</p>
                        <div class="testimonial-line"></div>
                        <div class="testimonial-bottom">
                            <div>
                                <div class="testimonial-name">S A Sani</div>
                                <div class="testimonial-date">2024-09-29</div>
                            </div>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/Ellipse 22.png'); ?>"
                                alt="S A Sani" class="testimonial-avatar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviews-callout">
                <div class="reviews-images">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/Ellipse 23.png'); ?>" alt=""
                        class="reviews-photo">
                    <div class="reviews-phone-circle"><i class="bi bi-telephone-fill"></i></div>
                </div>
                <p>Building Better Spaces with Quality, Trust, and Innovation. <a
                        href="<?php echo esc_url(get_permalink(get_page_by_path('testimonials'))); ?>">
                        -View Our All Reviews.
                    </a></p>
            </div>
        </div>
    </section>

    <section class="blogs-section">
        <div class="container">
            <div class="blogs-heading text-center">
                <div class="blogs-label">Latest Blogs</div>
                <h2 class="blogs-title"><strong>Discover Our Expert Advice &amp;</strong> Recent Project Updates</h2>
            </div>
            <div class="blogs-slider">
                <div class="blogs-track">

                    <?php
                    $homepage_blogs = new WP_Query(
                        array(
                            'post_type' => 'post',
                            'posts_per_page' => 6,
                            'post_status' => 'publish',
                        )
                    );
                    ?>

                    <?php while ($homepage_blogs->have_posts()):
                        $homepage_blogs->the_post(); ?>

                        <div class="blog-slide">

                            <article class="blog-card">

                                <?php if (has_post_thumbnail()): ?>

                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>"
                                        alt="<?php echo esc_attr(get_the_title()); ?>" class="blog-image">

                                <?php else: ?>

                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/Rectangle 43.png'); ?>"
                                        alt="<?php echo esc_attr(get_the_title()); ?>" class="blog-image">

                                <?php endif; ?>

                                <div class="blog-content">

                                    <h3>
                                        <?php echo esc_html(wp_trim_words(get_the_title(), 8, '')); ?>
                                    </h3>

                                    <div class="blog-line"></div>

                                    <a href="<?php the_permalink(); ?>" class="blog-read-more">
                                        <span>Read More</span>
                                        <span class="blog-arrow">↗</span>
                                    </a>

                                </div>

                            </article>

                        </div>

                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

                </div>
                <button class="blogs-nav blogs-prev" type="button" aria-label="Previous blog"><i
                        class="bi bi-chevron-left"></i></button>
                <button class="blogs-nav blogs-next" type="button" aria-label="Next blog"><i
                        class="bi bi-chevron-right"></i></button>
                <div class="blogs-dots"></div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>