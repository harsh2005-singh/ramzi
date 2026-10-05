<?php

get_header();

$theme_uri = get_template_directory_uri();

$blog_page = get_page_by_path('blog');
$blog_url = $blog_page
    ? get_permalink($blog_page)
    : home_url('/blog/');

$contact_page = get_page_by_path('contact');
$contact_url = $contact_page
    ? get_permalink($contact_page)
    : home_url('/contact/');

$recent_posts = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'post__not_in' => array(get_the_ID()),
    )
);

?>

<main class="ramzi-single-blog-page">



    <?php if (have_posts()): ?>

        <?php while (have_posts()):
            the_post(); ?>

            <?php
            $featured_image = has_post_thumbnail()
                ? get_the_post_thumbnail_url(get_the_ID(), 'full')
                : $theme_uri . '/assets/Rectangle 43.png';

            $categories = get_the_category();

            $category_name = !empty($categories)
                ? $categories[0]->name
                : 'Interior & Design';
            ?>

            <section class="blog-page-hero ramzi-single-blog-hero">

                <div class="blog-page-hero-bg"
                    style="background-image: linear-gradient(90deg, rgba(24, 48, 104, .84), rgba(65, 103, 194, .3)), url('<?php echo esc_url($featured_image); ?>');">
                </div>
                <div class="blog-page-hero-overlay"></div>

                <div class="container blog-page-hero-inner">

                    <div class="blog-page-breadcrumb">
                        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                        <span>/</span>
                        <a href="<?php echo esc_url($blog_url); ?>">Blog</a>
                        <span>/</span>
                        <span><?php the_title(); ?></span>
                    </div>

                    <div class="blog-page-hero-content">

                        <span class="blog-page-kicker">
                            <?php echo esc_html($category_name); ?>
                        </span>

                        <h1>
                            <?php the_title(); ?>
                        </h1>



                    </div>

                </div>

            </section>

            <section class="ramzi-single-blog-top">

                <div class="container">

                    <div class="ramzi-single-blog-layout">

                        <article class="ramzi-single-blog-main">

                            <div class="ramzi-single-blog-breadcrumb">

                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    Home
                                </a>

                                <span>/</span>

                                <a href="<?php echo esc_url($blog_url); ?>">
                                    Blog
                                </a>

                                <span>/</span>

                                <span>
                                    <?php the_title(); ?>
                                </span>

                            </div>


                            <div class="ramzi-single-blog-image-wrap">

                                <img src="<?php echo esc_url($featured_image); ?>"
                                    alt="<?php echo esc_attr(get_the_title()); ?>" class="ramzi-single-blog-featured-image">

                            </div>


                            <div class="ramzi-single-blog-meta">

                                <span>
                                    <?php echo esc_html(get_the_date('d M Y')); ?>
                                </span>

                                <span>
                                    <?php echo esc_html($category_name); ?>
                                </span>

                            </div>


                            <h1 class="ramzi-single-blog-title">
                                <?php the_title(); ?>
                            </h1>


                            <div class="ramzi-single-blog-content">

                                <?php the_content(); ?>

                            </div>


                            <div class="ramzi-single-blog-author">

                                <div class="ramzi-single-blog-author-icon">
                                    <i class="bi bi-house-heart"></i>
                                </div>

                                <div>

                                    <span>
                                        Published By
                                    </span>

                                    <strong>
                                        Ramzi Interior Limited
                                    </strong>

                                    <p>
                                        Professional painting, plastering and
                                        interior finishing services across Auckland
                                        and Hamilton.
                                    </p>

                                </div>

                            </div>


                            <div class="ramzi-single-blog-back">

                                <a href="<?php echo esc_url($blog_url); ?>">

                                    <span>←</span>

                                    Back To Blog

                                </a>

                            </div>

                        </article>


                        <aside class="ramzi-single-blog-sidebar">

                            <div class="ramzi-single-blog-advice">

                                <span class="ramzi-single-blog-sidebar-label">
                                    Expert Advice
                                </span>

                                <h3>
                                    Planning Your<br>
                                    Next Project?
                                </h3>

                                <p>
                                    Call our Ramzi Interior team to discuss
                                    your painting, plastering or renovation project.
                                </p>

                                <a href="<?php echo esc_url($contact_url); ?>" class="ramzi-single-blog-advice-button">
                                    <span>BOOK AN APPOINTMENT</span>
                                    <span>↗</span>
                                </a>

                            </div>


                            <div class="ramzi-single-blog-recent">

                                <span class="ramzi-single-blog-sidebar-label">
                                    Recent Articles
                                </span>

                                <h3>
                                    Latest News &amp; Guides
                                </h3>


                                <?php if ($recent_posts->have_posts()): ?>

                                    <div class="ramzi-single-blog-recent-list">

                                        <?php $recent_index = 0; ?>

                                        <?php while ($recent_posts->have_posts()):
                                            $recent_posts->the_post(); ?>

                                            <?php
                                            $recent_fallbacks = array(
                                                'Rectangle 43.png',
                                                'Rectangle 44.png',
                                                'Rectangle 45.png'
                                            );

                                            $recent_image = has_post_thumbnail()
                                                ? get_the_post_thumbnail_url(get_the_ID(), 'thumbnail')
                                                : $theme_uri . '/assets/' . $recent_fallbacks[$recent_index % 3];
                                            ?>

                                            <a href="<?php the_permalink(); ?>" class="ramzi-single-blog-recent-item">

                                                <div class="ramzi-single-blog-recent-image">

                                                    <img src="<?php echo esc_url($recent_image); ?>"
                                                        alt="<?php echo esc_attr(get_the_title()); ?>">

                                                </div>

                                                <div class="ramzi-single-blog-recent-copy">

                                                    <span>
                                                        <?php echo esc_html(get_the_date('d M Y')); ?>
                                                    </span>

                                                    <strong>
                                                        <?php the_title(); ?>
                                                    </strong>

                                                </div>

                                            </a>

                                            <?php $recent_index++; ?>

                                        <?php endwhile; ?>

                                    </div>

                                    <?php wp_reset_postdata(); ?>

                                <?php else: ?>

                                    <p class="ramzi-single-blog-no-recent">
                                        More articles coming soon.
                                    </p>

                                <?php endif; ?>

                            </div>

                        </aside>

                    </div>

                </div>

            </section>


            <section class="ramzi-single-blog-cta">

                <div class="ramzi-single-blog-cta-glow"></div>

                <div class="container">

                    <div class="ramzi-single-blog-cta-inner">

                        <div>

                            <span>
                                Start Your Project
                            </span>

                            <h2>
                                Ready To Transform
                                <strong>Your Space?</strong>
                            </h2>

                            <p>
                                Tell us what you have in mind and our team can
                                help you plan the right painting or plastering solution.
                            </p>

                        </div>

                        <a href="<?php echo esc_url($contact_url); ?>">

                            <span>
                                BOOK AN APPOINTMENT
                            </span>

                            <span>
                                ↗
                            </span>

                        </a>

                    </div>

                </div>

            </section>

        <?php endwhile; ?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>