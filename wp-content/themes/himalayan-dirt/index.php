<?php
//Template Name: Home
/**
 * Description: Default Index template to display loop of blog posts
 *
 * @package WordPress
 * @subpackage iShouvik WP
 */
get_header(); ?>
    <div class="row">
        <div id="primary" class="site-main-content" data-aos="zoom-in">
            <header class="page-title sr-only">
                <h1>Himalayan Dirt! with a rider owned Mountain Bike Tour Company </h1>
            </header>
            <div class="himalayan-hero-slider">
                <div class="owl-carousel owl-theme" id="himalayan-hero">
                    <?php $args = array('post_type' => 'heroslider', 'posts_per_page' => -1);
                    $query = new WP_Query($args);
                    if ($query->have_posts()) {
                        while ($query->have_posts()):
                            $query->the_post();
                            ?>
                            <div class="hero-slider-item"
                                 style="background: url(<?php the_post_thumbnail_url(); ?>);">
                                <div class="container">
                                    <div class="single-caption-option">
                                        <div class="container">
                                            <div class="hero-caption">
                                                <h2><?php the_field('big_thin_text') ?>
                                                    <span><?php the_field('big_bold_text') ?></span>
                                                </h2>
                                                <span class="dark"><?php the_field('small_line_text') ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                    } else {
                        echo 'Slides not found!';
                    }
                    wp_reset_query(); ?>
                </div>
                <div class="arrow bounce">
                    <img
                            src="<?php echo bloginfo('template_directory'); ?>/image/arrow-white.svg" alt="back to top">
                </div>
            </div>
            <?php $t = 9;
            if ($t > 10): ?>
                <section class="himalayan-dirt" id="himalayanDirt">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-sm-8 text-center">
                                <?php
                                $args = array('page_id' => 9);
                                $query = new WP_Query($args);
                                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                                    ?>
                                    <p>
                                        <?php the_field('excerpt_text'); ?>
                                    </p>
                                <?php endwhile;
                                else: ?>
                                    <p>Sorry, Nothing to display.</p>
                                <?php endif;
                                wp_reset_query(); ?>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="himalayan-dirt-rides">
                    <div class="container">
                        <?php $args = array('post_type' => 'ride', 'posts_per_page' => 3);
                        $query = new WP_Query($args);
                        $col = 0;
                        if ($query->have_posts()) {
                            while ($query->have_posts()):
                                $query->the_post();
                                if ($col % 2 == 0) {
                                    ?>
                                    <div class="row">

                                        <div class="col-md-8 aos-item" data-aos="fade-right">
                                            <div class="himalayan-ride-image <?php if ($col == 0) {
                                                echo 'mt-0';
                                            } else {
                                                echo 'mt-8';
                                            } ?>">
                                                <a href="<?php the_permalink(); ?>"> <img
                                                            src="<?php the_post_thumbnail_url('ride-small'); ?>"
                                                            alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4 aos-item" data-aos="fade-left">
                                            <div class="himalayan-dirt-discription pl-5 <?php if ($col == 0) {
                                                echo 'mt-0';
                                            } else {
                                                echo 'mt-8';
                                            } ?>">
                                                <span class="featured">Featured</span>
                                                <h2><?php the_title(); ?></h2>
                                                <p><?php the_field('excerpt_text'); ?></p>
                                                <a href="<?php the_permalink(); ?>"
                                                   title="<?php the_content(); ?>"><span>Learn More</span>
                                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                         y="0px"
                                                         viewBox="0 0 31.49 31.49"
                                                         style="enable-background:new 0 0 31.49 31.49;"
                                                         xml:space="preserve">
<path style="fill:#1E201D;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
	C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
	c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
</svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="row">
                                        <div class="col-md-4 aos-item" data-aos="fade-right">
                                            <div class="himalayan-dirt-discription pr-5">
                                                <span class="featured">Featured</span>
                                                <h2><?php the_title(); ?></h2>
                                                <p><?php the_field('excerpt_text'); ?></p>
                                                <a href="<?php the_permalink(); ?>"
                                                   title="<?php the_content(); ?>"><span>Learn More</span>
                                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                         y="0px"
                                                         viewBox="0 0 31.49 31.49"
                                                         style="enable-background:new 0 0 31.49 31.49;"
                                                         xml:space="preserve">
<path style="fill:#1E201D;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
	C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
	c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
</svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 aos-item" data-aos="fade-left">
                                            <div class="himalayan-ride-image">
                                                <a href="<?php the_permalink(); ?>"> <img
                                                            src="<?php the_post_thumbnail_url('ride-small'); ?>"
                                                            alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
                                <?php $col++; endwhile;
                        } else {
                            echo 'Nothing to Display!';
                        }
                        wp_reset_query(); ?>
                    </div>
                </section>
            <?php endif; ?>
            <div class="dark-bg">
                <div class="enter-section">
                    <div class="intro-container">
                        <div class="row no-gutters">
                        <?php
                    $args = array('page_id' => 525);
                    $query = new WP_Query($args);
                    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                        ?>
                            <div class="col-md-7">
                            <img src="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                                <div class="goRides">
                                    <p>Find your trips</p>
                                    <a href="<?php echo site_url(); ?>/rides" title="Find Your Ride">Enter</a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="intro-text">
                                    <div class="goFindRide">
                                    <p>
                                        <?php the_field('excerpt_text'); ?>
                                    </p>
                                    </div>
                                    <h2> <?php the_field('big_bold_text'); ?> <span><?php the_field('big_thin_text'); ?></span></h2>
                                    <p>
                                    <?php the_content();?>
                                    </p>
                                </div>
                                <style>
                                    .intro-text p {
                                        color: #fff;
                                        font-size: 1.7rem;
                                        line-height: 25px;
                                    }

                                    .goFindRide {
                                        background: #fff;
                                        color: #888;
                                        padding: 20px;
                                        margin-left: -160px;
                                        margin-bottom: 50px;
                                        margin-right: 160px;
                                        position: relative;
                                        box-shadow: 0 0 50px rgba(0, 0, 0, 0.3);
                                    }

                                    .goFindRide p {
                                        color: #777;
                                    }

                                    .goFindRide:after {
                                        content: "";
                                        position: absolute;
                                        height: 0;
                                        width: 0;
                                        border-top: 30px solid transparent;
                                        border-bottom: 30px solid transparent;
                                        border-right: 30px solid #fff;
                                        top: 0;
                                        left: -11px;
                                    }

                                    .intro-text h2 {
                                        font-size: 3rem;
                                        color: #fff;
                                        font-weight: 600;
                                        margin-bottom: 30px;
                                    }

                                    ro-text h2 span {
                                        font-weight: 100;
                                    }

                                    .intro-text {
                                        padding: 50px 40px;
                                        background: #42afef;
                                        height: 100%;
                                    }

                                    .intro-text h2 span {
                                        font-weight: 100;
                                    }

                                    .goRides a:hover {
                                        opacity: 0.7;
                                    }
                                    .goRides a {
                                        border: 2px solid #fff;
                                        color: #fff;
                                        padding: 10px 25px;
                                        margin-top: 15px;
                                        display: block;
                                        text-decoration: none;
                                    }

                                    .goRides {
                                        display: block;
                                        position: absolute;
                                        bottom: 30px;
                                        left: calc(50% - 120px);
                                        width: 240px;
                                        /* background: #fff; */
                                        text-align: center;
                                        padding: 15px;
                                        color: #fff;
                                        text-transform: uppercase;
                                        font-weight: 700;
                                    }
                                </style>
                            </div>
                            <?php endwhile;
                    else: ?>
                        <p>Sorry, Nothing to display.</p>
                    <?php endif;
                    wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
                <?php get_template_part('template-about-part') ?>


                <section class="himalayan-intro-video pt-0 pb-0" data-aos="zoom-in">
                    <div class="intro-video-container">
                        <style>.codegena {
                                position: relative;
                                width: 100%;
                                height: 0;
                                padding-bottom: 56.27198%;
                            }

                            .codegena iframe {
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                            }</style>
                        <div class="codegena">
                            <iframe width='100px' height='59px'
                                    src='https://player.vimeo.com/video/184178553?autoplay=1&title=0&loop=1&badge=0&byline=0&portrait=0&background=1&muted=1'></iframe>
                        </div>
                    </div>
                    <div class="video-overlay"></div>
                </section>
            </div>
            <div class="dark-bg">
                <section id="himalayan-dirt-happy-riders" class="" data-aos="zoom-in">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-9">
                                <div class="section-title">
                                    <h2>Happy Riders</h2>
                                    <span>This is why we do what we do</span>
                                </div>
                                <div class="owl-carousel owl-theme" id="happy-riders">
                                    <?php $args = array('post_type' => 'testimonial', 'posts_per_page' => 5);
                                    $query = new WP_Query($args);
                                    if ($query->have_posts()) {
                                        while ($query->have_posts()):$query->the_post();

                                            ?>
                                            <div class="riders-text">

                                                <div class="rider-words">
                                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                         viewBox="0 0 191.029 191.029"
                                                         style="enable-background:new 0 0 191.029 191.029;"
                                                         xml:space="preserve">
<path style="fill:#fff;" d="M44.33,88.474v15.377h38.417v82.745H0v-82.745h0.002V88.474c0-31.225,8.984-54.411,26.704-68.918
	C38.964,9.521,54.48,4.433,72.824,4.433v44.326C62.866,48.759,44.33,48.759,44.33,88.474z M181.107,48.759V4.433
	c-18.343,0-33.859,5.088-46.117,15.123c-17.72,14.507-26.705,37.694-26.705,68.918v15.377h0v82.745h82.744v-82.745h-38.417V88.474
	C152.613,48.759,171.149,48.759,181.107,48.759z"/>

                                                        <?php the_content(); ?>
                                                        <div class="rider-name">
                                                            <p><?php the_title(); ?>
                                                                <span><?php echo get_the_excerpt(); ?></span></p>

                                                        </div>
                                                </div>
                                                <div class="rider-image">
                                                    <img src="<?php the_post_thumbnail_url('riders-image'); ?>"
                                                         alt="Himalayan Dirt Rider">
                                                </div>


                                            </div>
                                        <?php endwhile;
                                    }
                                    wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <section class="instagramGallery pt-0 pb-0">
                <?php echo do_shortcode('[instagram-feed]') ?>
            </section>
        </div>
    </div>
<?php get_footer(); ?>