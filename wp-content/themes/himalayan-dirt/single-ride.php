<?php
get_header(); ?>
    <div class="row">
        <?php get_template_part('template-slider-part') ?>
        <div id="himalayanDirt">
            <?php
            if (have_posts()) : while (have_posts()) : the_post();
                ?>
                <div class="single-ride-nav">
                    <div class="container d-flex justify-content-between">
                        <div class="tab-links">
                            <ul class="single-rides-nav">
                                <li><a href="#overviews">Overviews</a></li>
                                <li><a href="#itinerary">Map & Itinerary</a></li>
                                <li><a href="#faq">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="bookButton">
                            <button class="bookNow ml-auto" id="bookNow" data-select="<?php the_title(); ?>">
                                BookNow
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;"
                                     xml:space="preserve">
<path style="fill:#fff;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
	C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
	c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path>
</svg>
                            </button>
                        </div>
                    </div>


                </div>
                <div class="single-ride-content container">
                    <?php if (get_field('overviews')) { ?>
                        <div class="ride-content" id="overviews">
                            <div class="ride-content-title">
                                <h2>Overviews</h2>
                            </div>
                            <div class="ride-item">
                                <p><?php the_field('overviews'); ?></p>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (get_field('itinerary') || get_field('map')) { ?>
                        <div class="ride-content" id="itinerary">
                            <div class="ride-content-title">
                                <h2>MAP & ITINERARY</h2>
                            </div>
                            <div class="ride-item">
                                <ul class="nav nav-tabs">
                                    <?php if (get_field('itinerary')) { ?>
                                        <li><a data-toggle="tab" class="active" href="#itinerary-item">Itinerary</a>
                                        </li>
                                    <?php } ?>
                                    <?php if (get_field('map')) { ?>
                                        <li><a data-toggle="tab" href="#map" <?php if (get_field('itinerary')) {
                                            } else {
                                                echo 'class="active"';
                                            } ?>>Map</a></li>
                                    <?php } ?>
                                </ul>
                                <div class="tab-content">
                                    <?php if (get_field('itinerary')) { ?>
                                    <div id="itinerary-item" class="tab-pane fade show active">
                                        <?php } ?>
                                        <p><?php the_field('itinerary'); ?></p>
                                    </div>
                                    <?php if (get_field('map')) { ?>
                                        <div id="map" class="tab-pane fade  <?php if (get_field('itinerary')) {
                                        } else {
                                            echo 'show active';
                                        } ?>">
                                            <?php the_field('map'); ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (get_field('faq')) { ?>
                        <div class="ride-content" id="faq">
                            <div class="ride-content-title">
                                <h2>FAQ</h2>
                            </div>
                            <div class="ride-item">
                                <p><?php the_field('faq'); ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php endwhile;
            else: ?>
                <p>Sorry, Nothing to display.</p>
            <?php endif;
            wp_reset_query(); ?>
        </div>

        <div class="bottom-contact" data-aos="slide-up" data-aos-delay="150">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="contact-title">
                            <h2>Want to learn more about Himalayan Dirt?</h2>
                            <span>Let us know how er can get in touch with you.</span>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <form id="quickContact">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" required>
                                <input type="email" class="form-control" placeholder="Email" required>
                                <button type="submit" class="btn submit">Submit
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;"
                                         xml:space="preserve">
                                    <path style="fill:#fff;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
	C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
	c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
<?php get_footer(); ?>