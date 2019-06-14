<div id="primary" class="site-main-content" data-aos="zoom-in">
    <header class="page-title sr-only">
        <h1>Himalayan Dirt! with a rider owned Mountain Bike Tour Company</h1>
    </header>
    <div class="himalayan-hero-inner">
        <?php while (have_posts()):the_post(); ?>
            <div id="himalayan-hero-inner">
                <?php
                $images = get_field('ride_gallery');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)?>
                <?php if ($images) { ?>
                    <div class="owl-carousel owl-theme" id="single-rides">
                        <?php foreach ($images as $image):
                            if (get_field('video_id')) {
                                ?>
                                <iframe allowFullScreen="allowFullScreen"
                                        src="https://www.youtube.com/embed/p2xBsiNca7c?ecver=1&amp;autoplay=1&amp;iv_load_policy=1&amp;yt:stretch=16:9&amp;autohide=1&amp;color=red&amp;width=100%&amp;width=100%"
                                        width="100%" height="800" allowtransparency="true" frameborder="0">
                                </iframe>

                            <?php } else {
                                ?>

                                <div class="hero-slider-item"
                                     style="background: url(<?php echo $image['url']; ?>);">

                                </div>
                                <?php
                            } endforeach; ?>
                    </div>
                    <div class="single-caption-option">
                        <div class="container">
                            <div class="hero-caption">
                                <h2><?php the_field('big_thin_text') ?><span><?php the_field('big_bold_text') ?></span>
                                </h2>
                                <span class="dark"><?php the_field('small_line_text') ?></span>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="hero-slider-item"
                         style="background: url(<?php the_post_thumbnail_url(); ?>);">
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
                <?php } ?>
            </div>
        <?php endwhile; ?>
        <div class="arrow bounce">
            <img
                    src="<?php echo bloginfo('template_directory'); ?>/image/arrow-white.svg" alt="back to top">
        </div>
    </div>
</div>