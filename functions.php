<?php
function srb_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('custom-logo');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');

    // Register Menus
    register_nav_menus([
        'primary' => __('Primary Menu', 'srb-advertising'),
    ]);
}
add_action('after_setup_theme', 'srb_theme_setup');

// Enqueue styles and scripts
function srb_enqueue_scripts()
{
    // Enqueue Styles
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css');
    wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('animate-min', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
    wp_enqueue_style('locomotive-scroll-css', 'https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.0/dist/locomotive-scroll.min.css');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');

    // Enqueue Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array(), '2.11.6', true);
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.2.0', true);
    wp_enqueue_script('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
    wp_enqueue_script('locomotive-scroll', 'https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.0/dist/locomotive-scroll.min.js', array(), '4.1.0', true);
    // wp_enqueue_script('lenis', 'https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.29/dist/lenis.min.js', array(), '1.0.29', true);

    wp_enqueue_script('lenis', 'https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.29/dist/lenis.min.js', array(), '1.0.29', true);
    add_action('wp_footer', function () {
        echo '<script type="module">
        import Lenis from "https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.29/dist/lenis.min.js";
        const lenis = new Lenis();
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);
    </script>';
    });


    // Theme Scripts
    wp_enqueue_script('gallery-script', get_template_directory_uri() . '/assets/js/gallery.js', array('jquery'), '1.0', true);
    wp_enqueue_script('lg-video-script', get_template_directory_uri() . '/assets/js/lg-video.js', array('jquery'), '1.0', true);
    wp_enqueue_script('scroll-script', get_template_directory_uri() . '/assets/js/scroll.js', array('jquery'), '1.0', true);
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'bootstrap-bundle', 'scroll-script'), '1.0', true);

    // Fix hidden content & trigger animations
    add_action('wp_footer', function () {
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                document.querySelectorAll("[data-aos]").forEach(el => {
                    el.style.opacity = "1";
                });
                if (typeof AOS !== "undefined") {
                    AOS.init({ once: true });
                }
            });
        </script>';
    });
}
add_action('wp_enqueue_scripts', 'srb_enqueue_scripts');
