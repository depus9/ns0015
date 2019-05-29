<section class="himalayan-dirt" id="himalayanDirt">
    <?php
    $args = array('page_id' => 9);
    $query = new WP_Query($args);
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
        ?>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-8 text-center"><?php the_field('excerpt_text') ?></div>
            </div>
        </div>
    <?php endwhile; endif; ?>
</section>
