<?php

new ishouvikwp_options();

class ishouvikwp_options
{
    public function __construct()
    {
        add_action('customize_register', array(&$this, 'is_custom_options'));
    }

    /**
     * Customizer manager
     * @param  WP_Customizer_Manager $wp_manager
     * @return void
     */
    public function is_custom_options($wp_manager)
    {
        $this->is_custom_options_section($wp_manager);
    }

    public function is_custom_options_section($wp_manager)
    {

        // Site Descriptions section
        $wp_manager->add_section('site_descriptions', array(
            'title' => 'Site Descriptions',
            'priority' => 34,
        ));

        // Social Profiles section
        $wp_manager->add_section('contact_options', array(
            'title' => 'Contact Options',
            'priority' => 35,
        ));

        // Site Scripts section
        $wp_manager->add_section('custom_codes', array(
            'title' => 'Custom Codes',
            'priority' => 36,
        ));

        // Site Header control
        $wp_manager->add_setting('is_page_header', array(
            'default' => 'yes',
        ));

        $wp_manager->add_control('is_page_header', array(
            'label' => 'Page header',
            'section' => 'site_descriptions',
            'settings' => 'is_page_header',
            'type' => 'select',
            'choices' => array(
                'yes' => 'Yes',
                'no' => 'No'
            ),
        ));

        // Site Header Logo control
        $wp_manager->add_setting('is_page_header_logo', array(
            'default' => '',
        ));

        $wp_manager->add_control('is_page_header_logo', array(
            'label' => 'Page Header Logo URL',
            'section' => 'site_descriptions',
            'settings' => 'is_page_header_logo',
            'type' => 'text',
        ));


        // Site Navbar Logo control
        $wp_manager->add_setting('is_logo', array(
            'default' => '',
        ));

        $wp_manager->add_control('is_logo', array(
            'label' => 'Navbar Logo URL',
            'section' => 'site_descriptions',
            'settings' => 'is_logo',
            'type' => 'text',
        ));

        // Site Navbar Brand Control
        $wp_manager->add_setting('is_navbar_brand', array(
            'default' => 'yes',
        ));

        $wp_manager->add_control('is_navbar_brand', array(
            'label' => 'Display Navbar Brand?',
            'section' => 'site_descriptions',
            'settings' => 'is_navbar_brand',
            'type' => 'select',
            'choices' => array(
                'yes' => 'Yes',
                'no' => 'No'
            ),
        ));


        // Site Intro Control
        $wp_manager->add_setting('is_site_intro', array(
            'default' => 'yes',
        ));

        $wp_manager->add_control('is_site_intro', array(
            'label' => 'Display Site Intro?',
            'section' => 'site_descriptions',
            'settings' => 'is_site_intro',
            'type' => 'select',
            'choices' => array(
                'yes' => 'Yes',
                'no' => 'No'
            ),
        ));


        // Site Primary Nav Control
        $wp_manager->add_setting('is_site_primary_nav_class', array(
            'default' => 'default',
        ));

        $wp_manager->add_control('is_site_primary_nav_class', array(
            'label' => 'Main Navbar',
            'section' => 'site_descriptions',
            'settings' => 'is_site_primary_nav_class',
            'type' => 'select',
            'choices' => array(
                'light' => 'Light',
                'blue' => 'Blue',
                'dark' => 'Dark'
            ),
        ));


        // Email Address
        $wp_manager->add_setting('is_email_address', array(
            'default' => 'contact@ishouvik.com',
        ));
        $wp_manager->add_control('is_email_address', array(
            'label' => 'Email Address',
            'section' => 'contact_options',
            'type' => 'text',
            'priority' => 1
        ));

        $wp_manager->add_setting('is_email_address_display', array(
            'default' => 'yes',
        ));

        $wp_manager->add_control('is_email_address_display', array(
            'label' => 'Show email address?',
            'section' => 'contact_options',
            'settings' => 'is_email_address_display',
            'type' => 'select',
            'choices' => array(
                'yes' => 'Yes',
                'no' => 'No'
            ),
            'priority' => 2
        ));

        // Twitter Handler control
        $wp_manager->add_setting('is_tw_handler', array(
            'default' => 'ishouvik',
        ));
        $wp_manager->add_control('is_tw_handler', array(
            'label' => 'Twitter Handler',
            'section' => 'contact_options',
            'settings' => 'is_tw_handler',
            'type' => 'text',
            'priority' => 3
        ));

        $wp_manager->add_setting('is_tw_handler_display', array(
            'default' => 'yes',
        ));

        $wp_manager->add_control('is_tw_handler_display', array(
            'label' => 'Display?',
            'section' => 'contact_options',
            'settings' => 'is_tw_handler_display',
            'type' => 'select',
            'choices' => array(
                'yes' => 'Yes',
                'no' => 'No'
            ),
            'priority' => 4
        ));

        // Facebook Username control
        $wp_manager->add_setting('is_fb_username', array(
            'default' => 'shouvikmukherjee',
        ));
        $wp_manager->add_control('is_fb_username', array(
            'label' => 'Facebook Username',
            'section' => 'contact_options',
            'type' => 'text',
            'priority' => 5
        ));

        $wp_manager->add_setting('is_fb_username_display', array(
            'default' => 'yes',
        ));

        $wp_manager->add_control('is_fb_username_display', array(
            'label' => 'Display?',
            'section' => 'contact_options',
            'settings' => 'is_fb_username_display',
            'type' => 'select',
            'choices' => array(
                'yes' => 'Yes',
                'no' => 'No'
            ),
            'priority' => 6
        ));

        // Google Plus Username control
        $wp_manager->add_setting('is_gp_username', array(
            'default' => '+ShouvikMukherjee-ishouvik',
        ));
        $wp_manager->add_control('is_gp_username', array(
            'label' => 'Google Plus Username',
            'section' => 'contact_options',
            'type' => 'text',
            'priority' => 7
        ));

        $wp_manager->add_setting('is_gp_username_display', array(
            'default' => 'yes',
        ));

        $wp_manager->add_control('is_gp_username_display', array(
            'label' => 'Display?',
            'section' => 'contact_options',
            'settings' => 'is_gp_username_display',
            'type' => 'select',
            'choices' => array(
                'yes' => 'Yes',
                'no' => 'No'
            ),
            'priority' => 8
        ));

        // GitHub Profile control
        $wp_manager->add_setting('is_github_profile', array(
            'default' => 'ishouvik',
        ));
        $wp_manager->add_control('is_github_profile', array(
            'label' => 'GitHub Profile',
            'section' => 'contact_options',
            'type' => 'text',
            'priority' => 9
        ));

        $wp_manager->add_setting('is_github_profile_display', array(
            'default' => 'yes',
        ));

        $wp_manager->add_control('is_github_profile_display', array(
            'label' => 'Display?',
            'section' => 'contact_options',
            'settings' => 'is_github_profile_display',
            'type' => 'select',
            'choices' => array(
                'yes' => 'Yes',
                'no' => 'No'
            ),
            'priority' => 10
        ));

        // RSS Link
        $wp_manager->add_setting('is_rss_link', array(
            'default' => '/feed',
        ));
        $wp_manager->add_control('is_rss_link', array(
            'label' => 'RSS Link',
            'section' => 'contact_options',
            'type' => 'text',
            'priority' => 11
        ));

        $wp_manager->add_setting('is_rss_link_display', array(
            'default' => 'yes',
        ));

        $wp_manager->add_control('is_rss_link_display', array(
            'label' => 'Display?',
            'section' => 'contact_options',
            'settings' => 'is_rss_link_display',
            'type' => 'select',
            'choices' => array(
                'yes' => 'Yes',
                'no' => 'No'
            ),
            'priority' => 12
        ));


        // Custom CSS
        $wp_manager->add_setting('is_custom_css', array(
            'default' => '',
        ));

        $wp_manager->add_control('is_custom_css', array(
            'label' => 'Custom CSS',
            'section' => 'custom_codes',
            'settings' => 'is_custom_css',
            'type' => 'textarea',
            'priority' => 13
        ));

        // Custom Javascript
        $wp_manager->add_setting('is_custom_js', array(
            'default' => '',
        ));

        $wp_manager->add_control('is_custom_js', array(
            'label' => 'Custom Javascript',
            'section' => 'custom_codes',
            'settings' => 'is_custom_js',
            'type' => 'textarea',
            'priority' => 14
        ));

    }

}

//Hero Slider
// Register Custom Post Type Hero Slider
function create_heroslider_cpt()
{

    $labels = array(
        'name' => _x('Hero Slides', 'Post Type General Name', 'textdomain'),
        'singular_name' => _x('Hero Slider', 'Post Type Singular Name', 'textdomain'),
        'menu_name' => _x('Hero Slides', 'Admin Menu text', 'textdomain'),
        'name_admin_bar' => _x('Hero Slider', 'Add New on Toolbar', 'textdomain'),
        'archives' => __('Hero Slider Archives', 'textdomain'),
        'attributes' => __('Hero Slider Attributes', 'textdomain'),
        'parent_item_colon' => __('Parent Hero Slider:', 'textdomain'),
        'all_items' => __('All Hero Slides', 'textdomain'),
        'add_new_item' => __('Add New Hero Slider', 'textdomain'),
        'add_new' => __('Add New', 'textdomain'),
        'new_item' => __('New Hero Slider', 'textdomain'),
        'edit_item' => __('Edit Hero Slider', 'textdomain'),
        'update_item' => __('Update Hero Slider', 'textdomain'),
        'view_item' => __('View Hero Slider', 'textdomain'),
        'view_items' => __('View Hero Slides', 'textdomain'),
        'search_items' => __('Search Hero Slider', 'textdomain'),
        'not_found' => __('Not found', 'textdomain'),
        'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
        'featured_image' => __('Featured Image', 'textdomain'),
        'set_featured_image' => __('Set featured image', 'textdomain'),
        'remove_featured_image' => __('Remove featured image', 'textdomain'),
        'use_featured_image' => __('Use as featured image', 'textdomain'),
        'insert_into_item' => __('Insert into Hero Slider', 'textdomain'),
        'uploaded_to_this_item' => __('Uploaded to this Hero Slider', 'textdomain'),
        'items_list' => __('Hero Slides list', 'textdomain'),
        'items_list_navigation' => __('Hero Slides list navigation', 'textdomain'),
        'filter_items_list' => __('Filter Hero Slides list', 'textdomain'),
    );
    $args = array(
        'label' => __('Hero Slider', 'textdomain'),
        'description' => __('', 'textdomain'),
        'labels' => $labels,
        'menu_icon' => 'dashicons-desktop',
        'supports' => array('title', 'thumbnail', 'revisions'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 60,
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
    register_post_type('heroslider', $args);

}

add_action('init', 'create_heroslider_cpt', 0);
//Our Rides
// Register Custom Post Type Ride
function create_ride_cpt()
{

    $labels = array(
        'name' => _x('Rides', 'Post Type General Name', 'textdomain'),
        'singular_name' => _x('Ride', 'Post Type Singular Name', 'textdomain'),
        'menu_name' => _x('Rides', 'Admin Menu text', 'textdomain'),
        'name_admin_bar' => _x('Ride', 'Add New on Toolbar', 'textdomain'),
        'archives' => __('Ride Archives', 'textdomain'),
        'attributes' => __('Ride Attributes', 'textdomain'),
        'parent_item_colon' => __('Parent Ride:', 'textdomain'),
        'all_items' => __('All Rides', 'textdomain'),
        'add_new_item' => __('Add New Ride', 'textdomain'),
        'add_new' => __('Add New', 'textdomain'),
        'new_item' => __('New Ride', 'textdomain'),
        'edit_item' => __('Edit Ride', 'textdomain'),
        'update_item' => __('Update Ride', 'textdomain'),
        'view_item' => __('View Ride', 'textdomain'),
        'view_items' => __('View Rides', 'textdomain'),
        'search_items' => __('Search Ride', 'textdomain'),
        'not_found' => __('Not found', 'textdomain'),
        'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
        'featured_image' => __('Featured Image', 'textdomain'),
        'set_featured_image' => __('Set featured image', 'textdomain'),
        'remove_featured_image' => __('Remove featured image', 'textdomain'),
        'use_featured_image' => __('Use as featured image', 'textdomain'),
        'insert_into_item' => __('Insert into Ride', 'textdomain'),
        'uploaded_to_this_item' => __('Uploaded to this Ride', 'textdomain'),
        'items_list' => __('Rides list', 'textdomain'),
        'items_list_navigation' => __('Rides list navigation', 'textdomain'),
        'filter_items_list' => __('Filter Rides list', 'textdomain'),
    );
    $args = array(
        'label' => __('Ride', 'textdomain'),
        'description' => __('', 'textdomain'),
        'labels' => $labels,
        'menu_icon' => 'dashicons-palmtree',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 60,
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
    register_post_type('ride', $args);

}

add_action('init', 'create_ride_cpt', 0);
//acf options
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Contact Settings',
        'menu_title' => 'Contact',
        'parent_slug' => 'theme-general-settings',
    ));

}
// Register Custom Post Type Testimonial
function create_testimonial_cpt() {

    $labels = array(
        'name' => _x( 'Testimonials', 'Post Type General Name', 'textdomain' ),
        'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => _x( 'Testimonials', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 'textdomain' ),
        'archives' => __( 'Testimonial Archives', 'textdomain' ),
        'attributes' => __( 'Testimonial Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Testimonial:', 'textdomain' ),
        'all_items' => __( 'All Testimonials', 'textdomain' ),
        'add_new_item' => __( 'Add New Testimonial', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New Testimonial', 'textdomain' ),
        'edit_item' => __( 'Edit Testimonial', 'textdomain' ),
        'update_item' => __( 'Update Testimonial', 'textdomain' ),
        'view_item' => __( 'View Testimonial', 'textdomain' ),
        'view_items' => __( 'View Testimonials', 'textdomain' ),
        'search_items' => __( 'Search Testimonial', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into Testimonial', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'textdomain' ),
        'items_list' => __( 'Testimonials list', 'textdomain' ),
        'items_list_navigation' => __( 'Testimonials list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter Testimonials list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'Testimonial', 'textdomain' ),
        'description' => __( '', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'excerpt'),
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
    register_post_type( 'testimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );
?>
