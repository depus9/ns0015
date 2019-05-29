<?php
/**
 * Default Footer
 *
 * @package WordPress
 * @subpackage iShouvik WP
 */
?>
</main> <!-- / #is-site-body .container .clearfix -->
<footer class="site-footer">
    <div class="clearfix">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="footer-title">
                        <h2>Follow us</h2>
                        <span>We are social</span>
                    </div>
                    <div class="social-icons">
                        <a href="<?php the_field('facebook_link', 'option'); ?>" title="HImalayan Dirt - Facebook"
                           target="_blank"><img
                                    src="<?php echo bloginfo('template_directory'); ?>/image/fb-icon.png"
                                    alt="Facebook"> </a>
                        <a href="<?php the_field('instagram_link', 'option'); ?>" title="HImalayan Dirt - Instagram"
                           target="_blank"><img
                                    src="<?php echo bloginfo('template_directory'); ?>/image/instagram-icon.png"
                                    alt="Instagram"> </a>
                        <a href="<?php the_field('youtube_link', 'option'); ?>" title="HImalayan Dirt - Youtube"
                           target="_blank"><img
                                    src="<?php echo bloginfo('template_directory'); ?>/image/youtube.png" alt="Youtube">
                        </a>
                    </div>
                    <a href="<?php the_field('button_link', 'option'); ?>" class="btn footer-contact"
                       title="Himalayan Dirt - Contact Us"><?php the_field('button_text', 'option'); ?>
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                             y="0px"
                             viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;"
                             xml:space="preserve">
<path style="fill:#fff;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
	C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
	c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
</svg>
                    </a>
                    <div class="copyRight">
                        <?php //get_template_part('content', 'contact_options'); ?>
                        <p><?php the_field('copyright', 'option'); ?></p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="himalayan-contact" data-aos="zoom-in" data-aos-delay="150">
                        <div class="footer-title">
                            <h2>Himalayan Dirt</h2>
                            <span>address and contact</span>
                        </div>
                        <div class="contact-item location">
                            <img src="<?php echo bloginfo('template_directory'); ?>/image/location.svg"><?php the_field('address', 'option'); ?>
                        </div>
                        <div class="contact-item">
                            <img src="<?php echo bloginfo('template_directory'); ?>/image/phone.svg"><?php the_field('phone', 'option'); ?>
                        </div>

                        <div class="contact-item">
                            <img src="<?php echo bloginfo('template_directory'); ?>/image/email.svg"><?php the_field('email', 'option'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="back-top-top" title="Back to top"><img
            src="<?php echo bloginfo('template_directory'); ?>/image/arrow-white.svg" alt="back to top"></a>
<!-- modal for pages -->
<div class="modal fade" id="formTrip" tabindex="-1" role="dialog" aria-labelledby="formTripLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">

                <div class="row no-gutters d-flex">
                    <div class="image-ad col-md-5"
                         style="background-image:url(<?php the_field('popup_image', 'option'); ?>)">

                    </div>
                    <div class="form col-md-7">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-titles">
                                        <h2><?php the_field('popup_title', 'option'); ?></h2>
                                        <p><?php the_field('popup_short_text', 'option'); ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group"><input type="text" name="fullName"
                                                                         class="form-control" placeholder="Full Name">
                                </div>
                                <div class="col-md-6 form-group"><input type="email" name="email" class="form-control"
                                                                        placeholder="Email">
                                </div>
                                <div class="col-md-6 form-group"><input type="text" name="phone" class="form-control"
                                                                        placeholder="Phone">
                                </div>
                                <div class="col-md-12 form-group"><select class="form-control custom-select"
                                                                          id=select-rides>
                                        <option value="Mesokanto La via Tilicho Lake">Mesokanto La via Tilicho Lake
                                        </option>
                                        <option value="Nepal A Mountain Bike Getaway">Nepal A Mountain Bike Getaway
                                        </option>
                                        <option value="Kat-men-duro ">Kat-men-duro</option>
                                    </select></div>
                                <div class="col-md-4 form-group"><input type="text" name="country" class="form-control"
                                                                        placeholder="Country">
                                </div>
                                <div class="col-md-4 form-group"><input type="text" name="date"
                                                                        class="form-control datepicker"
                                                                        placeholder="Date">
                                </div>

                                <div class="col-md-4 form-group">
                                    <select class="form-control custom-select">
                                        <option value="Credit Card">Credit Card
                                        </option>
                                        <option value="Cash">Cash
                                        </option>
                                        <option value="Bank Deposite">Bank Deposite</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group"><label><input type="checkbox"
                                                                               name="Need Airport Pick Up"
                                                                               class="">&nbsp; Airport Pick Up</label>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="planBtn">Plan Now
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
                            <div class="orCall"><p><?php the_field('bottom_text', 'option'); ?></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="close close-boking" data-dismiss="modal"></div>
            </div>
        </div>
    </div>
</div>
<!-- modal for pages -->
<div class="mobile-contact-bar">
    <div class="call-now"><a href="tel:<?php the_field('phone', 'option'); ?>">Call Now</a></div>
    <div class="plan-trip"><a href="#">Plan Trip</a></div>
    <div class="back-top-top"><img src="<?php echo bloginfo('template_directory'); ?>/image/arrow-white.svg"></div>
</div>

<?php wp_footer(); ?>
</body>
</html>