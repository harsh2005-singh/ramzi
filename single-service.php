<?php
/**
 * Template Name: Single Service
 */

get_header();

$theme_uri = get_template_directory_uri();

$current_service_id = get_the_ID();
$service_excerpt = get_post_field('post_excerpt', $current_service_id);

if (empty($service_excerpt)) {
    $service_content = get_post_field('post_content', $current_service_id);

    $service_excerpt = $service_content;
}
$service_excerpt = wp_trim_words(wp_strip_all_tags($service_excerpt), 28, '…');

$contact_page = get_page_by_path('contact');
$services_page = get_page_by_path('services');

$contact_url = $contact_page
    ? get_permalink($contact_page)
    : home_url('/contact/');

$services_url = $services_page
    ? get_permalink($services_page)
    : home_url('/services/');

$hero_image = has_post_thumbnail($current_service_id)
    ? get_the_post_thumbnail_url($current_service_id, 'full')
    : $theme_uri . '/assets/gallery2.png';

$more_services = new WP_Query(
    array(
        'post_type' => 'service',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'post__not_in' => array($current_service_id),
        'orderby' => array(
            'menu_order' => 'ASC',
            'title' => 'ASC',
        ),
    )
);

$areas = array(
    'Glendowie',
    'Mellons Bay',
    'Remuera',
    'Half Moon Bay',
    'Cockle Bay',
    'Howick',
    'Mairangi Bay',
    'Waiake',
    'Rothesay Bay',
    'Murrays Bay',
    'Takapuna',
    'Hauraki',
    'Bayswater',
    'Milford',
    'Browns Bay',
    'Belmont',
    'Campbells Bay',
    'Torbay'
);
?>

<main class="single-service-page">

    <?php if (have_posts()): ?>

        <?php while (have_posts()):
            the_post(); ?>

            <section class="ssh">

                <div class="container ssh-grid">

                    <div class="ssh-copy">

                        <nav class="ssh-crumbs" aria-label="Breadcrumb">
                            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                            <span aria-hidden="true">/</span>
                            <a href="<?php echo esc_url($services_url); ?>">Services</a>
                            <span aria-hidden="true">/</span>
                            <span aria-current="page"><?php the_title(); ?></span>
                        </nav>

                        <h1 class="ssh-title"><?php the_title(); ?></h1>

                        <svg class="ssh-stroke" viewBox="0 0 200 16" aria-hidden="true" focusable="false">
                            <path d="M3 10 C 38 2, 66 17, 106 8 S 172 5, 197 11" />
                        </svg>

                        <?php if (!empty($service_excerpt)): ?>
                            <p class="ssh-lead">
                                <?php echo esc_html($service_excerpt); ?>
                            </p>
                        <?php endif; ?>

                        <div class="ssh-actions">
                            <a class="ssh-btn" href="<?php echo esc_url($contact_url); ?>">Get a free quote</a>
                            <a class="ssh-link" href="#service-details">Read more about this service</a>
                        </div>

                    </div>

                    <div class="ssh-visual">

                        <div class="ssh-arch-back" aria-hidden="true"></div>

                        <figure class="ssh-arch">
                            <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
                                loading="eager">
                        </figure>

                    </div>

                </div>

            </section>


            <section class="single-service-main-section">

                <div class="container">

                    <div class="single-service-layout">

                        <div class="single-service-primary">

                            <div class="single-service-image-wrap">

                                <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
                                    class="single-service-main-image">

                            </div>


                            <article class="single-service-article" id="service-details">

                                <span class="single-service-section-label">
                                    About This Service
                                </span>

                                <h2>
                                    Professional
                                    <strong><?php the_title(); ?></strong>
                                </h2>

                                <div class="single-service-content">

                                    <?php the_content(); ?>

                                </div>

                            </article>


                            <div class="single-service-bottom-link">

                                <a href="<?php echo esc_url($services_url); ?>">
                                    <span>←</span>
                                    Back To Services
                                </a>

                            </div>

                        </div>


                        <aside class="single-service-sidebar">

                            <div class="single-service-about-card">

                                <span>
                                    About This Service
                                </span>

                                <h3>
                                    <?php the_title(); ?>
                                </h3>

                                <p>
                                    <?php echo esc_html($service_excerpt); ?>
                                </p>

                            </div>


                            <div class="single-service-more-card">

                                <span class="single-service-sidebar-label">
                                    Explore Solutions
                                </span>

                                <h3>
                                    More Services
                                </h3>

                                <?php if ($more_services->have_posts()): ?>

                                    <div class="single-service-more-list">

                                        <?php while ($more_services->have_posts()):
                                            $more_services->the_post(); ?>

                                            <a href="<?php the_permalink(); ?>" class="single-service-more-item">

                                                <span>
                                                    <?php the_title(); ?>
                                                </span>

                                                <span class="single-service-more-arrow">
                                                    →
                                                </span>

                                            </a>

                                        <?php endwhile; ?>

                                    </div>

                                    <?php wp_reset_postdata(); ?>

                                <?php endif; ?>

                            </div>


                            <div class="single-service-quote-card">

                                <span>
                                    Start Your Project
                                </span>

                                <h3>
                                    Ready To Get Started?
                                </h3>

                                <p>
                                    Tell us what you have in mind and our team
                                    can help you plan the right solution.
                                </p>

                                <a href="<?php echo esc_url($contact_url); ?>">
                                    <span>GET A FREE QUOTE</span>
                                    <span>↗</span>
                                </a>

                            </div>

                        </aside>

                    </div>

                </div>

            </section>
            <?php
            $service_faqs = get_field('service_faqs');

            if ($service_faqs):
                ?>

                <section class="faq-section service-faq-section">

                    <div class="container">

                        <div class="faq-heading text-center">

                            <div class="faq-label">
                                Frequently Asked Questions
                            </div>

                            <h2 class="faq-title">
                                <strong>Common Questions</strong> about
                                <?php echo esc_html(get_the_title()); ?>
                            </h2>

                        </div>

                        <div class="row faq-row">

                            <?php
                            $faq_chunks = array_chunk($service_faqs, ceil(count($service_faqs) / 2));
                            $faq_index = 1;
                            ?>

                            <?php foreach ($faq_chunks as $column_index => $faq_column): ?>

                                <div class="col-lg-6 col-12">

                                    <div class="accordion faq-acc" id="serviceFaqColumn<?php echo esc_attr($column_index); ?>">

                                        <?php foreach ($faq_column as $faq): ?>

                                            <?php
                                            $question = isset($faq['question']) ? $faq['question'] : '';
                                            $answer = isset($faq['answer']) ? $faq['answer'] : '';

                                            if (!$question || !$answer) {
                                                continue;
                                            }

                                            $faq_id = 'service-faq-' . get_the_ID() . '-' . $faq_index;
                                            ?>

                                            <div class="accordion-item">

                                                <h3 class="accordion-header">

                                                    <button class="accordion-button <?php echo $faq_index === 1 ? '' : 'collapsed'; ?>"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#<?php echo esc_attr($faq_id); ?>"
                                                        aria-expanded="<?php echo $faq_index === 1 ? 'true' : 'false'; ?>"
                                                        aria-controls="<?php echo esc_attr($faq_id); ?>">
                                                        <?php echo esc_html($question); ?>
                                                    </button>

                                                </h3>

                                                <div id="<?php echo esc_attr($faq_id); ?>"
                                                    class="accordion-collapse collapse <?php echo $faq_index === 1 ? 'show' : ''; ?>"
                                                    data-bs-parent="#serviceFaqColumn<?php echo esc_attr($column_index); ?>">

                                                    <div class="accordion-body">

                                                        <?php echo wp_kses_post(wpautop($answer)); ?>

                                                    </div>

                                                </div>

                                            </div>

                                            <?php $faq_index++; ?>

                                        <?php endforeach; ?>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </section>

            <?php endif; ?>


            <section class="areas-section single-service-areas">

                <div class="container">

                    <div class="areas-label">
                        Area We Serve
                    </div>

                    <div class="row areas-grid">

                        <?php foreach (array_slice($areas, 0, 5) as $area): ?>

                            <div class="col-lg col-md-4 col-6">

                                <a href="<?php echo esc_url($contact_url); ?>" class="area-button">
                                    <?php echo esc_html($area); ?>
                                </a>

                            </div>

                        <?php endforeach; ?>

                    </div>


                    <div class="row areas-grid">

                        <?php foreach (array_slice($areas, 5, 5) as $area): ?>

                            <div class="col-lg col-md-4 col-6">

                                <a href="<?php echo esc_url($contact_url); ?>" class="area-button">
                                    <?php echo esc_html($area); ?>
                                </a>

                            </div>

                        <?php endforeach; ?>

                    </div>


                    <div class="row areas-grid">

                        <?php foreach (array_slice($areas, 10, 5) as $area): ?>

                            <div class="col-lg col-md-4 col-6">

                                <a href="<?php echo esc_url($contact_url); ?>" class="area-button">
                                    <?php echo esc_html($area); ?>
                                </a>

                            </div>

                        <?php endforeach; ?>

                    </div>


                    <div class="areas-last-row d-flex justify-content-center">

                        <?php foreach (array_slice($areas, 15, 3) as $area): ?>

                            <div class="area-last-item">

                                <a href="<?php echo esc_url($contact_url); ?>" class="area-button">
                                    <?php echo esc_html($area); ?>
                                </a>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>

            </section>

        <?php endwhile; ?>

    <?php endif; ?>
    <div class="container-fluid about-container">
        <div class="about-top">
            <p class="about-top-text">Bring Your Walls to Life with Top-Tier House Painters
                <br>in Auckland and Plastering Experts
            </p>
            <div class="brand-marquee-viewport">

                <div class="brand-logos">

                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/master-painters.png'); ?>"
                        alt="Master Painters">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/resene.png'); ?>" alt="Resene">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/dulux.png'); ?>" alt="Dulux">
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
</main>


<?php get_footer(); ?>