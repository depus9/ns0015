<?php
//Template Name: Contact
get_header(); ?>
    <div class="row">
        <?php get_template_part('template-slider-part') ?>
        <style>
            .single-caption-option {
                padding-bottom: 130px;
                padding-top: 130px;
            }
        </style>
    </div>
    <div class="media-contact-page" id="himalayanDirt">
        <div class="container">
            <div class="row">
                <div class="col-ms-12 col-md-7">
                    <?php
                    echo do_shortcode('[contact-form-7 id="20" title="Main contact form"]');
                    ?>
                </div>
                <div class="col-ms-12 col-md-5">
                    <div class="himalayan-contact himalaya-address">
                        <div class="footer-title">
                            <h2>Himalayan Dirt</h2>
                            <span>address and contact</span>
                        </div>
                        <div class="contact-item location">
                            <img src="<?php echo bloginfo('template_directory'); ?>/image/location.svg"><?php the_field('address', 'option'); ?>
                        </div>
                        <div class="contact-item">
                            <img src="<?php echo bloginfo('template_directory'); ?>/image/phone.svg"><?php the_field('phone', 'option'); ?>
                        </div>

                        <div class="contact-item">
                            <img src="<?php echo bloginfo('template_directory'); ?>/image/email.svg"><?php the_field('email', 'option'); ?>
                        </div>
                    </div>
                    <div class="social-icons contact-page-social-icon">
                        <a href="<?php the_field('facebook_link', 'option'); ?>" title="HImalayan Dirt - Facebook"
                           target="_blank"><img
                                    src="<?php echo bloginfo('template_directory'); ?>/image/fb-icon.png"
                                    alt="Facebook"> </a>
                        <a href="<?php the_field('instagram_link', 'option'); ?>" title="HImalayan Dirt - Instagram"
                           target="_blank"><img
                                    src="<?php echo bloginfo('template_directory'); ?>/image/instagram-icon.png"
                                    alt="Instagram"> </a>
                        <a href="<?php the_field('youtube_link', 'option'); ?>" title="HImalayan Dirt - Youtube"
                           target="_blank"><img
                                    src="<?php echo bloginfo('template_directory'); ?>/image/youtube.png" alt="Youtube">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="himalayan-location -map">
            <img src="<?php echo bloginfo('template_directory'); ?>/image/contact-map.png"
                 alt="Himalayan dirt location map">
        </div>

    </div>
<?php get_footer();
?>