<?php
function create_blog_cpt()
{

    $labels = array(
        'name' => _x('blogs', 'Post Type General Name', 'themsrb'),
        'singular_name' => _x('blog', 'Post Type Singular Name', 'themsrb'),
        'menu_name' => _x('blogs', 'Admin Menu text', 'themsrb'),
        'name_admin_bar' => _x('blog', 'Add New on Toolbar', 'themsrb'),
        'archives' => __('blog Archives', 'themsrb'),
        'attributes' => __('blog Attributes', 'themsrb'),
        'parent_item_colon' => __('Parent blog:', 'themsrb'),
        'all_items' => __('All blogs', 'themsrb'),
        'add_new_item' => __('Add New blog', 'themsrb'),
        'add_new' => __('Add New', 'themsrb'),
        'new_item' => __('New blog', 'themsrb'),
        'edit_item' => __('Edit blog', 'themsrb'),
        'update_item' => __('Update blog', 'themsrb'),
        'view_item' => __('View blog', 'themsrb'),
        'view_items' => __('View blogs', 'themsrb'),
        'search_items' => __('Search blog', 'themsrb'),
        'not_found' => __('Not found', 'themsrb'),
        'not_found_in_trash' => __('Not found in Trash', 'themsrb'),
        'featured_image' => __('Featured Image', 'themsrb'),
        'set_featured_image' => __('Set featured image', 'themsrb'),
        'remove_featured_image' => __('Remove featured image', 'themsrb'),
        'use_featured_image' => __('Use as featured image', 'themsrb'),
        'insert_into_item' => __('Insert into blog', 'themsrb'),
        'uploaded_to_this_item' => __('Uploaded to this blog', 'themsrb'),
        'items_list' => __('blogs list', 'themsrb'),
        'items_list_navigation' => __('blogs list navigation', 'themsrb'),
        'filter_items_list' => __('Filter blogs list', 'themsrb'),
    );
    $args = array(
        'label' => __('blog', 'themsrb'),
        'description' => __('', 'themsrb'),
        'labels' => $labels,
        'menu_icon' => 'dashicons-welcome-add-page',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('blog', $args);
}
add_action('init', 'create_blog_cpt', 0);
