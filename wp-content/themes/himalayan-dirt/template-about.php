<?php
//Template Name: About Us
get_header(); ?>
    <div class="row">
        <?php get_template_part('template-slider-part') ?>
    </div>
<?php get_template_part('template-about-text') ?>
<?php get_template_part('template-about-part') ?>
<?php while (have_posts()): the_post(); ?>
    <div class="media-page-content"
         style="background-image:url(<?php echo bloginfo('template_directory'); ?>/image/about-bg.png);background-size:cover; background-position:center; min-height:100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="ride-item about-content" data-aos="slide-up" data-aos-delay="50">
                        <div class="text-content">
                            <div class="himalayan-dirt-discription mt-0">
                                <h2><?php the_field('title') ?></h2>
                                <p><?php the_field('what_we_do_content') ?>
                                </p>
                                <a href="<?php echo site_url(); ?>/rides" title="Himalayan Rides"><span>Our Rides</span>
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                         y="0px"
                                         viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;"
                                         xml:space="preserve">
<path style="fill:#111111;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
	C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
	c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
</svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2">
                    <div class="ride-item about-content" data-aos="slide-up" data-aos-delay="100">
                        <div class="text-content">
                            <div class="himalayan-dirt-discription mt-0">
                                <h2><?php the_field('why_ride_with_us_title') ?></h2>
                                <p><?php the_field('why_ride_with_us_content') ?>
                                </p>
                                <a href="#" data-toggle="modal" data-target="#formTrip"
                                   title="Make Plan With Himilayan Dirt"><span>Plan Your Trip</span>
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                         y="0px"
                                         viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;"
                                         xml:space="preserve">
<path style="fill:#111111;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
	C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
	c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
</svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php get_template_part('template-action-bar')?>
    </div>
    </div>
<?php get_footer(); ?>