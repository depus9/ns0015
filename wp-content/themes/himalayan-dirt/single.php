<?php
get_header(); ?>
    <div class="row">
        <?php get_template_part('template-slider-part') ?>
        <div id="himalayanDirt">
            <section id="media-post-<?php the_ID();?>" <?php post_class(); ?>>
            <div class="container">
             <div class="row">
             <div class="col-sm-12">
                <?php while (have_posts()):the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                </div>
                </div>
                </div>
            </section>
        </div>
        <?php get_template_part('template-action-bar'); ?>
    </div>
    </div>
<?php get_footer(); ?>