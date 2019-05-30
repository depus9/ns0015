<div class="bottom-contact" data-aos="slide-up" data-aos-delay="100">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="contact-title">
                    <h2><?php the_field('action_bar_title', 'option'); ?></h2>
                    <span><?php the_field('action_bar_short_text', 'option'); ?></span>
                </div>
            </div>
            <div class="col-md-4 offset-md-1">
                <?php 
                echo do_shortcode('[contact-form-7 id="306" title="Action Contact form"]');
                ?>
            </div>
    </div>
</div>