<?php
/**
 * Description: Default Index template to display loop of blog posts
 *
 * @package WordPress
 * @subpackage iShouvik WP
 */
get_header(); ?>
    <div class="row">
        <div id="primary" class="site-main-content" data-aos="zoom-in">
            <header class="page-title sr-only">
                <h1>Himalayan Dirt! with a rider owned Mountain Bike Tour Company</h1>
            </header>
            <div class="himalayan-hero-slider">
                <div class="owl-carousel owl-theme" id="himalayan-hero">
                <?php $args = array('post_type'=>'heroslider','posts_per_page'=>-1);
    $query = new WP_Query($args);
      if($query->have_posts()){
        while($query->have_posts()):
        $query->the_post(); 
    ?>
                    <div class="hero-slider-item"
                         style="background: url(<?php the_post_thumbnail_url(); ?>);">
                        <div class="container">
                            <div class="hero-caption">
                                <h2><?php the_field('big_thin_text'); ?><span><?php the_field('big_bold_text'); ?></span></h2>
                                <span><?php the_field('small_line_text'); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; }else{ echo 'Slides not found!';}
 wp_reset_query();?>
                </div>
                <div class="arrow bounce">
                    <img
                            src="<?php echo bloginfo('template_directory'); ?>/image/arrow-white.svg" alt="back to top">
                </div>
            </div>
            <section class="himalayan-dirt" id="himalayanDirt">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-8 text-center">
                        <?php
          $args = array('page_id' =>9);
             $query = new WP_Query($args);
              if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
        ?>
         <p>
         <?php the_field('excerpt_text');?> 
         </p>
     <?php endwhile;
      else: ?>
         <p>Sorry, Nothing to display.</p>
       <?php endif;
       wp_reset_query(); ?>
                     </div>
                    </div>
                </div>
            </section>
            <section id="himalayan-dirt-rides">
                <div class="container">
                <?php $args = array('post_type'=>'ride','posts_per_page'=> 3);
    $query = new WP_Query($args);
    $col = 0;
      if($query->have_posts()){
        while($query->have_posts()):
        $query->the_post(); 
        if($col % 2 == 0){
    ?>
                    <div class="row">

                        <div class="col-md-8 aos-item" data-aos="fade-right">
                            <div class="himalayan-ride-image <?php if($col == 0){echo 'mt-0';}else{echo 'mt-8';}?>">
                                <img src="<?php the_post_thumbnail_url('ride-small'); ?>"
                                     alt="Himalayan dirt ride to annapurna base camp">
                            </div>
                        </div>
                        <div class="col-md-4 aos-item" data-aos="fade-left">
                            <div class="himalayan-dirt-discription pl-5 <?php if($col == 0){echo 'mt-0';}else{echo 'mt-8';}?>">
                                <span class="featured">Featured</span>
                                <h2><?php the_title();?></h2>
                                <p><?php the_field('excerpt_text');?></p>
                                <a href="#" title="Learn more about tilicho lake"><span>Learn More</span>
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                         y="0px"
                                         viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;"
                                         xml:space="preserve">
<path style="fill:#1E201D;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
	C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
	c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
</svg>
                                </a>
                            </div>
                        </div>
                    </div>
        <?php }else{ ?>
                    <div class="row">
                        <div class="col-md-4 aos-item" data-aos="fade-right">
                            <div class="himalayan-dirt-discription pr-5">
                                <span class="featured">Featured</span>
                                <h2><?php the_title();?></h2>
                                <p><?php the_field('excerpt_text');?></p>
                                <a href="#" title="Learn more about tilicho lake"><span>Learn More</span>
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                         y="0px"
                                         viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;"
                                         xml:space="preserve">
<path style="fill:#1E201D;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
	C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
	c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
</svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 aos-item" data-aos="fade-left">
                            <div class="himalayan-ride-image">
                                <img src="<?php the_post_thumbnail_url('ride-small'); ?>"
                                     alt="Himalayan dirt ride to annapurna base camp">
                            </div>
                        </div>
                    </div>
        <?php }?>
                    <?php $col++; endwhile; }
			else{ echo 'Nothing to Display!';}
 			wp_reset_query();?>
                </div>git 
            </section>
            <section class="about-bimal-gurung pt-0 pb-0">
                <div class="row no-gutters">
                    <div class="col-md-5" data-aos="fade-down">
                        <div class="intro-bimal">
                            <p>
                                To provide all sorts of Mountain Biking Tours in the Himalayas with the extensive
                                knowledge of Terrains and Culture in a professional manner.
                                Shred the Himalayan Dirt!

                            </p>
                            <p>Nepal was once a forbidden kingdom, hidden from the world, all her mysteries and secrets
                                kept inside her mystical landlocked boarders. In the 1950’s when the curtain fell and
                                her borders opened to a rapidly changing world looking for adventure and adrenaline,
                                intrepid travelers thronged here by the thousands to the trek in the lap of the mighty
                                Himalaya’s, home to eight of the ten world’s highest mountain peaks. They came to lose
                                themselves in the mystery of the fabled Shangri-La … and perhaps a cloud of ganja.</p>
                            <p>

                            </p>
                            <p>As the years went by many people only saw Nepal as a place to trek or as an abode of the
                                hippy, but as the twenty-first century dawned so did the age of adventure tourism. To
                                many it became apparent that the Jaw Dropping Mountains of the Himalaya boasted so much
                                more than trudging one foot in front of the other. Now, Nepal is perhaps the fastest
                                growing adventure play ground in the South Asia and is firmly in the eyes of the world’s
                                mountain biking community.</p>
                        </div>
                    </div>
                    <div class="col-md-7" data-aos="fade-up">
                        <div class="about-bimal">
                            <div class="image-container">
                                <img src="<?php echo bloginfo('template_directory') ?>/image/bimal-gurung.png"
                                     alt="Bimal Gurung - Himalayan Dirt">
                            </div>
                            <div class="bimal-info">
                                <div class="name-info">
                                    <h2>Bimal <span>Gurung</span></h2>
                                    <span>Founder/Lead Guide</span>
                                </div>
                                <div class="contact-info">
                                    <div class="cn"><img
                                                src="<?php echo bloginfo('template_directory') ?>/image/location.svg"
                                                alt="phone"> <span>Sanepa - 2, Lalitpyr, Nepal</span></div>
                                    <div class="cn"><img
                                                src="<?php echo bloginfo('template_directory') ?>/image/phone.svg"
                                                alt="phone"> <span>+977-9841234942</span></div>
                                    <div class="cn"><img
                                                src="<?php echo bloginfo('template_directory') ?>/image/email.svg"
                                                alt="phone"> <span>info@himalayandirt.com</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="himalayan-intro-video pt-0 pb-0" data-aos="zoom-in">
                <div class="intro-video-container">
                    <style>.codegena {
                            position: relative;
                            width: 100%;
                            height: 0;
                            padding-bottom: 56.27198%;
                        }

                        .codegena iframe {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                        }</style>
                    <div class="codegena">
                        <iframe width='100px' height='59px'
                                src='https://player.vimeo.com/video/184178553?autoplay=1&title=0&loop=1&badge=0&byline=0&portrait=0&background=1&muted=1'></iframe>
                    </div>
                </div>
                <div class="video-overlay"></div>
            </section>
            <section id="himalayan-dirt-happy-riders" class="" data-aos="zoom-in">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-9">
                            <div class="section-title">
                                <h2>Happy Riders</h2>
                                <span>This is why we do what we do</span>
                            </div>
                            <div class="owl-carousel owl-theme" id="happy-riders">
                                <div class="riders-text">
                                    <div class="rider-words">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 191.029 191.029"
                                             style="enable-background:new 0 0 191.029 191.029;" xml:space="preserve">
<path style="fill:#fff;" d="M44.33,88.474v15.377h38.417v82.745H0v-82.745h0.002V88.474c0-31.225,8.984-54.411,26.704-68.918
	C38.964,9.521,54.48,4.433,72.824,4.433v44.326C62.866,48.759,44.33,48.759,44.33,88.474z M181.107,48.759V4.433
	c-18.343,0-33.859,5.088-46.117,15.123c-17.72,14.507-26.705,37.694-26.705,68.918v15.377h0v82.745h82.744v-82.745h-38.417V88.474
	C152.613,48.759,171.149,48.759,181.107,48.759z"/>
                                            <p>The best trails any of is have ever ridden. For any
                                                mountainbiker Nepal is a must visit. Not Only superb trails but an
                                                entire
                                                country geared for making your ride the bet exigence possible.</p>
                                            <div class="rider-name">
                                                <p>John Doe<span>United Kingdom</span></p>

                                            </div>
                                    </div>
                                    <div class="rider-image">
                                        <img src="<?php echo bloginfo('template_directory') ?>/image/dimalayan-dirt-rider.png"
                                             alt="Himalayan Dirt Rider">
                                    </div>
                                </div>
                                <div class="riders-text">
                                    <div class="rider-words">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 191.029 191.029"
                                             style="enable-background:new 0 0 191.029 191.029;" xml:space="preserve">
<path style="fill:#fff;" d="M44.33,88.474v15.377h38.417v82.745H0v-82.745h0.002V88.474c0-31.225,8.984-54.411,26.704-68.918
	C38.964,9.521,54.48,4.433,72.824,4.433v44.326C62.866,48.759,44.33,48.759,44.33,88.474z M181.107,48.759V4.433
	c-18.343,0-33.859,5.088-46.117,15.123c-17.72,14.507-26.705,37.694-26.705,68.918v15.377h0v82.745h82.744v-82.745h-38.417V88.474
	C152.613,48.759,171.149,48.759,181.107,48.759z"/>
                                            <p>The best trails any of is have ever ridden. For any
                                                mountainbiker Nepal is a must visit. Not Only superb trails but an
                                                entire
                                                country geared for making your ride the bet exigence possible.</p>
                                            <div class="rider-name">
                                                <p>John Doe<span>United Kingdom</span></p>

                                            </div>
                                    </div>
                                    <div class="rider-image">
                                        <img src="<?php echo bloginfo('template_directory') ?>/image/dimalayan-dirt-rider.png"
                                             alt="Himalayan Dirt Rider">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="instagramGallery pt-0 pb-0">
                <?php echo do_shortcode('[instagram-feed]') ?>
            </section>
        </div>
    </div>

<?php get_footer(); ?>