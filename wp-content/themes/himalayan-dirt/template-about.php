<?php
//Template Name: About Us
get_header(); ?>
    <div class="row">
        <div id="primary" class="site-main-content" data-aos="zoom-in">
            <header class="page-title sr-only">
                <h1>Himalayan Dirt! with a rider owned Mountain Bike Tour Company</h1>
            </header>
            <?php while (have_posts()):the_post(); ?>
                <div class="himalayan-hero-inner">
                    <div id="himalayan-hero-inner">
                        <div class="hero-slider-item"
                             style="background: url(<?php the_post_thumbnail_url(); ?>)">
                            <div class="container">
                                <div class="hero-caption">
                                    <h2><?php the_field('big_thin_text'); ?> <span><?php the_field('big_bold_text'); ?></span></h2>
                                    <span class="dark"><?php the_field('small_line_text'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="arrow bounce">
                        <img
                                src="<?php echo bloginfo('template_directory'); ?>/image/arrow-white.svg"
                                alt="back to top">
                    </div>
                </div>
            <?php endwhile;; ?>
        </div>
    </div>
    <section class="himalayan-dirt" id="himalayanDirt">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-8 text-center"><p>We specialized in Mountain biking tours along with trekking in the Himalayas. 
                            We are the locals and we know our backyard more than anyone else does</p></div>
                    </div>
                </div>
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
    <div class="media-page-content"
         style="background-image:url(<?php echo bloginfo('template_directory'); ?>/image/about-bg.png);background-size:cover; background-position:center; min-height:100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="ride-item about-content" data-aos="slide-up" data-aos-delay="50">
                        <div class="text-content">
                            <div class="himalayan-dirt-discription mt-0">
                                <h2>What we do</h2>
                                <p>We cater all types of guided mountain bike tours. Every year we go out to Trail-hunt, 
                                    because nothings better than to explore the wilderness on two wheels in the Himalayas. 
                                    We like to expand our tour destinations and offer the new trails for mountain bikers because we care
                                </p>
                                <a href="#" title="Learn more about tilicho lake"><span>Our Rides</span>
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                         y="0px"
                                         viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;"
                                         xml:space="preserve">
<path style="fill:#111111;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
	C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
	c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
</svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2">
                    <div class="ride-item about-content" data-aos="slide-up" data-aos-delay="100">
                        <div class="text-content">
                            <div class="himalayan-dirt-discription mt-0">
                                <h2>Why ride with Us</h2>
                                <p>We try our best to promote least explored areas and trails in the Himalayas of Nepal. 
                                    So if you wish not to ride on the trails where thousands of people already have ridden before you.
                                     Then, you’ve come to the right place, we definitely have a better alternative for you
                                </p>
                                <a href="#" title="Learn more about tilicho lake"><span>Plan Your Trip</span>
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                         y="0px"
                                         viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;"
                                         xml:space="preserve">
<path style="fill:#111111;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
	C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
	c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
</svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-contact" data-aos="fade-in" data-aos-delay="150">
        <div class="container">
            <didv class="row">
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
<?php get_footer(); ?>