<?php


function themsrb_script()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    // wp_enqueue_script('script', MY_THEME_PATH . '/js/jquery-3.5.1.min.js', false, "3.5.1", $header);
}
add_action('wp_enqueue_scripts', 'themsrb_script');

function themsrb_theme_setup()
{
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // add_image_size('custom-logo', 30, 40, array('center', 'center'));
    add_image_size('home-featured', 680, 400, array('center', 'center'));
    add_image_size('single-img', 600, 550, array('center', 'center'));
    add_theme_support('automatic-feed-links');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'themsrb')
    ));
};

add_action('after_setup_theme', 'themsrb_theme_setup');

//this is for widget section of the wordpress
function themsrb_widgets_init()
{

    register_sidebar(array(
        'name'          => __('Primary Sidebar', 'themsrb'),
        'id'            => 'main-sidebar',
        'description'   => 'Main sidebar on right side',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget 1', 'themsrb'),
        'id'            => 'footer-1',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'theme_name'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget 2', 'themsrb'),
        'id'            => 'footer-2',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'theme_name'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget 3', 'themsrb'),
        'id'            => 'footer-3',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'theme_name'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
}

add_action('widgets_init', 'themsrb_widgets_init');

require get_template_directory() . '/inc/blog.php';
