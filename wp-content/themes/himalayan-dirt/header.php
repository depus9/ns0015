<?php
/**
 * Default Page Header
 *
 * @package Wordpress
 * @subpackage iShouvik WP
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Himalayan Dirt">
    <meta name="description" content="We are a trail hunter, because nothing gets better than to explore the wilderness on your mountain bike in the trails of the Himalayas.">
    <meta name="keywords" content="Himalayan dirt, Mountain Biking Mustang, Mountain Biking Tilicho, Mountain Biking Kathmandu, Mountain Biking Annapurna Circuit, Enduro/All Mountain, Mountain Biking Upper Mustang">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/ico/favicon.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".bs-docs-sidebar" data-offset="10">
<?php if (get_theme_mod('is_page_header') == 'yes'): ?>
    <?php get_template_part('content', 'page_header'); ?>
<?php endif; ?>

<nav id="is-site-navbar-primary" class="navbar navbar-expand-md fixed-top <?php is_site_primary_nav_class(); ?>">
    <?php is_navbar_brand(); ?>
    <div class="logo-container"><a href="<?php echo site_url() ?>"><img
                    src="<?php echo bloginfo('template_directory') ?>/image/logo.png"></a></div>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDropdown"
            aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarDropdown">

        <?php ishouvik_nav_menu('primary'); ?>
        <?php //get_template_part( 'searchform', 'navbar' ); ?>

    </div>
    <a href="#" class="header-plan-trip" data-toggle="modal" data-target="#formTrip"><span class="ride-icon"></span>
        Plan your trip</a>
</nav>

<?php if (is_front_page() && get_theme_mod('is_site_intro') == 'yes'): ?>
    <div class="site-intro">
        <?php get_template_part('content', 'site_intro'); // Site Intro block only for the front page ?>
    </div>
<?php endif; ?>
<main class="clearfix">
