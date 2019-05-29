<?php
get_header(); ?>
    <div class="row">
        <?php get_template_part('template-slider-part') ?>
        <div id="himalayanDirt">
            <section>
                <?php while (have_posts()):the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </section>
        </div>
        <?php get_template_part('template-action-bar'); ?>
    </div>
    </div>
<?php get_footer(); ?>