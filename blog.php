<?php
/**
 * Template Name: Blog
 */
?>

<?php get_header(); ?>

<?php
$contact_page = get_page_by_path('contact');
$contact_url = $contact_page
    ? get_permalink($contact_page)
    : home_url('/contact/');

$blog_query = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 9,
        'paged' => max(1, get_query_var('paged')),
        'post_status' => 'publish',
    )
);
?>

<main class="blog-page">

    <section class="blog-page-hero">

        <div class="blog-page-hero-bg"></div>
        <div class="blog-page-hero-overlay"></div>

        <div class="container blog-page-hero-inner">

            <div class="blog-page-breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <span>/</span>
                <span>Blog</span>
            </div>

            <div class="blog-page-hero-content">

                <span class="blog-page-kicker">
                    Expert Insights
                </span>

                <h1>
                    <strong>Discover Our Expert Advice &amp;</strong> Recent Project Updates
                </h1>

                <p>
                    Ideas, expert guidance, and project inspiration from our painting and plastering team.
                </p>

            </div>

        </div>

    </section>


    <section class="blog-page-content">

        <div class="container">

            <div class="blog-page-heading">

                <div class="blogs-label">
                    Our Blog
                </div>

                <h2>
                    <strong>Latest Articles</strong><br>
                    For Your Next Project
                </h2>

                <p>
                    Helpful ideas, professional tips and inspiration to help
                    you plan and improve your space.
                </p>

            </div>


            <?php if ($blog_query->have_posts()): ?>

                <div class="row blog-page-grid">

                    <?php while ($blog_query->have_posts()):
                        $blog_query->the_post(); ?>

                        <div class="col-lg-4 col-md-6 col-12">

                            <article class="blog-page-card">

                                <a href="<?php the_permalink(); ?>" class="blog-page-card-image-link">

                                    <div class="blog-page-card-image">

                                        <?php if (has_post_thumbnail()): ?>

                                            <?php the_post_thumbnail(
                                                'large',
                                                array(
                                                    'class' => 'blog-page-image',
                                                    'alt' => get_the_title(),
                                                )
                                            ); ?>

                                        <?php else: ?>

                                            <img src="<?php echo esc_url(
                                                get_template_directory_uri() . '/assets/Rectangle 43.png'
                                            ); ?>" alt="<?php echo esc_attr(get_the_title()); ?>"
                                                class="blog-page-image">

                                        <?php endif; ?>

                                        <div class="blog-page-card-overlay"></div>

                                        <span class="blog-page-card-arrow">
                                            ↗
                                        </span>

                                    </div>

                                </a>


                                <div class="blog-page-card-content">

                                    <div class="blog-page-card-meta">

                                        <span>
                                            <?php echo esc_html(
                                                get_the_date('d M Y')
                                            ); ?>
                                        </span>

                                        <?php
                                        $categories = get_the_category();

                                        if (!empty($categories)):
                                            ?>

                                            <span>
                                                <?php echo esc_html(
                                                    $categories[0]->name
                                                ); ?>
                                            </span>

                                        <?php endif; ?>

                                    </div>


                                    <h3>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>


                                    <p>
                                        <?php echo esc_html(
                                            wp_trim_words(
                                                get_the_excerpt(),
                                                22,
                                                '...'
                                            )
                                        ); ?>
                                    </p>


                                    <a href="<?php the_permalink(); ?>" class="blog-page-read-more">
                                        <span>READ MORE</span>
                                        <span>↗</span>
                                    </a>

                                </div>

                            </article>

                        </div>

                    <?php endwhile; ?>

                </div>


                <?php
                $pagination = paginate_links(
                    array(
                        'total' => $blog_query->max_num_pages,
                        'current' => max(1, get_query_var('paged')),
                        'type' => 'array',
                        'prev_text' => '←',
                        'next_text' => '→',
                    )
                );
                ?>

                <?php if (!empty($pagination)): ?>

                    <nav class="blog-page-pagination">

                        <?php foreach ($pagination as $link): ?>

                            <?php echo wp_kses_post($link); ?>

                        <?php endforeach; ?>

                    </nav>

                <?php endif; ?>


            <?php else: ?>

                <div class="blog-page-empty">

                    <h3>No blog posts yet.</h3>

                    <p>
                        Blog articles added from the WordPress dashboard
                        will appear here automatically.
                    </p>

                </div>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        </div>

    </section>


    <section class="blog-page-cta">

        <div class="container">

            <div class="blog-page-cta-inner">

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


                <a href="<?php echo esc_url($contact_url); ?>" class="services-page-cta-button">
                    <span>BOOK AN APPOINTMENT</span>
                    <span>↗</span>
                </a>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>