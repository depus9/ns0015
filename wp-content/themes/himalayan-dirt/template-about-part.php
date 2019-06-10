
<section class="about-bimal-gurung pt-0 pb-0">
                <div class="row no-gutters">
                    <?php
                    $args = array('page_id' => 9);
                    $query = new WP_Query($args);
                    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                        ?>
                        <div class="col-md-5" data-aos="fade-down">
                            <div class="intro-bimal">
                                <p>
                                    <?php the_field('about_bimal_gurung'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7" data-aos="fade-up">
                            <div class="about-bimal">
                                <div class="image-container">
                                    <?php

                                    $image = get_field('personal_image');
                                    if (!empty($image)): ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>

                                    <?php endif; ?>
                                </div>
                                <div class="bimal-info">
                                    <div class="name-info">
                                        <h2><?php the_field('name_bold') ?><span><?php the_field('name_thin') ?></span>
                                        </h2>
                                        <span><?php the_field('designation') ?></span>
                                    </div>
                                    <div class="contact-info">
                                        <div class="cn"><img
                                                    src="<?php echo bloginfo('template_directory') ?>/image/location.svg"
                                                    alt="phone"> <span><?php the_field('address', 'option'); ?></span>
                                        </div>
                                        <div class="cn"><img
                                                    src="<?php echo bloginfo('template_directory') ?>/image/phone.svg"
                                                    alt="phone"> <span><?php the_field('phone', 'option'); ?></span>
                                        </div>
                                        <div class="cn"><img
                                                    src="<?php echo bloginfo('template_directory') ?>/image/email.svg"
                                                    alt="phone"> <span><?php the_field('email', 'option'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    else: ?>
                        <p>Sorry, Nothing to display.</p>
                    <?php endif;
                    wp_reset_query(); ?>
                </div>
     </section>