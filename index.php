<?php get_header(); ?>

<main>
    <section class="hero-section" id="appointment-form">
        <div class="hero-overlay"></div>
        <div class="container-fluid hero-container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7 col-12">
                    <div class="hero-content">
                        <div class="hero-label">Painters &amp; Venetian Plastering Auckland</div>
                        <div class="hero-title">
                            <div class="hero-bold">Auckland &amp;<br>Hamilton’s Trusted</div>
                            <div class="hero-light">Painters and Venetian<br>Plastering Specialists</div>
                        </div>
                        <a href="#" class="hero-appointment-button">BOOK AN APPOINTMENT</a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="hero-form">
                        <form>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-field"><input type="text" class="form-control ramzi-input"
                                            placeholder="First Name"></div>
                                </div>
                                <div class="col-6">
                                    <div class="form-field"><input type="text" class="form-control ramzi-input"
                                            placeholder="Last Name"></div>
                                </div>
                                <div class="col-6">
                                    <div class="form-field"><input type="text" class="form-control ramzi-input"
                                            placeholder="Phone Number"></div>
                                </div>
                                <div class="col-6">
                                    <div class="form-field"><input type="text" class="form-control ramzi-input"
                                            placeholder="Paint Interior"></div>
                                </div>
                                <div class="col-12">
                                    <div class="form-field"><input type="email" class="form-control ramzi-input"
                                            placeholder="Email"></div>
                                </div>
                                <div class="col-12">
                                    <div class="form-field"><input type="text" class="form-control ramzi-input"
                                            placeholder="Address"></div>
                                </div>
                                <div class="col-12">
                                    <div class="form-field"><input type="text" class="form-control ramzi-input"
                                            placeholder="Message"></div>
                                </div>
                                <div class="col-12"><button type="submit" class="submit-button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container-fluid about-container">
            <div class="about-top">
                <p class="about-top-text">Trusted Auckland painters and interior plasterers | dedicated
                    and<br>professional team | attention to detail | excellent quality finish.</p>
                <div class="brand-logos">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/master-painters.png'); ?>"
                        alt="master-painters">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/resene.png'); ?>" alt="Resene">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/dulux.png'); ?>" alt="Dulux">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/site-safe.png'); ?>"
                        alt="Site Safe">
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
                        <h2 class="about-title"><strong>Ramzi Interior</strong> was built<br>on a simple idea</h2>
                        <h3>Our Story</h3>
                        <p>Ramzi Interior was built on a simple idea: homeowners and businesses shouldn’t have to
                            manage three different tradespeople to get a wall painted, plastered and finished
                            properly. We started out doing plastering and Gib work across Auckland, and grew into a
                            full painting and plastering company because our clients kept asking for more – a
                            repaint here, a renovation there, a feature wall done properly.</p>
                        <h3>Our Mission</h3>
                        <p>Our mission is simple: to deliver high quality painting and plastering that homeowners
                            and businesses can trust, on time, at a fair price, wherever they are in Auckland or
                            Hamilton. We want every client to feel like the job mattered to us as much as it
                            mattered to them.</p>
                        <a href="#" class="more-about-button">More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section">
        <div class="container">
            <div class="row services-heading align-items-start">
                <div class="col-lg-5 col-md-5">
                    <div class="services-left">
                        <div class="services-label">Our Services</div>
                        <h2 class="services-title"><strong>Expert Services</strong><br>Design to Transform<br>your
                            Home</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="services-intro">
                        <p>From a single feature wall to a full renovation, Ramzi Interior offers a complete range
                            of painting and plastering services across Auckland and Hamilton. Browse our services
                            below, or get in touch for a free quote.</p>
                        <a href="#" class="view-services-button">View All Services</a>
                    </div>
                </div>
            </div>
            <div class="services-slider">
                <div class="services-track">
                    <div class="service-slide">
                        <div class="service-card">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/trowel 2.png'); ?>"
                                alt="" class="service-icon">
                            <h3>Venetian<br>Plastering</h3>
                            <p>Our signature service – hand-applied, polished plaster finishes for feature walls,
                                bathrooms, kitchens and commercial spaces.</p>
                            <a href="#appointment-form" class="service-footer service-link"><span>View
                                    Details</span><span class="service-arrow">↗</span></a>
                        </div>
                    </div>
                    <div class="service-slide">
                        <div class="service-card">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/trowel 2.png'); ?>"
                                alt="" class="service-icon">
                            <h3>Exterior<br>Painting</h3>
                            <p>Weatherboard, cladding, fences and roofs, painted to withstand Auckland's climate.
                            </p>
                            <a href="#appointment-form" class="service-footer service-link"><span>View
                                    Details</span><span class="service-arrow">↗</span></a>
                        </div>
                    </div>
                    <div class="service-slide">
                        <div class="service-card">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/trowel 2.png'); ?>"
                                alt="" class="service-icon">
                            <h3>Venetian<br>Plastering</h3>
                            <p>Our signature service – hand-applied, polished plaster finishes for feature walls,
                                bathrooms, kitchens and commercial spaces.</p>
                            <a href="#appointment-form" class="service-footer service-link"><span>View
                                    Details</span><span class="service-arrow">↗</span></a>
                        </div>
                    </div>
                    <div class="service-slide">
                        <div class="service-card">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/trowel 2.png'); ?>"
                                alt="" class="service-icon">
                            <h3>Interior<br>Painting</h3>
                            <p>Rooms, ceilings and feature walls, painted with careful preparation and premium
                                paint.</p>
                            <a href="#appointment-form" class="service-footer service-link"><span>View
                                    Details</span><span class="service-arrow">↗</span></a>
                        </div>
                    </div>
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
        <h2><strong>Venetian Plastering</strong> in Auckland</h2>
    </div>

    <section class="project-section">
        <div class="project-overlay"></div>
        <div class="container">
            <div class="project-image-wrapper">
                <div class="award-card">
                    <h3>MASTER PAINTERS<br>AWARD</h3>
                    <p>New interior<br>gold award of excellence</p>
                    <a href="#appointment-form" class="view-project-button">View Project</a>
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
                        <h2 class="why-title"><strong>Trusted Experts</strong><br>Delivering Quality Always</h2>
                        <p class="why-description">Choosing us means working with a team that values quality,
                            transparency, and customer satisfaction. We focus on understanding your needs and
                            delivering results that last.</p>
                        <div class="why-stats">
                            <div class="why-stat">
                                <div class="stat-number" data-count-to="500" data-suffix="+">0</div>
                                <div class="stat-label">Projects Completed</div>
                            </div>
                            <div class="stat-divider"></div>
                            <div class="why-stat">
                                <div class="stat-number" data-count-to="300" data-suffix="+">0</div>
                                <div class="stat-label">Happy Clients</div>
                            </div>
                            <div class="stat-divider"></div>
                            <div class="why-stat">
                                <div class="stat-number" data-count-to="100" data-suffix="%">0</div>
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
                                <p>High Quality Materials For Long Lasting Results</p>
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
                <h2 class="gallery-title"><strong>Our Journey</strong> of Excellence</h2>
                <p class="gallery-description">Our journey began with a simple goal—to deliver high-quality painting
                    and renovation services that truly<br>transform spaces.</p>
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
                                    data-bs-toggle="collapse" data-bs-target="#l1">How much does it cost to paint a
                                    house in Auckland?</button></h3>
                            <div id="l1" class="accordion-collapse collapse show" data-bs-parent="#faqAll">
                                <div class="accordion-body">Cost depends on the size of the home, number of coats,
                                    and whether it's interior, exterior or both. [Confirm typical range] – request a
                                    free on-site quote for an exact price.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#l2">How much does exterior house
                                    painting cost in Auckland?</button></h3>
                            <div id="l2" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">Get in touch with our team for a quote based on your
                                    property's size, condition and painting requirements.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#l3">How much does Venetian plastering
                                    cost in Auckland?</button></h3>
                            <div id="l3" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">Pricing depends on the surface, finish and project
                                    requirements. Contact us for an exact quote.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#l4">What is Gib stopping?</button>
                            </h3>
                            <div id="l4" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">Gib stopping is the preparation and finishing of
                                    plasterboard joints before painting.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#l5">How much does a bathroom
                                    renovation cost in Auckland?</button></h3>
                            <div id="l5" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">Bathroom renovation costs vary depending on the size,
                                    materials and scope of work.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="accordion faq-acc" id="faqR">
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#r1">How much does it cost to paint a
                                    house in Auckland?</button></h3>
                            <div id="r1" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">Cost depends on the size of the home, number of coats,
                                    and whether it's interior, exterior or both. [Confirm typical range] – request a
                                    free on-site quote for an exact price.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#r2">How much does exterior house
                                    painting cost in Auckland?</button></h3>
                            <div id="r2" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">Get in touch with our team for a quote based on your
                                    property's size, condition and painting requirements.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#r3">How much does Venetian plastering
                                    cost in Auckland?</button></h3>
                            <div id="r3" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">Pricing depends on the surface, finish and project
                                    requirements. Contact us for an exact quote.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#r4">What is Gib stopping?</button>
                            </h3>
                            <div id="r4" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">Gib stopping is the preparation and finishing of
                                    plasterboard joints before painting.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header"><button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#r5">How much does a bathroom
                                    renovation cost in Auckland?</button></h3>
                            <div id="r5" class="accordion-collapse collapse" data-bs-parent="#faqAll">
                                <div class="accordion-body">Bathroom renovation costs vary depending on the size,
                                    materials and scope of work.</div>
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
                <div class="col-lg col-md-4 col-6"><a href="#" class="area-button">Glendowie</a></div>
                <div class="col-lg col-md-4 col-6"><a href="#" class="area-button">Mellons Bay</a></div>
                <div class="col-lg col-md-4 col-6"><a href="#" class="area-button">Remuera</a></div>
                <div class="col-lg col-md-4 col-6"><a href="#" class="area-button">Half Moon Bay</a></div>
                <div class="col-lg col-md-4 col-6"><a href="#" class="area-button">Cockle Bay</a></div>
            </div>
            <div class="row areas-grid">
                <div class="col-lg col-md-4 col-6"><a href="#" class="area-button">Howick</a></div>
                <div class="col-lg col-md-4 col-6"><a href="#" class="area-button">Mairangi Bay</a></div>
                <div class="col-lg col-md-4 col-6"><a href="#" class="area-button">Waiake</a></div>
                <div class="col-lg col-md-4 col-6"><a href="#" class="area-button">Rothesay Bay</a></div>
                <div class="col-lg col-md-4 col-6"><a href="#" class="area-button">Murrays Bay</a></div>
            </div>
            <div class="row areas-grid">
                <div class="col-lg col-md-4 col-6"><a href="#" class="area-button">Takapuna</a></div>
                <div class="col-lg col-md-4 col-6"><a href="#" class="area-button">Hauraki</a></div>
                <div class="col-lg col-md-4 col-6"><a href="#" class="area-button">Bayswater</a></div>
                <div class="col-lg col-md-4 col-6"><a href="#" class="area-button">Milford</a></div>
                <div class="col-lg col-md-4 col-6"><a href="#" class="area-button">Browns Bay</a></div>
            </div>
            <div class="areas-last-row d-flex justify-content-center">
                <div class="area-last-item"><a href="#" class="area-button">Belmont</a></div>
                <div class="area-last-item"><a href="#" class="area-button">Campbells Bay</a></div>
                <div class="area-last-item"><a href="#" class="area-button">Torbay</a></div>
            </div>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="container">
            <div class="testimonials-heading text-center">
                <div class="testimonials-label">Testimonials</div>
                <h2 class="testimonials-title"><strong>What Clients</strong> Say About Us</h2>
            </div>
            <div class="row testimonials-row">
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
                <p>Building Better Spaces with Quality, Trust, and Innovation. <a href="#">-View Our All
                        Reviews.</a></p>
            </div>
        </div>
    </section>

    <section class="blogs-section">
        <div class="container">
            <div class="blogs-heading text-center">
                <div class="blogs-label">Latest Blogs</div>
                <h2 class="blogs-title"><strong>Explore our Recent &amp;</strong> Professional Service</h2>
            </div>
            <div class="blogs-slider">
                <div class="blogs-track">
                    <div class="blog-slide">
                        <article class="blog-card">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/Rectangle 43.png'); ?>"
                                alt="Best Paint Colors to Brighten Home Interiors" class="blog-image">
                            <div class="blog-content">
                                <h3>Best Paint Colors to<br>Brighten Home Interiors</h3>
                                <div class="blog-line"></div>
                                <a href="#" class="blog-read-more"><span>Read More</span><span
                                        class="blog-arrow">↗</span></a>
                            </div>
                        </article>
                    </div>
                    <div class="blog-slide">
                        <article class="blog-card">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/Rectangle 44.png'); ?>"
                                alt="7 Renovation Ideas to Upgrade Your Living Space" class="blog-image">
                            <div class="blog-content">
                                <h3>7 Renovation Ideas to<br>Upgrade Your Living Space</h3>
                                <div class="blog-line"></div>
                                <a href="#" class="blog-read-more"><span>Read More</span><span
                                        class="blog-arrow">↗</span></a>
                            </div>
                        </article>
                    </div>
                    <div class="blog-slide">
                        <article class="blog-card">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/Rectangle 45.png'); ?>"
                                alt="Exterior Painting Tips for Long Lasting Results" class="blog-image">
                            <div class="blog-content">
                                <h3>Exterior Painting Tips for<br>Long Lasting Results</h3>
                                <div class="blog-line"></div>
                                <a href="#" class="blog-read-more"><span>Read More</span><span
                                        class="blog-arrow">↗</span></a>
                            </div>
                        </article>
                    </div>
                    <div class="blog-slide">
                        <article class="blog-card">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/Rectangle 44.png'); ?>"
                                alt="7 Renovation Ideas to Upgrade Your Living Space" class="blog-image">
                            <div class="blog-content">
                                <h3>7 Renovation Ideas to<br>Upgrade Your Living Space</h3>
                                <div class="blog-line"></div>
                                <a href="#" class="blog-read-more"><span>Read More</span><span
                                        class="blog-arrow">↗</span></a>
                            </div>
                        </article>
                    </div>
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