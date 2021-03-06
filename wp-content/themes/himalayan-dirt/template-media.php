<?php
//Template Name: Media
get_header(); ?>
    <div class="row">
        <?php get_template_part('template-slider-part')?>
    </div>
    <div class="media-page-content"
         style="background-image:url(<?php echo bloginfo('template_directory'); ?>/image/media-page-bg.png);background-size:cover; background-position:center; min-height:100%;"
         id="himalayanDirt">
        <div class="container">
            <div class="row">
                <?php $args = array('post_type' => 'post');
                $query = new WP_Query($args);
                if ($query->have_posts()) {
                    $dd = 1;
                    while ($query->have_posts()):
                        $query->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="ride-item blog" data-aos="slide-up" data-aos-delay="<?php if ($dd <= 3) {
                                echo $dd * 100;
                            } else {
                                $dd = 1;
                                echo $dd * 100;
                            } ?>">
                                <div class="image-container">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <img src="<?php the_post_thumbnail_url('media-thumb'); ?>"
                                             alt="<?php the_title(); ?>"></a>
                                </div>
                                <div class="text-content">
                                    <div class="himalayan-dirt-discription mt-0">
                                        <h2><?php the_title(); ?></h2>
                                        <p><?php the_field('excerpt_text'); ?></p>
                                        <a href="<?php the_permalink(); ?>"
                                           title="Learn more about <?php the_title(); ?>"><span>Learn More</span>
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
                        </div>
                        <?php $dd++; endwhile;
                    wp_reset_query();
                } else {
                    echo "No posts found !";
                } ?>
            </div>
        </div>
    </div>
<?php get_template_part('template-action-bar') ?>
    </div>
<?php get_footer(); ?>