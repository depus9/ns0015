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
                        <?php foreach ($images as $image): ?>
                            <div class="hero-slider-item"
                                 style="background: url(<?php echo $image['url']; ?>);">

                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="single-caption-option">
                        <div class="container">
                            <div class="hero-caption">
                                <h2>Mesokanto<span>Tilicho Lake</span></h2>
                                <span class="dark">With a rider owned mountain bike tour company.</span>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="hero-slider-item"
                         style="background: url(<?php the_post_thumbnail_url(); ?>);">
                        <div class="single-caption-option">
                            <div class="container">
                                <div class="hero-caption">
                                    <h2>Mesokanto<span>Tilicho Lake</span></h2>
                                    <span class="dark">With a rider owned mountain bike tour company.</span>
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