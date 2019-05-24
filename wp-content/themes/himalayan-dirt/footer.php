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
                <div class="col-md-4">
                    <div class="footer-title">
                        <h2>Follow us</h2>
                        <span>We are social</span>
                    </div>
                    <div class="social-icons">
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
                    <a href="#" class="btn footer-contact" title="Himalayan Dirt - Contact Us">Contact us
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
                        <p>&copy; <?php the_time('Y') ?> <a href="<?php bloginfo('url'); ?>"
                                                            title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
                            All
                            Rights Reserved </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="himalayan-contact">
                        <div class="footer-title">
                            <h2>Himalayan Dirt</h2>
                            <span>address and contact</span>
                        </div>
                        <div class="contact-item location">
                            <img src="<?php echo bloginfo('template_directory'); ?>/image/location.svg">Sanepa -2,
                            Lalitpur, Nepal
                        </div>
                        <div class="contact-item">
                            <img src="<?php echo bloginfo('template_directory'); ?>/image/phone.svg">+977-9841234942
                        </div>

                        <div class="contact-item">
                            <img src="<?php echo bloginfo('template_directory'); ?>/image/email.svg">info@himalayandirt.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" id="back-to-top" title="Back to top"><img
            src="<?php echo bloginfo('template_directory'); ?>/image/arrow-white.svg" alt="back to top"></a>
<?php wp_footer(); ?>
</body>
</html>