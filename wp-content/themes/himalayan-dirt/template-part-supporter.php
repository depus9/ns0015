<section id="supporters">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title dark">
                    <h2>Our Supporters</h2>
                    <span>We are deeply grateful for our supporters</span>
                </div>
                <div class="owl-carousel owl-theme" id="supporter-carousel">
                    <?php
                    $args = array('post_type' => 'supporter', 'posts_per_page' => 99);
                    $query = new WP_Query($args);
                    if ($query->have_posts()) {
                        while ($query->have_posts()):$query->the_post();
                            ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <?php
                        endwhile;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</section>