<?php

function ramzi_register_menus()
{
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'primary' => __('Primary Navigation', 'ramzi'),
        )
    );
}

add_action('after_setup_theme', 'ramzi_register_menus');

class Ramzi_Nav_Walker extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'nav-item';

        $class_names = implode(' ', array_filter($classes));
        $output .= '<li class="' . esc_attr($class_names) . '">';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_url($item->url) . '"' : '';

        $link_classes = 'nav-link';
        if (in_array('current-menu-item', $classes, true) || in_array('current-menu-parent', $classes, true)) {
            $link_classes .= ' active';
        }

        $output .= '<a class="' . esc_attr($link_classes) . '"' . $attributes . '>';
        $output .= $args->link_before . esc_html($item->title) . $args->link_after;
        $output .= '</a>';
    }
}

function ramzi_primary_menu_fallback()
{
    $links = array(
        'Home' => home_url('/'),
        'Services' => home_url('/#services'),
        'Venetian Plastering' => home_url('/#project'),
        'Micro Cement' => home_url('/#micro-cement'),
        'Contact Us' => home_url('/#contact'),
    );

    echo '<ul class="navbar-nav me-auto mb-2 mb-lg-0">';

    foreach ($links as $label => $url) {
        $active = $label === 'Home' ? ' active' : '';
        echo '<li class="nav-item"><a class="nav-link' . esc_attr($active) . '" href="' . esc_url($url) . '">' . esc_html($label) . '</a></li>';
    }

    echo '</ul>';
}

function ramzi_enqueue_assets()
{

    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css',
        array(),
        '1.11.3'
    );

    if (is_page_template('projects.php')) {
        wp_enqueue_style(
            'fancybox',
            'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css',
            array(),
            '5.0.36'
        );
    }

    wp_enqueue_style(
        'ramzi-style',
        get_stylesheet_uri(),
        array('bootstrap'),
        '1.2'
    );

    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        true
    );

    if (is_page_template('projects.php')) {
        wp_enqueue_script(
            'fancybox',
            'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js',
            array(),
            '5.0.36',
            true
        );

        wp_add_inline_script(
            'fancybox',
            'Fancybox.bind("[data-fancybox=projects-gallery]", { Thumbs: { autoStart: true } });'
        );
    }

    wp_enqueue_script(
        'gsap',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
        array(),
        '3.12.5',
        true
    );

    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',
        array('gsap'),
        '3.12.5',
        true
    );

    wp_enqueue_script(
        'ramzi-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array('bootstrap', 'gsap-scrolltrigger'),
        '1.4',
        true
    );
}

add_action('wp_enqueue_scripts', 'ramzi_enqueue_assets');
function ramzi_contact_customizer($wp_customize)
{

    $wp_customize->add_section(
        'ramzi_contact_settings',
        array(
            'title' => 'Contact Details',
            'priority' => 35,
        )
    );

    $settings = array(
        'ramzi_contact_phone' => array(
            'label' => 'Phone Number',
            'default' => '+64 2041723131',
            'type' => 'text',
        ),
        'ramzi_contact_email' => array(
            'label' => 'Email Address',
            'default' => 'info@ramziinterior.co.nz',
            'type' => 'email',
        ),
        'ramzi_contact_address' => array(
            'label' => 'Address',
            'default' => '67A Othello Drive, Clover Park, Auckland, New Zealand, 2023',
            'type' => 'text',
        ),
        'ramzi_contact_map_url' => array(
            'label' => 'Google Maps Embed URL',
            'default' => 'https://www.google.com/maps?q=67A+Othello+Drive,+Clover+Park,+Auckland,+New+Zealand+2023&output=embed',
            'type' => 'url',
        ),
    );

    foreach ($settings as $id => $setting) {

        $wp_customize->add_setting(
            $id,
            array(
                'default' => $setting['default'],
                'sanitize_callback' => $setting['type'] === 'email'
                    ? 'sanitize_email'
                    : ($setting['type'] === 'url'
                        ? 'esc_url_raw'
                        : 'sanitize_text_field'),
            )
        );

        $wp_customize->add_control(
            $id,
            array(
                'label' => $setting['label'],
                'section' => 'ramzi_contact_settings',
                'type' => $setting['type'],
            )
        );
    }
}

add_action('customize_register', 'ramzi_contact_customizer');


function ramzi_handle_contact_form()
{

    if (
        !isset($_POST['ramzi_contact_nonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(wp_unslash($_POST['ramzi_contact_nonce'])),
            'ramzi_contact_form_action'
        )
    ) {
        wp_safe_redirect(home_url('/contact/?sent=0'));
        exit;
    }

    $name = sanitize_text_field(wp_unslash($_POST['name'] ?? ''));
    $phone = sanitize_text_field(wp_unslash($_POST['phone'] ?? ''));
    $email = sanitize_email(wp_unslash($_POST['email'] ?? ''));
    $service = sanitize_text_field(wp_unslash($_POST['service'] ?? ''));
    $address = sanitize_text_field(wp_unslash($_POST['address'] ?? ''));
    $message = sanitize_textarea_field(wp_unslash($_POST['message'] ?? ''));

    if (!$name || !$phone || !$email || !is_email($email)) {
        wp_safe_redirect(home_url('/contact/?sent=0'));
        exit;
    }

    $admin_email = get_option('admin_email');

    $subject = 'New Ramzi Interior Contact Enquiry';

    $body = "New contact enquiry\n\n";
    $body .= "Name: {$name}\n";
    $body .= "Phone: {$phone}\n";
    $body .= "Email: {$email}\n";
    $body .= "Service: {$service}\n";
    $body .= "Project Location: {$address}\n\n";
    $body .= "Project Details:\n{$message}\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    $sent = wp_mail(
        $admin_email,
        $subject,
        $body,
        $headers
    );

    wp_safe_redirect(
        home_url('/contact/?sent=' . ($sent ? '1' : '0'))
    );

    exit;
}

add_action('admin_post_nopriv_ramzi_contact_form', 'ramzi_handle_contact_form');
add_action('admin_post_ramzi_contact_form', 'ramzi_handle_contact_form');

function ramzi_single_blog_template($template)
{
    if (is_singular('post')) {
        $single_blog_template = locate_template('single-blog.php');

        if ($single_blog_template) {
            return $single_blog_template;
        }
    }

    return $template;
}

add_filter('template_include', 'ramzi_single_blog_template');