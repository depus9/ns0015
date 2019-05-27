<?php
//Template Name: Contact
get_header(); ?>
    <div class="row">
        <div id="primary" class="site-main-content" data-aos="zoom-in">
            <header class="page-title sr-only">
                <h1>Himalayan Dirt! with a rider owned Mountain Bike Tour Company</h1>
            </header>
            <div class="himalayan-hero-inner">
                <div id="himalayan-hero-inner">
                    <div class="hero-slider-item"
                         style="background: url(<?php echo bloginfo('template_directory') ?>/image/himalayan-rides-bg.png);">
                        <div class="container">
                            <div class="hero-caption">
                                <h2> Contact<span>Himalayan Dirt</span></h2>
                                <span class="dark">With a rider owned mountain bike tour company.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="arrow bounce">
                    <img
                            src="<?php echo bloginfo('template_directory'); ?>/image/arrow-white.svg" alt="back to top">
                </div>
            </div>
        </div>
    </div>
    <div class="media-contact-page" id="himalayanDirt">
        <div class="container">
            <div class="row">
                <div class="col-ms-12 col-md-7">
                    <form class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder=" Full Name">
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <input type="email" placeholder="Working Email">
                            <input type="text" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message"
                                      rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn custom-sumit-btn mb-2">Submit</button>

                    </form>
                </div>
                <div class="col-ms-12 col-md-5">
                    <div class="himalayan-contact himalaya-address">
                        <div class="footer-title">
                            <h2>Himalayan Dirt</h2>
                            <span>address and contact</span>
                        </div>
                        <div class="contact-item location">
                            <img src="http://localhost/ns0015/wp-content/themes/himalayan-dirt/image/location.svg">Sanepa
                            -2,
                            Lalitpur, Nepal
                        </div>
                        <div class="contact-item">
                            <img src="http://localhost/ns0015/wp-content/themes/himalayan-dirt/image/phone.svg">+977-9841234942
                        </div>

                        <div class="contact-item">
                            <img src="http://localhost/ns0015/wp-content/themes/himalayan-dirt/image/email.svg">info@himalayandirt.com
                        </div>
                    </div>
                    <div class="social-icons contact-page-social-icon">
                        <a href="#" title="HImalayan Dirt - Facebook"><img
                                    src="<?php echo bloginfo('template_directory'); ?>/image/fb-icon.png"
                                    alt="Facebook"> </a>
                        <a href="#" title="HImalayan Dirt - Instagram"><img
                                    src="<?php echo bloginfo('template_directory'); ?>/image/instagram-icon.png"
                                    alt="Instagram"> </a>
                        <a href="#" title="HImalayan Dirt - Youtube"><img
                                    src="<?php echo bloginfo('template_directory'); ?>/image/youtube.png" alt="Youtube">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="himalayan-location -map">
            <img src="<?php echo bloginfo('template_directory'); ?>/image/contact-map.png"
                 alt="Himalayan dirt location map">
        </div>

    </div>
<?php get_footer(); ?>